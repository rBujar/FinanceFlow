<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
  <head>
   <?php include 'components/head.php' ?>
  </head>
  <body>
    <?php include 'components/header.php' ?>
     <div class="explore-bg">
    <section class="explore container">
      <div class="row">
        <div class="explore__content col-12 col-lg-6">
          <div class="explore__title">
            <h2>Explore endless possibilities with FinanceFlow</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse tortor aene.</p>
          </div>
          <button class="white-btn">Download App</button>
        </div>
        <div class="explore__phone col-12 col-lg-6">
          <img src="./src/assets/explore-phones.png" alt="token-phones">
        </div>
      </div>
    </section>
  </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
  </body>
</html>
