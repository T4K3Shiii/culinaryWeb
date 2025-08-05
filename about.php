<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - FoodFusion</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />

  </head>
  <body>
    
    <?php 
        include 'header.php';
    ?>
    <br>
    <br>


    <div class="about-banner d-flex text-align-center justify-content-center">
      <h1>About Us</h1>
    </div>
    

    <main class="container about-section bg-white p-4 rounded shadow">
      <h2 class="text-center my-4">Welcome to FoodFusion</h2>
      <p class="text-center">
        At FoodFusion, we believe that cooking is more than just a necessity—
        it's an art form and a way to connect with others. Our platform is
        designed to inspire and empower culinary enthusiasts, home cooks, and
        anyone passionate about food to explore new flavors, techniques, and
        ideas.
      </p>

      <section class="my-5">
        <h3>Culinary Philosophy</h3>
        <p>
          FoodFusion embraces the idea that cooking should be a joyous and
          creative experience. We celebrate the diversity of cuisines worldwide
          and encourage everyone to share their unique culinary traditions. Our
          philosophy is rooted in sustainability, innovation, and inclusivity,
          aiming to create a welcoming space for all food lovers.
        </p>
      </section>

      <section class="my-5">
        <h3>Our Values</h3>
        <ul>
          <li>
            <strong>Creativity:</strong> Encouraging experimentation and
            innovation in the kitchen.
          </li>
          <li>
            <strong>Community:</strong> Building a supportive network of food
            enthusiasts who learn and grow together.
          </li>
          <li>
            <strong>Sustainability:</strong> Promoting eco-friendly practices
            and mindful cooking.
          </li>
          <li>
            <strong>Education:</strong> Providing resources to enhance
            culinary skills and knowledge.
          </li>
        </ul>
      </section>

      <section class="my-5">
        <h3>Meet Our Team</h3>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img
                src="image/boy.webp"
                class="card-img-top"
                alt="Team Member 1"
              />
              <div class="card-body">
                <h5 class="card-title">John Doe</h5>
                <p class="card-text">
                  Founder & CEO<br />
                  A visionary leader and passionate chef who started FoodFusion
                  to bring people closer through food.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="image/boy2.webp"
                class="card-img-top"
                alt="Team Member 2"
              />
              <div class="card-body">
                <h5 class="card-title">Jane Smith</h5>
                <p class="card-text">
                  Head of Recipe Development<br />
                  Jane creates and curates innovative recipes that delight and
                  inspire home cooks everywhere.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="image/girl2.jpg"
                class="card-img-top"
                alt="Team Member 3"
              />
              <div class="card-body">
                <h5 class="card-title">Emily Davis</h5>
                <p class="card-text">
                  Community Manager<br />
                  Emily ensures our community stays engaged and connected by
                  fostering meaningful interactions.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    < <?php
    include 'footer.php';
    ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-PxAglQo0lJkwyaj8tBvNvl29WOnTAh0qf5+OV3tLlPRmQICoPC7OgZHw4lvKsfRY"
      crossorigin="anonymous"
    ></script>
     <!-- Bootstrap JS Bundle -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
  // Show the modal on page load
  window.onload = function () {
    document.getElementById("loginModal").style.display = "block";
  };

  // Hide the modal when the close button is clicked
  function hideLoginModal() {
    document.getElementById("loginModal").style.display = "none";

  }
  
</script>
  </body>
</html>
