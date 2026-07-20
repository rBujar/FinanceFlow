<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
  <head>
   <?php include 'components/head.php' ?>
  </head>
  <body>
    <?php include 'components/header.php' ?>
    <div class="blog-bg">
      <section class="blog container">
        <div class="row">
          <div class="blog__title col-12">
            <h2>Blog</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse tortor aenean dis placerat.</p>
          </div>
          <div class="blog__content col-12">
              <div class="blog__item">
                <div class="blog__image">
                <img src="./src/assets/blog-1.png" class="blog__image" alt="blog-1">
                </div>
                <div class="blog__info">
                  <div class="blog__articleType"><p class="text-caps">PRODUCTS</p></div>
                  <div class="blog__infoTitle">
                    <h4 class="text-lg text-bold">The Basics about Cryptocurrency</h4>
                    <p class="text-sm">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque viverra donec diammeo.</p>
                  </div>
                  <div class="blog__author">
                    <img src="./src/assets/author-1.png" alt="author-1">
                    <div class="blog__authorInfo">
                      <h5 class="text-sm text-bold text-caps">Alex Turner</h5>
                      <span class="text-sm">AUGUST 2, 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>
    </div>
    <div class="blogSub-bg">
    <section class="blogSub container">
      <div class="row">
        <div class="blogSub__title col-12 col-lg-6 col-xl-7">
          <img src="./src/assets/subscribe.png" alt="subscribe-image">
          <h2>Subscribe to our crypto news weekly newsletter!</h2>
        </div>
        <div class="blogSub__content col-12 col-lg-6 col-xl-5">
          <div class="blogSub__inputContainer">
            <input type="email" name="email" placeholder="Enter email address">
            <button class="blue-btn text-bold text-caps">Subscribe</button>
          </div>
          <button class="blogSub__darkBtn text-caps text-bold">Subscribe</button>
        </div>
      </div>
    </section>
    </div>
    <div class="blog-bg">
      <section class="post container">
        <div class="row">
          <div class="post__title col-12">
            <h2>Latest Post</h2>
            <div class="post__selectButtons">
              <button class="post__postType grey-btn" data-filter="all">All</button>
              <button class="post__postType grey-btn" data-filter="apps">Apps</button>
              <button class="post__postType grey-btn" data-filter="products">Products</button>
              <button class="post__postType grey-btn" data-filter="tutorials">Tutorial</button>
            </div>
          </div>
          <div class="post__content col-12">
              <div class="post__item" data-category="products">
                <div class="post__image">
                <img src="./src/assets/blog-1.png" class="post__image" alt="blog-1">
                </div>
                <div class="post__info">
                  <div class="post__articleType"><p class="text-caps">PRODUCTS</p></div>
                  <div class="post__infoTitle">
                    <h4 class="text-lg text-bold">The Basics about Cryptocurrency</h4>
                    <p class="text-sm">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque viverra donec diammeo.</p>
                  </div>
                  <div class="post__author">
                    <img src="./src/assets/author-1.png" alt="author-1">
                    <div class="post__authorInfo">
                      <h5 class="text-sm text-bold text-caps">Alex Turner</h5>
                      <span class="text-sm">AUGUST 2, 2021</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="post__item" data-category="products">
                <div class="post__image">
                <img src="./src/assets/blog-1.png" class="post__image" alt="blog-1">
                </div>
                <div class="post__info">
                  <div class="post__articleType"><p class="text-caps">PRODUCTS</p></div>
                  <div class="post__infoTitle">
                    <h4 class="text-lg text-bold">The Basics about Cryptocurrency</h4>
                    <p class="text-sm">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque viverra donec diammeo.</p>
                  </div>
                  <div class="post__author">
                    <img src="./src/assets/author-1.png" alt="author-1">
                    <div class="post__authorInfo">
                      <h5 class="text-sm text-bold text-caps">Alex Turner</h5>
                      <span class="text-sm">AUGUST 2, 2021</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="post__item" data-category="products">
                <div class="post__image">
                <img src="./src/assets/blog-1.png" class="post__image" alt="blog-1">
                </div>
                <div class="post__info">
                  <div class="post__articleType"><p class="text-caps">PRODUCTS</p></div>
                  <div class="post__infoTitle">
                    <h4 class="text-lg text-bold">The Basics about Cryptocurrency</h4>
                    <p class="text-sm">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque viverra donec diammeo.</p>
                  </div>
                  <div class="post__author">
                    <img src="./src/assets/author-1.png" alt="author-1">
                    <div class="post__authorInfo">
                      <h5 class="text-sm text-bold text-caps">Alex Turner</h5>
                      <span class="text-sm">AUGUST 2, 2021</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="post__item" data-category="products">
                <div class="post__image">
                <img src="./src/assets/blog-1.png" class="post__image" alt="blog-1">
                </div>
                <div class="post__info">
                  <div class="post__articleType"><p class="text-caps">PRODUCTS</p></div>
                  <div class="post__infoTitle">
                    <h4 class="text-lg text-bold">The Basics about Cryptocurrency</h4>
                    <p class="text-sm">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque viverra donec diammeo.</p>
                  </div>
                  <div class="post__author">
                    <img src="./src/assets/author-1.png" alt="author-1">
                    <div class="post__authorInfo">
                      <h5 class="text-sm text-bold text-caps">Alex Turner</h5>
                      <span class="text-sm">AUGUST 2, 2021</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="post__item" data-category="tutorials">
                <div class="post__image">
                <img src="./src/assets/blog-1.png" class="post__image" alt="blog-1">
                </div>
                <div class="post__info">
                  <div class="post__articleType"><p class="text-caps">TUTORIAL</p></div>
                  <div class="post__infoTitle">
                    <h4 class="text-lg text-bold">The Basics about Cryptocurrency</h4>
                    <p class="text-sm">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque viverra donec diammeo.</p>
                  </div>
                  <div class="post__author">
                    <img src="./src/assets/author-1.png" alt="author-1">
                    <div class="post__authorInfo">
                      <h5 class="text-sm text-bold text-caps">Alex Turner</h5>
                      <span class="text-sm">AUGUST 2, 2021</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="post__item" data-category="apps">
                <div class="post__image">
                <img src="./src/assets/blog-1.png" class="post__image" alt="blog-1">
                </div>
                <div class="post__info">
                  <div class="post__articleType"><p class="text-caps">APPS</p></div>
                  <div class="post__infoTitle">
                    <h4 class="text-lg text-bold">The Basics about Cryptocurrency</h4>
                    <p class="text-sm">Lorem ipsum dolor sit ametero irseo, consectetur adipiscing elit. Scelerisque viverra donec diammeo.</p>
                  </div>
                  <div class="post__author">
                    <img src="./src/assets/author-1.png" alt="author-1">
                    <div class="post__authorInfo">
                      <h5 class="text-sm text-bold text-caps">Alex Turner</h5>
                      <span class="text-sm">AUGUST 2, 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="post__pagination col-12">
            <button class="post__prev"><i class="icon-leftArrow"></i></button>
            <p class="text-md">1</p>
            <p class="text-md">2</p>
            <p class="text-md">3</p>
            <button class="post__next"><i class="icon-rightArrow"></i></button>
          </div>
        </div>
      </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/blog.js'); ?>
  </body>
</html>