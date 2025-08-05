<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FoodFusion</title>
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
    <?php

$host = 'localhost';
$dbname = 'backendproject';
$username = 'root';
$password = '';

try {
   
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>
<!-- pop up form -->

 
<div id="loginModal" class="modal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Please Login</h5>
                <button type="button" class="btn-close" onclick="hideLoginModal()" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm" action="login.php" method="get">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>


<section>
    <!-- carousel -->
    <div class="carousel-container ">
       
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                
                $conn = new mysqli($host, $user, $password, $db, $port);
                $sql = "SELECT name FROM event ORDER BY date ASC";
                $result = $conn->query($sql); 
                $active = true;

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="carousel-item' . ($active ? ' active' : '') . '" data-bs-interval="5000">';
                        echo '<div class="d-block w-100 text-center bg-dark text-white p-5">';
                        echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                        echo '</div>';
                        echo '</div>';
                        $active = false;
                    }
                } else {
                    echo '<div class="carousel-item active" data-bs-interval="5000">';
                    echo '<div class="d-block w-100 text-center bg-dark text-white p-5">';
                    echo '<h3>No Upcoming Events</h3>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


    <section class="mission-container text-center py-5 bg-white">
      <h2 class="mission-heading mb-4">Our Mission</h2>
      <p class="mission-text text-black mb-4">
        "Empowering home cooks to create extraordinary meals and share their
        culinary experiences."
      </p>
      <h3 class="join-button mt-4">
        <a href="login.php" class="btn btn-light">Join Us</a>
      </h3>
    </section>
    <div class="missionBanner">
      <img src="image/cooking.webp" alt="" />
    </div>

    <section class="featured-recipes">
      <h2 class="d-flex justify-content-center mb-5">Trend Recipes</h2>
      <div class="recipe-card-container">
        <div class="recipe-card">
          <img src="image/feature.jpg" alt="Recipe Image" />
          <h4>Quick and Easy Pasta</h4>
          <p>
            A simple and delicious pasta dish that can be made in under 30
            minutes.
          </p>
        </div>
        <div class="recipe-card">
          <img src="image/sushi.jpg" alt="Recipe Image" />
          <h4>Quick and Easy Sushi</h4>
          <p>
            A simple and delicious Sushi dish that can be made in under 30
            minutes.
          </p>
        </div>
        <div class="recipe-card">
          <img src="image/malatang.png" alt="Recipe Image" />
          <h4>45Min and Hard Malatang</h4>
          <p>
            A simple and delicious Malatang dish that can be made in under 50
            minutes.
          </p>
        </div>
      </div>
    </section>

    <section class="featured-recipes">
  <h2 class="d-flex justify-content-center mb-5">Featured Recipes</h2>
  <div class="recipe-card-container">
    <?php
   
    $stmt = $pdo->query("SELECT * FROM recipe ORDER BY recipe_id DESC LIMIT 3");
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($recipes as $recipe):
    ?>
      <div class="recipe-card">
        <img src="image/<?= htmlspecialchars($recipe['recipe_img']) ?>" alt="Recipe Image" />
        <h4><?= htmlspecialchars($recipe['recipe_name']) ?></h4>
      </div>
    <?php endforeach; ?>
  </div>
</section>


<?php 
include 'footer.php';
?>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
 
  window.onload = function () {
    document.getElementById("loginModal").style.display = "block";
  };

  
  function hideLoginModal() {
    document.getElementById("loginModal").style.display = "none";

  }
  
</script>

  </body>
</html>
