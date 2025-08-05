<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "backendproject"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $stmt = $conn->prepare("INSERT INTO contactus (name, email, message) VALUES (?, ?, ?)");
    
    if ($stmt === false) {
        die("Error in preparing statement: " . $conn->error);
    }

   
    $stmt->bind_param("sss", $name, $email, $message);

    
    if ($stmt->execute()) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.history.back();</script>";
    }

   
    $stmt->close();
}


$conn->close();
?>


    <!-- Include Header -->
    <?php include 'header.php'; ?>

    <section class="contact-banner mt-5">
      <div class="d-flex align-items-center justify-content-center text-center">
        <h1 class="text-light">Get in Touch</h1>
      </div>
    </section>

    <section class="contact-container py-5">
      <div class="container">
        <h2 class="text-center mb-4 fw-bold text-primary">
          We'd love to hear from you!
        </h2>
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0">
              <div class="card-body p-4">
                <form action="contact.php" method="POST">
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input
                      type="text"
                      class="form-control rounded-pill shadow-sm"
                      id="name"
                      name="name"
                      placeholder="Enter your name"
                      required
                    />
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                      type="email"
                      class="form-control rounded-pill shadow-sm"
                      id="email"
                      name="email"
                      placeholder="Enter your email"
                      required
                    />
                  </div>

                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea
                      class="form-control shadow-sm rounded"
                      id="message"
                      name="message"
                      rows="5"
                      placeholder="Write your message here"
                      required
                    ></textarea>
                  </div>

                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary rounded-pill">
                      Send Message
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>
  </body>
</html>
