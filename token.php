<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <?php include 'components/head.php' ?>
</head>
<body>
  <?php include 'components/header.php' ?>
  <div class="token-bg bg-secondary-bg">
    <section class="token container mx-auto px-4 text-primary-white py-12 lg:py-25 xl:py-30">
      <div class="grid grid-cols-12">
        <div class="token__title col-span-12 lg:col-span-6 lg:col-start-4 mb-10 lg:mb-[100px] lg:text-center">
          <h1 class="text-[38px]/[46px] lg-[66px]/[80px] mb-4">Tokens</h1>
          <p class="text-base lg-text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla
            suspendisse tortor
            aenean dis placerat. Scelerisque</p>
        </div>
        <div class="token__tableContainer col-span-12 overflow-x-auto">
          <table class="token__table w-full [&_tr]:align-middle">
            <thead class="token__tableHead">
              <tr
                class="[&>th]:border-b-1 [&>th]:border-solid [&>th]:border-secondary-grey [&>th]:pb-10 [&>th]:text-left">
                <th class="uppercase">name</th>
                <th class="uppercase">description</th>
                <th class="uppercase">market cap</th>
                <th class="uppercase">volume</th>
                <th class="uppercase">website</th>
              </tr>
            </thead>
            <tbody class="token__tableBody">
              <tr
                class="table__row [&>td]:py-10 [&>td]:pr-7 [&>td]:border-b-1 [&>td]:solid [&>td]:border-secondary-grey">
                <td class="token__coinCell min-w-[220px] lg:min-w-[250px] xl:min-w-[300px]">
                  <div class="token__coin flex justify-start items-center gap-4">
                    <img src="./src/assets/coin-1.png" alt="coin 1">
                    <h5 class="text-md text-bold">Bitcoin</h5>
                    <span class="text-[12px] bg-primary-darkBlue rounded-full py-1 px-2">BTC</span>
                  </div>
                </td>
                <td class="token__desc min-w-[220px] lg:min-w-[250px] xl:min-w-[300px]">
                  <p class="text-xs lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </td>
                <td class="token__cap min-w-[200px] lg:min-w-[220px] xl:min-w-[250px]">
                  <p class="text-xs lg:text-base text-bold uppercase">$252,844,036,453 USD</p>
                </td>
                <td class="token__volume min-w-[200px] lg:min-w-[220px] xl:min-w-[250px]">
                  <p class="text-xs lg:text-base text-bold text-caps">$30,504,879,301 USD</p>
                </td>
                <td class="token__website min-w-[150px]"><a href="#">Visit Website</a></td>
              </tr>
              <tr
                class="table__row [&>td]:py-10 [&>td]:pr-7 [&>td]:border-b-1 [&>td]:solid [&>td]:border-secondary-grey">
                <td>
                  <div class="token__coin flex justify-start items-center gap-4">
                    <img src="./src/assets/coin-2.png" alt="coin 2">
                    <h5 class="text-md text-bold">Ethereum</h5>
                    <span class="text-[12px] bg-primary-darkBlue rounded-full py-1 px-2">Eth</span>
                  </div>
                </td>
                <td class="token__desc">
                  <p class="text-xs lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </td>
                <td class="token__cap">
                  <p class="text-xs lg:text-base text-bold text-caps">$252,844,036,453 USD</p>
                </td>
                <td class="token__volume">
                  <p class="text-xs lg:text-base text-bold text-caps">$30,504,879,301 USD</p>
                </td>
                <td class="token__website"><a href="#">Visit Website</a></td>
              </tr>
              <tr
                class="table__row [&>td]:py-10 [&>td]:pr-7 [&>td]:border-b-1 [&>td]:solid [&>td]:border-secondary-grey">
                <td>
                  <div class="token__coin flex justify-start items-center gap-4">
                    <img src="./src/assets/coin-3.png" alt="coin 3">
                    <h5 class="text-md text-bold">Litecoin</h5>
                    <span class="text-[12px] bg-primary-darkBlue rounded-full py-1 px-2">LTC</span>
                  </div>
                </td>
                <td class="token__desc">
                  <p class="text-xs lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </td>
                <td class="token__cap">
                  <p class="text-xs lg:text-base text-bold text-caps">$252,844,036,453 USD</p>
                </td>
                <td class="token__volume">
                  <p class="text-xs lg:text-base text-bold text-caps">$30,504,879,301 USD</p>
                </td>
                <td class="token__website col-2"><a href="#">Visit Website</a></td>
              </tr>
              <tr
                class="table__row [&>td]:py-10 [&>td]:pr-7 [&>td]:border-b-1 [&>td]:solid [&>td]:border-secondary-grey">
                <td>
                  <div class="token__coin flex justify-start items-center gap-4">
                    <img src="./src/assets/coin-4.png" alt="coin 4">
                    <h5 class="text-md text-bold">TRON</h5>
                    <span class="text-[12px] bg-primary-darkBlue rounded-full py-1 px-2">TRX</span>
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