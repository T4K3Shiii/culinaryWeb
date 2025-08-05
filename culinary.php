<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Culinary Resources</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <?php
        include 'header.php';
    ?>
    <div class="container py-5 mt-5">
      <h1 class="text-center mb-4">Culinary Resources</h1>
      <div class="row gy-4">
        <div class="col-md-4">
          <div class="card resource-card">
            <img
              src="image/ramenRecipe.jpg"
              alt="Recipe Image"
              class="card-img-top"
            />
            <div class="card-body">
              <h5 class="card-title">Ramen Recipe</h5>
              <p class="card-text">
                Learn how to make authentic Japanese ramen.
              </p>
              <a href="ramen-recipe.pdf" download class="btn btn-primary"
                >Download Recipe</a
              >
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card resource-card">
            <div class="video-container">
              <iframe
                src="https://www.youtube.com/embed/VIDEO_ID"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <div class="card-body">
              <h5 class="card-title">Sushi Rolling Tutorial</h5>
              <p class="card-text">
                Watch our step-by-step video tutorial on rolling sushi like a
                pro.
              </p>
              <a
                href="https://www.youtube.com/watch?v=joweUxpHaqc"
                target="_blank"
                class="btn btn-primary"
                >Watch on YouTube</a
              >
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card resource-card">
            <img
              src="image/sushiRolling.jpg"
              alt="Kitchen Hack Image"
              class="card-img-top"
            />
            <div class="card-body">
              <h5 class="card-title">Kitchen Hacks</h5>
              <p class="card-text">
                Discover time-saving kitchen hacks for Japanese and Chinese
                cooking.
              </p>
              <a href="kitchen-hacks.pdf" download class="btn btn-primary"
                >Download Guide</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
