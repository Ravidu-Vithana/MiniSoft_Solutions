<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="minisoft / mini / soft / solutions / minisoftsolutions / mini soft solution / team mini soft / about mini soft / mini soft works / portfolio / request mini soft" />
    <meta name="keywords" content="mini soft , mini , soft , solutions , software solutions , minisoftsolutions , mini soft solution , team mini soft , about mini soft ,  mini soft works ,  portfolio ,  request mini soft , small , software , company , software company , software development , development , website , web design , web development , programming , web programming , desktop application , desktop , mobile applications , mobile , database , ui , ux , uiux , responsive , responsive design , graphic , graphic design , post , poster , flyer , business , business card , boucher , leaflet " />
    <title>Home - Mini Soft Solutions</title>
    <link rel="icon" href="./assets/images/logo_icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.3.3/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.3.3/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="./styles.css">
</head>

<body class="font-sans">

    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <div class="bg-primary flex flex-col items-center" id="wrapper"> <!-- WRAPPER DIV -->

        <!-- HEADER START -->
        <nav class="flex flex-col md:flex-row md:justify-between py-2 px-5 sticky top-0 w-full z-10 bg-header text-white">
            <div class="flex justify-between items-center w-full md:w-40 p-0">
                <img src="./assets/images/logo.png" class="rounded-full w-28 xs:w-32 sm:w-36 object-contain">
                <div class="px-4 cursor-pointer md:hidden transition-all duration-300 ease-out" id="menuButton" onclick="revealMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
            </div>

            <!-- DESKTOP LINKS START -->
            <div class="md:flex grow justify-end py-0 pr-4 hidden">
                <ul class="flex flex-col items-center md:flex-row md:gap-24 gap-2">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#ourServices">Services</a>
                    </li>
                    <li>
                        <a href="#aboutUs">About</a>
                    </li>
                    <li>
                        <a href="#writeToUS" class="whitespace-nowrap">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- DESKTOP LINKS START -->

            <!-- MOBILE LINKS START -->
            <div class="absolute self-center w-3/4 top-20 flex grow justify-center p-6 origin-top duration-500 scale-y-0 opacity-0 bg-header rounded-lg" id="menu">
                <ul class="flex flex-col items-center md:flex-row md:gap-24 gap-4">
                    <li>
                        <a href="#" class="text-lg font-bold">Home</a>
                    </li>
                    <li>
                        <a href="#ourServices" class="text-lg font-bold">Services</a>
                    </li>
                    <li>
                        <a href="#aboutUs" class="text-lg font-bold">About</a>
                    </li>
                    <li>
                        <a href="#writeToUS" class="text-lg font-bold whitespace-nowrap">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- MOBILE LINKS START -->
        </nav>
        <!-- HEADER END -->

        <div class="p-0 bg-cover bg-center bg-no-repeat flex flex-col items-center bg-[url('./assets/images/circles1.png')] text-white"> <!-- DIV WITH BACKGROUND CIRCLES1 -->

            <!-- HERO START -->
            <div class="flex items-center w-full px-0 relative overflow-hidden bg-[url('./assets/images/heroGlow.png')] bg-[length:100%_100%]">
                <div class="flex flex-[1_0_auto] w-full lg:w-[570px] flex-col justify-center md:pl-20 md:pr-24 px-8 py-24 gap-3 font-bold">
                    <span class="text-4xl/relaxed sm:text-5xl/relaxed uppercase font-roboto mb-2">We develop the best solutions for your need</span>
                    <span class="text-base/8">
                        Whether you're a startup with a groundbreaking idea or an established enterprise seeking digital transformation, Mini Soft Solutions is your trusted partner on the journey to success. Let's collaborate and turn your vision into reality.
                    </span>
                    <div class="buttonGrad w-max py-2 px-4 rounded-lg cursor-pointer flex hover:shadow-pink-300 hover:shadow-lg">
                        <a class="font-bold text-black" href="#writeToUS">Lets Talk </a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-1 w-6 h-6 stroke-black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </div>
                </div>
                <div class="lg:flex w-1/2 shrink hidden pr-8">
                    <img src="./assets/images/homeImg1.png" class="object-contain opacity-75">
                </div>
                <img src="./assets/images/ellipsePink.png" class="w-20 absolute top-1 left-0">
                <img src="./assets/images/ellipseOrange.png" class="w-40 absolute -right-6 sm:right-10 bottom-7">
                <img src="./assets/images/ellipseBlue.png" class="w-20 absolute bottom-20 left-[45%] sm:left-[35%]">
                <img src="./assets/images/ellipseAqua.png" class="w-20 absolute top-8 left-[30%]">
            </div>
            <!-- HERO END -->

            <!-- ABOUT US START -->
            <div class="flex flex-col lg:flex-row w-full p-4 md:p-8 mb-8 bg-[url('./assets/images/aboutUsGlow.png')] bg-[length:60%_140%] bg-right bg-no-repeat" id="aboutUs">
                <div class="flex flex-1 items-center justify-center p-8" data-aos="fade-up" data-aos-delay="150" data-aos-duration="750" data-aos-easing="ease-out">
                    <div class="w-fit p-8 rounded-2xl bg-gray-300/20">
                        <img src="./assets/images/homeImg2.png" class="object-contain">
                    </div>
                </div>
                <div class="flex flex-1 flex-col p-0" data-aos="fade-up" data-aos-duration="750" data-aos-delay="150" data-aos-easing="ease-out">
                    <div class="flex flex-col items-center md:px-20 px-10 py-8 gap-3">
                        <span class="text-4xl font-bold uppercase py-0 font-roboto text-center lg:text-start tracking-widest">About Us</span>
                        <span class=" text-center lg:text-start">
                            At Mini Soft Solutions, we're passionate about crafting innovative software solutions that redefine industries and empower businesses. With a team of dedicated experts, we combine cutting-edge technology and strategic thinking to deliver top-notch software tailored to meet your unique needs.
                        </span>
                    </div>
                    <div class="flex flex-col items-center md:px-20 px-10 py-8 gap-3">
                        <span class="text-4xl font-bold uppercase py-0 font-roboto text-center lg:text-start tracking-widest">Our Mission</span>
                        <span class=" text-center lg:text-start">
                            At Mini Soft Solutions, our mission is to transform your digital vision into reality. We believe in pushing the boundaries of technology to deliver cutting-edge software solutions that not only meet but exceed your expectations. Your success is our driving force, and we are committed to helping your business thrive in the ever-evolving online landscape
                        </span>
                    </div>
                </div>
            </div>
            <!-- ABOUT US END -->
            <!-- ADDITIONAL DESCRIPTION -->
            <div class="flex flex-col lg:flex-row md:p-8 bg-[url('./assets/images/additionaldescGlow.png')] bg-[length:60%_130%] bg-left bg-no-repeat">
                <div class="flex flex-1 flex-col p-0" data-aos="fade-up" data-aos-duration="750" data-aos-delay="150" data-aos-easing="ease-out">
                    <div class="flex flex-1 flex-col items-center md:px-20 px-10 py-8 gap-3">
                        <span class="text-4xl font-bold uppercase py-0 font-roboto text-center lg:text-start tracking-widest">Why Choose Mini Soft Solutions</span>
                        <div class="flex flex-col text-start gap-1">
                            <span class="font-bold">Expertise:</span>
                            <span class="mb-4">Our team comprises seasoned professionals well-versed in the latest technologies and industry best practices.</span>
                            <span class="font-bold">Innovation:</span>
                            <span class="mb-4">We thrive on innovation, constantly exploring new ideas and approaches to deliver cutting-edge solutions.</span>
                            <span class="font-bold whitespace-nowrap">Client-Centric Approach:</span>
                            <span class="mb-4">Your success is our priority. We listen, collaborate, and tailor solutions to meet your specific needs.</span>
                            <span class="font-bold">Reliability:</span>
                            <span class="mb-4">Count on us for timely delivery, transparent communication, and ongoing support.</span>
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col items-center md:px-20 px-10 py-8 gap-3">
                        <span class="text-4xl font-bold uppercase py-0 font-roboto text-center lg:text-start tracking-widest">What Sets Us Apart</span>
                        <span class=" text-center lg:text-start">
                            At the core of our ethos lies a relentless pursuit of excellence. We don't just develop software; we engineer experiences. Our collaborative approach ensures that every project benefits from diverse perspectives and expertise, resulting in solutions that are not only functional but also intuitive and user-centric.
                        </span>
                    </div>
                </div>
                <div class="flex flex-1 items-center justify-center p-8" data-aos="fade-up" data-aos-duration="750" data-aos-delay="150" data-aos-easing="ease-out">
                    <div class=" max-w-[35rem] p-8 rounded-2xl bg-gray-300/20">
                        <img src="./assets/images/homeImg3.png" class="object-contain">
                    </div>
                </div>
            </div>
            <!-- ADDITIONAL DESCRIPTION -->
        </div>

        <div class="p-0 w-full bg-cover bg-center bg-no-repeat flex flex-col items-center bg-[url('./assets/images/circles2.png')]"> <!-- DIV WITH BACKGROUND CIRCLES2 -->
            <div class="flex flex-col items-center w-full bg-[url('./assets/images/servicesGlow.png')] bg-[length:100%_170%] bg-center bg-no-repeat text-white">
                <!-- OUR SERVICES START -->
                <div class="flex flex-col items-center py-8 mb-8 w-full" id="ourServices">
                    <span class="text-4xl font-bold uppercase font-roboto mb-6 tracking-widest">Our Services</span>
                    <div class="flex flex-row justify-center flex-wrap gap-8 w-4/5 text-gray-300">
                        <div class="card card-services" data-aos="fade-up" data-aos-duration="750" data-aos-delay="150">
                            <p class="text-2xl mb-6">Web Development</p>
                            <p class="text-sm">"Mini Soft Solutions offers expert web development services, crafting innovative and responsive websites tailored to your unique business needs."</p>
                        </div>
                        <div class="card card-services" data-aos="fade-up" data-aos-duration="750" data-aos-delay="150">
                            <p class="text-2xl mb-6">Desktop Application Development</p>
                            <p class="text-sm">"Mini Soft Solutions excels in desktop application development, creating efficient and user-friendly software solutions for various industries and purposes."</p>
                        </div>
                        <div class="card card-services" data-aos="fade-up" data-aos-duration="750" data-aos-delay="150">
                            <p class="text-2xl mb-6">Mobile Application Development</p>
                            <p class="text-sm">"Mini Soft Solutions specializes in mobile app development, delivering intuitive and feature-rich applications to enhance user experiences across platforms."</p>
                        </div>
                        <div class="card card-services" data-aos="fade-up" data-aos-duration="750" data-aos-delay="150">
                            <p class="text-2xl mb-6">Graphics Designing</p>
                            <p class="text-sm">"Mini Soft Solutions provides top-notch graphic design services, creating captivating visuals that elevate brand identity and engage audiences effectively."</p>
                        </div>
                    </div>
                </div>
                <!-- OUR SERVICES END -->
                <!-- ICON SET START -->
                <div class="flex justify-center w-[85vw] rounded-xl border-[1px] border-[#939393] bg-gray-800 py-4 mb-8" data-aos="fade-up" data-aos-duration="750" data-aos-delay="150">
                    <div class="overflow-auto shrink flex w-max divide-x-2 divide-[#939393]" style="scrollbar-width: thin;">
                        <div class="px-8 w-28 shrink-0"><img src="./assets/images/icon_css5.png" class="object-contain" alt=""></div>
                        <div class="px-8 w-28 shrink-0"><img src="./assets/images/icon_php.png" class="object-contain" alt=""></div>
                        <div class="px-8 w-28 shrink-0"><img src="./assets/images/icon_mysql.png" class="object-contain" alt=""></div>
                        <div class="px-8 w-28 shrink-0"><img src="./assets/images/icon_photoshop.png" class="object-contain" alt=""></div>
                        <div class="px-8 w-28 shrink-0"><img src="./assets/images/icon_bootstrap.png" class="object-contain" alt=""></div>
                        <div class="px-8 w-28 shrink-0"><img src="./assets/images/icon_tailwind.png" class="object-contain" alt=""></div>
                        <div class="px-8 w-28 shrink-0"><img src="./assets/images/icon_laravel.png" class="object-contain" alt=""></div>
                        <div class="px-8 w-28 shrink-0"><img src="./assets/images/icon_css3.png" class="object-contain" alt=""></div>
                        <div class="px-8 w-28 shrink-0"><img src="./assets/images/icon_js.png" class="object-contain" alt=""></div>
                        <div class="px-8 w-28 shrink-0"><img src="./assets/images/icon_wordpress.png" class="object-contain" alt=""></div>
                        <div class="px-8 w-28 shrink-0"><img src="./assets/images/icon_figma.png" class="object-contain" alt=""></div>
                    </div>
                </div>
                <!-- ICON SET END -->
            </div>

            <!-- OUR TEMPLATES START -->
            <!-- <div class="flex flex-col items-center py-8 px-2 mb-8 w-full text-white">
                <span class="text-4xl text-center font-bold uppercase py-0 font-roboto mb-4 tracking-widest">Our Website Templates</span>
                <div class="carousel">
                    <div class="carousel-item">
                        <img src="./assets/images/sample1.png" class="object-cover" />
                    </div>

                    <div class="carousel-item">
                        <img src="./assets/images/sample2.png" class="object-cover" />
                    </div>

                    <div class="carousel-item">
                        <img src="./assets/images/sample1.png" class="object-cover" />
                    </div>

                    <div class="carousel-item">
                        <img src="./assets/images/sample2.png" class="object-cover" />
                    </div>

                    <button class="btn btn-next">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                    <button class="btn btn-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                </div>
            </div> -->
            <!-- OUR TEMPLATES END -->

            <!-- OUR TEAM START -->
            <div class="flex flex-col items-center py-8 mb-8 w-full bg-[url('./assets/images/ourTeamGlow.png')] bg-[length:100%_100%] bg-center bg-no-repeat text-white">
                <span class="text-4xl font-bold uppercase font-roboto mb-6 tracking-widest">Our Team</span>
                <div class="flex flex-row justify-center flex-wrap gap-4 w-4/5">
                    <div class="card card-team" data-aos="fade-up" data-aos-duration="750" data-aos-delay="100">
                        <div class="w-max h-max mb-4">
                            <img src="./assets/images/Pasindu.png" class="w-48 rounded-full">
                        </div>
                        <p class="font-bold">B.G Pasindu Dilshan</p>
                        <p class="font-bold">(CEO)</p>
                        <span class="px-10 text-gray-400">
                            Founder , CEO , Full-Stack Developer & Business Analyst of Mini Soft Solutions.
                        </span>
                    </div>
                    <div class="card card-team" data-aos="fade-up" data-aos-duration="750" data-aos-delay="250">
                        <div class="w-max h-max mb-4">
                            <img src="./assets/images/Ravidu.jpg" class="w-48 rounded-full">
                        </div>
                        <p class="font-bold">V.P.K.D. Ravidu Vithana</p>
                        <p class="font-bold">(Project Manager)</p>
                        <span class="px-10 text-gray-400">
                            Co-founder , Full-Stack Developer & Project Manager
                            of Mini Soft Solutions.
                        </span>
                    </div>
                    <div class="card card-team" data-aos="fade-up" data-aos-duration="750" data-aos-delay="400">
                        <div class="w-max h-max mb-4">
                            <img src="./assets/images/Yasiru.jpg" class="w-48 rounded-full">
                        </div>
                        <p class="font-bold"> H.M.Harshitha Yasiru Herath</p>
                        <p class="font-bold">(QA Tester)</p>
                        <span class="px-10 text-gray-400">
                            Full-Stack Developer & UI/UX Designer
                            of Mini Soft Solutions.
                        </span>
                    </div>
                    <div class="card card-team" data-aos="fade-up" data-aos-duration="750" data-aos-delay="700">
                        <div class="w-max h-max mb-4">
                            <img src="./assets/images/Deneth.jpg" class="w-48 rounded-full">
                        </div>
                        <p class="font-bold">E.M.Deneth Hasun Imanjana Perera</p>
                        <p class="font-bold">(Security Engineer)</p>
                        <span class="px-10 text-gray-400">
                            Full-Stack Developer & Client Relations Manager
                            of Mini Soft Solutions.
                        </span>
                    </div>
                </div>
            </div>
            <!-- OUR TEAM END -->

            <!-- WRITE TO US START -->
            <div class="w-full mb-8 bg-[url('./assets/images/contactUsGlow.png')] bg-[length:100%_110%] bg-left bg-no-repeat text-white">
                <div class="flex flex-col items-center justify-center bg-[url('./assets/images/rectangle.png')] bg-[length:90%_90%] bg-bottom bg-no-repeat w-full p-4" id="writeToUS" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150" data-aos-easing="ease-out">
                    <span class="text-4xl font-bold uppercase font-roboto mb-16 tracking-widest">Write To Us</span>
                    <div class="flex justify-center w-4/5 gap-12">
                        <div class="lg:flex flex-1 hidden">
                            <img src="./assets/images/homeImg4.png" class="object-contain">
                        </div>
                        <div class="bg-gray-700/30 flex flex-col flex-1 rounded-2xl p-6 gap-2">
                            <span>First Name</span>
                            <input type="text" class="inputField" id="fname">
                            <span>Last Name</span>
                            <input type="text" class="inputField" id="lname">
                            <span>Email</span>
                            <input type="email" class="inputField" id="email">
                            <span>Phone Number</span>
                            <form id="login" onsubmit="process(event)" class="flex flex-col md:flex-row gap-2 relative text-black">
                                <input id="phone" class="inputField" type="tel" name="phone" onkeyup="revokeVerifyStatus(event);" />
                                <button class="flex w-max py-1 px-4 rounded-lg cursor-pointer bg-cyan-500 enabled:hover:bg-cyan-600 disabled:cursor-not-allowed disabled:opacity-75 transition-all ease-in text-white" type="submit" id="verifyBtn">Verify</button>
                                <div class="alert alert-error absolute -top-20" style="display: none"></div>
                            </form>
                            <span>Message </span>
                            <textarea class="textField" id="description" maxlength="1000" placeholder="Max Characters: 1000"></textarea>
                            <input type="text" class="inputField verifyField hidden" placeholder="Verification Code">
                            <button class="w-max mt-4 py-2 px-4 rounded-lg enabled:cursor-pointer disabled:cursor-not-allowed flex enabled:hover:shadow-gray-950 bg-gray-950 enabled:hover:shadow-md disabled:opacity-40 self-center transition-all ease-in" onclick="sendMessage()" id="sendButton">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WRITE TO US END -->
        </div>

        <!-- FOOTER START -->
        <div class=" flex flex-col w-11/12 py-8 lg:pt-0 px-0 border-t-4 border-gray-700/50 divide-y-2 divide-gray-700/50 text-white">
            <div class="flex flex-col items-center lg:flex-row">
                <div class="flex items-center justify-center flex-auto w-80">
                    <img src="./assets/images/logo.png" class="w-64 sm:w-80">
                </div>
                <div class="flex flex-col flex-auto w-56 xs:w-72 sm:w-96 h-max py-16 gap-8">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        Kurunegala, Sri Lanka.
                    </span>
                    <div class="p-0 flex flex-col lg:flex-row gap-8">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            +94 70 294 4475
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                            <span>infominisoftsolutions</span>
                            <span>@gmail.com</span>
                        </span>
                    </div>
                    <div class="p-0 flex flex-col xs:flex-row gap-3 xs:gap-8">
                        <span>Social Media:</span>
                        <div class="p-0 gap-8 flex">
                            <a href="https://web.facebook.com/profile.php?id=61553706789042" target="_blank" title="Go To Facebook Page"><img src="./assets/images/icon_facebook.png" class="w-6 object-contain"></a>
                            <img src="./assets/images/icon_instagram.png" class="w-6 object-contain">
                            <img src="./assets/images/icon_linkedin.png" class="w-6 object-contain">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row px-4 divide-y-2 lg:divide-y-0 divide-gray-700/50">
                <div class="flex flex-col md:flex-row items-center gap-8 justify-between py-4">
                    <a href="#aboutUs" class="uppercase font-roboto">About Us</a>
                    <a href="#writeToUS" class="uppercase font-roboto">Contact Us</a>
                    <a href="./views/help.php" target="_blank" class="uppercase font-roboto hidden">Help</a>
                    <a href="./views/privacy.php" target="_blank" class="uppercase font-roboto">Privacy Policy</a>
                    <a class="uppercase font-roboto hidden">Disclaimer</a>
                </div>
                <div class="flex flex-1 justify-center lg:justify-end py-4">
                    <span class="font-roboto">Copyright &copy; 2023 • minisoft.inc</span>
                </div>
            </div>
        </div>
        <!-- FOOTER END -->
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="./assets/js/script.js"></script>
</body>

</html>