<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'components/head.php' ?>
</head>
<body>
    <?php include 'components/header.php' ?>
    <div class="aboutHero-bg">
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
        <section class="timeline container">
            <div class="row">
                <div class="timeline__title col-12 col-lg-5 col-xl-4">
                    <h2>Timeline</h2>
                    <p class="sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
                </div>
                <div class="timeline__content col-12 col-lg-6 offset-lg-1 col-xl-7">
                    <div class="timeline__item">
                        <div class="timeline__circle"></div>
                        <div class="timeline__info">
                            <h2>2014</h2>
                            <h4 class="text-md text-bold text-caps">Announcement</h4>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis vivamus at mattis bibendum congue cras id interdum. Risus leo et.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__circle"></div>
                        <div class="timeline__info">
                            <h2>2016</h2>
                            <h4 class="text-md text-bold text-caps">Announcement</h4>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis vivamus at mattis bibendum congue cras id interdum. Risus leo et.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__circle"></div>
                        <div class="timeline__info">
                            <h2>2018</h2>
                            <h4 class="text-md text-bold text-caps">Announcement</h4>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis vivamus at mattis bibendum congue cras id interdum. Risus leo et.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__circle"></div>
                        <div class="timeline__info">
                            <h2>2022</h2>
                            <h4 class="text-md text-bold text-caps">Announcement</h4>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis vivamus at mattis bibendum congue cras id interdum. Risus leo et.</p>
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