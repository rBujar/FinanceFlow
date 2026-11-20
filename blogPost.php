<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'components/head.php' ?>
</head>
<body>
    <?php include 'components/header.php' ?>
    <div class="blog-bg bg-secondary-bg">
        <section class="blogPost container mx-auto px-4 text-primary-white py-12 lg:py-25 xl:py-30">
            <div class="grid grid-cols-12">
                <div class="blogPost__info col-span-12 flex flex-col justify-between items-start mb-10 lg:gap-10 lg:mb-16 lg:[&>div]:pl-12">
                    <div class="blogPost__author flex justify-between items-center gap-8 mb-8 [&>img]:rounded-full" data-aos="fade" data-aos-delay="100">
                        <img src="" alt="">
                        <div class="blogPost__authorInfo">
                            <h5 class="text-[28px]/[36px] lg:text-[42px]/[55px]"></h5>
                            <p class="text-base lg:text-lg"></p>
                        </div>
                    </div>
                    <div class="blogPost__title mb-11" data-aos="fade" data-aos-delay="150">
                        <h1 class="text-[28px]/[36px] lg:text-[66px]/[80px] mb-4"></h1>
                        <p class="text-base lg:text-lg"></p>
                    </div>
                    <img src="" alt="" class="w-full" data-aos="fade" data-aos-delay="200">
                </div>
                <div class="blogPost__content col-span-12 lg:col-span-10 lg:col-start-2">
                    <div class="grid grid-cols-12">
                        <div class="blogPost__item col-span-12 lg:col-span-10 lg:col-start-2 mb-10" data-aos="fade" data-aos-delay="100">
                            <h2 class="text-[28px]/[36px] lg:text-[42px]/[55px] mb-4"></h2>
                            <p class="text-base lg:text-lg mb-4"></p>
                            <p class="text-base lg:text-lg"></p>
                        </div>
                        <div class="blogPost__item col-span-12 lg:col-span-10 lg:col-start-2 mb-10" data-aos="fade" data-aos-delay="100">
                            <h2 class="text-[28px]/[36px] lg:text-[42px]/[55px] mb-4"></h2>
                            <p class="text-base lg:text-lg mb-4"></p>
                            <p class="text-base lg:text-lg"></p>
                        </div>
                        <img src="" alt="" class=" w-full col-span-12 lg:col-span-10 lg:col-start-2 mb-10 lg:mb-16" data-aos="fade" data-aos-delay="100">
                        <div class="blogPost__item col-span-12 lg:col-span-10 lg:col-start-2 mb-10" data-aos="fade" data-aos-delay="100">
                            <h2 class="text-[28px]/[36px] lg:text-[42px]/[55px] mb-4"></h2>
                            <p class="text-base lg:text-lg mb-4"></p>
                            <p class="text-base lg:text-lg"></p>
                        </div>
                        <div class="blogPost__card col-span-12 lg:col-span-10 lg:col-start-2 mb-10 bg-primary-darkBlue rounded-[40px] p-8 lg:py-20 lg:px-17" data-aos="fade" data-aos-delay="100">
                            <p class="text-base lg:text-lg"></p>
                        </div>
                        <div class="blogPost__item col-span-12 lg:col-span-10 lg:col-start-2 mb-0" data-aos="fade" data-aos-delay="100">
                            <h2 class="text-[28px]/[36px] lg:text-[42px]/[55px] mb-4"></h2>
                            <p class="text-base lg:text-lg mb-4"></p>
                            <p class="text-base lg:text-lg mb-4"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
     <?php include 'components/blogSub.php' ?>
    <div class="blog-bg bg-secondary-bg">
    <section class="post container mx-auto px-4 text-primary-white py-12 lg:py-25 xl:py-30">
      <div class="grid grid-cols-12">
        <div class="post__title col-span-12 mb-6 text-center flex flex-col lg:flex-row justify-between" data-aos="fade" data-aos-delay="100">
          <h2 class="text-[28px]/[36px] lg:text-[42px]/[55px] mb-4"></h2>
          <div
            class="post__selectButtons flex flex-col justify-between items-center gap-4 [&>button]:w-full [&>button]:max-w-[355px] [&>button]:py-3 [&>button]:px-6 [&>button]:transition-all [&>button]:duration-200 lg:flex-row [&>button.selected]:!bg-primary-blue">
            <button class="post__postType grey-btn" data-filter="all"></button>
          </div>
        </div>
        <div class="post__content col-span-12 flex flex-col justify-center items-center [&>div]:mb-4 [&>div:last-child]:mb-0 lg:[&>div]:mb-0 lg:flex-row lg:flex-wrap lg:justify-between lg:gap-6 xl:gap-10" data-aos="fade" data-aos-delay="150">
          <div class="post__item flex flex-col justify-center items-start border-none outline-none rounded-[40px] bg-primary-darkBlue max-w-[395px] lg:max-w-[300px] xl:max-w-[380px]"
            data-category="products">
            <div class="post__image relative w-full">
              <img src="" alt="" class="rounded-tl-[40px] rounded-tr-[40px] w-full">
              <button class="blue-btn absolute bottom-0 left-6 translate-y-5 py-2 px-4 max-w-[110px]"></button>
            </div><a href="./blogPost.php">
              <div class="post__info flex flex-col justify-center items-start gap-10 px-6 pt-[42px] pb-[36px]">
                <div class="post__infoTitle pb-8 border-b border-secondary-grey pr-2">
                  <h4 class="text-[22px]/[30px] mb-4"></h4>
                  <p class="lg:text-lg"></p>
                </div>
                <div class="post__author flex justify-center items-center gap-4">
                  <img src="" alt="">
                  <div class="post__authorInfo">
                    <h5 class="uppercase"></h5>
                    <span class="uppercase"></span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="post__pagination col-span-12 flex justify-center items-center gap-4 mt-6">
          <button class="post__prev"><i class="icon-leftArrow"></i></button>
          <button class="post__next"><i class="icon-rightArrow"></i></button>
        </div>
      </div>
    </section>
  </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/displays/displayBlogPost.js'); ?>
    <?php viteEntry('src/js/aos.js'); ?>
    <?php viteEntry('src/js/blog.js'); ?>
</body>
</html>