<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <?php include 'components/head.php' ?>
</head>
<body>
  <?php include 'components/header.php' ?>
  <div class="blog-bg bg-secondary-bg">
    <section class="blog container mx-auto px-4  text-primary-white py-12 lg:py-25 xl:py-30">
      <div class="grid grid-cols-12">
        <div class="blog__title col-span-12 mb-6 lg:flex lg:justify-between lg:items-center lg:mb-12">
          <h2 class="text-[28px]/[36px] xl:[42px]/[55px] mb-4 lg:mb-0">Blog</h2>
          <p class="teaxt-base lg:text-lg lg:max-w-[340px] lg:max-w-[420px]">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Feugiat nulla suspendisse tortor
            aenean dis placerat.</p>
        </div>
        <div
          class="blog__item col-span-12 sm:col-start-3 md:col-start-4 lg:col-start-1 flex flex-col justify-center items-start border-none outline-none rounded-[40px] bg-primary-darkBlue max-w-[395px] lg:flex-row lg:max-w-full">
          <div
            class="blog__image relative w-full lg:order-2 lg:rounded-tl-none lg:rounded-tr-[40px] lg:rounded-br-[40px] lg:rounded-bl-none lg:h-full">
            <img src="./src/assets/article-1.png" alt="article-1"
              class="rounded-tl-[40px] rounded-tr-[40px] w-full lg:h-full lg:rounded-tl-none lg:rounded-tr-[40px] lg:rounded-br-[40px] lg:rounded-bl-none lg:h-full">
          </div>
          <div
            class="blog__info flex flex-col justify-center items-start gap-10 px-6 pt-[42px] pb-[36px] static py-[58px] pr-[78px] pl-[58px]">
            <button class="blue-btn bottom-0 left-6 translate-y-5 py-2 px-4 max-w-[110px]">PRODUCTS</button>
            <div class="blog__infoTitle pb-8 border-b border-secondary-grey pr-2 lg:border-b-0 p-0 mb-0">
              <h4 class="text-[22px]/[30px] mb-4 lg:text-[28px]/[40px]">The Basics about Cryptocurrency</h4>
              <p class="lg:text-lg">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque
                viverra donec diammeo.</p>
            </div>
            <div class="blog__author flex justify-center items-center gap-4 lg:hidden">
              <img src="./src/assets/author-1.png" alt="author-1">
              <div class="blog__authorInfo">
                <h5 class="uppercase">Alex Turner</h5>
                <span class="uppercase">AUGUST 2, 2021</span>
              </div>
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
        <div class="post__title col-span-12 mb-6 text-center flex lg:flex-row justify-between">
          <h2 class="text-[28px]/[36px] lg:text-[42px]/[55px] mb-4">Latest Post</h2>
          <div
            class="post__selectButtons flex flex-col justify-between items-center gap-4 [&>button]:w-full [&>button]:max-w-[355px] [&>button]:py-3 [&>button]:px-6 [&>button]:transition-all [&>button]:duration-200 lg:flex-row [&>button.selected]:!bg-primary-blue">
            <button class="post__postType grey-btn" data-filter="all">All</button>
            <button class="post__postType grey-btn" data-filter="apps">Apps</button>
            <button class="post__postType grey-btn" data-filter="products">Products</button>
            <button class="post__postType grey-btn" data-filter="tutorials">Tutorial</button>
          </div>
        </div>
        <div
          class="post__content col-span-12 flex flex-col justify-center items-center gap-4 lg:flex-row lg:flex-wrap lg:justify-between lg:gap-6 xl:gap-10">
          <a href="./blogPost.php">
            <div
              class="post__item flex flex-col justify-center items-start border-none outline-none rounded-[40px] bg-primary-darkBlue max-w-[395px] lg:max-w-[300px] xl:max-w-[380px]"
              data-category="products">
              <div class="post__image relative w-full">
                <img src="./src/assets/article-1.png" alt="article-1"
                  class="rounded-tl-[40px] rounded-tr-[40px] w-full">
                <button
                  class="blue-btn absolute bottom-0 left-6 translate-y-5 py-2 px-4 max-w-[110px]">PRODUCTS</button>
              </div>
              <div class="post__info flex flex-col justify-center items-start gap-10 px-6 pt-[42px] pb-[36px]">
                <div class="post__infoTitle pb-8 border-b border-secondary-grey pr-2">
                  <h4 class="text-[22px]/[30px] mb-4">The Basics about Cryptocurrency</h4>
                  <p class="lg:text-lg">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque
                    viverra donec diammeo.</p>
                </div>
                <div class="post__author flex justify-center items-center gap-4">
                  <img src="./src/assets/author-1.png" alt="author-1">
                  <div class="post__authorInfo">
                    <h5 class="uppercase">Alex Turner</h5>
                    <span class="uppercase">AUGUST 2, 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a href="./blogPost.php">
            <div
              class="post__item flex flex-col justify-center items-start border-none outline-none rounded-[40px] bg-primary-darkBlue max-w-[395px] lg:max-w-[300px] xl:max-w-[380px]"
              data-category="products">
              <div class="post__image relative w-full">
                <img src="./src/assets/article-1.png" alt="article-1"
                  class="rounded-tl-[40px] rounded-tr-[40px] w-full">
                <button
                  class="blue-btn absolute bottom-0 left-6 translate-y-5 py-2 px-4 max-w-[110px]">PRODUCTS</button>
              </div>
              <div class="post__info flex flex-col justify-center items-start gap-10 px-6 pt-[42px] pb-[36px]">
                <div class="post__infoTitle pb-8 border-b border-secondary-grey pr-2">
                  <h4 class="text-[22px]/[30px] mb-4">The Basics about Cryptocurrency</h4>
                  <p class="lg:text-lg">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque
                    viverra donec diammeo.</p>
                </div>
                <div class="post__author flex justify-center items-center gap-4">
                  <img src="./src/assets/author-1.png" alt="author-1">
                  <div class="post__authorInfo">
                    <h5 class="uppercase">Alex Turner</h5>
                    <span class="uppercase">AUGUST 2, 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a href="./blogPost.php">
            <div
              class="post__item flex flex-col justify-center items-start border-none outline-none rounded-[40px] bg-primary-darkBlue max-w-[395px] lg:max-w-[300px] xl:max-w-[380px]"
              data-category="apps">
              <div class="post__image relative w-full">
                <img src="./src/assets/article-1.png" alt="article-1"
                  class="rounded-tl-[40px] rounded-tr-[40px] w-full">
                <button class="blue-btn absolute bottom-0 left-6 translate-y-5 py-2 px-4 max-w-[110px]">APPS</button>
              </div>
              <div class="post__info flex flex-col justify-center items-start gap-10 px-6 pt-[42px] pb-[36px]">
                <div class="post__infoTitle pb-8 border-b border-secondary-grey pr-2">
                  <h4 class="text-[22px]/[30px] mb-4">The Basics about Cryptocurrency</h4>
                  <p class="lg:text-lg">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque
                    viverra donec diammeo.</p>
                </div>
                <div class="post__author flex justify-center items-center gap-4">
                  <img src="./src/assets/author-1.png" alt="author-1">
                  <div class="post__authorInfo">
                    <h5 class="uppercase">Alex Turner</h5>
                    <span class="uppercase">AUGUST 2, 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a href="./blogPost.php">
            <div
              class="post__item flex flex-col justify-center items-start border-none outline-none rounded-[40px] bg-primary-darkBlue max-w-[395px] lg:max-w-[300px] xl:max-w-[380px]"
              data-category="apps">
              <div class="post__image relative w-full">
                <img src="./src/assets/article-1.png" alt="article-1"
                  class="rounded-tl-[40px] rounded-tr-[40px] w-full">
                <button class="blue-btn absolute bottom-0 left-6 translate-y-5 py-2 px-4 max-w-[110px]">APPS</button>
              </div>
              <div class="post__info flex flex-col justify-center items-start gap-10 px-6 pt-[42px] pb-[36px]">
                <div class="post__infoTitle pb-8 border-b border-secondary-grey pr-2">
                  <h4 class="text-[22px]/[30px] mb-4">The Basics about Cryptocurrency</h4>
                  <p class="lg:text-lg">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque
                    viverra donec diammeo.</p>
                </div>
                <div class="post__author flex justify-center items-center gap-4">
                  <img src="./src/assets/author-1.png" alt="author-1">
                  <div class="post__authorInfo">
                    <h5 class="uppercase">Alex Turner</h5>
                    <span class="uppercase">AUGUST 2, 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a href="./blogPost.php">
            <div
              class="post__item flex flex-col justify-center items-start border-none outline-none rounded-[40px] bg-primary-darkBlue max-w-[395px] lg:max-w-[300px] xl:max-w-[380px]"
              data-category="tutorial">
              <div class="post__image relative w-full">
                <img src="./src/assets/article-1.png" alt="article-1"
                  class="rounded-tl-[40px] rounded-tr-[40px] w-full">
                <button
                  class="blue-btn absolute bottom-0 left-6 translate-y-5 py-2 px-4 max-w-[110px]">TUTORIAL</button>
              </div>
              <div class="post__info flex flex-col justify-center items-start gap-10 px-6 pt-[42px] pb-[36px]">
                <div class="post__infoTitle pb-8 border-b border-secondary-grey pr-2">
                  <h4 class="text-[22px]/[30px] mb-4">The Basics about Cryptocurrency</h4>
                  <p class="lg:text-lg">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque
                    viverra donec diammeo.</p>
                </div>
                <div class="post__author flex justify-center items-center gap-4">
                  <img src="./src/assets/author-1.png" alt="author-1">
                  <div class="post__authorInfo">
                    <h5 class="uppercase">Alex Turner</h5>
                    <span class="uppercase">AUGUST 2, 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a href="./blogPost.php">
            <div
              class="post__item flex flex-col justify-center items-start border-none outline-none rounded-[40px] bg-primary-darkBlue max-w-[395px] lg:max-w-[300px] xl:max-w-[380px]"
              data-category="tutorial">
              <div class="post__image relative w-full">
                <img src="./src/assets/article-1.png" alt="article-1"
                  class="rounded-tl-[40px] rounded-tr-[40px] w-full">
                <button
                  class="blue-btn absolute bottom-0 left-6 translate-y-5 py-2 px-4 max-w-[110px]">TUTORIAL</button>
              </div>
              <div class="post__info flex flex-col justify-center items-start gap-10 px-6 pt-[42px] pb-[36px]">
                <div class="post__infoTitle pb-8 border-b border-secondary-grey pr-2">
                  <h4 class="text-[22px]/[30px] mb-4">The Basics about Cryptocurrency</h4>
                  <p class="lg:text-lg">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque
                    viverra donec diammeo.</p>
                </div>
                <div class="post__author flex justify-center items-center gap-4">
                  <img src="./src/assets/author-1.png" alt="author-1">
                  <div class="post__authorInfo">
                    <h5 class="uppercase">Alex Turner</h5>
                    <span class="uppercase">AUGUST 2, 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="post__pagination col-span-12 flex justify-center items-center gap-4 mt-6">
          <button class="post__prev"><i class="icon-leftArrow"></i></button>
          <button class="post__next"><i class="icon-rightArrow"></i></button>
        </div>
      </div>
    </section>
  </div>
  <?php include 'components/footer.php' ?>
  <?php viteEntry('src/js/blog.js'); ?>
</body>
</html>