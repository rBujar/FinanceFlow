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
        <section class="mission container">
            <div class="row">
               <div class="mission__cards col-12 col-lg-6">
                <div class="mission__item">
                    <h2>Our mission</h2>
                    <p class="text-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Parturient lorem purus justo, ultricies. Sollicitudin odio elementum urna placerat lacus, vulputate. Non malesuada viverra et ultrices cras. Tincidunt tempor, blandit augue ac feugiat. Praesent arcu tempus ullamcorper quisque in. Magna fermentum, lacus, fermentum arcu.</p>
                    <p class="text-md">Vulputate pellentesque proin facilisis dignissim gravida sed faucibus nunc. Nunc eget pharetra, in vitae porta lacus. Elit in nisl, in quis nulla tellus suscipit id. Semper velit odio cras pretium tristique habitant. Elit eu penatibus congue orci turpis. Enim diam id.</p>
                </div>
                <div class="mission__item">
                    <h2>Our story</h2>
                    <p class="text-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Parturient lorem purus justo, ultricies. Sollicitudin odio elementum urna placerat lacus, vulputate. Non malesuada viverra et ultrices cras. Tincidunt tempor, blandit augue ac feugiat. Praesent arcu tempus ullamcorper quisque in. Magna fermentum, lacus, fermentum arcu.</p>
                    <p class="text-md">Vulputate pellentesque proin facilisis dignissim gravida sed faucibus nunc. Nunc eget pharetra, in vitae porta lacus. Elit in nisl, in quis nulla tellus suscipit id. Semper velit odio cras pretium tristique habitant. Elit eu penatibus congue orci turpis. Enim diam id.</p>
                </div>
               </div>
               <div class="mission__image col-12 col-lg-6">
                <img src="./src/assets/planet.png" alt="planet">
               </div>
            </div>
        </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
</body>
</html>