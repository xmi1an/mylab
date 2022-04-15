<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>My Lab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My Lab" />
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vendor\fontawesome-free\css\all.min.css">
    <!-- Swiper Slider css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" type="text/css" />
    <!-- Custom Css -->
    <link href="assets/css/LandSaystyle.css" rel="stylesheet" type="text/css" />

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="60">
    <!-- START NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top sticky">
        <div class="container">
            <a class="navbar-brand" href="index-3.html"><img src="img/mainlogo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu text-muted"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>

                    <?php if (isset($_SESSION['labid'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="laboratory/labdashboard.php">Dashboard</a>
                        </li>
                    <?php } else { ?>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Laboratory <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="nav-link" href="laboratory/labsignup.php">Signup</a></li>
                                <li><a class="nav-link" href="laboratory/lablogin.php">Login</a></li>
                                <li><a class="nav-link" href="laboratory/labhelp.php">Help</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="new-user-testing.php">Test Now</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>
                <!--end navbar-nav-->
                <ul class="list-inline mb-0 ps-lg-4 ms-2">
                    <li class="list-inline-item">
                        <a href="#" class="primary-link"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="primary-link"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="primary-link"><i class="mdi mdi-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <!--end collapse-->
        </div>
        <!--end container-->
    </nav>
    <!-- END NAVBAR -->

    <!--Slider-->
    <section class="home-slider slide mt-5" id="home">
        <div class="swiper-container homeslider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-color: #00091a;background-size: cover;background-position: center;">
                    <div class="bg-overlay"></div>
                    <div class="container-sm">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-center text-white">
                                    <h6 class="home-subtitle mb-4">Is your body feeling sick?</h6>
                                    <h1>Get safe testing with My Lab</h1>
                                    <p class="home-desc pt-3">Get a lab test done from the comfort of your home.</p>
                                    <div class="mt-4 pt-3">
                                        <a href="new-user-testing.php" class="btn btn-primary">Test Now</a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
                <!--end swiper-slide-->
                <div class="swiper-slide" style="background-color: #00091a;background-size: cover;background-position: center;">
                    <div class="bg-overlay"></div>
                    <div class="container-sm">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-center text-white">
                                    <h6 class="home-subtitle mb-4">Are You The Lab Manager? </h6>
                                    <h1>Get more orders by signing up with us</h1>
                                    <p class="home-desc pt-3"></p>
                                    <div class="mt-4 pt-3">
                                        <a href="#" class="btn btn-primary">Signup as Lab Manager</a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
                <!--end swiper-slide-->

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <!--end homeslider-->
    </section>
    <!--end Slider-->

    <!-- How it Works -->
    <section class="section bg-light" id="howitworkds">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h3>How It Works?</h3>
                        <!-- <p class="text-muted">Book Online</p> -->
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-10">
                    <div class="timeline-page position-relative py-4">
                        <div class="timeline-item mb-lg-5 pb-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="text-center mb-2 mb-lg-0">
                                        <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_fxvz0c.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player> -->
                                        <img class="img-fluid" src="https://redcliffelabsbackend.s3.amazonaws.com/media/gallary-file/None/c7b06f36-6203-4de5-b108-7b0c408142e0.png" alt="f">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="works-description-right text-start bg-light mx-lg-3 mx-4">
                                        <h5 class="fs-18">Book Online</h5>
                                        <p class="text-muted mb-2">Select a test and book appointment on My Lab.</p>
                                        <p class="text-muted">We offer a wide range of laboratory services that deliver accurate diagnostic lab test results. Browse the most trusted pathology labs here on My Lab </p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end timeline-item-->

                        <div class="timeline-item mb-5 pb-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="works-description-left text-start bg-light mx-lg-3 mx-4 text-lg-end">
                                        <h5 class="fs-18">Home Sample Collection</h5>
                                        <p class="text-muted mb-0">Certified My Lab agent visit your home for sample collection at selected slot time.
                                        </p>
                                        <p class="text-muted mb-0 mt-3">Regular health check-ups are vital for a healthy life. Daily health check-ups help in detecting diseases at the earliest following a timely treatment. Diagnostic tests are crucial for regular health check-ups. Due to a busy schedule, it is possible to forget daily health checks. My Lab provides blood sample testing at your doorstep conveniently.
                                        </p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6 order-first order-lg-last">
                                    <div class="text-center mb-5 mb-lg-0">
                                        <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_stbexyd1.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player> --><img class="img-fluid" src="https://redcliffelabsbackend.s3.amazonaws.com/media/gallary-file/None/891e8496-6271-4b94-a74f-5a1173c3edf3.png" alt="f">
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end timeline-item-->
                        <div class="timeline-item">
                            <div class="row align-items-start">
                                <div class="col-lg-6">
                                    <div class="text-center mb-3 mb-lg-0">
                                        <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_YlODxz.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player> --><img class="img-fluid" src="https://redcliffelabsbackend.s3.amazonaws.com/media/gallary-file/None/2b18861c-8812-4e5e-9c24-4e5744102e11.png">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="works-description-right text-start bg-light mx-lg-3 mx-4">
                                        <h5 class="fs-18">Fast & Accurate Reports</h5>
                                        <p class="text-muted mb-0">Get reports within 48 hours. View or download Report Anytime.</p>
                                        <p class="text-muted mb-0">We strive to offer the best test reports service possible. Even on hectic working days, we never fail to meet the fast test reports timelines.</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end timeline-item-->
                    </div><!-- timeline-page -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END Process -->


    <!-- START CTA -->
    <!-- <section class="bg-cta" style="background-color:330000;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center text-white">
                        <h3 class="mb-3">Video Presentation</h3>
                        <p>Start working with Landsay that can provide everything you need to generate awareness, drive
                            traffic, connect.</p>
                        <a href="#presentationVideo" class="play-btn mt-4" data-bs-toggle="modal">
                            <i class="fa-duotone fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END CTA -->


    <!-- START CLIENTS -->
    <section class="section bg-client bg-light" id="client" style="background-image: url('img/bg.jpg');background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h3>What's our users says</h3>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="swiper-container testimonialslider">
                        <div class="swiper-wrapper pb-5">
                            <div class="swiper-slide">
                                <div class="testimonial-box text-center card border-0">
                                    <div>
                                        <div class="testi-img position-relative d-inline-block">
                                            <img src="img/users/img1.jpg" alt="" class="img-fluid rounded-circle">
                                            <div class="quote-icon">
                                                <i class="fa-duotone fa-quote-right"></i>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <h6 class="mb-0 fs-17">Jignesh Pravasi</h6>
                                            <p class="text-muted mb-0">Idar</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted mb-0">" In this pandemic situation they have come as a saviour. starting from their sample home collection to report submission, booking guidance to customer care promptness, they have excelled their peer competitors by a league. "</p>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end testimonial-box-->
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-box text-center card border-0">
                                    <div>
                                        <div class="testi-img position-relative d-inline-block">
                                            <img src="img/users/img2.jpg" alt="" class="img-fluid rounded-circle">
                                            <div class="quote-icon">
                                                <i class="fa-duotone fa-quote-right"></i>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <h6 class="mb-0 fs-17">Jignesh Vankar</h6>
                                            <p class="text-muted mb-0">Himmatnagar</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted mb-0">" Prakash Manat From TLV Labs came to collect my blood sample. Extremely polite guy and did everything fast and properly. Highly recommend for all tests. "</p>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end testimonial-box-->
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-box text-center card border-0">
                                    <div>
                                        <div class="testi-img position-relative d-inline-block">
                                            <img src="img/users/img4.jpg" alt="" class="img-fluid rounded-circle">
                                            <div class="quote-icon">
                                                <i class="mdi mdi-format-quote-open"></i>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <h6 class="mb-0 fs-17">Hitubha</h6>
                                            <p class="text-muted mb-0">Berna</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted mb-0">" This is my first experience with My Lab and it was very nice and I highly impressed with the service. Sample collector boy came on time, very hygiene, took sample very nicely, polite speaking. "</p>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end testimonial-box-->
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="row row-cols-md-5 row-cols-1 mt-4">
                <div class="col mx-auto">
                    <div class="client-img text-center mt-4">
                        <img src="https://redcliffelabsbackend.s3.amazonaws.com/media/gallary-file/None/a0f82e2b-5cee-4694-a972-2514e9bd3694.svg" alt="img1" class="img-fluid">
                    </div>
                </div>
                <!--end col-->
                <div class="col mx-auto">
                    <div class="client-img text-center mt-4">
                        <img src="https://www.lifelinelaboratory.com/assets/images/logo.png" alt="img2" class="img-fluid">
                    </div>
                </div>
                <!--end col-->
                <div class="col mx-auto">
                    <div class="client-img text-center mt-4">
                        <img src="https://i.imgur.com/dTADAS1.png" alt="img3" class="img-fluid">
                    </div>
                </div>

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END CLIENTS -->


    <!--start contact-->
    <section class="section bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3>Contact Us</h3>
                        <!-- <p class="text-muted mt-2">It is a long established fact that a reader will be of a page when
                            established fact looking at its layout.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-details mb-4 mb-lg-0">
                        <p class="mb-3"><i class="fa-duotone fa-at"></i> <span class="fw-medium mx-1">helpmylab@gmail.com</span></p>
                        <p class="mb-3"><i class="fa-duotone fa-browser"></i> <span class="fw-medium mx-1">www.mylab.in</span></p>
                        <p class="mb-3"><i class="fa-duotone fa-phone"></i> <span class="fw-medium mx-1">+91 98785 32145</span></p>
                        <p class="mb-3"><i class="fa-duotone fa-hospital"></i><span class="fw-medium mx-2">9:00 AM - 6:00 PM</span></p>
                        <p class="mb-3"><i class="fa-duotone fa-location-dot"></i> <span class="fw-medium mx-1">Idar, Gujarat, India, 383430.</span></p>
                    </div>
                    <!--end contact-details-->
                </div>
                <!--end col-->
                <div class="col-lg-7">
                    <form method="post" onsubmit="return validateForm()" class="contact-form" name="myForm" id="myForm">
                        <span id="error-msg"></span>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <span class="input-group-text"><i class="fa-duotone fa-input-text"></i></i></span>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name*">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <span class="input-group-text"><i class="fa-duotone fa-at"></i></span>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email*">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative mb-3">
                                    <span class="input-group-text"><i class="fa-duotone fa-file"></i></span>
                                    <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative mb-3">
                                    <span class="input-group-text align-items-start"><i class="fa-duotone fa-message"></i></span>
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message*"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-end">
                                <input type="submit" id="submit" name="send" class="btn btn-primary" value="Send Message">
                            </div>
                        </div>
                    </form>
                    <!--end form-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end contact-->
    <!-- START FOOTER -->
    <footer class="bg-dark section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <ul class="list-inline social-list mb-0">
                            <li class="list-inline-item"><a href="#" class="social-icon footer-link"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-icon footer-link"><i class="fa-brands fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-icon footer-link"><i class="fa-brands fa-instagram"></i></a></li>

                        </ul>
                        <!--end social-->
                    </div>
                    <div class="footer-terms">
                        <ul class="mb-0 list-inline text-center mt-4">
                            <li class="list-inline-item"><a href="#" class="footer-link">Terms & Condition</a></li>
                            <li class="list-inline-item"><a href="#" class="footer-link">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="#" class="footer-link">Contact Us</a></li>
                        </ul>
                    </div>
                    <!--end footer-terms-->
                    <div class="mt-4 pt-2 text-center">
                        <p class="text-white-50 mb-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; <a href="/" class="text-muted">Mylabs</a> <i class="fa-duotone fa-heart" style="color: red;"></i> Made in India

                        </p>
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!-- END FOOTER -->
    <!-- Modal -->
    <div class="modal fade" id="presentationVideo" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content  bg-transparent border-0">
                <div class="modal-body p-0">
                    <div class="text-end">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="ratio ratio-16x9">
                        <video id="VisaChipCardVideo" class="video-box" controls>
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <!--end modal-body-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end modal-->
    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up"></i>
    </button>
    <!--end back-to-top-->

    <!-- Bootstrap Bundale js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Swiper Slider js -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- Contact Js -->
    <script src="js/contact.js"></script>

    <!-- Index-init Js -->
    <script src="js/index.init.js"></script>

    <!-- App js -->
    <script src="js/app.js"></script>
</body>

</html>