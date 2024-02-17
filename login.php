<?php
session_start();

if(isset($_SESSION['loggedInStatus'])){
    header('Location: ./index.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/images/icon.ico" />
    <link href="../assets/css/build.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/input.css">
    <title>All About Accounting - Login</title>
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
                          <a href="../html/login.php">
                  <img class="w-5 h-5" src="../assets/images/login.svg" />
                </a>
                        </button>
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
                                <a class="duration-300 transition ease-in-out hover:text-darkYellow text-[#FFFFFFDE]"
                                    href="../html/index.html">Home</a>
                            </li>
                            <li class="nav__item relative">
                                <a class="duration-300 transition ease-in-out hover:text-darkYellow text-[#FFFFFFDE]"
                                    href="../html/enroll-now.html">Enroll
                                    Now</a>
                            </li>
                            <li class="nav__item relative nav__item-child">
                                <a class="duration-300 transition ease-in-out hover:text-darkYellow text-[#FFFFFFDE] !flex gap-2"
                                    href="../html/courses.html" data-toggle="nav__dropdown">Courses
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentcolor"
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
                              <a href="../html/login.php">
                  <img class="w-5 h-5" src="../assets/images/login.svg" />
                </a>
                            </button>
                        </ul>
                    </nav>
                    <!-- navigation menu end -->
                </div>
            </div>
        </header>
        <!-- header end -->
    </div>
    <div class="md:flex md:h-full">
        <div class="w-1/2 md:block hidden">
            <img class="h-full object-cover"
                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/authentication/background.jpg"
                alt="">
        </div>
        <div style="padding-top: 200px;" class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 md:w-1/2">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-20 w-auto" src="../assets/images/AAAlogo.webp" alt="Your Company">
                <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log in to your
                    account</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

            <?php
                    if(isset($_SESSION['errors']) && count($_SESSION['errors']) > 0){
                        foreach($_SESSION['errors'] as $error){
                            ?>
                            <div class="alert alert-warning"><?= $error; ?></div>
                            <?php
                        }
                        unset($_SESSION['errors']);
                    }

                    if(isset($_SESSION['message'])){
                        echo '<div class="alert alert-success">'.$_SESSION['message'].'</div>';
                        unset($_SESSION['message']);
                    }
                    ?>
                <form class="space-y-6" action="login-code.php" method="POST">
                   
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                            address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="duration-300 ease-in-out transition block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none pl-3 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password"
                                class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                            <div class="text-sm">
                                <a href="#"
                                    class="font-semibold text-cyanBlue hover:text-darkYellow duration-300 transition ease-in-out">Forgot
                                    password?</a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="duration-300 ease-in-out transition block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm focus:outline-none pl-3 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <button type="submit" name="loginBtn"
                            class="flex w-full justify-center rounded-md bg-cyanBlue px-3 py-1.5 text-sm font-semibold leading-6 text-white duration-300 transition ease-in-out hover:bg-darkYellow shadow-sm hover:text-cyanBlue focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log
                            in</button>
                    </div>
                </form>

                <p class="mt-10 text-center text-sm text-gray-500">
                    Not a member?
                    <a href="register.php"
                        class="font-semibold leading-6 text-cyanBlue hover:text-darkYellow duration-300 transition ease-in-out">Sign
                        up now</a>
                </p>
            </div>
        </div>

    </div>
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
                    <svg class="w-6 h-6" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1"
                        xmlns="http://www.w3.org/2000/svg" fill="currentcolor">
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
    <script src="../js/app.js"></script>
</body>

</html>