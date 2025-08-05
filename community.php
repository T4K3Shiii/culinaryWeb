<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Community Cookbook</title>
   
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      .recipe-card img {
        width: 100%;
        height: auto;
      }
      .recipe-form textarea {
        resize: none;
      }
    </style>
  </head>
  <body>
   
    <?php
        include 'header.php';
    ?>

   
    <div class="container my-5">
      <h1 class="display-4 text-center mb-4">Community Cookbook</h1>
      <p class="lead text-center mb-4">
        A collaborative space where members can share their favorite recipes,
        cooking tips, and culinary experiences with the FoodFusion community.
      </p>

    
      <div class="alert alert-warning text-center" id="loginPrompt">
        <strong>Attention:</strong> You need to
        <a href="login.html" class="alert-link">log in</a> to post a recipe!
      </div>

      
      <div id="postForm" class="d-none">
        <h3>Share a Recipe</h3>
        <form action="#" method="POST">
          <div class="form-group">
            <label for="recipeTitle">Recipe Title</label>
            <input
              type="text"
              class="form-control"
              id="recipeTitle"
              placeholder="Enter recipe title"
              required
            />
          </div>
          <div class="form-group">
            <label for="recipeDescription">Recipe Description</label>
            <textarea
              class="form-control"
              id="recipeDescription"
              rows="4"
              placeholder="Enter recipe description"
              required
            ></textarea>
          </div>
          <div class="form-group">
            <label for="recipeImage">Upload Recipe Image</label>
            <input
              type="file"
              class="form-control-file"
              id="recipeImage"
              required
            />
          </div>
          <button type="submit" class="btn btn-primary">Post Recipe</button>
        </form>
      </div>

      <hr />

     
      <h3 class="mb-4">Featured Recipes</h3>
      <div class="row">
        
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="image/chocolate.webp" class="card-img-top" alt="Recipe Image" />
            <div class="card-body">
              <h5 class="card-title">Chocolate Cake</h5>
              <p class="card-text">
                A rich and moist chocolate cake recipe that's perfect for any
                occasion.
              </p>
              <a href="#" class="btn btn-secondary">View Recipe</a>
            </div>
          </div>
        </div>
       
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="image/veganSalad.jpg" class="card-img-top" alt="Recipe Image" />
            <div class="card-body">
              <h5 class="card-title">Vegan Salad</h5>
              <p class="card-text">
                A fresh and healthy salad made with organic ingredients.
              </p>
              <a href="#" class="btn btn-secondary">View Recipe</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="image/pasta.jpg" class="card-img-top" alt="Recipe Image" />
            <div class="card-body">
              <h5 class="card-title">Pasta Carbonara</h5>
              <p class="card-text">
                A classic Italian pasta dish with creamy sauce and crispy bacon.
              </p>
              <a href="#" class="btn btn-secondary">View Recipe</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
     
      var isLoggedIn = false; 

      if (isLoggedIn) {
        document.getElementById("loginPrompt").style.display = "none"; 
        document.getElementById("postForm").classList.remove("d-none"); 
      }
    </script>
  </body>
</html>
