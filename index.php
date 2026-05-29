<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <?php include 'components/head.php' ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
</head>

<body>
  <?php include 'components/header.php' ?>
  <div class="review-bg">
    <section class="review">
      <div class="row">
        <div class="review__userReviews col-12">
          <div class="row">
            <div class="review__header container col-12">
              <h2 class="text-caps">What our users say?</h2>
              <button class="blue-btn">Download App</button>
            </div>
            <div class="swiper mySwiper col-12">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="review__item">
                    <p class="text-md">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor fermentum dignissim et pellentesque egestas mauris, faucibus. Tellus nisi amet non at phasellus faucibus senectus in”</p>
                    <div class="review__user">
                      <img src="./src/assets/user-1.png" alt="user-1">
                      <div class="review__userInfo">
                        <h5 class="text-sm text-caps">john carter</h5>
                        <p class="text-sm text-caps">Role, Company</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review__item">
                    <p class="text-md">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor fermentum dignissim et pellentesque egestas mauris, faucibus. Tellus nisi amet non at phasellus faucibus senectus in”</p>
                    <div class="review__user">
                      <img src="./src/assets/user-2.png" alt="user-2">
                      <div class="review__userInfo">
                        <h5 class="text-sm text-caps">john carter</h5>
                        <p class="text-sm text-caps">Role, Company</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review__item">
                    <p class="text-md">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor fermentum dignissim et pellentesque egestas mauris, faucibus. Tellus nisi amet non at phasellus faucibus senectus in”</p>
                    <div class="review__user">
                      <img src="./src/assets/user-3.png" alt="user-3">
                      <div class="review__userInfo">
                        <h5 class="text-sm text-caps">john carter</h5>
                        <p class="text-sm text-caps">Role, Company</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review__item">
                    <p class="text-md">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor fermentum dignissim et pellentesque egestas mauris, faucibus. Tellus nisi amet non at phasellus faucibus senectus in”</p>
                    <div class="review__user">
                      <img src="./src/assets/user-1.png" alt="user-1">
                      <div class="review__userInfo">
                        <h5 class="text-sm text-caps">john carter</h5>
                        <p class="text-sm text-caps">Role, Company</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review__item">
                    <p class="text-md">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor fermentum dignissim et pellentesque egestas mauris, faucibus. Tellus nisi amet non at phasellus faucibus senectus in”</p>
                    <div class="review__user">
                      <img src="./src/assets/user-2.png" alt="user-2">
                      <div class="review__userInfo">
                        <h5 class="text-sm text-caps">john carter</h5>
                        <p class="text-sm text-caps">Role, Company</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review__item">
                    <p class="text-md">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor fermentum dignissim et pellentesque egestas mauris, faucibus. Tellus nisi amet non at phasellus faucibus senectus in”</p>
                    <div class="review__user">
                      <img src="./src/assets/user-3.png" alt="user-3">
                      <div class="review__userInfo">
                        <h5 class="text-sm text-caps">john carter</h5>
                        <p class="text-sm text-caps">Role, Company</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="review__info container col-12">
          <div class="row">
          <div class="review__content col-12 col-lg-5">
            <div class="review__infoTitle">
                <h2 class="text-caps">Get started today</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse tortor aene.</p>
            </div>
            <div class="review__infoSteps">
              <div class="review__step">
                <img src="./src/assets/review-1.png" alt="review-`">
                <p class="text-sm">Download app</p>
              </div>
              <div class="review__step">
                <img src="./src/assets/review-2.png" alt="review-2">
                <p class="text-sm">Create a free account</p>
              </div>
              <div class="review__step">
                <img src="./src/assets/review-3.png" alt="review-3">
                <p class="text-sm">Start trading</p>
              </div>
            </div>
          </div>
          <div class="review__videoWrapper col-12 col-lg-5 offset-lg-1">
            <button class="review__videoPlay"><i class="icon-play"></i></button>
             <video class="review__video" muted>
              <source src="./src/assets/review-video.mp4" type="video/mp4">
            </video>
          </div>
           </div>
        </div>
      </div>
    </section>
  </div>
  <?php include 'components/footer.php' ?>
  <?php viteEntry('src/js/review.js'); ?>
</body>
</html>