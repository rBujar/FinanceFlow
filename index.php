<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <?php include 'components/head.php' ?>
</head>

<body>
  <?php include 'components/header.php' ?>
  <div class="app-bg">
    <section class="app container">
      <div class="row">
        <div class="app__title col-12">
          <h2>Download our app</h2>
          <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit non neque orci amet, amet.</p>
        </div>
        <div class="app__cards col-12">
          <div class="app__item">
            <div class="app__info">
              <h2>Download for IOS</h2>
              <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nulla integer in
                pellentesque tortor semper elementum. Felis.</p>
            </div>
            <button class="blue-btn"><i class="icon-apple"></i>
              <p class="text-bold text-caps">app store</p>
            </button>
            <div class="app__image">
              <img src="./src/assets/app-apple.png" alt="app-iphone">
            </div>
          </div>
          <div class="app__item">
            <div class="app__info">
              <h2>Download for ANDROID</h2>
              <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nulla integer in
                pellentesque tortor semper elementum. Felis.</p>
            </div>
            <button class="blue-btn"><i class="icon-playstore"></i>
              <p class="text-bold text-caps">play store</p>
            </button>
            <div class="app__image">
              <img src="./src/assets/app-android.png" alt="app-android">
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