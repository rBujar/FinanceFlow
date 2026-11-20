<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'components/head.php' ?>
</head>
<body>
    <?php include 'components/header.php' ?>
    <div class="pricing-bg bg-secondary-bg">
        <section class="pricing container mx-auto px-4 text-primary-white py-12 lg:py-25 xl:py-30">
            <div class="grid grid-cols-12">
                <div class="pricing__title col-span-12 lg:col-span-6 lg:col-start-4 mb-10 lg:text-center lg:mb-20" data-aos="fade" data-aos-delay="100">
                    <h1 class="text-[38px]/[46px] text-[66px]/[80px] mb-4"></h1>
                    <p class="text-base text-lg"></p>
                </div>
                <div class="pricing__content col-span-12">
                    <div class="grid grid-cols-12">
                        <div class="pricing__info col-span-12 flex flex-col justify-center items-start mb-12 gap-10 [&>div]:flex [&>div]:justify-between [&>div]:items-center [&>div]:gap-5 sm:flex-row sm:justify-between sm:gap-0 sm:[&>div>img]:w-[40px] sm:[&>div>img]:h-[40px] sm:[&>div]:gap-2 lg:mb-25 lg:[&>div>img]:w-[55px] lg:[&>div>img]:h-[55px] lg:[&>div]:gap-4 xl:[&>div>img]:w-[70px] xl:[&>div>img]:h-[70px]" data-aos="fade" data-aos-delay="150">
                            <div class="pricing__trait">
                                <img class="max-w-[60px] max-h-[60px]" src="" alt="">
                                <span class="text-sm"></span>
                            </div>
                            <div class="pricing__trait">
                                <img class="max-w-[60px] max-h-[60px]" src="" alt="">
                                <span class="text-sm"></span>
                            </div>
                            <div class="pricing__trait">
                                <img class="max-w-[60px] max-h-[60px]" src="" alt="">
                                <span class="text-sm"></span>
                            </div>
                            <div class="pricing__trait">
                                <img class="max-w-[60px] max-h-[60px]" src="" alt="">
                                <span class="text-sm"></span>
                            </div>
                        </div>
                        <div class="pricing__cards col-span-12 flex flex-col justify-center items-center gap-4 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-start [&>div]:border-none [&>div]:outline-none [&>div]:rounded-[40px] [&>div]:bg-primary-darkBlue [&>div]:pt-[48px] [&>div]:px-[30px] [&>div]:pb-[42px] [&>div]:gap-10 [&>div]:max-w-[395px] [&>div>button]:w-full [&>div>button]:py-5 [&>div>button]:px-9 [&>div>button]:mt-4 xl:flex-row xl:gap-0 xl:justify-between [&>div]:max-h-[550px]" data-aos="fade" data-aos-delay="200">
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/aos.js'); ?>
    <?php viteEntry('src/js/displays/displayPricing.js'); ?>
</body>
</html>