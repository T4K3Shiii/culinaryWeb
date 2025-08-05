<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recipe Infographic - Tamagoyaki</title>
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
    <h1 class="recipe-title">Tamagoyaki</h1>

    <div class="row">
      <!-- Ingredients Section -->
      <div class="col-md-6 mb-4">
        <div class="ingredient-list">
          <h4>Ingredients</h4>
          <ul class="list-unstyled">
            <li class="ingredient-item">3 large eggs</li>
            <li class="ingredient-item">1 tablespoon soy sauce</li>
            <li class="ingredient-item">1 tablespoon mirin (sweet rice wine)</li>
            <li class="ingredient-item">1 teaspoon sugar</li>
            <li class="ingredient-item">Pinch of salt</li>
            <li class="ingredient-item">1 teaspoon vegetable oil</li>
          </ul>
        </div>
      </div>

      <!-- Preparation Steps Section -->
      <div class="col-md-6 mb-4">
        <div class="preparation-steps">
          <h4>How to Make</h4>
          <ol>
            <li class="step-item">In a bowl, whisk together the eggs, soy sauce, mirin, sugar, and a pinch of salt until well combined.</li>
            <li class="step-item">Heat a tamagoyaki pan or a non-stick frying pan over medium-low heat. Lightly oil the pan using a paper towel.</li>
            <li class="step-item">Pour a thin layer of the egg mixture into the pan and tilt it to spread evenly.</li>
            <li class="step-item">When the egg is partially set, gently roll it to one side of the pan using chopsticks or a spatula.</li>
            <li class="step-item">Add another thin layer of the egg mixture to the pan, letting it cook slightly before rolling it over the previous layer.</li>
            <li class="step-item">Repeat until all the egg mixture is used, creating a layered roll.</li>
            <li class="step-item">Remove the tamagoyaki from the pan, let it cool slightly, then slice it into pieces and serve.</li>
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
