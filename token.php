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
        <div class="token__title col-span-12 lg:col-span-6 lg:col-start-4 mb-10 lg:mb-[100px] lg:text-center" data-aos="fade" data-aos-delay="100">
          <h1 class="text-[38px]/[46px] lg-[66px]/[80px] mb-4"></h1>
          <p class="text-base lg:text-lg"></p>
        </div>
        <div class="token__tableContainer col-span-12 overflow-x-auto" data-aos="fade" data-aos-delay="200">
          <table class="token__table w-full [&_tr]:align-middle">
            <thead class="token__tableHead">
              <tr
                class="[&>th]:border-b-1 [&>th]:border-solid [&>th]:border-secondary-grey [&>th]:pb-10 [&>th]:text-left">
                <th class="uppercase"></th>
                <th class="uppercase"></th>
                <th class="uppercase"></th>
                <th class="uppercase"></th>
                <th class="uppercase"></th>
              </tr>
            </thead>
            <tbody class="token__tableBody">
              <tr class="table__row [&>td]:py-10 [&>td]:pr-7 [&>td]:border-b-1 [&>td]:solid [&>td]:border-secondary-grey">
                <td class="token__coinCell min-w-[220px] lg:min-w-[250px] xl:min-w-[300px]">
                  <div class="token__coin flex justify-start items-center gap-4">
                    <img src="" alt="">
                    <h5 class="text-base text-bold"></h5>
                    <span class="text-[12px] bg-primary-darkBlue rounded-full py-1 px-2"></span>
                  </div>
                </td>
                <td class="token__desc min-w-[220px] lg:min-w-[250px] xl:min-w-[300px]">
                  <p class="text-xs lg:text-base"></p>
                </td>
                <td class="token__cap min-w-[200px] lg:min-w-[220px] xl:min-w-[250px]">
                  <p class="text-xs lg:text-base text-bold uppercase"></p>
                </td>
                <td class="token__volume min-w-[200px] lg:min-w-[220px] xl:min-w-[250px]">
                  <p class="text-xs lg:text-base text-bold uppercase"></p>
                </td>
                <td class="token__website min-w-[150px]"><a href=""></a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  <?php include 'components/footer.php' ?>
  <?php viteEntry('src/js/displays/displayTokens.js'); ?>
  <?php viteEntry('src/js/aos.js'); ?>
</body>
</html>