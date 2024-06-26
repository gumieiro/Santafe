<?php
include_once ("assets/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/index.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>

<body>
    <header id="image-header">
        <nav id="navbar">
            <img id="logo-header" src="logos/Color logo - no background.png" alt="">

            <ul id="nav-list">
                <li class="nav-item active">
                    <a href="">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="#services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a href="">ABOUT US </a>
                </li>
                <li class="nav-item">
                    <a href="">PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a href="">CONTACT US</a>
                </li>
            </ul>

            <button id="mobile-btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

        <div id="mobile-menu">

            <ul id="mobile-nav-list">
                <li class="nav-item">
                    <a href="">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="#services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a href="">ABOUT US </a>
                </li>
                <li class="nav-item">
                    <a href="">PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a href="">CONTACT US</a>
                </li>
            </ul>
        </div>

        <div id="text-header">

            <h1 class="">We're here to turn your <br>dreams into reality

            </h1>
            <p>Discover the difference that excellence in construction can make</p>

            <button id="btn-quote-header">GET A QUOTE</button>
            <button id="btn-project-header">VIEM PROJECTS</button>
        </div>

    </header>

    <div class="image-bg-services" id="services">
        <section id="content-services">
            <div id="text-service">
                <h1 class="title-services">Services</h1>
                <h2 class="title-two-services"> Discover what we are capable of </h2>
            </div>

            <div id="text-box-services">
                <p>Transform your dreams of a perfect home into a tangible<br> reality reality with our comprehensive
                    home construction service. <br>
                    Our proficient and experienced team takes care of <br>everything, from the initial design to the
                    final delivery,<br> ensuring quality, efficiency, and customer service, and <br> our team is
                    committed to surpassion your expectations at <br>every step of the process</p>
                <button id="btn-services">Viem All Services</button>
            </div>
        </section>

        <figure id="images-content-services">
            <img id="image-one" src="image/Business-Intelligence0001.jpg" width="450px" alt="">
            <img id="image-two" src="image/working00.jpg" width="190px" alt="">
        </figure>
    </div>

    <section id="about-us-container">
        <h1 class="title-about-us">About Us</h1>
        <h2 id="border-about-us">We are more than just a construction company</h2>


        <div id="cards-about-us">
            <section class="card-one">

                <div class="content-card">
                    <h1>25 Years of experience</h1>
                    <p>There are many variations of passages<br>
                        of lorem ipsum but the majority have <br> alteration.</p>
                </div>

            </section>


            <section class="card-two">
                <div class="content-card">
                    <h1>Efficiency and <br> Professionalism</h1>
                    <p>There are many variations of passages<br>
                        of lorem ipsum but the majority have <br> alteration.</p>
                </div>

            </section>
            <section class="card-three">
                <div class="content-card">
                    <h1>Sustainable & Eco-Friendly</h1>
                    <p>There are many variations of passages<br>
                        of lorem ipsum but the majority have <br> alteration.</p>
                </div>

            </section>
        </div>
    </section>

    <section id="projects" class="img_bg-project">

        <div class="main-project">
            <div class="border-header-projects">
                <h1 class="title-all">Projects</h1>
                <small>We take pride in showcasing our completd projects</small>
            </div>

            <div class="text-project">
                <p>At constructora santa Fe, We take pride in showcasing our completed projects, works, and
                    <br>Moriginal creations that reflect our dedication to excellence and innovation in construction.
                </p>
                <button class="btn-projects">See All Projects</button>
            </div>
        </div>

        <div class="lastest-projects">
            <img src="image/liner.png" alt="">
            <h1 class="title-all">Lastest Projects</h1>
        </div>

        <div class="container-slider">

            <button class="arrow-left control" aria-label="Previous image"><img src="image/arrow-left.png" alt=""
                    srcset=""></button>

            <div class="gallery-wrapper">
                <div class="gallery">

                    <img src="image/img-left.png" alt="" class="item current-item">
                    <img src="image/img-center.png" alt="" class="item current-item">
                    <img src="image/img-right.png" alt="" class="item current-item">

                </div>
            </div>
            <button class="arrow-right control" aria-label="Next Image"><img src="image/arrow-right.png"
                    alt=""></button>
        </div>

    </section>

    <section class="testimonials">
        <div class="header-testimonials">
            <h1>Clients Testimonials </h1>
            <small>See What they are talking about us </small>
        </div>
        <img class="icon-quote-testimonials" src="image/icon-quote.png" alt="">
    </section>
    <img class="line-botton-testimonials" src="image/liner-box-bottom.png" alt="">

    <section class="client-testimonials carousel">

        <button class="btn-testimonials-left carousel-control prev">
            <img src="image/arrow-left.png" id="btn-left-clients" alt="" srcset="">
        </button>
        <div class="carousel-inner">
            <div class="card-testimonials carousel-item active">
                <div class="card-content-testimonials">

                    <div class="image-clients">
                        <img src="image/executive-presence.jpeg" alt="">
                    </div>
                    <div class="name-profession">
                        <span class="name-testimonials">
                            Evylin Linch
                        </span>
                        <span class="profession-testimonials">
                            Business Manager
                        </span>
                    </div>
                    <div class="rating">
                        <img src="image/review-clients-star.png" alt="">
                    </div>

                    <div class="text-testimonials">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid rerum saepe iusto inventore
                            cupiditate sed!
                        </p>
                        <img class="line-card-testimonials" src="image/liner-box-bottom.png" alt="">
                    </div>


                </div>

            </div>

            <div class="card-testimonials carousel-item">
                <div class="card-content-testimonials">

                    <div class="image-clients">
                        <img src="image/istockphoto-1145045107-612x612.jpg" alt="">
                    </div>
                    <div class="name-profession">
                        <span class="name-testimonials">
                            Evylin Linch
                        </span>
                        <span class="profession-testimonials">
                            Business Manager
                        </span>
                    </div>
                    <div class="rating">
                        <img src="image/review-clients-star.png" alt="">
                    </div>

                    <div class="text-testimonials">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid rerum saepe iusto inventore
                            cupiditate sed!
                        </p>
                        <img class="line-card-testimonials" src="image/liner-box-bottom.png" alt="">
                    </div>


                </div>

            </div>

            <div class="card-testimonials carousel-item">
                <div class="card-content-testimonials">

                    <div class="image-clients">
                        <img src="image/headshot-with-client-testimonial.jpg" alt="">
                    </div>
                    <div class="name-profession">
                        <span class="name-testimonials">
                            Evylin Linch
                        </span>
                        <span class="profession-testimonials">
                            Business Manager
                        </span>
                    </div>
                    <div class="rating">
                        <img src="image/review-clients-star.png" alt="">
                    </div>

                    <div class="text-testimonials">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid rerum saepe iusto inventore
                            cupiditate sed!
                        </p>
                        <img class="line-card-testimonials" src="image/liner-box-bottom.png" alt="">
                    </div>


                </div>

            </div>
        </div>
        <button class="btn-testimonials-right carousel-control next">
            <img src="image/arrow-right.png" id="btn-right-clients" alt="" srcset="">
        </button>
    </section>
    


    <div class="tell-us image-tell-us">

        <div class="text-tell-us">
            <h1>Tell Us About <br> Your Necessity</h1>
            <small>Let one of our specialists get <br> in touch and help you out</small>
        </div>

        <div class="form-tell-us">
            <form id="leadForm">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?? null; ?>">
                <div class="form-header-tell-us">
                    <div class="title-tell-us">
                        <h1>Fill up the form:</h1>
                    </div>
                </div>

                <div class="input-group">

                    <div class="group-box-one">
                        <div class="input-box">
                            <label for="fullName"></label>
                            <input id="fullName" type="text" name="fullName" placeholder="Full Name" required>
                        </div>

                        <div class="input-box">
                            <label for="fullAdress"></label>
                            <input id="fullAdress" type="text" name="fullAdress" placeholder="Full Adress" required>
                        </div>
                    </div>
                    <div class="group-box-two">
                        <div class="input-box">
                            <label for="email"></label>
                            <input id="email" type="email" name="email" placeholder="e-mail" required>
                        </div>

                        <div class="input-box">
                            <label for="chooseService"></label>
                            <select id="chooseService" name="chooseService">
                                <option value="Choose a Service">Choose a Service |</option>
                                <option value="SP">SP</option>
                                <option value="RJ">RJ</option>
                                <option value="PB">PB</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="input-group-three">

                    <div class="box-zip-phone">
                        <div class="input-box">
                            <label for="phoneNumber"></label>
                            <input id="phoneNumber" type="tel" name="PhoneNumber" placeholder="Phone Number" required>
                        </div>
                        <div class="input-box">
                            <label for="zipCode"></label>
                            <input id="zipCode" type="search" name="zipCode" placeholder="Zip Code" required>
                        </div>
                    </div>

                    <div class="box-mgs">
                        <div class="input-box">
                            <label for="msg"></label><br>
                            <textarea id="msg" name="msg" rows="4" cols="50" placeholder="How can we help?"></textarea>
                        </div>
                    </div>
                </div>

                <div class="send-button">
                    <button class="btn" type="button" id="sendLeadForm">Send</a> </button>
                </div>
            </form>
        </div>
    </div>

    <footer class="image-footer-bg">
        <div id="footer_content">

            <div id="footer_contacts">
                <img src="image/santafe-logo-footer.png" alt="" srcset="">

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="houzz">
                        <img src="image/houzz-icon.png" alt="">
                    </a>
                </div>
            </div>

            <ul class="footer-list">
                <li>
                    <h3>SANTA FE CONSTRUCTORA</h3>
                    <small>Lic. 1107963</small>
                </li>
                <li>
                    <img src="image/localIcon.png" alt="" srcset="">
                    <a href="#" class="footer-link">4574 Clairemont Drive, San Diego - CA92117</a>
                </li>
                <li>

                    <img src="image/phoneIcon.png" alt=""> <br>
                    <a href="#" class="footer-link">+1 (760)840-5917</a>
                    <br>
                    <a href="#" class="footer-link">+1 (760)450-6205</a>
                </li>
                <li>
                    <img src="image/mailIcon.png" alt="" srcset=""><br>
                    <a href="#" class="footer-link">caesar@santafecon.com</a> <br>
                    <a href="#" class="footer-link">info@ssntafecon.com</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Site Map</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Home</a>
                </li>
                <li>
                    <a href="#" class="footer-link">About Us</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Services</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Projects</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Contact</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Term & Conditions</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Privacy Police</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3></h3>

                <button id="btn-quote-footer">GET A QUOTE</button>

                <button id="btn-project-footer">VIEM PROJECTS</button>
            </div>
        </div>

        <div id="footer_copyright">
            &#169
            2024 all rights reserved
        </div>
    </footer>


    <script src="Js/index.js"></script>
</body>

</html>