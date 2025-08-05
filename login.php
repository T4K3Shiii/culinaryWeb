<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'header.php';
// Start the session to manage user login
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backendproject";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lockout settings
$max_attempts = 4; // Maximum failed attempts before lockout
$lockout_duration = 2; // Lockout duration in minutes

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Query to fetch user by email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Check if the user is locked out
        if (!is_null($user['lockout_time']) && strtotime($user['lockout_time']) > time()) {
            $remaining_time = ceil((strtotime($user['lockout_time']) - time()) / 60);
            echo "<script>alert('Account is locked. Please try again after $remaining_time minutes.');</script>";
        } else {
            // Reset lockout if lockout time has passed
            if (!is_null($user['lockout_time']) && strtotime($user['lockout_time']) <= time()) {
                $sql_reset = "UPDATE users SET failed_attempts = 0, lockout_time = NULL WHERE email = ?";
                $stmt_reset = $conn->prepare($sql_reset);
                $stmt_reset->bind_param("s", $email);
                $stmt_reset->execute();
            }

            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Successful login, reset failed attempts and lockout time
                $sql_success = "UPDATE users SET failed_attempts = 0, lockout_time = NULL WHERE email = ?";
                $stmt_success = $conn->prepare($sql_success);
                $stmt_success->bind_param("s", $email);
                $stmt_success->execute();

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_name'] = $user['fname'];

                echo "<script>alert('Login successful!'); window.location.href = 'home.php';</script>";
            } else {
                // Failed login, increment failed attempts
                $failed_attempts = $user['failed_attempts'] + 1;

                if ($failed_attempts >= $max_attempts) {
                    // Lockout the user
                    $lockout_time = date("Y-m-d H:i:s", strtotime("+$lockout_duration minutes"));
                    $sql_lockout = "UPDATE users SET failed_attempts = ?, lockout_time = ? WHERE email = ?";
                    $stmt_lockout = $conn->prepare($sql_lockout);
                    $stmt_lockout->bind_param("iss", $failed_attempts, $lockout_time, $email);
                    $stmt_lockout->execute();

                    echo "<script>alert('Too many failed attempts. Your account is locked for $lockout_duration minutes.');</script>";
                } else {
                    // Update failed attempts
                    $sql_attempts = "UPDATE users SET failed_attempts = ? WHERE email = ?";
                    $stmt_attempts = $conn->prepare($sql_attempts);
                    $stmt_attempts->bind_param("is", $failed_attempts, $email);
                    $stmt_attempts->execute();

                    $remaining_attempts = $max_attempts - $failed_attempts;
                    echo "<script>alert('Invalid password. You have $remaining_attempts attempts left.');</script>";
                }
            }
        }
    } else {
        echo "<script>alert('No account found with this email. Please register first.'); window.location.href = 'register.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>

    <div class="container">
        <div class="login-container">
            <h2 class="text-center mb-4">Welcome Back!</h2>
            <p class="text-center text-muted mb-4">Login to your account to continue.</p>
            
            <!-- Login Form -->
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input 
                        type="email" 
                        class="form-control" 
                        name="email" 
                        id="email" 
                        placeholder="Enter your email" 
                        required
                    >
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input 
                        type="password" 
                        class="form-control" 
                        name="password" 
                        id="password" 
                        placeholder="Enter your password" 
                        required
                    >
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <input type="checkbox" id="remember" class="form-check-input">
                        <label for="remember" class="form-check-label">Remember Me</label>
                    </div>
                    <a href="#" class="text-primary small">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            
            <hr class="my-4">

            <div class="text-center">
                <p class="text-muted mb-2">Or login with</p>
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-primary me-2"><i class="bi bi-facebook"></i> Facebook</a>
                    <a href="#" class="btn btn-outline-danger me-2"><i class="bi bi-google"></i> Google</a>
                </div>
            </div>

            <p class="text-center mt-4">
                Don't have an account?
                <a href="register.php" class="text-primary">Register Here.</a>
            </p>
        </div>
    </div>
    <?php 
    include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
