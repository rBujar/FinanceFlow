<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <?php include 'components/head.php' ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
</head>
<body>
  <?php include 'components/header.php' ?>
  <div class="hero-bg bg-secondary-bg">
    <section class="hero container mx-auto px-4 py-12 lg:py-25 xl:py-30">
      <div class="grid grid-cols-12">
        <div
          class="hero__info flex flex-col justify-center items-center text-white gap-10 mb-10 lg:mb-0 lg:items-start col-span-12 lg:col-span-6">
          <div class="hero__title">
            <h1 class="text-4xl mb-3.5 xl:text-[66px]/[80px]">Buy, trade, and hold 350+ cryptocurrencies</h1>
            <p class="text-base text-sm lg:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat
              nulla
              suspendisse tortor
              aenean dis placerat.</p>
          </div>
          <div class="hero__buttons flex flex-col gap-4 lg:flex-row lg:justify-start">
            <button class="blue-btn w-[360px] pw- py-6 px-10 lg:max-w-[210px] lg:py-4 lg:px-6">Download app</button>
            <a href="./pricing.php"><button class="grey-btn w-[360px] py-6 px-10 lg:max-w-[210px] lg:py-6 lg:px-10">View
                Pricing</button></a>
          </div>
        </div>
        <div
          class="hero__image flex flex-col justify-center items-center lg:items-end lg:w-[120%} col-span-12 lg:col-span-6">
          <img src="./src/assets/laptop.png" alt="laptop" class="w-full h-auto lg:translate-x-[30%]">
        </div>
        <div class="hero__features mt-20 col-span-12 lg:mt-[140px]">
          <p class="text-white text-center mb-6 lg:mb-[35px]">Finance flow has been featured on</p>
          <div class="hero__companies flex flex-row justify-around items-center flex-wrap gap-6">
            <img src="./src/assets/company-1.png" alt="company 1" class="w-[134px] sm:w-[170px]">
            <img src="./src/assets/company-2.png" alt="company 2" class="w-[134px] sm:w-[170px]">
            <img src="./src/assets/company-3.png" alt="company 3" class="w-[134px] sm:w-[170px]">
            <img src="./src/assets/company-4.png" alt="company 4" class="w-[134px] sm:w-[170px]">
            <img src="./src/assets/company-5.png" alt="company 5" class="w-[134px] sm:w-[170px]">
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="build-bg bg-secondary-bg">
    <section class="build container mx-auto px-4 text-primary-white py-12 lg:py-25 xl:py-30">
      <div class="grid grid-cols-12">
        <div class="build__title col-span-12 xl:col-span-6 xl:col-start-4 mb-4 lg:text-center xl:mb-20">
          <h2 class="mb-4 text-[28px]/[36px] xl:[42px]/[55px]">Build your crypto portfolia</h2>
          <p class="xl:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse
            tortor
            aene.</p>
        </div>
        <div class="build__content col-span-12 flex flex-col justify-center items-center gap-10 xl:gap-12">
          <div
            class="build__cards flex flex-col justify-center items-center gap-4 lg:flex-row lg:items-stretch xl:gap-6">
            <div class="build__sideCards flex flex-col justify-center items-center gap-4 xl:gap-8">
              <div
                class="build__smallCard border-none outline-none rounded-[40px] max-w-[395px] flex flex-col justify-center items-start gap-5 bg-primary-darkBlue py-12 px-6 [&>4]:mb-8">
                <img src="./src/assets/build-1.png" alt="build-1">
                <div class="build__smallCardTitle">
                  <h4 class="text-lg">Send & Receive</h4>
                  <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse
                    tortor aene.</p>
                </div>
              </div>
              <div
                class="build__smallCard border-none outline-none rounded-[40px] max-w-[395px] flex flex-col justify-center items-start gap-5 bg-primary-darkBlue py-12 px-6 [&>4]:mb-8">
                <img src="./src/assets/build-2.png" alt="build-2">
                <div class="build__smallCardTitle">
                  <h4 class="text-lg">100% Secure Wallet</h4>
                  <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse
                    tortor aene.</p>
                </div>
              </div>
            </div>
            <div
              class="build__bigCard border-none outline-none rounded-[40px] max-w-[395px] flex flex-col justify-center items-center overflow-hidden bg-primary-blue pt-11 px-9 gap-9 lg:max-w-[680px] lg:items-center">
              <div class="build__bigCardTitle self-start">
                <h4 class="text-xl mb-5 ">iOS & Android App</h4>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In amet, morbi non at sed
                  neque.</p>
              </div>
              <img src="./src/assets/build-iphone.png" alt="build iphone">
            </div>
            <div class="build__sideCards flex flex-col justify-center items-center gap-4 xl:gap-8">
              <div
                class="build__smallCard border-none outline-none rounded-[40px] max-w-[395px] flex flex-col justify-center items-start gap-5 bg-primary-darkBlue py-12 px-6 [&>4]:mb-8">
                <img src="./src/assets/build-3.png" alt="build-3">
                <div class="build__smallCardTitle">
                  <h4 class="text-lg">Trading Charts</h4>
                  <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse
                    tortor aene.</p>
                </div>
              </div>
              <div
                class="build__smallCard border-none outline-none rounded-[40px] max-w-[395px] flex flex-col justify-center items-start gap-5 bg-primary-darkBlue py-12 px-6 [&>4]:mb-8">
                <img src="./src/assets/build-4.png" alt="build-4">
                <div class="build__smallCardTitle">
                  <h4 class="text-lg">Real Time Trading</h4>
                  <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse
                    tortor aene.</p>
                </div>
              </div>
            </div>
          </div>
          <button class="blue-btn build__button max-w-[210px] py-6 px-10">Download app</button>
        </div>
      </div>
    </section>
  </div>
  <div class="rewards-bg bg-secondary-bg">
    <section class="rewards container mx-auto px-4 text-primary-white py-12 lg:py-25 xl:py-30">
      <div class="grid grid-cols-12">
        <div class="rewards__card col-span-12 mb-20">
          <div class="grid grid-cols-12">
            <div class="rewards__image rewards__image--top col-span-8 col-start-3 lg:col-span-5 lg:col-start-1 mb-10">
              <img src="./src/assets/rewards-phones.png" alt="rewards phone" class="w-full">
            </div>
            <div
              class="rewards__content col-span-12 lg:col-span-5 lg:col-start-8   flex flex-col justify-center items-start gap-4">
              <h2 class="text-[28px]/[36px] lg:text-[42px]/[55px]">Earn daily rewards on your idle tokens</h2>
              <p class="lg:text-[18px]/[32px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla
                suspendisse
                tortor aene.</p>
              <div
                class="rewards__features flex flex-col justify-center items-start gap-5 [&>div]:flex [&>div]:flex-row [&>div]:gap-5">
                <div class="rewards__item">
                  <img src="./src/assets/rewards-1.png" alt="rewards-1">
                  <p class="text-sm">Lowest fees in market</p>
                </div>
                <div class="rewards__item">
                  <img src="./src/assets/rewards-2.png" alt="rewards-2">
                  <p class="text-sm">Fast and secure transactions</p>
                </div>
                <div class="rewards__item">
                  <img src="./src/assets/rewards-3.png" alt="rewards-3">
                  <p class="text-sm">256-bit secure encryption</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="rewards__card col-span-12">
          <div class="grid grid-cols-12">
            <div class="rewards__content col-span-12 lg:col-span-5 flex flex-col justify-center items-start gap-4">
              <h2 class="text-[28px]/[36px] lg:text-[42px]/[55px]">Earn daily rewards on your idle tokens</h2>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse
                tortor aene.</p>
              <div
                class="rewards__features flex flex-col justify-center items-start gap-5 [&>div]:flex [&>div]:flex-row [&>div]:gap-5">
                <div class="rewards__item">
                  <img src="./src/assets/rewards-4.png" alt="rewards-4">
                  <p class="text-sm">100% Private data</p>
                </div>
                <div class="rewards__item">
                  <img src="./src/assets/rewards-5.png" alt="rewards-5">
                  <p class="text-sm">99.99% Uptime guarantee</p>
                </div>
                <div class="rewards__item">
                  <img src="./src/assets/rewards-6.png" alt="rewards-6">
                  <p class="text-sm">24/7 Dedicated support</p>
                </div>
              </div>
            </div>
            <div class="rewards__image rewards__image--bottom col-span-12 lg:col-span-7 mt-10 lg:items-end lg:w-[120%]">
              <img src="./src/assets/rewards-laptop.png" alt="rewards phone" class="w-full lg:translate-x-[20%]">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="explore-bg bg-primary-blue">
    <section class="explore container mx-auto px-4 pt-12 lg:pt-0 text-primary-white">
      <div class="grid grid-cols-12">
        <div
          class="explore__content col-span-12 lg:col-span-6 flex flex-col justify-center items-center lg:items-start">
          <div class="explore__title text-center mb-4 lg:text-left lg:mb-7">
            <h2 class="mb-4 text-[28px]/[36px] lg:text-[42px]/[55px]">Explore endless possibilities with FinanceFlow
            </h2>
            <p class="lg:text-[18px]/[32px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla
              suspendisse tortor
              aene.</p>
          </div>
          <button class="white-btn mt-4 w-full py-5 px-7 lg:max-w-[210px] lg:px-10">Download App</button>
        </div>
        <div class="explore__phone col-span-12 lg:col-span-6 flex flex-col justify-center items-center -mt-3 lg:-bt-15">
          <img src="./src/assets/explore-phones.png" alt="rewards-phones">
        </div>
      </div>
    </section>
  </div>
  <div class="review-bg bg-secondary-bg">
    <section class="review text-primary-white py-12 lg:p y-25 xl:py-30">
      <div class="grid grid-cols-12">
        <div class="review__userReviews col-span-12">
          <div class="grid grid-cols-12">
            <div
              class="review__header container mx-auto px-4 col-span-12 flex flex-col justify-center items-start mb-8 gap-5 lg:flex-row lg:justify-between lg:mb-[33px]">
              <h2 class="text-[28px]/[36px] lg:text-[42px]/[55px] uppercase font-bold">What our users say?</h2>
              <button class="blue-btn w-full py-5 px-7 lg:w-auto lg:px-12">Download App</button>
            </div>
            <div class="swiper mySwiper col-span-12">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div
                    class="review__item flex flex-col justify-center items-start gap-6 border-none outline-none rounded-[40px] py-12 px-16 bg-primary-darkBlue max-w-[360px] md:max-w-none lg:w-[580px] my-0 mx-auto">
                    <p class="text-lg">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor
                      fermentum dignissim et pellentesque egestas mauris, faucibus. Tellus nisi amet non at phasellus
                      faucibus senectus in”</p>
                    <div class="review__user flex justify-center items-center gap-5">
                      <img src="./src/assets/user-1.png" alt="user-1">
                      <div class="review__userInfo">
                        <h5 class="uppercase">john carter</h5>
                        <p class="uppercase">Role, Company</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div
                    class="review__item flex flex-col justify-center items-start gap-6 border-none outline-none rounded-[40px] py-12 px-16 bg-primary-darkBlue max-w-[360px] md:max-w-none lg:w-[580px] my-0 mx-auto">
                    <p class="text-lg">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor
                      fermentum dignissim et pellentesque egestas mauris, faucibus. Tellus nisi amet non at phasellus
                      faucibus senectus in”</p>
                    <div class="review__user flex justify-center items-center gap-5">
                      <img src="./src/assets/user-1.png" alt="user-1">
                      <div class="review__userInfo">
                        <h5 class="uppercase">john carter</h5>
                        <p class="uppercase">Role, Company</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div
                    class="review__item flex flex-col justify-center items-start gap-6 border-none outline-none rounded-[40px] py-12 px-16 bg-primary-darkBlue max-w-[360px] md:max-w-none lg:w-[580px] my-0 mx-auto">
                    <p class="text-lg">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor
                      fermentum dignissim et pellentesque egestas mauris, faucibus. Tellus nisi amet non at phasellus
                      faucibus senectus in”</p>
                    <div class="review__user flex justify-center items-center gap-5">
                      <img src="./src/assets/user-1.png" alt="user-1">
                      <div class="review__userInfo">
                        <h5 class="uppercase">john carter</h5>
                        <p class="uppercase">Role, Company</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination col-span-12"></div>
          </div>
        </div>
        <div class="review__info container mx-auto px-4 col-span-12 mt-[120px]">
          <div class="grid grid-cols-12">
            <div class="review__content col-span-12 lg:col-span-5 flex flex-col justify-center items-start">
              <div class="review__infoTitle">
                <h2 class="text-[28px]/[36px] lg:text-[42px]/[55px] uppercase mb-4">Get started today</h2>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse
                  tortor aene.</p>
              </div>
              <div class="review__infoSteps flex flex-col justify-center items-start mt-4 mb-10 gap-7 lg:mb-0">
                <div class="review__step flex justify-center items-center gap-7">
                  <img src="./src/assets/review-1.png" alt="review-`">
                  <p class="">Download app</p>
                </div>
                <div class="review__step flex justify-center items-center gap-7">
                  <img src="./src/assets/review-2.png" alt="review-2">
                  <p class="">Create a free account</p>
                </div>
                <div class="review__step flex justify-center items-center gap-7">
                  <img src="./src/assets/review-3.png" alt="review-3">
                  <p class="">Start trading</p>
                </div>
              </div>
            </div>
            <div
              class="review__videoWrapper col-span-12 lg:col-span-5 lg:col-start-7 flex flex-cl justify-center items-center relative">
              <button
                class="review__videoPlay absolute bg-secondary-grey transition-opacity duration-200 ease-in-out w-[100px] h-[100px] [&.active]:invisible [&.active]:-opacity-0"><i
                  class="icon-play text-2xl p-7 text-primary-white"></i></button>
              <video
                class="review__video rounded-[40px] h-100 max-w-100 block object-cover lg:max-w-[465px] xl:max-w-[645px]"
                muted>
                <source src="./src/assets/review-video.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="article-bg bg-secondary-bg ">
    <section class="article container mx-auto px-4 text-primary-white py-12 lg:py-25 xl:py-30">
      <div class="grid grid-cols-12">
        <div class="article__title col-span-10 lg:col-span-12 mb-6 flex lg:flex-row lg:justify-between mb-12">
          <h2 class="text-[28px]/[36px] lg:text-[42px]/[55px] mb-4">Browse our latest news</h2>
          <p class="lg:text-lg lg:max-w-[340px] xl:max-w-[460px]">Lorem ipsum dolor sit amet, consectetur adipiscing
            elit. Sit non neque orci amet, amet.</p>
        </div>
        <div class="article__content col-span-12 flex flex-col justify-center items-center gap-4 lg:gap-10">
          <div
            class="article__cards flex flex-col justify-center items-center gap-4 lg:flex-row lg:justify-between lg:w-full gap-0">
            <div class="article__item flex flex-col justify-center items-start border-none outline-none rounded-[40px] bg-primary-darkBlue max-w-[395px] lg:max-w-[300px] xl:max-w-[380px]">
              <div class="article__image relative w-full">
                <img src="./src/assets/article-1.png" alt="article-1"
                  class="rounded-tl-[40px] rounded-tr-[40px] w-full">
                <button class="blue-btn absolute bottom-0 left-6 translate-y-5 py-2 px-4 max-w-[110px]">PRODUCTS</button>
              </div>
              <div class="article__info flex flex-col justify-center items-start gap-10 px-6 pt-[42px] pb-[36px]">
                <div class="article__infoTitle pb-8 border-b border-secondary-grey pr-2">
                  <h4 class="text-[22px]/[30px] mb-4">The Basics about Cryptocurrency</h4>
                  <p class="lg:text-lg">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque
                    viverra donec diammeo.</p>
                </div>
                <div class="article__author flex justify-center items-center gap-4">
                  <img src="./src/assets/author-1.png" alt="author-1">
                  <div class="article__authorInfo">
                    <h5 class="uppercase">Alex Turner</h5>
                    <span class="uppercase">AUGUST 2, 2021</span>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="article__item flex flex-col justify-center items-start border-none outline-none rounded-[40px] bg-primary-darkBlue max-w-[395px] lg:max-w-[300px] xl:max-w-[380px]">
              <div class="article__image relative w-full">
                <img src="./src/assets/article-1.png" alt="article-1"
                  class="rounded-tl-[40px] rounded-tr-[40px] w-full">
                <button
                  class="blue-btn absolute bottom-0 left-6 translate-y-5 py-2 px-4 max-w-[110px]">PRODUCTS</button>
              </div>
              <div class="article__info flex flex-col justify-center items-start gap-10 px-6 pt-[42px] pb-[36px]">
                <div class="article__infoTitle pb-8 border-b border-secondary-grey pr-2">
                  <h4 class="text-[22px]/[30px] mb-4">The Basics about Cryptocurrency</h4>
                  <p class="lg:text-lg">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque
                    viverra donec diammeo.</p>
                </div>
                <div class="article__author flex justify-center items-center gap-4">
                  <img src="./src/assets/author-1.png" alt="author-1">
                  <div class="article__authorInfo">
                    <h5 class="uppercase">Alex Turner</h5>
                    <span class="uppercase">AUGUST 2, 2021</span>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="article__item flex flex-col justify-center items-start border-none outline-none rounded-[40px] bg-primary-darkBlue max-w-[395px] lg:max-w-[300px] xl:max-w-[380px]">
              <div class="article__image relative w-full">
                <img src="./src/assets/article-1.png" alt="article-1"
                  class="rounded-tl-[40px] rounded-tr-[40px] w-full">
                <button
                  class="blue-btn absolute bottom-0 left-6 translate-y-5 py-2 px-4 max-w-[110px]">PRODUCTS</button>
              </div>
              <div class="article__info flex flex-col justify-center items-start gap-10 px-6 pt-[42px] pb-[36px]">
                <div class="article__infoTitle pb-8 border-b border-secondary-grey pr-2">
                  <h4 class="text-[22px]/[30px] mb-4">The Basics about Cryptocurrency</h4>
                  <p class="lg:text-lg">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque
                    viverra donec diammeo.</p>
                </div>
                <div class="article__author flex justify-center items-center gap-4">
                  <img src="./src/assets/author-1.png" alt="author-1">
                  <div class="article__authorInfo">
                    <h5 class="uppercase">Alex Turner</h5>
                    <span class="uppercase">AUGUST 2, 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="grey-btn article__viewBtn w-full py-5 px-12 sm:max-w-[395px]">View All Articles</button>
        </div>
      </div>
    </section>
  </div>
  <div class="app-bg bg-secondary-bg">
    <section class="app container mx-auto px-4 text-primary-white py-12 lg:py-25 xl:py-30">
      <div class="grid grid-cols-12">
        <div class="app__title col-span-12 mb-6 lg:flex lg:flex-row lg:justify-between lg:mb-12">
          <h2 class="text-[28px]/[36px] lg:text-[42px]/[55px] mb-4">Download our app</h2>
          <p class="lg:text-lg lg:max-w-[340px] xl:max-w-[460px]">Lorem ipsum dolor sit amet, consectetur adipiscing
            elit. Sit non neque orci amet, amet.</p>
        </div>
        <div
          class="app__cards col-span-12 flex flex-col justify-center items-center gap-4 lg:flex-row lg:items-start lg:justify-between lg-gap-0">
          <div
            class="app__item flex flex-col justify-center items-start bg-primary-darkBlue border-none outline-none rounded-[40px] px-8 pt-8 max-w-[395px] overflow-hidden max-h-[580px] lg:max-w-[450px] lg:max-h-[665px] xl:max-w-[520px] xl:max-h-[775px] 2xl:max-w-[565px]">
            <div class="app__info mb-6">
              <h2 class="text-[28px]/[36px] xl:text-[42px]/[55px] mb-4">Download for IOS</h2>
              <p class="lg:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nulla integer in
                pellentesque tortor semper elementum. Felis.</p>
            </div>
            <button class="blue-btn flex justify-center items-center gap-2 max-w-[195px] py-5 px-7 mb-10"><i
                class="icon-apple text-xl"></i>
              <p class="uppercase">app store</p>
            </button>
            <div class="app__image flex justify-center items-start w-full overflow-hidden">
              <img src="./src/assets/app-apple.png" alt="app-iphone" class="">
            </div>
          </div>
          <div
            class="app__item flex flex-col justify-center items-start bg-primary-darkBlue border-none outline-none rounded-[40px] px-8 pt-8 max-w-[395px] overflow-hidden max-h-[580px] lg:max-w-[450px] lg:max-h-[665px] xl:max-w-[520px] xl:max-h-[775px] 2xl:max-w-[565px]">
            <div class="app__info mb-6">
              <h2 class="text-[28px]/[36px] xl:text-[42px]/[55px] mb-4">Download for ANDROID</h2>
              <p class="lg:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nulla integer in
                pellentesque tortor semper elementum. Felis.</p>
            </div>
            <button class="blue-btn flex justify-center items-center gap-2 max-w-[195px] py-5 px-7 mb-10"><i
                class="icon-apple text-xl"></i>
              <p class="uppercase">play store</p>
            </button>
            <div class="app__image flex justify-center items-start w-full overflow-hidden">
              <img src="./src/assets/app-android.png" alt="app-android">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include 'components/footer.php' ?>
  <?php viteEntry('src/js/main.js'); ?>
  <?php viteEntry('src/js/review.js'); ?>
</body>
</html>