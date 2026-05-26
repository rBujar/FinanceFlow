<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <?php include 'components/head.php' ?>
</head>

<body>
  <?php include 'components/header.php' ?>
  <div class="token-bg">
    <section class="token container">
      <div class="row">
        <div class="token__card col-12">
          <div class="row">
            <div class="token__image token__image--top col-8 offset-2 col-lg-5 offset-lg-0">
              <img src="./src/assets/token-phones.png" alt="token phone">
            </div>
            <div class="token__content col-12 col-lg-5 offset-lg-2 col-xl-4 offset-xl-3">
              <h2>Earn daily rewards on your idle tokens</h2>
              <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse
                tortor aene.</p>
              <div class="token__features">
                <div class="token__item">
                  <img src="./src/assets/token-1.png" alt="token-1">
                  <p class="text-sm">Lowest fees in market</p>
                </div>
                <div class="token__item">
                  <img src="./src/assets/token-2.png" alt="token-2">
                  <p class="text-sm">Fast and secure transactions</p>
                </div>
                <div class="token__item">
                  <img src="./src/assets/token-3.png" alt="token-3">
                  <p class="text-sm">256-bit secure encryption</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="token__card col-12">
          <div class="row">
            <div class="token__content col-12 col-lg-5 col-xl-4">
              <h2>Earn daily rewards on your idle tokens</h2>
              <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse
                tortor aene.</p>
              <div class="token__features">
                <div class="token__item">
                  <img src="./src/assets/token-4.png" alt="token-4">
                  <p class="text-sm">100% Private data</p>
                </div>
                <div class="token__item">
                  <img src="./src/assets/token-5.png" alt="token-5">
                  <p class="text-sm">99.99% Uptime guarantee</p>
                </div>
                <div class="token__item">
                  <img src="./src/assets/token-6.png" alt="token-6">
                  <p class="text-sm">24/7 Dedicated support</p>
                </div>
              </div>
            </div>
            <div class="token__image token__image--bottom col-12 col-lg-7 col-xl-8">
              <img src="./src/assets/token-laptop.png" alt="token phone">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include 'components/footer.php' ?>
  <?php viteEntry('src/js/main.js'); ?>
</body>

</html>