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
        <div class="token__title col-12 col-lg-6 offset-lg-3">
          <h1>Tokens</h1>
          <p class="text-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse tortor
            aenean dis placerat. Scelerisque</p>
        </div>
        <div class="token__tableContainer col-12">
          <table class="token__table">
            <thead class="token__tableHead">
              <tr>
                <th class="text-caps">name</th>
                <th class="text-caps">description</th>
                <th class="text-caps">market cap</th>
                <th class="text-caps">volume</th>
                <th class="text-caps">website</th>
              </tr>
            </thead>
            <tbody class="token__tableBody">
              <tr class="table__row">
                <td class="token__coinCell">
                  <div class="token__coin">
                    <img src="./src/assets/coin-1.png" alt="coin 1">
                    <h5 class="text-md text-bold">Bitcoin</h5>
                    <span>BTC</span>
                  </div>
                </td>
                <td class="token__desc">
                  <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </td>
                <td class="token__cap">
                  <p class="text-xs text-bold text-caps">$252,844,036,453 USD</p>
                </td>
                <td class="token__volume">
                  <p class="text-xs text-bold text-caps">$30,504,879,301 USD</p>
                </td>
                <td class="token__website"><a href="#">Visit Website</a></td>
              </tr>
              <tr class="table__row">
                <td>
                  <div class="token__coin">
                    <img src="./src/assets/coin-2.png" alt="coin 2">
                    <h5 class="text-md text-bold">Ethereum</h5>
                    <span>Eth</span>
                  </div>
                </td>
                <td class="token__desc">
                  <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </td>
                <td class="token__cap col-2">
                  <p class="text-xs text-bold text-caps">$252,844,036,453 USD</p>
                </td>
                <td class="token__volume cap-2">
                  <p class="text-xs text-bold text-caps">$30,504,879,301 USD</p>
                </td>
                <td class="token__website col-2"><a href="#">Visit Website</a></td>
              </tr>
              <tr class="table__row">
                <td>
                  <div class="token__coin">
                    <img src="./src/assets/coin-3.png" alt="coin 3">
                    <h5 class="text-md text-bold">Litecoin</h5>
                    <span>LTC</span>
                  </div>
                </td>
                <td class="token__desc">
                  <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </td>
                <td class="token__cap col-2">
                  <p class="text-xs text-bold text-caps">$252,844,036,453 USD</p>
                </td>
                <td class="token__volume cap-2">
                  <p class="text-xs text-bold text-caps">$30,504,879,301 USD</p>
                </td>
                <td class="token__website col-2"><a href="#">Visit Website</a></td>
              </tr>
              <tr class="table__row">
                <td>
                  <div class="token__coin">
                    <img src="./src/assets/coin-4.png" alt="coin 4">
                    <h5 class="text-md text-bold">TRON</h5>
                    <span>TRX</span>
                  </div>
                </td>
                <td class="token__desc">
                  <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </td>
                <td class="token__cap col-2">
                  <p class="text-xs text-bold text-caps">$252,844,036,453 USD</p>
                </td>
                <td class="token__volume cap-2">
                  <p class="text-xs text-bold text-caps">$30,504,879,301 USD</p>
                </td>
                <td class="token__website col-2"><a href="#">Visit Website</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  <?php include 'components/footer.php' ?>
  <?php viteEntry('src/js/main.js'); ?>
</body>
</html>