<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <?php include 'components/head.php' ?>
</head>
<body>
  <?php include 'components/header.php' ?>
  <div class="contact-bg bg-secondary-bg">
    <section class="contact container mx-auto px-4 text-primary-white py-12 lg:py-25 xl:py-30">
      <div class="grid grid-cols-12">
        <div class="contact__content col-span-12 lg:col-span-6">
          <h1 class="text-[38px]/[46px] lg:[66px]/[80px] mb-10">Get in touch</h1>
          <div class="contact__formWrapper border-none outline-none mb-12">
            <form
              class="contact__form flex flex-col justify-center items-start gap-6 [&_label]:block [&_label]:text-lg [&_input]:bg-primary-darkBlue [&_input]:border-2 [&_input]:border-solid [&_input]:border-secondary-bg [&_input]:py-5 [&_input]:pl-6 [&_input]:w-full [&_input]:rounded-full [&_input::placeholder]:text-primary-white [&_input::placeholder]:text-lg [&__span.error]:text-red-600 [&__span.error]:text-xs [&__span.error]:tracking[0.5px] [&__span.error]:ml-6 sm:items-start"
              id="form">
              <div
                class="contact__group flex flex-col justify-center items-start gap-6 w-full [&>div]:w-full [&>div]:max-h-[100px] sm:flex sm:flex-row sm:justify-between">
                <div class="contact__item mb-3">
                  <label for="fname" class="text-xs text-bold text-caps">Name</label>
                  <input type="text" id="fname" name="name" placeholder="Full Name">
                  <span class="error nameError"></span>
                </div>
                <div class="contact__item">
                  <label for="email" class="text-xs text-bold text-caps">Email</label>
                  <input type="email" id="email" name="email" placeholder="Email@example.com">
                  <span class="error emailError"></span>
                </div>
              </div>
              <div
                class="contact__group flex flex-col justify-center items-start gap-6 w-full [&>div]:w-full [&>div]:max-h-[100px] sm:flex sm:flex-row sm:justify-between">
                <div class="contact__item mb-3">
                  <label for="company" class="text-xs text-bold text-caps">Company</label>
                  <input type="text" id="company" name="company" placeholder="Company Name">
                  <span class="error companyError"></span>
                </div>
                <div class="contact__item">
                  <label for="subject" class="text-xs text-bold text-caps">Subject</label>
                  <input type="text" id="subject" name="subject" placeholder="How can we help?">
                  <span class="error subjectError"></span>
                </div>
              </div>
              <div class="contact__item contact__item--message w-full max-h-[200px]">
                <label for="message" class="text-xs text-bold text-caps">Message</label>
                <textarea name="message" id="message" placeholder="Your Message"
                  class="bg-primary-darkBlue border-2 border-solid border-secondary-bg py-5 pl-6 w-full placeholder:text-primary-white placeholder:text-lg rounded-[14px] h-[160px]"></textarea>
                <span class="error messageError"></span>
              </div>
              <button class="blue-btn w-full max-w-[360px] py-5 px-7 self-center lg:max-w-[200px] lg:self-start"
                type="submit" id="submit">Send Message</button>
              <input type="hidden" name="access_key" value="345091b9-6a48-43b9-af01-b6c53d4e1899">
            </form>
          </div>
        </div>
        <div class="contact__info col-span-12 lg:col-span-5 lg:col-start-8">
          <div class="contact__title mb-6 lg:mb-8">
            <h2 class="mb-5 text-[28px]/[36px] xl:[42px]/[55px]">Want to reach us directly?</h2>
            <p class="text-base text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id dui pharetra
              elementum sit id
              sagittis non donec egestas.</p>
          </div>
          <div
            class="contact__emailGroup flex flex-col justify-center items-start gap-6 [&>div]:flex [&>div]:justify-center [&>div]:items-center [&>div]:gap-4">
            <div class="contact__email">
              <img src="./src/assets/contact.png" alt="contact-image">
              <p class="text-md">contact@example.com</p>
            </div>
            <div class="contact__email">
              <img src="./src/assets/contact.png" alt="contact-image">
              <p class="text-md">support@example.com</p>
            </div>
            <div class="contact__email">
              <img src="./src/assets/contact.png" alt="contact-image">
              <p class="text-md">press@example.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="faq container mx-auto px-4 text-primary-white pb-12 lg:pb-25 xl:pb-30">
      <div class="grid grid-cols-12">
        <h1 class="col-span-12 text-center text-[38px]/[46px] lg:text-[66px]/[80px]">FAQ</h1>
        <div
          class="faq__content col-span-12 lg:col-span-8 lg:col-start-3 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-start">
          <div class="faq__card">
            <div
              class="faq__question flex justify-between items-center w-full border-b-1 border-solid border-secondary-grey py-6">
              <h4 class="text-[18px]/[30px] text-[28px]/[30px]">Question 1</h4>
              <div
                class="faq__sign flex flex-col justify-center items-center cursor-pointer w-7 h-7 [&>span]:block [&>span]:bg-primary-white [&>span]:w-7 [&>span]:h-0.5 [&>span]:rounded-full [&>span]:transition-all [&>span]:duration-200 [&>span]:ease-in-out group">
                <span
                  class="faq__sign--bar faq__sign--bar--vertical translate-y-[2px] rotate-90 group-[.active]:translate-y-[0px] group-[.active]:rotate-0"></span>
                <span class="faq__sign--bar faq__sign--bar--horizontal"></span>
              </div>
            </div>
            <div
              class="faq__answer invisible opacity-0 h-0 transition-all duration-200 ease-in-out [&.active]:visible [&.active]:opacity-100 [&.active]:border-b-1 [&.active]:border-solid [&.active]:border-secondary-grey [&.active]:py-6 [&.active]:h-fit">
              <p class="text-base text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id dui pharetra elementum sit id sagittis non
                donec egestas.
              </p>
            </div>
          </div>
          <div class="faq__card">
            <div
              class="faq__question flex justify-between items-center w-full border-b-1 border-solid border-secondary-grey py-6">
              <h4 class="text-[18px]/[30px] text-[28px]/[30px]">Question 2</h4>
              <div
                class="faq__sign flex flex-col justify-center items-center cursor-pointer w-7 h-7 [&>span]:block [&>span]:bg-primary-white [&>span]:w-7 [&>span]:h-0.5 [&>span]:rounded-full [&>span]:transition-all [&>span]:duration-200 [&>span]:ease-in-out group">
                <span
                  class="faq__sign--bar faq__sign--bar--vertical translate-y-[2px] rotate-90 group-[.active]:translate-y-[0px] group-[.active]:rotate-0"></span>
                <span class="faq__sign--bar faq__sign--bar--horizontal"></span>
              </div>
            </div>
            <div
              class="faq__answer invisible opacity-0 h-0 transition-all duration-200 ease-in-out [&.active]:visible [&.active]:opacity-100 [&.active]:border-b-1 [&.active]:border-solid [&.active]:border-secondary-grey [&.active]:py-6 [&.active]:h-fit">
              <p class="text-base text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id dui pharetra elementum sit id sagittis non
                donec egestas.
              </p>
            </div>
          </div>
          <div class="faq__card">
            <div
              class="faq__question flex justify-between items-center w-full border-b-1 border-solid border-secondary-grey py-6">
              <h4 class="text-[18px]/[30px] text-[28px]/[30px]">Question 3</h4>
              <div
                class="faq__sign flex flex-col justify-center items-center cursor-pointer w-7 h-7 [&>span]:block [&>span]:bg-primary-white [&>span]:w-7 [&>span]:h-0.5 [&>span]:rounded-full [&>span]:transition-all [&>span]:duration-200 [&>span]:ease-in-out group">
                <span
                  class="faq__sign--bar faq__sign--bar--vertical translate-y-[2px] rotate-90 group-[.active]:translate-y-[0px] group-[.active]:rotate-0"></span>
                <span class="faq__sign--bar faq__sign--bar--horizontal"></span>
              </div>
            </div>
            <div
              class="faq__answer invisible opacity-0 h-0 transition-all duration-200 ease-in-out [&.active]:visible [&.active]:opacity-100 [&.active]:border-b-1 [&.active]:border-solid [&.active]:border-secondary-grey [&.active]:py-6 [&.active]:h-fit">
              <p class="text-base text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id dui pharetra elementum sit id sagittis non
                donec egestas.
              </p>
            </div>
          </div>
          <div class="faq__card">
            <div
              class="faq__question flex justify-between items-center w-full border-b-1 border-solid border-secondary-grey py-6">
              <h4 class="text-[18px]/[30px] text-[28px]/[30px]">Question 4</h4>
              <div
                class="faq__sign flex flex-col justify-center items-center cursor-pointer w-7 h-7 [&>span]:block [&>span]:bg-primary-white [&>span]:w-7 [&>span]:h-0.5 [&>span]:rounded-full [&>span]:transition-all [&>span]:duration-200 [&>span]:ease-in-out group">
                <span
                  class="faq__sign--bar faq__sign--bar--vertical translate-y-[2px] rotate-90 group-[.active]:translate-y-[0px] group-[.active]:rotate-0"></span>
                <span class="faq__sign--bar faq__sign--bar--horizontal"></span>
              </div>
            </div>
            <div
              class="faq__answer invisible opacity-0 h-0 transition-all duration-200 ease-in-out [&.active]:visible [&.active]:opacity-100 [&.active]:border-b-1 [&.active]:border-solid [&.active]:border-secondary-grey [&.active]:py-6 [&.active]:h-fit">
              <p class="text-base text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id dui pharetra elementum sit id sagittis non
                donec egestas.
              </p>
            </div>
          </div>
          <div class="faq__card">
            <div
              class="faq__question flex justify-between items-center w-full border-b-1 border-solid border-secondary-grey py-6">
              <h4 class="text-[18px]/[30px] text-[28px]/[30px]">Question 5</h4>
              <div
                class="faq__sign flex flex-col justify-center items-center cursor-pointer w-7 h-7 [&>span]:block [&>span]:bg-primary-white [&>span]:w-7 [&>span]:h-0.5 [&>span]:rounded-full [&>span]:transition-all [&>span]:duration-200 [&>span]:ease-in-out group">
                <span
                  class="faq__sign--bar faq__sign--bar--vertical translate-y-[2px] rotate-90 group-[.active]:translate-y-[0px] group-[.active]:rotate-0"></span>
                <span class="faq__sign--bar faq__sign--bar--horizontal"></span>
              </div>
            </div>
            <div
              class="faq__answer invisible opacity-0 h-0 transition-all duration-200 ease-in-out [&.active]:visible [&.active]:opacity-100 [&.active]:border-b-1 [&.active]:border-solid [&.active]:border-secondary-grey [&.active]:py-6 [&.active]:h-fit">
              <p class="text-base text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id dui pharetra elementum sit id sagittis non
                donec egestas.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include 'components/footer.php' ?>
  <?php viteEntry('src/js/contact.js'); ?>
</body>
</html>