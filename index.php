<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
  <head>
   <?php include 'components/head.php' ?>
  </head>
  <body>
    <?php include 'components/header.php' ?>
    <div class="article-bg">
      <section class="article container">
        <div class="row">
          <div class="article__title col-10 col-lg-12">
            <h2>Browse our latest news</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit non neque orci amet, amet.</p>
          </div>
          <div class="article__content col-12">
            <div class="article__cards">
              <div class="article__item">
                <div class="article__image">
                <img src="./src/assets/article-1.png" class="article__image" alt="article-1">
                <button class="blue-btn">PRODUCTS</button>
                </div>
                <div class="article__info">
                  <div class="article__infoTitle">
                    <h4 class="text-lg text-bold">The Basics about Cryptocurrency</h4>
                    <p class="text-sm">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque viverra donec diammeo.</p>
                  </div>
                  <div class="article__author">
                    <img src="./src/assets/author-1.png" alt="author-1">
                    <div class="article__authorInfo">
                      <h5 class="text-sm text-bold text-caps">Alex Turner</h5>
                      <span class="text-sm">AUGUST 2, 2021</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="article__item">
              <div class="article__image">
                <img src="./src/assets/article-1.png" class="article__image" alt="article-1">
                <button class="blue-btn">PRODUCTS</button>
                </div>
                <div class="article__info">
                  <div class="article__infoTitle">
                    <h4 class="text-lg text-bold">The Basics about Cryptocurrency</h4>
                    <p class="text-sm">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque viverra donec diammeo.</p>
                  </div>
                  <div class="article__author">
                    <img src="./src/assets/author-1.png" alt="author-1">
                    <div class="article__authorInfo">
                      <h5 class="text-sm text-bold text-caps">Alex Turner</h5>
                      <span class="text-sm">AUGUST 2, 2021</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="article__item">
                <div class="article__image">
                <img src="./src/assets/article-1.png" class="article__image" alt="article-1">
                <button class="blue-btn">PRODUCTS</button>
                </div>
                <div class="article__info">
                  <div class="article__infoTitle">
                    <h4 class="text-lg text-bold">The Basics about Cryptocurrency</h4>
                    <p class="text-sm">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque viverra donec diammeo.</p>
                  </div>
                  <div class="article__author">
                    <img src="./src/assets/author-1.png" alt="author-1">
                    <div class="article__authorInfo">
                      <h5 class="text-sm text-bold text-caps">Alex Turner</h5>
                      <span class="text-sm">AUGUST 2, 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="grey-btn article__viewBtn text-caps col-12">View All Articles</button>
            </div>
        </div>
      </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
  </body>
</html>
