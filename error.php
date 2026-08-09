<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
  <head>
   <?php include 'components/head.php' ?>
  </head>
  <body>
    <?php include 'components/header.php' ?>
    <div class="error-bg bg-secondary-bg">
      <section class="error container mx-auto px-4 text-primary-white py-[100px] lg:py-[120px] xl:py-[150px]">
        <div class="grid grid-cols-12">
          <div class="error__title col-span-8 col-start-3 lg:col-span-6 lg:col-start-4 flex flex-col justify-center items-center ">
            <h1 class="text-[120px]/[120px] font-bold text-primary-blue mb-8 lg:mb-4">404</h1>
            <div class="error__info text-center mb-8 lg:mb-10">
              <h2 class="text-[28px]/[36px] xl:[42px]/[55px] mb-5 ">Page Not Found</h2>
              <p class="text-base lg:text-lg">The page you're looking for can't be found. Double-check the URL and try again. Or click the button below.</p>
            </div>
          </div>
          <div class="error__buttons col-span-12 flex flex-col justify-center items-center gap-4 lg:flex-row lg:gap-6">
            <a href="./pricing.php"><button class="blue-btn text-caps w-full py-5 px-7 max-w-[200px] lg:max-w-[190px]">View Pricing</button></a>
            <a href="./index.php"><button class="grey-btn text-caps w-full py-5 px-7 max-w-[200px] lg:max-w-[150px]">Go Home</button></a>
          </div>
        </div>
      </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
  </body>
</html>
