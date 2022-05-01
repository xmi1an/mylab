<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>My Lab</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My Lab" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="vendor\fontawesome-free\css\all.min.css">
    <!-- Swiper Slider css -->
    <!-- <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" type="text/css" /> -->
    <!-- Custom Css -->
    <link href="assets/css/LandSaystyle.css" rel="stylesheet" type="text/css" />
    <!-- Page, Swiper CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="assets/vendor/css/pages/ui-carousel.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.css">


    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="60">
    <!-- START NAVBAR -->
    <?php include('includes/navbarindex.php'); ?>
    <!-- END NAVBAR -->
    <!--Slider-->
    <section class="home-slider slide mt-5" id="home">
        <div class="swiper-container swiper-container-initialized swiper-container-horizontal" id="swiper-with-pagination">
            <div class="swiper-wrapper mt-4" id="swiper-wrapper-f73f22103271387e6" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-674px, 0px, 0px);">
                <div class="swiper-slide swiper-slide-prev" style="background-image: url('img/IndoSeptember48.png');" role="group" aria-label="1 / 5">
                    <div class="text-center mt-4">
                        <h6 class="home-subtitle" style="color: white;">Is your body feeling sick?</h6>
                        <h1 style="color: white;">Get safe testing with <strong>MyLab</strong></h1>
                        <p class=" home-desc pt-3" style="color: white;">Get a lab test done from the comfort of your home.</p>
                        <div class="mt-4 pt-3">
                            <a href="new-user-testing.php" class="btn btn-primary">Test Now</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 1 ends -->
                <div class="swiper-slide swiper-slide-active" style="background-image: url('img/labslide.png');" role="group" aria-label="2 / 5">
                    <div class="text-center mt-4">
                        <h6 class="home-subtitle mb-4" style="color: white;">Are You The Lab Manager? </h6>
                        <h1 style="color: white;">Get more orders by signing up with us</h1>
                        <div class="mt-4 pt-3">
                            <a href="laboratory/labsignup.php" class="btn btn-primary">Signup as Lab Manager</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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

    <!-- FAQ -->
    <section class="section bg-link">
        <div class="container">
            <div class="text-center mb-5">
                <h2> Frequently asked questions </h2>
            </div>
            <div class="row mt-4 justify-content-center">
                <!-- Navigation -->
                <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3">
                    <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
                        <ul class="nav nav-align-left nav-pills flex-column">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#takeappointment">
                                    <i class="fa-duotone fa-calendar-check me-1" style="font-size: 1.25rem;"></i>
                                    <span class="align-middle">Book Test</span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#delivery">
                                    <i class="fa-duotone fa-vial-virus me-1" style="font-size: 1.50rem;"></i>
                                    <span class="align-middle">Lab Manager</span>
                                </button>
                            </li>
                        </ul>
                        <div class="d-none d-md-block">
                            <div class="mt-5">
                                <img src="img\Illustrations\sitting-girl-with-laptop-light.png" class="img-fluid w-px-200" alt="FAQ Image" data-app-light-img="illustrations/sitting-girl-with-laptop-light.png" data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Navigation -->

                <!-- FAQ's -->
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="tab-content py-0">
                        <!-- Take appointment Data -->
                        <div class="tab-pane fade active show" id="takeappointment" role="tabpanel">
                            <div class="d-flex mb-3 gap-3">
                                <div>
                                    <span class="badge bg-label-primary rounded-2">
                                        <i class="fa-duotone fa-calendar-check fa-3x"></i>
                                    </span>
                                </div>
                                <div>
                                    <h4 class="mb-0">
                                        <span class="align-middle">Book Test</span>
                                    </h4>
                                    <span>Get help with appointment</span>
                                </div>
                            </div>
                            <div id="accordionAppointment" class="accordion">
                                <div class="card accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionAppointment-1" aria-controls="accordionAppointment-1">
                                            Q1: How can I book Test appointment?
                                        </button>
                                    </h2>

                                    <div id="accordionAppointment-1" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            If you are planning to book diagnostic tests with Redcliffe Labs, then it is quite a simple and smooth process. All you have to do is just call us and our well trained and patient-friendly representatives will book an appointment for you. Also, you can book the test online by visiting our website and as soon as we get your query within no time we will make sure to book the appointment for you.
                                        </div>
                                    </div>
                                </div>

                                <div class="card accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-2" aria-controls="accordionPayment-2">
                                            Q2: In how much time will I get my test reports?
                                        </button>
                                    </h2>
                                    <div id="accordionPayment-2" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            MyLabs knows how important the timing is when it comes to health checkups. We make sure that reports are sent to you as soon as possible so that you can begin with the right treatment and medications on time. You will get your reports within 24 hours.
                                        </div>
                                    </div>
                                </div>

                                <div class="card accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-3" aria-controls="accordionPayment-3">
                                            Q3: Where can I see or get my test results?
                                        </button>
                                    </h2>
                                    <div id="accordionPayment-3" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            You can receive your test results at your given email address or on your phone number and also on WhatsApp or you can <a href="patient-search-report.php"><strong>Check here</strong></a>. Redcliffe Labs makes sure to send precise and timely reports following the highest standards to maintain quality.
                                        </div>
                                    </div>
                                </div>

                                <div class="card accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-4" aria-controls="accordionPayment-4">
                                            Q4: Is Sample collector guy came to home for Test?
                                        </button>
                                    </h2>
                                    <div id="accordionPayment-4" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            Yes, We will collect the sample and send the report to you.
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- /Take appointment Data -->

                        <div class="tab-pane fade" id="delivery" role="tabpanel">
                            <div class="d-flex mb-3 gap-3">
                                <div>
                                    <span class="badge bg-label-primary rounded-2">
                                        <i class="fa-duotone fa-vial-virus fa-3x"></i>
                                    </span>
                                </div>
                                <div>
                                    <h4 class="mb-0">
                                        <span class="align-middle">Lab Manager</span>
                                    </h4>
                                    <span>Get help with lab stuff</span>
                                </div>
                            </div>
                            <div id="accordionDelivery" class="accordion">
                                <div class="card accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionDelivery-1" aria-controls="accordionDelivery-1">
                                            Q1: How would you ship my order?
                                        </button>
                                    </h2>

                                    <div id="accordionDelivery-1" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            For large products, we deliver your product via a third party
                                            logistics company offering you the “room of choice” scheduled
                                            delivery service. For small products, we offer free parcel
                                            delivery.
                                        </div>
                                    </div>
                                </div>

                                <div class="card accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionDelivery-2" aria-controls="accordionDelivery-2">
                                            Q2: What is the delivery cost of my order?
                                        </button>
                                    </h2>
                                    <div id="accordionDelivery-2" class="accordion-collapse collapse">
                                        <div class="accordion-body">The cost of scheduled delivery is $69 or $99 per order, depending on the destination postal code. The parcel delivery is free.
                                        </div>
                                    </div>
                                </div>

                                <div class="card accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionDelivery-4" aria-controls="accordionDelivery-4">
                                            Q3: What to do if my product arrives damaged?
                                        </button>
                                    </h2>
                                    <div id="accordionDelivery-4" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            We will promptly replace any product that is damaged in transit.
                                            Just contact our
                                            <a href="javascript:void(0);">support team</a>, to notify us of the situation
                                            within 48 hours of product arrival.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center mb-4">
                <div class="badge bg-label-primary">Question?</div>
                <h4 class="my-2">You still have a question?</h4>
                <p>If you can't find question in our FAQ, you can contact us. We'll answer you shortly!</p>
            </div>
        </div>
        <div class="row text-center justify-content-center gap-sm-0 gap-3">
            <div class="col-sm-6">
                <div class=" py-3 rounded bg-light text-center">
                    <span class="badge bg-label-primary rounded-2 my-3">
                        <i class="bx bx-phone bx-sm"></i>
                    </span>
                    <h4 class="mb-2"><a class="h4" href="tel:+(810)25482568">+91 9876543210</a></h4>
                    <p>We are always happy to help</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class=" py-3 rounded bg-light text-center">
                    <span class="badge bg-label-primary rounded-2 my-3">
                        <i class="bx bx-envelope bx-sm"></i>
                    </span>
                    <h4 class="mb-2"><a class="h4" href="mailto:help@help.com">help@mylab.com</a></h4>
                    <p>Best way to get a quick answer</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /FAQ's -->

    <!--start contact-->
    <section class="section bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3>Contact Us</h3>
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
    <?php include('includes/footer4index.php')  ?>
    <!-- END FOOTER -->
    <!--start back-to-top-->

    <!-- Bootstrap bundle js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <script src="assets/vendor/libs/swiper/swiper.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/ui-carousel.js"></script>
</body>

</html>