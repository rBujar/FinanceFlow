<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
  <head>
   <?php include 'components/head.php' ?>
  </head>
  <body>
    <?php include 'components/header.php' ?>
    <div class="hero-bg">
    <section class="hero container">
      <div class="row">
      <div class="hero__info col-12 col-lg-5">
        <div class="hero__title">
            <h1>Buy, trade, and hold 350+ cryptocurrencies</h1>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse tortor aenean dis placerat.</p>
        </div>
        <div class="hero__buttons">
          <button class="blue-btn">Download app</button>
          <button class="grey-btn">View Pricing</button>
        </div>
        </div>
        <div class="hero__image col-12 col-lg-7">
        <img src="./src/assets/laptop.png" alt="laptop" class="">
        </div>
        </div>
        <div class="hero__features">
          <p class="text-md">Finance flow has been featured on</p>
          <div class="hero__companies">
            <img src="./src/assets/company-1.png" alt="company 1">
            <img src="./src/assets/company-2.png" alt="company 2">
            <img src="./src/assets/company-3.png" alt="company 3">
            <img src="./src/assets/company-4.png" alt="company 4">
            <img src="./src/assets/company-5.png" alt="company 5">
          </div>
        </div>
      </section>
        </div>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
  </body>
</html>
