<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- CSS -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" type="image/x-icon" /> -->
    <link rel="icon" type="image/x-icon" sizes="32x32" href="{{ URL::asset('/images/favicon.png') }}">

    <title>3CE organization</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header-top">
      @if(session()->has("success"))
        <div class="notification notification--success">{{ session("success")}}</div>
      @elseif(session()->has("error"))
        <div class="notification notification--error">{{ session("error")}}</div>
      @endif
      <div class="notification">Message</div>
      <div class="header">
        <a href="#">
          <img
            src="images/logo.png"
            class="logo"
            alt="Theree cousins energy company logo"
          />
        </a>
        <nav class="main-nav">
          <ul class="main-nav__list">
            <li class="main-nav__item">
              <a class="main-nav__link" href="#about-us">About us</a>
            </li>
            <li>
              <a class="main-nav__link" href="#our-products">Our products</a>
            </li>
            <!-- <li class="main-nav__item">
              <a class="main-nav__link" href="#our-team">Our team</a>
            </li> -->
            <li class="main-nav__item">
              <a class="main-nav__link" href="#our-investment"
                >Our investment</a
              >
            </li>
            <li class="main-nav__item">
              <a class="main-nav__link nav-cta" href="#business-process"
                >Business process</a
              >
            </li>
            <li class="main-nav__item">
              <a class="main-nav__link nav-cta" href="#cta">Contact us</a>
            </li>
          </ul>
        </nav>
        <button class="btn btn--mobile-nav">
          <ion-icon
            class="icon-mobile-nav md hydrated"
            name="menu-outline"
            role="img"
            aria-label="menu outline"
          ></ion-icon>
          <ion-icon
            class="icon-mobile-nav md hydrated"
            name="close-outline"
            role="img"
            aria-label="close outline"
          ></ion-icon>
        </button>
      </div>
    </header>

    <main>
      <section class="section__hero">
        <div class="hero">
          <div class="hero__text-box">
            <h1 class="heading__primary">Mazingira safi, maisha mazuri</h1>
            <p class="hero__description">
              We aim to continue providing innovative + sustainable solutions to
              waste management and alternative fuels in our country
            </p>
            <a href="#about-us" class="btn btn--full">Who we are</a>
          </div>
          <div class="hero__img-box">
            <img
              src="./images/home-hero-image.png"
              alt="Hero image"
              class="hero__img"
            />
          </div>
        </div>
      </section>

      <!-- Section about -->
      <section class="section section__about" id="about-us">
        <div class="about container grid">
          <div class="about__heading-box">
            <h2
              class="
                heading__secondary heading__secondary--bg-white
                position-sticky
                mb-lg
              "
            >
              About us
            </h2>
          </div>
          <div class="about__description-box">
            <p class="about__description">
              Three Cousins Energy Ltd (3CE is our acronym) is a social impact
              company Founded in January 2020 with the aim of providing
              alternative fuels through recycling. We believe that waste can be
              turned into cash by recycling & currently we have ventured into
              plastic recycling through pyrolysis and convert into industrial
              fuel oil.
            </p>
            <p class="about__description">
              We have been able to raise capital, get the plant installed and
              commissioning done within a year and since then, we have witnessed
              increased demand of our main product for the last 6 months and we
              are still getting more queries as we get established & known in
              the industry.
            </p>
            <p class="about__description">
              We have 3 direct employees at the moment as we are in the first
              year of operations.
            </p>
            <p class="about__description">
              We can further grow by undertaking a few more steps which we plan
              to do strategically such as improved raw materials (waste
              polypropylene bags commonly known as “ngunias”) handling and
              investing in filtration of the oil.
            </p>
          </div>
        </div>
      </section>

      <!-- Section products -->
      <section class="section__products grid grid--col-2" id="our-products">
        <div class="products__image-box">
          <img src="./images/image.jpg" alt="" class="products__image" />
        </div>
        <div class="products__text-box">
          <h2 class="heading__secondary heading__secondary--bg-green mb-lg">
            Our products
          </h2>
          <p class="products__description">
            Our main product is industrial fuel oil which is used as an
            alternative fuel in industrial setting to save on energy costs to
            our clients.
          </p>
          <p class="products__description">
            We have been able to attain a certificate of analysis and our
            industrial fuel oil meets the required threshold. We also have
            carbon-black which is a byproduct of the pyrolysis process and we
            also get it supplied to persons who develop briquettes/artificial
            “makaa”.
          </p>
        </div>
      </section>

      <section
        class="section section__investment"
        style="
          background-image: linear-gradient(
              rgba(0, 0, 0, 0.6),
              rgba(0, 0, 0, 0.6)
            ),
            url('./images/stacked-money.jpg');
        "
        id="our-investment"
      >
        <div class="container text-center">
          <h2 class="heading__secondary heading__secondary--bg-green mb-lg">
            Our investment
          </h2>
          <p class="investment__text">
            We have invested KES. 10 million (USD 100,000) in the company to
            make this dream a reality and we have what it takes to produce
            10,000 liters of industrial fuel oil in a month. This will be
            improved further in future once we enhance our raw materials
            handling.
          </p>
        </div>
      </section>

      <section class="section section__business" id="business-process">
        <div class="container">
          <h2 class="heading__secondary heading__secondary--bg-white">
            Our business process
          </h2>
          <div class="business">
            <div class="business__card business__card--1" number="1">
              <h3 class="heading__tertiary">Waster / Raw material sourcing</h3>
              <p class="business__text">
                We source our raw materials from vendors who collect and sort
                for us polythene bags from various dump sites in Nairobi, they
                bail & deliver to our site where visual quality control is done
                & weights confirmations.
              </p>
            </div>
            <div class="business__card business__card--2" number="2">
              <h3 class="heading__tertiary">Pyrolysis Process</h3>
              <p class="business__text">
                Each run we can process upto 3 tons of waste polypropylene
                bags/"ngunias" to convert them to industrial fuel oil. The
                process take an average of 15 hours and we can produce between
                40-60% oil from the waste processed.
              </p>
            </div>
            <div class="business__card business__card--3" number="3">
              <h3 class="heading__tertiary">Industrial Fuel Oil</h3>
              <p class="business__text">
                The final product is done visual quality control before being
                stored in the main tank. We then get our clients to pick from
                our site or we deliver to them. This serves as alternative fuel
                to our clients with a saving of about 30-40% as compared to
                other available sources of fuel.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-cta" id="cta">
        <div class="container">
          <div class="cta">
            <div class="cta__text-box">
              <h2 class="cta__heading">Feel free to contact us!</h2>
              <p class="cta__text">Don't hesitate to reach out!</p>
              <form class="cta__form" name="sign-up" action="/" method="POST">
                <div>
                  <label for="full-name">Full name</label>
                  <input id="full-name" type="text" name="name" required />
                </div>

                <div>
                  <label for="email-address">Email address</label>
                  <input
                    id="email-address"
                    type="email"
                    placeholder="me@example.com"
                    name="email"
                    required
                  />
                </div>

                <div class="cta__group--textarea">
                  <label for="message">Message</label>
                  <textarea id="message" name="message" required></textarea>
                </div>

                @csrf
                <button type="submit" class="btn btn--form">
                  Send message
                </button>
              </form>
            </div>
            <div
              class="cta__img-box"
              role="img"
              aria-label="A plant leaf"
            ></div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container grid grid--footer">
        <div class="footer__contact-col">
          <ul class="contact">
            <li class="contact__item">
              <a
                href="mailto:info@threecousinsenergy.co.ke"
                class="contact__link"
              >
                <ion-icon name="mail-outline" class="contact__icon"></ion-icon>
                <span>info@threecousinsenergy.co.ke</span>
              </a>
            </li>
            <li class="contact__item">
              <a
                href="mailto:threecousinsenergy@gmail.com"
                class="contact__link"
              >
                <ion-icon name="mail-outline" class="contact__icon"></ion-icon>
                <span>threecousinsenergy@gmail.com</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer__logo-col">
          <img src="./images/logo.png" alt="3CE logo" class="footer__logo" />
          <p class="footer__copyright">
            &copy; <span class="footer__copyright--year">&nbsp;</span> All
            rights reserved. 3CE Company Limited.
          </p>
        </div>
        <div class="footer__contact-col">
          <ul class="contact">
            <li class="contact__item">
              <ion-icon
                name="paper-plane-outline"
                class="contact__icon"
              ></ion-icon>
              <span>P.O. Box 33243 – 00600, Nairobi.</span>
            </li>
            <li class="contact__item">
              <ion-icon
                name="location-outline"
                class="contact__icon"
              ></ion-icon>
              <span
                >Along Northern Bypass<br />
                Kahawa area,<br />
                Nairobi County.</span
              >
            </li>
          </ul>
        </div>
      </div>
    </footer>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
   <!-- <script type="module" src="./js/script.js"></script> -->
    <script type="text/javascript" src="{{ URL::asset('/js/script.js') }}"></script>
  </body>
</html>
