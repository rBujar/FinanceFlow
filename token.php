<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
  <head>
   <?php include 'components/head.php' ?>
  </head>
  <body>
    <?php include 'components/header.php' ?>
    <div class="token-bg">
      <section class="token container">
        <div class="row">
          <div class="token__title col-12 col-lg-6 offset-3">
            <h1>Tokens</h1>
            <p class="text-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse tortor aenean dis placerat. Scelerisque</p>
          </div>
          <div class="token__tokenContainer col-12">
            <div class="row">
            <div class=" token__item token__header col-12">
              <div class="row">
                <h5 class="text-sm text-caps col-3">Name</h5>
                <h5 class="text-sm text-caps col-3">Description</h5>
                <h5 class="text-sm text-caps col-2">Market cap</h5>
                <h5 class="text-sm text-caps col-2">Volume</h5>
                <h5 class="text-sm text-caps col-2">Website</h5>
              </div>
            </div>
            <div class="token__coinWrapper col-12">
              <div class="token__item">
                <div class="row">
                  <div class="token__coin col-3">
                    <img src="./src/assets/coin-1.png" alt="coin 1">
                    <p class="text-md text-bold">Bitcoin</p>
                    <div class="token__coinLabel"><span>BTC</span></div>
                  </div>
                  <div class="token__description col-3"><p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                  <div class="token__cap col-2"><p class="text-xs text-bold text-caps">$252,844,036,453 USD</p></div>
                  <div class="token__volume cap-2"><p class="text-xs text-bold text-caps">$30,504,879,301 USD</p></div>
                  <div class="token__website col-2"><a href="#">Visit Website</a></div>
                </div>
              </div>
              <div class="token__item">
                <div class="row">
                  <div class="token__coin col-3">
                    <img src="./src/assets/coin-2.png" alt="coin 2">
                    <p class="text-md text-bold">Etherium</p>
                    <div class="token__coinLabel"><span>Eth</span></div>
                  </div>
                  <div class="token__description col-3"><p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                  <div class="token__cap col-2"><p class="text-xs text-bold text-caps">$252,844,036,453 USD</p></div>
                  <div class="token__volume cap-2"><p class="text-xs text-bold text-caps">$30,504,879,301 USD</p></div>
                  <div class="token__website col-2"><a href="#">Visit Website</a></div>
                </div>
              </div>
              <div class="token__item">
                <div class="row">
                  <div class="token__coin col-3">
                    <img src="./src/assets/coin-3.png" alt="coin 3">
                    <p class="text-md text-bold">Litecoin</p>
                    <div class="token__coinLabel"><span>LTC</span></div>
                  </div>
                  <div class="token__description col-3"><p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                  <div class="token__cap col-2"><p class="text-xs text-bold text-caps">$252,844,036,453 USD</p></div>
                  <div class="token__volume cap-2"><p class="text-xs text-bold text-caps">$30,504,879,301 USD</p></div>
                  <div class="token__website col-2"><a href="#">Visit Website</a></div>
                </div>
              </div>
              <div class="token__item">
                <div class="row">
                  <div class="token__coin col-3">
                    <img src="./src/assets/coin-4.png" alt="coin 4">
                    <p class="text-md text-bold">Tron</p>
                    <div class="token__coinLabel"><span>TRX</span></div>
                  </div>
                  <div class="token__description col-3"><p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                  <div class="token__cap col-2"><p class="text-xs text-bold text-caps">$252,844,036,453 USD</p></div>
                  <div class="token__volume cap-2"><p class="text-xs text-bold text-caps">$30,504,879,301 USD</p></div>
                  <div class="token__website col-2"><a href="#">Visit Website</a></div>
                </div>
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
