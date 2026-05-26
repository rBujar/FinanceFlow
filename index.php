<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
  <head>
   <?php include 'components/head.php' ?>
  </head>
  <body>
    <?php include 'components/header.php' ?>
    <div class="build-bg">
      <section class="build container">
        <div class="row">
          <div class="build__title col-12 col-lg-6 offset-lg-3">
            <h2>Build your crypto portfolia</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse tortor aene.</p>
          </div>
          <div class="build__content col-12">
            <div class="build__cards">
              <div class="build__sideCards">
                <div class="build__smallCard">
                  <img src="./src/assets/build-1.png" alt="build-1">
                  <div class="build__smallCardTitle">
                    <h4 class="text-md">Send & Receive</h4>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse tortor aene.</p>
                  </div>
                </div>
                <div class="build__smallCard">
                  <img src="./src/assets/build-2.png" alt="build-2">
                  <div class="build__smallCardTitle">
                    <h4 class="text-md">100% Secure Wallet</h4>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse tortor aene.</p>
                  </div>
                </div>
              </div>
              <div class="build__bigCard">
                <div class="build__bigCardTitle">
                  <h4 class="text-md">iOS & Android App</h4>
                  <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In amet, morbi non at sed neque.</p>
                </div>
                <img src="./src/assets/build-iphone.png" alt="build iphone">
                </div>
              <div class="build__sideCards">
                <div class="build__smallCard">
                  <img src="./src/assets/build-3.png" alt="build-3">
                  <div class="build__smallCardTitle">
                    <h4 class="text-md">Trading Charts</h4>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse tortor aene.</p>
                  </div>
                </div>
                <div class="build__smallCard">
                  <img src="./src/assets/build-4.png" alt="build-4">
                  <div class="build__smallCardTitle">
                    <h4 class="text-md">Real Time Trading</h4>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse tortor aene.</p>
                  </div>
                </div>
              </div>
            </div>
            <button class="blue-btn build__button text-caps">Download app</button>
            </div>
        </div>
      </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
  </body>
</html>
