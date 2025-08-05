<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php
    include 'header.php';
    
    // Database connection details
    $servername = "localhost";
    $username = "root"; // Default username for XAMPP
    $password = ""; // Default password for XAMPP
    $dbname = "backendproject"; // Database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $firstName = $conn->real_escape_string($_POST['firstName']);
        $lastName = $conn->real_escape_string($_POST['lastName']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        // Check if passwords match
        if ($password !== $confirmPassword) {
            echo "<script>alert('Passwords do not match. Please try again.');</script>";
        } else {
            // Check if email already exists
            $emailCheckQuery = "SELECT * FROM users WHERE email = '$email'";
            $result = $conn->query($emailCheckQuery);

            if ($result->num_rows > 0) {
                echo "<script>alert('Email is already registered. Please use a different email.');</script>";
            } else {
                // Hash the password
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                // Insert new user into the database
                $sql = "INSERT INTO users (fname, lname, email, password) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Registration successful!'); window.location.href = 'home.php';</script>";
                } else {
                    echo "<script>alert('Error: Unable to register. Please try again later.');</script>";
                    error_log("SQL Error: " . $conn->error);
                }
            }
        }
    }

    // Close the connection
    $conn->close();
    ?>

    <div class="container">
      <div class="register-container">
        <h2 class="text-center mb-4">Create Your Account</h2>
        <p class="text-center text-muted mb-4">
          Fill out the form below to join us.
        </p>

        <form method="POST">
          <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input
              type="text"
              class="form-control"
              id="firstName"
              name="firstName"
              placeholder="Enter your first name"
              required
            />
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input
              type="text"
              class="form-control"
              id="lastName"
              name="lastName"
              placeholder="Enter your last name"
              required
            />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
            />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="password"
              name="password"
              placeholder="Create a password"
              required
            />
          </div>
          <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input
              type="password"
              class="form-control"
              id="confirmPassword"
              name="confirmPassword"
              placeholder="Re-enter your password"
              required
            />
          </div>
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
              <input
                type="checkbox"
                id="agreeTerms"
                class="form-check-input"
                required
              />
              <label for="agreeTerms" class="form-check-label small">
                I agree to the
                <a href="cookie.php" class="text-primary">Terms & Conditions </a>
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>

        <hr class="my-4" />

        <div class="text-center">
          <p class="text-muted mb-2">Or sign up with</p>
          <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-outline-primary me-2">
              <i class="bi bi-facebook"></i> Facebook
            </a>
            <a href="#" class="btn btn-outline-danger me-2">
              <i class="bi bi-google"></i> Google
            </a>
          </div>
        </div>

        <p class="text-center mt-4">
          Already have an account?
          <a href="login.php" class="text-primary">Login</a>
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
