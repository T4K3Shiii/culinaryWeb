<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recipes Collection - FoodFusion</title>
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

    $stmt = $pdo->query("SELECT * FROM recipe ORDER BY country_id, difficulty_id DESC");
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>

    <main class="container my-5 mt-5">
      <h1 class="text-center mb-4">Recipes Collection</h1>
      <p class="text-center mb-5">
        Explore a curated collection of diverse recipes from around the world,
        categorized by cuisine type, dietary preferences, and cooking
        difficulty.
      </p>

     

<!-- Cuisine Type Section -->
<section class="mb-5" id="cuisine-type-section">
    <h2 class="mb-4">By Cuisine Type</h2>
    <div class="d-flex justify-content-center mb-3">
      <button class="btn btn-secondary me-2 filter-btn" data-filter-cuisine="all">All</button>
      <button class="btn btn-secondary me-2 filter-btn" data-filter-cuisine="1">Japanese</button>
      <button class="btn btn-secondary me-2 filter-btn" data-filter-cuisine="2">Chinese</button>
      
    </div>
    <div class="row" id="cuisine-type-container">
      <?php foreach ($recipes as $recipe): ?>
        <div 
          class="col-md-4 recipe-card" 
          data-cuisine="<?= $recipe['country_id'] ?>" 
          data-difficulty="<?= $recipe['difficulty_id'] ?>"
        >
          <div class="card">
            <img 
              src="image/<?= htmlspecialchars($recipe['recipe_img']) ?>" 
              class="card-img-top" 
              alt="<?= htmlspecialchars($recipe['recipe_name']) ?>"
            />
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($recipe['recipe_name']) ?></h5>
              <p class="card-text"><?= htmlspecialchars($recipe['description']) ?></p>
              <a href="detail.php?recipe_id=<?= $recipe['recipe_id'] ?>" class="btn btn-warning">Explore Recipes</a>

            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>


      <!-- Dietary Preferences -->
      <section class="mb-5" id="dietary-preferences">
        <h2 class="mb-4">By Dietary Preference</h2>
        <div class="d-flex justify-content-center mb-3">
          <button class="btn btn-secondary me-2 filter-btn" data-filter="all">
            All
          </button>
          <button
            class="btn btn-secondary me-2 filter-btn"
            data-filter="vegetarian"
          >
            Vegetarian
          </button>
          <button class="btn btn-secondary me-2 filter-btn" data-filter="vegan">
            Vegan
          </button>
          <button
            class="btn btn-secondary filter-btn"
            data-filter="gluten-free"
          >
            Gluten-Free
          </button>
        </div>
        <div class="row">
          <div class="col-md-4 recipe-card" data-preference="vegetarian">
            <div class="card">
              <img
                src="image/vege.avif"
                class="card-img-top"
                alt="Vegetarian Preference"
              />
              <div class="card-body">
                <h5 class="card-title">Vegetarian</h5>
                <p class="card-text">
                  Explore a variety of delicious vegetarian recipes made with
                  fresh, wholesome ingredients.
                </p>
                <a href="detail.php" class="btn btn-warning">Explore Recipes</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 recipe-card" data-preference="vegan">
            <div class="card">
              <img
                src="image/vegan.jpg"
                class="card-img-top"
                alt="Vegan Preference"
              />
              <div class="card-body">
                <h5 class="card-title">Vegan</h5>
                <p class="card-text">
                  Enjoy plant-based recipes that are healthy, satisfying, and
                  completely vegan.
                </p>
                <a href="detail.php" class="btn btn-warning">Explore Recipes</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 recipe-card" data-preference="gluten-free">
            <div class="card">
              <img
                src="image/gluten.jpg"
                class="card-img-top"
                alt="Gluten-Free Preference"
              />
              <div class="card-body">
                <h5 class="card-title">Gluten-Free</h5>
                <p class="card-text">
                  Discover gluten-free recipes that don't compromise on flavor
                  or variety.
                </p>
                <a href="detail.php" class="btn btn-warning">Explore Recipes</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Cooking Difficulty Section -->
  <section class="mb-5" id="cooking-difficulty-section">
    <h2 class="mb-4">By Cooking Difficulty</h2>
    <div class="d-flex justify-content-center mb-3">
      <button class="btn btn-secondary me-2 filter-btn" data-filter-difficulty="all">All</button>
      <button class="btn btn-secondary me-2 filter-btn" data-filter-difficulty="1">Easy</button>
      <button class="btn btn-secondary me-2 filter-btn" data-filter-difficulty="2">Medium</button>
      <button class="btn btn-secondary filter-btn" data-filter-difficulty="3">Hard</button>
    </div>
    <div class="row" id="cooking-difficulty-container">
      <?php foreach ($recipes as $recipe): ?>
        <div 
          class="col-md-4 recipe-card" 
          data-cuisine="<?= $recipe['country_id'] ?>" 
          data-difficulty="<?= $recipe['difficulty_id'] ?>"
        >
          <div class="card">
            <img 
              src="image/<?= htmlspecialchars($recipe['recipe_img']) ?>" 
              class="card-img-top" 
              alt="<?= htmlspecialchars($recipe['recipe_name']) ?>"
            />
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($recipe['recipe_name']) ?></h5>
              <p class="card-text"><?= htmlspecialchars($recipe['description']) ?></p>
              <a href="detail.php?recipe_id=<?= $recipe['recipe_id'] ?>" class="btn btn-warning">Explore Recipes</a>

            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</div>

<script>
document.querySelectorAll('.filter-btn').forEach(button => {
  button.addEventListener('click', () => {
    const cuisineFilter = button.getAttribute('data-filter-cuisine') || 'all';
    const difficultyFilter = button.getAttribute('data-filter-difficulty') || 'all';

    const cards = document.querySelectorAll('.recipe-card');

    cards.forEach(card => {
      const cuisine = card.getAttribute('data-cuisine');
      const difficulty = card.getAttribute('data-difficulty');

      
      if (
        (cuisineFilter === 'all' || cuisine === cuisineFilter) &&
        (difficultyFilter === 'all' || difficulty === difficultyFilter)
      ) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  });
});


window.onload = () => {
  const cards = document.querySelectorAll('.recipe-card');
  

  cards.forEach(card => {
    card.style.display = 'block';
  });

  
  const dietaryPreferenceCards = document.querySelectorAll('[data-preference]');
  dietaryPreferenceCards.forEach(card => {
    card.style.display = 'block';
  });
};
</script>

    </main>
    <?php
    include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>