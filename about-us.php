<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'components/head.php' ?>
</head>
<body>
    <?php include 'components/header.php' ?>
    <div class="aboutHero-bg">
        <section class="aboutHero container">
            <div class="row">
                <div class="aboutHero__title col-12 col-lg-8 offset-lg-2">
                    <h1>About Finance Flow</h1>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla
                        suspendisse tortor aenean dis placerat.</p>
                </div>
                <div class="aboutHero__content col-12">
                    <div class="aboutHero__info">
                        <h2>What drives Finance Flow?</h2>
                        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla
                            suspendisse tortor aene.</p>
                    </div>
                    <div class="aboutHero__cards">
                        <div class="aboutHero__item">
                            <img src="./src/assets/feature-1.png" alt="feature-1">
                            <div class="aboutHero__cardDetails">
                                <h5 class="text-md text-bold text-caps">Open Source</h5>
                                <p class="text-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et nibh urna
                                    in proin dui purus bibendum cras. Morbi cursus nunc.</p>
                            </div>
                        </div>
                        <div class="aboutHero__item">
                            <img src="./src/assets/feature-2.png" alt="feature-2">
                            <div class="aboutHero__cardDetails">
                                <h5 class="text-md text-bold text-caps">worldwide</h5>
                                <p class="text-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et nibh urna
                                    in proin dui purus bibendum cras. Morbi cursus nunc.</p>
                            </div>
                        </div>
                        <div class="aboutHero__item">
                            <img src="./src/assets/feature-1.png" alt="feature-1">
                            <div class="aboutHero__cardDetails">
                                <h5 class="text-md text-bold text-caps">Transparent</h5>
                                <p class="text-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et nibh urna
                                    in proin dui purus bibendum cras. Morbi cursus nunc.</p>
                            </div>
                        </div>
                        <div class="aboutHero__item">
                            <img src="./src/assets/feature-4.png" alt="feature-4">
                            <div class="aboutHero__cardDetails">
                                <h5 class="text-md text-bold text-caps">Community Driven</h5>
                                <p class="text-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et nibh urna
                                    in proin dui purus bibendum cras. Morbi cursus nunc.</p>
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