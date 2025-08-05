<?php

$host = 'localhost';
$dbname = 'backendproject';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if (isset($_GET['recipe_id']) && is_numeric($_GET['recipe_id'])) {
        $recipe_id = intval($_GET['recipe_id']);

        
        $recipe_stmt = $pdo->prepare("SELECT * FROM recipe WHERE recipe_id = :recipe_id");
        $recipe_stmt->execute(['recipe_id' => $recipe_id]);
        $recipe = $recipe_stmt->fetch(PDO::FETCH_ASSOC);

        if (!$recipe) {
            echo "Recipe not found!";
            exit;
        }

        
        $ingredients_stmt = $pdo->prepare(
            "SELECT i.ingre_name AS ingredient_name
             FROM ingredient i
             INNER JOIN recipe_ingredient ri ON i.ingre_id = ri.ingre_id
             WHERE ri.recipe_id = :recipe_id"
        );
        $ingredients_stmt->execute(['recipe_id' => $recipe_id]);
        $ingredients = $ingredients_stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "Invalid Recipe ID!";
        exit;
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    error_log("Database Error: " . $e->getMessage());
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($recipe['recipe_name'] ?? 'Recipe Detail') ?> - Recipe Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .recipe-detail img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container my-5 recipe-detail">
        <div class="row">
            <div class="col-md-6">
                <img src="image/<?= htmlspecialchars($recipe['recipe_img'] ?? 'default.png') ?>" 
                     alt="<?= htmlspecialchars($recipe['recipe_name'] ?? 'Recipe') ?>" 
                     class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1 class="display-4"><?= htmlspecialchars($recipe['recipe_name'] ?? 'Recipe Name') ?></h1>
                <p class="lead"><?= htmlspecialchars($recipe['description'] ?? 'No description available.') ?></p>

                <h3>Ingredients</h3>
                <ul class="list-group mb-4">
                    <?php if (!empty($ingredients)): ?>
                        <?php foreach ($ingredients as $ingredient): ?>
                            <li class="list-group-item"><?= htmlspecialchars($ingredient['ingredient_name']) ?></li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li class="list-group-item">No ingredients listed for this recipe.</li>
                    <?php endif; ?>
                </ul>

                <h3>Preparation Steps</h3>
                <ol class="mb-4">
                    <li>Preheat the oven to 180°C (350°F).</li>
                    <li>Mix the dry ingredients in a bowl.</li>
                    <li>Whisk the eggs and add to the dry mixture.</li>
                    <li>Pour the batter into a greased pan and bake for 25 minutes.</li>
                </ol>

                <a href="reciepeCollection.php" class="btn btn-dark text-white">Back</a>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
