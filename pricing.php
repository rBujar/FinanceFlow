<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'components/head.php' ?>
</head>
<body>
    <?php include 'components/header.php' ?>
    <div class="pricing-bg">
        <section class="pricing container">
            <div class="row">
                <div class="pricing__title col-12 col-lg-6 offset-lg-3">
                    <h1>Pricing</h1>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla
                        suspendisse tortor aenean dis placerat. Scelerisque</p>
                </div>
                <div class="pricing__content col-12">
                    <div class="row">
                        <div class="pricing__info col-12">
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
                        <div class="pricing__cards col-12">
                            <div class="pricing__item">
                                <div class="pricing__cardTitle">
                                    <div class="pricing__planType"><span class="text-caps">basic</span></div>
                                    <h2 class="h2">$ 100 USD</h2>
                                    <p class="text-md">Lorem ipsum dolor sit amet, ametor consectetur adipiscing elit.
                                        Et nibh.</p>
                                </div>
                                <div class="pricing__featureList">
                                    <h5 class="text-md text-caps">Features</h5>
                                    <ul class="pricing__features">
                                        <li class="pricing__list text-md">Everything included in Basic</li>
                                        <li class="pricing__list text-md">Trading up to $1MM per month</li>
                                        <li class="pricing__list text-md">Windows & macOS App</li>
                                        <li class="pricing__list text-md">Premium Support</li>
                                    </ul>
                                </div>
                                <button class="blue-btn text-caps">contact us</button>
                            </div>
                            <div class="pricing__item">
                                <div class="pricing__cardTitle">
                                    <div class="pricing__planType"><span class="text-caps">pro</span></div>
                                    <h2 class="h2">$ 100 USD</h2>
                                    <p class="text-md">Lorem ipsum dolor sit amet, ametor consectetur adipiscing elit.
                                        Et nibh.</p>
                                </div>
                                <div class="pricing__featureList">
                                    <h5 class="text-md text-caps">Features</h5>
                                    <ul class="pricing__features">
                                        <li class="pricing__list text-md">Everything included in Basic</li>
                                        <li class="pricing__list text-md">Trading up to $1MM per month</li>
                                        <li class="pricing__list text-md">Windows & macOS App</li>
                                        <li class="pricing__list text-md">Premium Support</li>
                                    </ul>
                                </div>
                                <button class="blue-btn text-caps">contact us</button>
                            </div>
                            <div class="pricing__item">
                                <div class="pricing__cardTitle">
                                    <div class="pricing__planType"><span class="text-caps">expert</span></div>
                                    <h2 class="h2">$ 100 USD</h2>
                                    <p class="text-md">Lorem ipsum dolor sit amet, ametor consectetur adipiscing elit.
                                        Et nibh.</p>
                                </div>
                                <div class="pricing__featureList">
                                    <h5 class="text-md text-caps">Features</h5>
                                    <ul class="pricing__features">
                                        <li class="pricing__list text-md">Everything included in Basic</li>
                                        <li class="pricing__list text-md">Trading up to $1MM per month</li>
                                        <li class="pricing__list text-md">Windows & macOS App</li>
                                        <li class="pricing__list text-md">Premium Support</li>
                                    </ul>
                                </div>
                                <button class="blue-btn text-caps">contact us</button>
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