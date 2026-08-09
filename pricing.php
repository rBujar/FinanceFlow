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
                <div class="pricing__title col-span-12 lg:col-span-6 lg:col-start-4 mb-10 lg:text-center lg:mb-[100px]">
                    <h1 class="text-[38px]/[46px] text-[66px]/[80px] mb-4">Pricing</h1>
                    <p class="text-base text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla
                        suspendisse tortor aenean dis placerat. Scelerisque</p>
                </div>
                <div class="pricing__content col-span-12">
                    <div class="grid grid-cols-12">
                        <div
                            class="pricing__info col-span-12 flex flex-col justify-center items-start mb-12 gap-10 [&>div]:flex [&>div]:justify-between [&>div]:items-center [&>div]:gap-5 sm:flex-row sm:justify-between sm:gap-0 sm:[&>div>img]:w-[40px] sm:[&>div>img]:h-[40px] sm:[&>div]:gap-2 lg:mb-[60px] lg:[&>div>img]:w-[55px] lg:[&>div>img]:h-[55px] lg:[&>div]:gap-4 lg:[&>div>img]:w-[70px] xl:[&>div>img]:h-[70px]">
                            <div class="pricing__trait">
                                <img src="./src/assets/feature-1.png" alt="feature-1">
                                <span class="text-sm">Send & receive</span>
                            </div>
                            <div class="pricing__trait">
                                <img src="./src/assets/feature-2.png" alt="feature-2">
                                <span class="text-sm">Trading Charts</span>
                            </div>
                            <div class="pricing__trait">
                                <img src="./src/assets/feature-3.png" alt="feature-3">
                                <span class="text-sm">Wallet</span>
                            </div>
                            <div class="pricing__trait">
                                <img src="./src/assets/feature-4.png" alt="feature-4">
                                <span class="text-sm">Real Time Trading</span>
                            </div>
                        </div>
                        <div
                            class="pricing__cards col-span-12 flex flex-col justify-center items-center gap-4 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-start [&>div]:border-none [&>div]:outline-none [&>div]:rounded-[40px] [&>div]:bg-primary-darkBlue [&>div]:pt-[48px] [&>div]:px-[30px] [&>div]:pb-[42px] [&>div]:gap-10 [&>div]:max-w-[395px] [&>div>button]:w-full [&>div>button]:py-5 [&>div>button]:px-9 [&>div>button]:mt-4 xl:flex-row xl:gap-0 xl:justify-between [&>div]:max-h-[550px]">
                            <div class="pricing__item">
                                <div class="pricing__cardTitle">
                                    <div
                                        class="pricing__planType bg-primary-blue max-w-[75px] py-1 px-4 rounded-full flex justify-center items-center">
                                        <span class="uppercase text-sm">basic</span></div>
                                    <h2 class="my-5 text-[28px]/[36px] xl:[42px]/[55px]">$ 100 USD</h2>
                                    <p class="text-base xl:text-lg">Lorem ipsum dolor sit amet, ametor consectetur
                                        adipiscing elit.
                                        Et nibh.</p>
                                </div>
                                <div class="pricing__featureList">
                                    <h5 class="text-lg text-bold uppercase mb-4">Features</h5>
                                    <ul class="pricing__features pl-5 [&>li]:list-disc [&>li]:marker:bg-primary-blue">
                                        <li class="pricing__list text-lg">Everything included in Basic</li>
                                        <li class="pricing__list text-lg">Trading up to $1MM per month</li>
                                        <li class="pricing__list text-lg">Windows & macOS App</li>
                                        <li class="pricing__list text-lg">Premium Support</li>
                                    </ul>
                                </div>
                                <button class="blue-btn"><a href="../contact.php" class="text-caps">contact
                                        us</a></button>
                            </div>
                            <div class="pricing__item">
                                <div class="pricing__cardTitle">
                                    <div
                                        class="pricing__planType bg-primary-blue max-w-[75px] py-1 px-4 rounded-full flex justify-center items-center">
                                        <span class="uppercase text-sm">pro</span></div>
                                    <h2 class="my-4 text-[28px]/[36px] xl:[42px]/[55px]">$ 100 USD</h2>
                                    <p class="text-base lg:text-lg">Lorem ipsum dolor sit amet, ametor consectetur
                                        adipiscing elit.
                                        Et nibh.</p>
                                </div>
                                <div class="pricing__featureList">
                                    <h5 class="text-lg text-bold uppercase mb-4">Features</h5>
                                    <ul class="pricing__features pl-5 [&>li]:list-disc [&>li]:marker:text-primary-blue">
                                        <li class="pricing__list text-lg">Everything included in Basic</li>
                                        <li class="pricing__list text-lg">Trading up to $1MM per month</li>
                                        <li class="pricing__list text-lg">Windows & macOS App</li>
                                        <li class="pricing__list text-lg">Premium Support</li>
                                    </ul>
                                </div>
                                <button class="blue-btn"><a href="../contact.php" class="text-caps">contact
                                        us</a></button>
                            </div>
                            <div class="pricing__item">
                                <div class="pricing__cardTitle">
                                    <div
                                        class="pricing__planType bg-primary-blue max-w-[75px] py-1 px-4 rounded-full flex justify-center items-center">
                                        <span class="uppercase text-sm text-center">expert</span></div>
                                    <h2 class="my-4 text-[28px]/[36px] xl:[42px]/[55px]">$ 100 USD</h2>
                                    <p class="text-base lg:text-lg">Lorem ipsum dolor sit amet, ametor consectetur
                                        adipiscing elit.
                                        Et nibh.</p>
                                </div>
                                <div class="pricing__featureList">
                                    <h5 class="text-lg text-bold uppercase mb-4">Features</h5>
                                    <ul class="pricing__features pl-5 [&>li]:list-disc [&>li]:marker:bg-primary-blue">
                                        <li class="pricing__list text-lg">Everything included in Basic</li>
                                        <li class="pricing__list text-lg">Trading up to $1MM per month</li>
                                        <li class="pricing__list text-lg">Windows & macOS App</li>
                                        <li class="pricing__list text-lg">Premium Support</li>
                                    </ul>
                                </div>
                                <button class="blue-btn"><a href="../contact.php" class="text-caps">contact
                                        us</a></button>
                            </div>
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