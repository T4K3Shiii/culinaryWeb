<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recipe Infographic - Fried Noodles</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .infographic-section {
      margin-top: 50px;
    }
    .recipe-title {
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
    }
    .ingredient-list, .preparation-steps {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    .ingredient-list h4, .preparation-steps h4 {
      font-weight: bold;
    }
    .ingredient-item, .step-item {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container infographic-section">
    <!-- Recipe Title -->
    <h1 class="recipe-title">Fried Noodles</h1>

    <div class="row">
      <!-- Ingredients Section -->
      <div class="col-md-6 mb-4">
        <div class="ingredient-list">
          <h4>Ingredients</h4>
          <ul class="list-unstyled">
            <li class="ingredient-item">200g egg noodles</li>
            <li class="ingredient-item">2 tablespoons soy sauce</li>
            <li class="ingredient-item">1 tablespoon oyster sauce</li>
            <li class="ingredient-item">1/2 cup sliced vegetables (carrots, bell peppers, etc.)</li>
            <li class="ingredient-item">1/4 cup chopped green onions</li>
            <li class="ingredient-item">1 tablespoon cooking oil</li>
            <li class="ingredient-item">Optional: 100g cooked chicken or shrimp</li>
          </ul>
        </div>
      </div>

      <!-- Preparation Steps Section -->
      <div class="col-md-6 mb-4">
        <div class="preparation-steps">
          <h4>How to Make</h4>
          <ol>
            <li class="step-item">Cook the egg noodles according to the package instructions and set aside.</li>
            <li class="step-item">Heat oil in a large pan or wok over medium-high heat.</li>
            <li class="step-item">Add sliced vegetables and stir-fry for 2-3 minutes.</li>
            <li class="step-item">If using, add cooked chicken or shrimp and stir-fry for another minute.</li>
            <li class="step-item">Add the cooked noodles to the pan and mix well.</li>
            <li class="step-item">Pour soy sauce and oyster sauce over the noodles and stir until evenly coated.</li>
            <li class="step-item">Garnish with chopped green onions and serve hot.</li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Back Button -->
    <div class="text-center mt-4">
      <a href="educational.php" class="btn btn-primary">Back to Recipes</a>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
