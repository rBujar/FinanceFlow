<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
  <head>
   <?php include 'components/head.php' ?>
  </head>
  <body>
    <?php include 'components/header.php' ?>
    <div class="error-bg">
      <section class="error container">
        <div class="row">
          <div class="error__title col-8 offset-2 col-lg-6 offset-lg-3">
            <h1>404</h1>
            <div class="error__info">
              <h2>Page Not Found</h2>
              <p class="text-sm">The page you're looking for can't be found. Double-check the URL and try again. Or click the button below.</p>
            </div>
          </div>
          <div class="error__buttons col-12">
            <a href="./pricing.php"><button class="blue-btn text-caps">View Pricing</button></a>
            <a href="./index.php"><button class="grey-btn text-caps">Go Home</button></a>
          </div>
        </div>
      </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
  </body>
</html>
