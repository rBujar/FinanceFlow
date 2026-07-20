<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <?php include 'components/head.php' ?>
</head>
<body>
  <?php include 'components/header.php' ?>
  <div class="contact-bg">
    <section class="contact container">
      <div class="row">
        <div class="contact__content col-12 col-lg-6">
            <h1>Get in touch</h1>
            <div class="contact__formWrapper">
              <form class="contact__form" id="form">
                <div class="contact__group">
                  <div class="contact__item">
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
                <div class="contact__group">
                  <div class="contact__item">
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
                <div class="contact__item">
                  <label for="message" class="text-xs text-bold text-caps">Message</label>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                  <span class="error messageError"></span>
                </div>
                <button class="blue-btn text-caps" type="submit" id="submit">Send Message</button>
                <input type="hidden" name="access_key" value="345091b9-6a48-43b9-af01-b6c53d4e1899">
              </form>
            </div>
        </div>
        <div class="contact__info col-12 col-lg-5 offset-lg-1">
          <div class="contact__title">
            <h2>Want to reach us directly?</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id dui pharetra elementum sit id sagittis non donec egestas.</p>

          </div>
          <div class="contact__emailGroup">
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
    <section class="faq container">
      <div class="row">
        <h1 class="col-12" style="text-align: center;">FAQ</h1>
        <div class="faq__content col-12 col-lg-8 offset-lg-2">
          <div class="faq__card">
            <div class="faq__question">
              <h4 class="text-md text-bold">Question 1</h4>
              <div class="faq__sign">
                <span class="faq__sign--bar faq__sign--bar--vertical"></span>
                <span class="faq__sign--bar faq__sign--bar--horizontal"></span>
              </div>
            </div>
            <div class="faq__answer">
              <p class="text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id dui pharetra elementum sit id sagittis non donec egestas.
              </p>
            </div>
          </div>
          <div class="faq__card">
            <div class="faq__question">
              <h4 class="text-md text-bold">Question 2</h4>
              <div class="faq__sign">
                <span class="faq__sign--bar faq__sign--bar--vertical"></span>
                <span class="faq__sign--bar faq__sign--bar--horizontal"></span>
              </div>
            </div>
            <div class="faq__answer">
              <p class="text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id dui pharetra elementum sit id sagittis non donec egestas.
              </p>
            </div>
          </div>
          <div class="faq__card">
            <div class="faq__question">
              <h4 class="text-md text-bold">Question 3</h4>
              <div class="faq__sign">
                <span class="faq__sign--bar faq__sign--bar--vertical"></span>
                <span class="faq__sign--bar faq__sign--bar--horizontal"></span>
              </div>
            </div>
            <div class="faq__answer">
              <p class="text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id dui pharetra elementum sit id sagittis non donec egestas.
              </p>
            </div>
          </div>
          <div class="faq__card">
            <div class="faq__question">
              <h4 class="text-md text-bold">Question 4</h4>
              <div class="faq__sign">
                <span class="faq__sign--bar faq__sign--bar--vertical"></span>
                <span class="faq__sign--bar faq__sign--bar--horizontal"></span>
              </div>
            </div>
            <div class="faq__answer">
              <p class="text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id dui pharetra elementum sit id sagittis non donec egestas.
              </p>
            </div>
          </div>
          <div class="faq__card">
            <div class="faq__question">
              <h4 class="text-md text-bold">Question 5</h4>
              <div class="faq__sign">
                <span class="faq__sign--bar faq__sign--bar--vertical"></span>
                <span class="faq__sign--bar faq__sign--bar--horizontal"></span>
              </div>
            </div>
            <div class="faq__answer">
              <p class="text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id dui pharetra elementum sit id sagittis non donec egestas.
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