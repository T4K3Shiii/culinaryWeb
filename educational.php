<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Educational Resources - FoodFusion</title>
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
   

    <main class="container my-5">
      <h1 class="text-center mb-4">Educational Resources</h1>
      <p class="text-center mb-5">
        Dive into renewable energy topics with our curated downloadable
        resources, eye-catching infographics, and engaging videos.
      </p>

      <section class="mb-5" id="recipe-videos">
  <h2 class="resource-title mb-4">How to make a Delicious Cuisine</h2>
  <div class="row">
   
    <div class="col-md-4">
      <div class="card resource-card">
        <iframe
           src="https://www.youtube.com/embed/yeqTZhfaEsQ"
          title="Tofu Recipe"
          class="card-img-top"
          allowfullscreen
        ></iframe>
        <div class="card-body text-center">
          <h5 class="card-title">How to Make Tofu</h5>
          <p class="card-text">
            Watch this video to learn how to make delicious tofu.
          </p>
          <a href="download/tofu_recipe.mp4" download class="btn btn-explore">Download Video</a>
        </div>
      </div>
    </div>

    
    <div class="col-md-4">
      <div class="card resource-card">
        <iframe
          src="https://www.youtube.com/embed/j6ClM5w96cE"
          title="Curry Rice Recipe"
          class="card-img-top"
          allowfullscreen
        ></iframe>
        <div class="card-body text-center">
          <h5 class="card-title">Curry Rice</h5>
          <p class="card-text">
            Enjoy this step-by-step guide to making curry rice.
          </p>
          <a href="download/curry_rice.mp4" download class="btn btn-explore">Download Video</a>
        </div>
      </div>
    </div>

    
    <div class="col-md-4">
      <div class="card resource-card">
        <iframe
          src="https://www.youtube.com/embed/gbygXUDbf2Q"
          title="Chow Mein Recipe"
          class="card-img-top"
          allowfullscreen
        ></iframe>
        <div class="card-body text-center">
          <h5 class="card-title">Chow Mein</h5>
          <p class="card-text">
            Learn to make mouthwatering Chow Mein with this video.
          </p>
          <a href="download/chow_mein.mp4" download class="btn btn-explore">Download Video</a>
        </div>
      </div>
    </div>
  </div>
</section>



      <!-- Breakfast -->
<section class="mb-5" id="breakfast">
  <h2 class="resource-title mb-4">Breakfast</h2>
  <div class="row">
    <!-- Miso Soup -->
    <div class="col-md-4">
      <div class="card resource-card">
        <img
          src="image/miso.jpg"
          class="card-img-top"
          alt="Miso Soup"
        />
        <div class="card-body text-center">
          <h5 class="card-title">Miso Soup</h5>
          <p class="card-text">
            Discover the flavors of traditional Japanese Miso Soup.
          </p>
          <a href="infographic.php" target="_blank" class="btn btn-explore">View Infographic</a>
        </div>
      </div>
    </div>

    <!-- Tamagoyaki -->
    <div class="col-md-4">
      <div class="card resource-card">
        <img
          src="image/tamago.jpg"
          class="card-img-top"
          alt="Tamagoyaki"
        />
        <div class="card-body text-center">
          <h5 class="card-title">Tamagoyaki</h5>
          <p class="card-text">
            Learn how to prepare the perfect Japanese rolled omelet.
          </p>
          <a href="infographicTamago.php" target="_blank" class="btn btn-explore">View Infographic</a>
        </div>
      </div>
    </div>

    <!-- Fried Noodles -->
    <div class="col-md-4">
      <div class="card resource-card">
        <img
          src="image/noodle.jpg"
          class="card-img-top"
          alt="Fried Noodles"
        />
        <div class="card-body text-center">
          <h5 class="card-title">Fried Noodles</h5>
          <p class="card-text">
            A savory and satisfying noodle dish to enjoy any time.
          </p>
          <a href="infographicNoodle.php" target="_blank" class="btn btn-explore">View Infographic</a>
        </div>
      </div>
    </div>
  </div>
</section>


      <!-- Videos -->
      <section class="mb-5" id="videos">
        <h2 class="resource-title mb-4">Dinner</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card resource-card">
              <img
                src="image/riceOmelette.webp"
                class="card-img-top"
                alt="Intro to Renewable Energy"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Fried Rice Omelette</h5>
                <p class="card-text">
                Learn to make this classic Japanese Fried Rice Omelette.
                </p>
                <a href="https://www.youtube.com/embed/q_nosb-2mX4" class="btn btn-explore">Watch Video</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card resource-card">
              <img
                src="image/teriyaki.webp"
                class="card-img-top"
                alt="Solar Panel Installation"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Teriyaki Chicken</h5>
                <p class="card-text">
                Master the art of making juicy Teriyaki Chicken at home.
                </p>
                <a href="https://www.youtube.com/embed/n2fMN_XVzFY" class="btn btn-explore">Watch Video</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card resource-card">
              <img
                src="image/sesame.jpg"
                class="card-img-top"
                alt="The Future of Wind Energy"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Sesame-Crumbed Pork Cutlets</h5>
                <p class="card-text">
                Make crispy pork cutlets with quick tonkatsu sauce.
                </p>
                <a href="https://www.youtube.com/embed/bL9-lXv1BOU" class="btn btn-explore">Watch Video</a>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>
    <?php
    include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
