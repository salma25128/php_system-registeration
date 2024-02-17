<?php session_start(); ?>
<style><?php include 'assets/css/build.css'; ?></style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <link rel="icon" href="../assets/images/icon.ico" />
  <!-- <link href="../assets/css/build.css" rel="stylesheet"  type="text/css"> -->


  <link rel="stylesheet" href="/assets/css/input.css"  type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"   type="text/css"/>
  <title>All About Accounting - Home</title>
</head>

<body>
  <!--NAVBAR HERE-->
  <div class="fixed w-full z-[9999]">
    <div class="bg-darkYellow sm:h-16 h-24">
      <div class="flex justify-center items-center md:gap-6 gap-3 h-full container sm:flex-row flex-col">
        <p>50% Discount For All Candidates.</p>
        <a href="../html/enroll-now.html"><button
            class="border border-cyanBlue h-[34px] w-[130px] text-cyanBlue rounded bg-darkYellow text-base font-medium hover:bg-cyanBlue hover:text-darkYellow transition ease-in-out duration-300">
            Enroll Now
          </button>
        </a>
      </div>
    </div>
    <!-- header start -->
    <header class="nav w-full left-0 top-0 z-50 lg:py-5 py-2 bg-cyanBlue">
      <div class="container">
        <div class="nav__main flex justify-between items-center">
          <div>
            <a class="flex items-center gap-2" href="../html/index.php">
              <img width="44" height="44" src="../assets/images/AAAlogo.webp" alt="" />
              <span class="md:inline hidden text-white font-bold text-lg">All About Accounting</span>
            </a>
          </div>
          <div class="flex gap-4">
            <button class="block lg:hidden">
           
            <div class="nav__menu-open">
              <img class="w-8 h-8" src="../assets/images/menu.webp" alt="" />
            </div>
          </div>
          <div
            class="nav__menu-overlay fixed z-[999] bg-black bg-opacity-50 left-0 top-0 h-full w-full invisible opacity-0 transition ease-in-out duration-300">
          </div>
          <!-- navigation menu start -->
          <nav class="nav__menu">
            <div class="nav__menu-close">
              <img src="../assets/images/xicon.webp" alt="close" />
            </div>
            <ul class="nav__list flex lg:flex-row flex-col lg:gap-8">
              <li class="nav__item relative">
                <a class="duration-300 transition ease-in-out hover:text-darkYellow text-[#FFFFFFDE]" href="../html/index.php">Home</a>
              </li>
              <li class="nav__item relative">
                <a class="duration-300 transition ease-in-out hover:text-darkYellow text-[#FFFFFFDE]"
                  href="../html/enroll-now.html">Enroll
                  Now</a>
              </li>
              <li class="nav__item relative nav__item-child">
                <a class="duration-300 transition ease-in-out hover:text-darkYellow text-[#FFFFFFDE] !flex gap-2"
                  href="../html/courses.html" data-toggle="nav__dropdown">Courses
                  <svg xmlns="http://www.w3.org/2000/svgwebp" width="16" height="16" fill="currentcolor"
                    class="bi bi-chevron-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                  </svg></a>
                <ul
                  class="nav__dropdown w-[220px] absolute mt-5 left-0 top-full bg-white border-t-[3px] transition ease-in-out duration-300 opacity-0 invisible translate-y-3 shadow-lg border-darkYellow py-2.5">
                  <li class="nav__item relative">
                    <a class="duration-300 transition ease-in-out hover:text-darkYellow lg:text-black text-[#FFFFFFDE]"
                      href="../html/cma1demo.html">CMA PART 1 DEMO</a>
                  </li>
                  <li class="nav__item relative">
                    <a class="duration-300 transition ease-in-out hover:text-darkYellow lg:text-black text-[#FFFFFFDE]"
                      href="../html/courses/cma2demo.html">CMA PART 2 DEMO</a>
                  </li>
                  <li class="nav__item relative">
                    <a class="duration-300 transition ease-in-out hover:text-darkYellow lg:text-black text-[#FFFFFFDE]"
                      href="../html/courses/fmaademo.html">FMAA DEMO</a>
                  </li>
                  <li class="nav__item relative">
                    <a class="duration-300 transition ease-in-out hover:text-darkYellow lg:text-black text-[#FFFFFFDE]"
                      href="../html/courses/modern1demo.html">MODERN ACCOUNTING PART 1 DEMO</a>
                  </li>
                  <li class="nav__item relative">
                    <a class="duration-300 transition ease-in-out hover:text-darkYellow lg:text-black text-[#FFFFFFDE]"
                      href="../html/courses/modern2demo.html">MODERN ACCOUNTING PART 2 DEMO</a>
                  </li>
                </ul>
              </li>
              <li class="nav__item relative">
                <a class="duration-300 transition ease-in-out hover:text-darkYellow text-[#FFFFFFDE]"
                  href="../html/books.html">Books</a>
              </li>
              <li class="nav__item relative">
                <a class="duration-300 transition ease-in-out hover:text-darkYellow text-[#FFFFFFDE]"
                  href="../html/feedback.html">Feedbacks</a>
              </li>
              <li class="nav__item relative">
                <a class="duration-300 transition ease-in-out hover:text-darkYellow text-[#FFFFFFDE]"
                  href="../html/about.html">About</a>
              </li>
              <li class="nav__item relative">
                <a class="duration-300 transition ease-in-out hover:text-darkYellow text-[#FFFFFFDE]"
                  href="../html/faq.html">FAQ</a>
              </li>
              <button class="lg:block hidden">
                <a href="../html/login.php"> <img class="w-5 h-5" src="../assets/images/login.svg" /> </a>

                <?php
                if(isset($_SESSION['message'])){
                    echo '<div class="alert alert-success">'.$_SESSION['message'].'</div>';
                    unset($_SESSION['message']);
                }
            ?>
              <a href="../html/login.php"> <img class="w-5 h-5" src="../assets/images/login.svg" /> </a>
            </button>
            <?php if(isset($_SESSION['loggedInStatus'])) : ?>

        <a href="dashboard.php" class="btn btn-secondary">Dashboard</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>

       <?php else: ?>

         <a href="login.php" class="btn btn-primary">Login</a>
         <a href="register.php" class="btn btn-info">Register</a>

       <?php endif; ?>

              </button>
            </ul>
          </nav>
          <!-- navigation menu end -->
        </div>
      </div>
    </header>
    <!-- header end -->
  </div>
  <section class="bg-alexWatermark bg-center bg-no-repeat bg-cover bg-cyanBlue">
    <div class="flex justify-center items-center h-screen flex-col pt-10">
      <img src="../assets/images/AAAlogo.webp" class="max-w-[322px] max-h-[322px] h-auto w-full" />
      <a href="../html/cma1demo.html"><img class="max-w-[339px] max-h-[188px] h-auto w-full" src="../assets/images/Click.webp" />
      </a>
    </div>
  </section>
  <section class="bg-black h-60">
    <div class="text-center flex flex-col justify-center items-center h-full gap-4 px-3">
      <h1 class="text-darkYellow md:text-5xl sm:text-4xl text-3xl font-bold">
        Dr. Mohamed Ismail
        <span class="md:text-4xl sm:text-3xl text-2xl text-white">Assistant Professor</span>
      </h1>
      <p class="text-xl text-[#999999]">
        PHD in Accounting from the Faculty of Business Alexandria University.
      </p>
    </div>
  </section>
  <section class="bg-cyanBlue py-12">
    <div class="container flex gap-7 md:gap-5 xl:flex-nowrap flex-wrap md:items-start items-center w-full">
      <div class="flex gap-7 md:gap-5 md:flex-row flex-col md:items-start items-center justify-center w-full">
        <div class="text-center md:w-1/2 md:max-w-full max-w-sm mx-auto">
          <h1 class="text-2xl text-darkYellow font-semibold pb-5">
            5 Researches
          </h1>
          <p class="text-white">
            Dr. Mohamed Ismail has made a meaningful impact on both the
            academic and practical aspects of accounting, and is looking
            forward to continue this journey of exploration and discovery.
          </p>
        </div>
        <div class="text-center md:w-1/2 md:max-w-full max-w-sm mx-auto">
          <h1 class="text-2xl text-darkYellow font-semibold pb-5">
            20 Years Exp.
          </h1>
          <p class="text-white">
            Professor at Faculty of Business Alexandria University (Sep 1999 -
            Present)
          </p>
        </div>
      </div>
      <div class="flex gap-7 md:gap-5 md:flex-row flex-col md:items-start items-center justify-center w-full">
        <div class="text-center md:w-1/2 md:max-w-full max-w-sm mx-auto">
          <h1 class="text-2xl text-darkYellow font-semibold pb-5">
            200k+ Student
          </h1>
          <p class="text-white">
            Dr. Mohamed Ismail teached more than 200,000 student within
            university and accounting institutes.
          </p>
        </div>
        <div class="text-center md:w-1/2 md:max-w-full max-w-sm mx-auto">
          <h1 class="text-2xl text-darkYellow font-semibold pb-5">
            Reputation
          </h1>
          <p class="text-white">
            Dr. Mohamed Ismail is widely recognized as a leading figure in the
            accounting profession. Their stellar reputation is built on a
            foundation of deep expertise, unwavering integrity, commitment to
            excellence and inspiring the next generation.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="bg-black h-32">
      <div class="text-center flex flex-col justify-center items-center h-full container">
        <h1 class="text-white md:text-3xl text-2xl font-bold">
          September / October - 2023 Window Certificates
        </h1>
      </div>
    </div>
    <div class="bg-darkYellow pt-8 text-center">
      <span class="text-xl bg-black text-white font-bold text-center leading-loose px-2">8 out of 11 passed this window,
        achieving a passing rate of
        72.73%.</span>
      <div class="flex justify-center items-center flex-col container">
        <div class="pt-8 max-w-full relative pb-10">
          <div class="swiper mySwiper relative max-w-[1150px]">
            <div class="swiper-wrapper">
              <div class="swiper-slide sm:px-7">
                <img src="../assets/images/AAACertifTemplate-1.webp" alt="certificate" />
              </div>
              <div class="swiper-slide sm:px-7">
                <img src="../assets/images/AAACertifTemplate-2.webp" alt="certificate" />
              </div>
              <div class="swiper-slide sm:px-7">
                <img src="../assets/images/AAACertifTemplate-3.webp" alt="certificate" />
              </div>
              <div class="swiper-slide sm:px-7">
                <img src="../assets/images/AAACertifTemplate-4.webp" alt="certificate" />
              </div>
              <div class="swiper-slide sm:px-7">
                <img src="../assets/images/AAACertifTemplate-5.webp" alt="certificate" />
              </div>
              <div class="swiper-slide sm:px-7">
                <img src="../assets/images/AAACertifTemplate-6.webp" alt="certificate" />
              </div>
              <div class="swiper-slide sm:px-7">
                <img src="../assets/images/AAACertifTemplate-7.webp" alt="certificate" />
              </div>
              <div class="swiper-slide sm:px-7">
                <img src="../assets/images/AAACertifTemplate-8.webp" alt="certificate" />
              </div>
            </div>
          </div>
          <div
            class="max-w-[1300px] w-full absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[999] sm:block hidden">
            <div class="custom-swiper-button-prev">
              <img class="w-5 h-5 rotate-180" src="../assets/images/chevronicon.webp" alt="" />
            </div>
            <div class="custom-swiper-button-next">
              <img class="w-5 h-5" src="../assets/images/chevronicon.webp" alt="" />
            </div>
          </div>
          <div class="swiper-pagination !bottom-3"></div>
        </div>
      </div>
    </div>
    <div class="bg-black h-28">
      <div class="text-center flex flex-col justify-center items-center h-full container">
        <h1 class="text-white md:text-3xl text-2xl font-bold">
          Youtube Introduction Videos
        </h1>
      </div>
    </div>
    <div class="bg-cyanBlue">
      <div class="container flex justify-center items-center py-6 flex-col">
        <iframe class="md:max-w-[640px] md:h-[480px] sm:h-[340px] h-[280px] sm:max-w-[440] w-full rounded-xl"
          src="https://www.youtube.com/embed/B8C0Gd0N_lw" title="What is CMA ? (2023/2024)" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
        <h1 class="alfa text-lg text-white pt-5">What is CMA ?</h1>
      </div>
    </div>
  </section>
  <section>
    <div class="bg-black h-28">
      <div class="text-center flex flex-col justify-center items-center h-full container">
        <h1 class="text-white md:text-3xl text-2xl font-bold">Archive</h1>
      </div>
    </div>
    <div class="bg-darkYellow">
      <div class="container text-center pt-8">
        <span class="text-xl bg-black text-white font-bold text-center leading-loose">&nbsp;Achieving 450 Score (90%) in
          CMA Part 1 – A Milestone to
          Celebrate&nbsp;</span>
        <div class="pt-14 max-w-xl mx-auto">
          <img class="mx-auto pb-12" src="../assets/images/testresult.webp" alt="" />
          <span class="leading-normal max-w-sm w-full text-xl bg-black text-white font-bold text-center">
            Awarded the UK-Egypt Higher Education Climate Change Partnerships
            <a class="underline underline-offset-[3px]"
              href="https://www.linkedin.com/feed/hashtag/?keywords=grant&highlightedUpdateUrns=urn%3Ali%3Aactivity%3A6919276232517820417">Grant</a>
            for 12 months
          </span>
        </div>
        <div class="flex justify-center py-14">
          <iframe class="max-h-[500px] overflow-y-scroll"
            src="https://www.linkedin.com/embed/feed/update/urn:li:share:6919276231406317568" height="745" width="504"
            frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
        </div>
        <div>
          <span class="text-xl bg-black text-white font-bold text-center leading-normal">&nbsp; PAST EVENTS &nbsp
          </span>
          <div class="flex gap-8 justify-center pt-16 flex-wrap pb-12">
            <div class="relative">
              <div class="swiper mySwiper3 relative max-w-[317px] !h-[calc(100%_+_40px)]">
                <div class="swiper-wrapper w-full ">
                  <div class="swiper-slide !h-auto">
                    <img src="../assets/images/WithForgeinDR.webp" alt="Event"
                      class="max-w-[317px] max-h-[458px] object-cover" />
                  </div>
                  <div class="swiper-slide !h-auto">
                    <img src="../assets/images/WithSayedSaify.webp" alt="Event"
                      class="max-w-[317px] max-h-[458px] object-cover" />
                  </div>
                </div>
                <div class="custom-swiper-button-prev3">
                  <img class="w-5 h-5 rotate-180" src="../assets/images/chevronicon.webp" alt="" />
                </div>
                <div class="custom-swiper-button-next3">
                  <img class="w-5 h-5" src="../assets/images/chevronicon.webp" alt="" />
                </div>
                <div class="swiper-pagination !bottom-3 absolute"></div>
              </div>
            </div>
            <div class="flex flex-col gap-6 md:pt-0 pt-10">
              <img class="w-[317px] h-auto" src="../assets/images/lecture1.webp" alt="">
              <img class="w-[317px] h-auto" src="../assets/images/lecture2.webp" alt="">
              <img class="w-[317px] h-auto" src="../assets/images/lecture3.webp" alt="">
            </div>
            <div class="relative">
              <div class="swiper mySwiper2 relative max-w-[317px]  !h-[calc(100%_+_40px)]">
                <div class="swiper-wrapper w-full ">
                  <div class="swiper-slide !h-auto">
                    <img src="../assets/images/event1.webp" alt="Event"
                      class="max-w-[317px] max-h-[458px] object-cover" />
                  </div>
                  <div class="swiper-slide !h-auto">
                    <img src="../assets/images/event2.webp" alt="Event"
                      class="max-w-[317px] max-h-[458px] object-cover" />
                  </div>
                  <div class="swiper-slide !h-auto">
                    <img src="../assets/images/event3.webp" alt="Event"
                      class="max-w-[317px] max-h-[458px] object-cover" />
                  </div>
                  <div class="swiper-slide !h-auto">
                    <img src="../assets/images/event4.webp" alt="Event"
                      class="max-w-[317px] max-h-[458px] object-cover" />
                  </div>
                </div>
                <div class="custom-swiper-button-prev2">
                  <img class="w-5 h-5 rotate-180" src="../assets/images/chevronicon.webp" alt="" />
                </div>
                <div class="custom-swiper-button-next2">
                  <img class="w-5 h-5" src="../assets/images/chevronicon.webp" alt="" />
                </div>
                <div class="swiper-pagination !bottom-3 absolute"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="bg-black h-28">
      <div class="text-center flex flex-col justify-center items-center h-full container">
        <h1 class="text-white md:text-3xl text-2xl font-bold">Contact US</h1>
      </div>
    </div>
    <div class="">
      <section class="bg-cyanBlue">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
          <div class="mx-auto max-w-screen-md sm:text-center">
            <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-white sm:text-4xl dark:text-white">Ask Us Any
              Question!</h2>
            <p class="mx-auto mb-8 max-w-2xl font-light text-gray-500 md:mb-12 sm:text-xl dark:text-gray-400">Your
              questions, comments, and feedback are important to us. We're here to assist you in any way we can.</p>
            <form action="#">
              <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                <div class="relative w-full">
                  <label for="email" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                    address</label>
                  <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 " fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                      <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                  </div>
                  <input
                    class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-none focus:outline-none focus:border-primary-500  dark:focus:border-primary-500"
                    placeholder="Enter your email" type="email" id="email" required="">
                </div>
                <div>
                  <button type="submit"
                    class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send</button>
                </div>
              </div>
              <div class="flex items-center gap-2 text-gray-400 max-w-screen-sm mx-auto">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mx-auto mb-6 h-8 w-8 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>

                <div class=" text-sm text-left dark:text-gray-300">Or contact us through Whatsapp or Calling <a
                    class="text-darkYellow duration-300 ease-in-out transition"
                    href="https://wa.link/8i26zd" target="_blank">+201070191322</a> </div>
              </div>
            </form>
          </div>
        </div>
      </section>

    </div>
  </section>
  <!--FOOTER HERE-->
  <footer class="bg-black">
    <section class="bg-darkYellow">
      <div class="flex justify-center items-center h-28">
        <img class="max-w-[136px] max-h-[60px]" src="../assets/images/alexunivlogo.webp" alt="alexunivlogo" />
      </div>
    </section>
    <div class="container px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
      <nav class="flex flex-wrap justify-center -mx-5 -my-2">
        <div class="px-5 py-2">
          <a href="../html/index.php"
            class="text-base leading-6 text-gray-500 hover:text-darkYellow transition-all duration-300 hover:transition-all hover:duration-300 relative hover:bottom-4 bottom-0">
            Home
          </a>
        </div>
        <div class="px-5 py-2">
          <a href="../html/enroll-now.html"
            class="text-base leading-6 text-gray-500 hover:text-darkYellow transition-all duration-300 hover:transition-all hover:duration-300 relative hover:bottom-4 bottom-0">
            Enroll Now
          </a>
        </div>
        <div class="px-5 py-2">
          <a href="../html/courses.html"
            class="text-base leading-6 text-gray-500 hover:text-darkYellow transition-all duration-300 hover:transition-all hover:duration-300 relative hover:bottom-4 bottom-0">
            Courses
          </a>
        </div>
        <div class="px-5 py-2">
          <a href="../html/books.html"
            class="text-base leading-6 text-gray-500 hover:text-darkYellow transition-all duration-300 hover:transition-all hover:duration-300 relative hover:bottom-4 bottom-0">
            Books
          </a>
        </div>
        <div class="px-5 py-2">
          <a href="../html/feedback.html"
            class="text-base leading-6 text-gray-500 hover:text-darkYellow transition-all duration-300 hover:transition-all hover:duration-300 relative hover:bottom-4 bottom-0">
            Feedbacks
          </a>
        </div>
        <div class="px-5 py-2">
          <a href="../html/about.html"
            class="text-base leading-6 text-gray-500 hover:text-darkYellow transition-all duration-300 hover:transition-all hover:duration-300 relative hover:bottom-4 bottom-0">
            About
          </a>
        </div>
        <div class="px-5 py-2">
          <a href="../html/faq.html"
            class="text-base leading-6 text-gray-500 hover:text-darkYellow transition-all duration-300 hover:transition-all hover:duration-300 relative hover:bottom-4 bottom-0">
            FAQ
          </a>
        </div>
      </nav>
      <div class="flex flex-col items-center text-base leading-6 text-gray-400">
        <p class="text-lg leading-6 font-bold text-darkYellow">
          All About Accounting
        </p>
        <p class="text-center w-[182px]">Our Social Media</p>
      </div>
      <div class="flex justify-center mt-6 space-x-6">
        <a target="_blank" href="https://www.facebook.com/AllAboutAccountingFB"
          class="text-gray-400 hover:text-darkYellow transition-all duration-300">
          <span class="sr-only">Facebook</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
        <a href="https://www.linkedin.com/company/all-about-accounting-institute/" target="_blank"
          class="text-gray-400 hover:text-darkYellow transition-all duration-300">
          <span class="sr-only">Linkedin</span>
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentcolor" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z">
              </path>
              <path
                d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z">
              </path>
              <path
                d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z">
              </path>
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z">
              </path>
            </g>
          </svg>
        </a>
        <a target="_blank" href="https://www.youtube.com/@AAAccounting"
          class="text-gray-400 hover:text-darkYellow transition-all duration-300">
          <span class="sr-only">Youtube</span>
          <svg class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 461.001 461.001" xml:space="preserve"
            fill="currentcolor">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <g>
                <path
                  d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728 c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137 C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607 c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z">
                </path>
              </g>
            </g>
          </svg>
        </a>
        <a href="https://www.instagram.com/aaacounting_com/" target="_blank"
          class="text-gray-400 hover:text-darkYellow transition-all duration-300">
          <span class="sr-only">Instagram</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
        <a href="https://www.tiktok.com/@all_about_accounting" target="_blank"
          class="text-gray-400 hover:text-darkYellow transition-all duration-300">
          <span class="sr-only">Tiktok</span>
          <svg class="w-6 h-6" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
            fill="currentcolor">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <defs></defs>
              <path class="cls-1"
                d="M12.94,1.61V15.78a2.83,2.83,0,0,1-2.83,2.83h0a2.83,2.83,0,0,1-2.83-2.83h0a2.84,2.84,0,0,1,2.83-2.84h0V9.17h0A6.61,6.61,0,0,0,3.5,15.78h0a6.61,6.61,0,0,0,6.61,6.61h0a6.61,6.61,0,0,0,6.61-6.61V9.17l.2.1a8.08,8.08,0,0,0,3.58.84h0V6.33l-.11,0a4.84,4.84,0,0,1-3.67-4.7H12.94Z">
              </path>
            </g>
          </svg>
        </a>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./js/swiper.js"></script>
  <script src="./js/app.js"></script>
</body>

</html>