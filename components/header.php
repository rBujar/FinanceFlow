<div class="header-bg bg-secondary-bg">
    <div class="header container mx-auto px-4 py-4 flex justify-between items-center xl:gap-[65px] xl:pt-10 xl:pb-10">
        <div class="header__logo flex items-center">
            <a href="../index.php"><img src="../src/assets/logo.png" alt="logo"></a>
        </div>
        <div class="header__nav flex flex-col justify-start items-center fixed top-15 bottom-0 -translate-x-full w-full left-0 gap-10 pt-[65px] transition-transform duration-200 ease-in-out border-none outline-none z-20 [&.active]:translate-x-0 [&.active]:duration-500 bg-secondary-bg xl:static xl:translate-x-0 xl:transition-none xl:flex-row xl:justify-between xl:pt-0 xl:bg-transparent xl:w-auto">
            <ul class="header__menu flex flex-col justify-center items-center text-primary-white [&>li]:text-[32px] [&>li>a]:hover:underline [&>li>a]:hover:underline-offset-2 gap-10 xl:flex-row xl:gap-[30px] xl:[&>li]:text-[16px]/[16px]">
                <li class="header__item"><a href="../index.php">Home</a></li>
                <li class="header__item"><a href="../about-us.php">About</a></li>
                <li class="header__item"><a href="../pricing.php">Pricing</a></li>
                <li class="header__item"><a href="../token.php">Tokens</a></li>
                <li class="header__item"><a href="../blog.php">Blog</a></li>
                <li class="header__item"><a href="../contact.php">Contact Us</a></li>
            </ul>
            <button class="blue-btn text-primary-white max-w-[300px] py-7 px-21 xl:max-w-[210px] xl:py-5 xl:px-10">Download App</button>
        </div>
        <div class="header__hamburger group flex flex-col justify-center items-center z-10 rounded-full w-11 h-11 bg-primary-blue xl:hidden">
            <span class="header__hamburger--bar header__hamburger--bar--top group-[.active]:translate-y-[10px] group-[.active]:rotate-45"></span>
            <span class="header__hamburger--bar header__hamburger--bar--middle my-2 group-[.active]:opacity-0 "></span>
            <span class="header__hamburger--bar header__hamburger--bar--bottom group-[.active]:-translate-y-[10px] group-[.active]:-rotate-45"></span>
        </div>
    </div>
</div>
<?php viteEntry('src/js/header.js'); ?>