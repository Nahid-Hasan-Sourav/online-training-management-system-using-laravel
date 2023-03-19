<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.themefisher.com/biztrox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:06:20 GMT -->
<head>
    <meta charset="utf-8">
    <title>BIZTROX</title>


    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/bootstrap/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/magnific-popup/magnific-popup.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/slick/slick-theme.css">
    <!-- themify icon -->
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/themify-icons/themify-icons.css">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/animate/animate.css">
    <!-- Aos -->
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/aos/aos.css">
    <!-- swiper -->
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/swiper/swiper.min.css">
    <!-- Stylesheets -->
    <link href="{{asset('/')}}website/css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('/')}}website/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{asset('/')}}website/images/favicon.png" type="image/x-icon">

</head>

<body>


<!-- preloader start -->
<div class="preloader">
    <img src="{{asset('/')}}website/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<!-- navigation -->
<header>
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline text-lg-right text-center">
                        <li class="list-inline-item">
                            <a href="mailto:info@companyname.com">info@companyname.com</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="callto:1234565523">Call Us Now:
                                <span class="ml-2"> 123 456 5523</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" id="searchOpen">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('/')}}website/images/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="#" role="button"  aria-haspopup="true"
                               aria-expanded="false">
                                Home
                            </a>
{{--                            <div class="dropdown-menu" >--}}
{{--                                <a class="dropdown-item" href="index.html">Home Page 1</a>--}}
{{--                                <a class="dropdown-item" href="homepage-2.html">Home Page 2</a>--}}
{{--                                <a class="dropdown-item" href="homepage-3.html">Home Page 3</a>--}}
{{--                            </div>--}}
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="#" role="button"  aria-haspopup="true"
                               aria-expanded="false">
                                About Us
                            </a>
{{--                            <div class="dropdown-menu" >--}}
{{--                                <a class="dropdown-item" href="about.html">About page</a>--}}
{{--                                <a class="dropdown-item" href="about-2.html">About page-2</a>--}}
{{--                            </div>--}}
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Training Category
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="service.html">Category One</a>
                                <a class="dropdown-item" href="service-2.html">Category Two </a>
                                <a class="dropdown-item" href="service-single.html">Category Three</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="#" role="button"  aria-haspopup="true"
                               aria-expanded="false">
                                All Training
                            </a>
{{--                            <div class="dropdown-menu" >--}}
{{--                                <a class="dropdown-item" href="team.html">Team Page</a>--}}
{{--                                <a class="dropdown-item" href="pricing.html">Pricing Page</a>--}}
{{--                                <a class="dropdown-item" href="project.html">project Page</a>--}}
{{--                                <a class="dropdown-item" href="faqs.html">FAQs Page</a>--}}
{{--                                <a class="dropdown-item" href="project-single.html">Project Single</a>--}}
{{--                                <a class="dropdown-item" href="team-single.html">Team Single</a>--}}
{{--                                <a class="dropdown-item" href="404.html">404 Page</a>--}}
{{--                                <a class="dropdown-item" href="signup.html">Sign Up Page</a>--}}
{{--                                <a class="dropdown-item" href="login.html">Login Page</a>--}}
{{--                                <a class="dropdown-item" href="comming-soon.html">Comming Soon Page</a>--}}
{{--                            </div>--}}
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                               aria-expanded="false">--}}
{{--                                Login/Registration--}}
{{--                            </a>--}}

{{--                        </li>--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                               aria-expanded="false">--}}
{{--                                Elements--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu" >--}}
{{--                                <a class="dropdown-item" href="components/buttons.html">Buttons</a>--}}
{{--                                <a class="dropdown-item" href="components/icons.html">Icons</a>--}}
{{--                                <a class="dropdown-item" href="components/typography.html">Typography</a>--}}
{{--                                <a class="dropdown-item" href="components/accordions.html">Accordions</a>--}}
{{--                                <a class="dropdown-item" href="components/blog-contents.html">Blog Contents</a>--}}
{{--                                <a class="dropdown-item" href="components/service-contents.html">Service Contents</a>--}}
{{--                                <a class="dropdown-item" href="components/team-contents.html">Team Contents</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" role="button" aria-haspopup="true"
                               aria-expanded="false">
                                Login/Registration
                            </a>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Search Form -->
<div class="search-form">
    <a href="#" class="close" id="searchClose">
        <i class="ti-close"></i>
    </a>
    <div class="container">
        <form action="#" class="row">
            <div class="col-lg-10 mx-auto">
                <h3>Search Here</h3>
                <div class="input-wrapper">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Enter Keywords..." required>
                    <button>
                        <i class="ti-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /navigation -->

<section>
    <div class="hero-slider position-relative">
        <div class="hero-slider-item py-160" style="background-image: url({{asset('/')}}website/images/banner/banner-1.jpg);"
             data-icon="ti-comments" data-text="Consultation">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-content">
                            <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".1">We
                                are here to</h4>
                            <h1 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".5">
                                Planning Business</h1>
                            <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".9">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                <br> incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="about.html"
                               class="btn btn-outline text-uppercase">more details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider-item py-160" style="background-image: url({{asset('/')}}website/images/banner/banner-2.jpg);"
             data-icon="ti-bar-chart" data-text="Marketting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-content">
                            <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".1">
                                Get your</h4>
                            <h1 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".5">
                                Business Consultant</h1>
                            <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".9">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                <br> incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="about-2.html"
                               class="btn btn-outline text-uppercase">more details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider-item py-160" style="background-image: url({{asset('/')}}website/images/banner/banner-3.jpg);" data-icon="ti-money"
             data-text="Finance">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-content">
                            <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".1">
                                Start your</h4>
                            <h1 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".5">
                                Future Plan</h1>
                            <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".9">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                <br> incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="about.html"
                               class="btn btn-outline text-uppercase">more details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider-item py-160" style="background-image: url({{asset('/')}}website/images/banner/banner-4.jpg);"
             data-icon="ti-package" data-text="Human Resources">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-content">
                            <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".1">We
                                are always</h4>
                            <h1 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".5">
                                Be Inspired By Best</h1>
                            <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".9">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                <br> incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="about-2.html"
                               class="btn btn-outline text-uppercase">more details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- service -->
<section class="section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <!-- service-item -->
                    <div class="col-sm-3">
                        <div class="mb-4 card px-2 py-5 text-center">
                            <i class="h2 text-primary d-inline-block mb-20 ti-bar-chart"></i>
                            <h4>Business Consulting</h4>
                            <P>Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim</P>
                        </div>
                    </div>
                    <!-- service-item -->
                    <div class="col-sm-3">
                        <div class="mb-4 card px-2 py-5 text-center">
                            <i class="h2 text-primary d-inline-block mb-20 ti-thought"></i>
                            <h4>Valuable Idea</h4>
                            <P>Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim</P>
                        </div>
                    </div>
                    <!-- service-item -->
                    <div class="col-sm-3">
                        <div class="mb-4 card px-2 py-5 text-center">
                            <i class="h2 text-primary d-inline-block mb-20 ti-server"></i>
                            <h4>Market Strategy</h4>
                            <P>Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim</P>
                        </div>
                    </div>
                    <!-- service-item -->
                    <div class="col-sm-3">
                        <div class="mb-4 card px-2 py-5 text-center">
                            <i class="h2 text-primary d-inline-block mb-20 ti-bar-chart"></i>
                            <h4>Business Consulting</h4>
                            <P>Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /service -->

<!-- service -->
<section class="section ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h5 class="section-title-sm">Upcoming Training</h5>
                <h2 class="section-title section-title-border">Our Upcoming Training </h2>
            </div>
            <!-- service item -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card text-center">
                    <h4 class="card-title pt-3">Business Consulting</h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="{{asset('/')}}website/images/service/service-1.jpg" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-bar-chart"></i>
                        <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur
                            adipisicing elit sed done eius mod tempor enim ad minim veniam quis
                            nostrud.</p>
                        <a href="service-single.html" class="btn btn-secondary translateY-25">Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- service item -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card text-center">
                    <h4 class="card-title pt-3">Valuable Idea</h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="{{asset('/')}}website/images/service/service-2.jpg" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-thought"></i>
                        <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur
                            adipisicing elit sed done eius mod tempor enim ad minim veniam quis
                            nostrud.</p>
                        <a href="service-single.html" class="btn btn-secondary translateY-25">Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- service item -->
            <div class="col-lg-4 col-sm-6">
                <div class="card text-center">
                    <h4 class="card-title pt-3">Market Strategy</h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="{{asset('/')}}website/images/service/service-3.jpg" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-server"></i>
                        <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur
                            adipisicing elit sed done eius mod tempor enim ad minim veniam quis
                            nostrud.</p>
                        <a href="service-single.html" class="btn btn-secondary translateY-25">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- testimonial -->
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="section-title-sm">Student Feedback</h5>
                <h2 class="section-title section-title-border"> What Student Say </h2>
            </div>
            <div class="col-lg-5 col-md-5 pr-0 align-self-center">
                <img class="img-fluid w-100" src="{{asset('/')}}website/images/client.png" alt="clients-image">
            </div>
            <div class="col-lg-7 col-md-7 align-self-center pl-0">
                <div class="testimonial-slider p-5">
                    <!-- slider item -->
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                        <h4 class="font-weight-normal">Julia Robertson</h4>
                        <h6 class="font-secondary text-color">Happy Clients</h6>
                    </div>
                    <!-- slider item -->
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                        <h4 class="font-weight-normal">Julia Robertson</h4>
                        <h6 class="font-secondary text-color">Happy Clients</h6>
                    </div>
                    <!-- slider item -->
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                        <h4 class="font-weight-normal">Julia Robertson</h4>
                        <h6 class="font-secondary text-color">Happy Clients</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /testimonial -->

{{--<section class="cta overlay-primary py-50 text-center text-lg-left" style="background-image: url({{asset('/')}}website/images/background/cta.jpg);">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-between">--}}
{{--            <div class="col-lg-6">--}}
{{--                <h3 class="text-white">Biztrox give the smart solution for your business</h3>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 text-lg-right align-self-center">--}}
{{--                <a href="contact.html" class="btn btn-light">GET AN QUOTE</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<!-- blog -->--}}
{{--<section class="section bg-gray">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <h5 class="section-title-sm">Latest News</h5>--}}
{{--                <h2 class="section-title section-title-border-gray">Company News</h2>--}}
{{--            </div>--}}
{{--            <!-- blog-item -->--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-img-wrapper overlay-rounded-top">--}}
{{--                        <img class="card-img-top" src="{{asset('/')}}website/images/blog/blog-1.jpg" alt="blog-thumbnail">--}}
{{--                    </div>--}}
{{--                    <div class="card-body p-0">--}}
{{--                        <div class="d-flex">--}}
{{--                            <div class="py-3 px-4 border-right text-center">--}}
{{--                                <h3 class="text-primary mb-0">25</h3>--}}
{{--                                <p class="mb-0">Nov</p>--}}
{{--                            </div>--}}
{{--                            <div class="p-3">--}}
{{--                                <a href="blog-single.html" class="h4 font-primary text-dark">Cras--}}
{{--                                    sed elit sit amet.</a>--}}
{{--                                <p>by Admin</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- blog-item -->--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-img-wrapper overlay-rounded-top">--}}
{{--                        <img class="card-img-top" src="{{asset('/')}}website/images/blog/blog-2.jpg" alt="blog-thumbnail">--}}
{{--                    </div>--}}
{{--                    <div class="card-body p-0">--}}
{{--                        <div class="d-flex">--}}
{{--                            <div class="py-3 px-4 border-right text-center">--}}
{{--                                <h3 class="text-primary mb-0">25</h3>--}}
{{--                                <p class="mb-0">Nov</p>--}}
{{--                            </div>--}}
{{--                            <div class="p-3">--}}
{{--                                <a href="blog-single.html" class="h4 font-primary text-dark">Cras--}}
{{--                                    sed elit sit amet.</a>--}}
{{--                                <p>by Admin</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- blog-list -->--}}
{{--            <div class="col-lg-4 col-12">--}}
{{--                <ul class="bg-white border rounded pl-0">--}}
{{--                    <li class="d-flex border-bottom">--}}
{{--                        <div class="py-3 px-4 border-right text-center">--}}
{{--                            <h3 class="text-primary mb-0">25</h3>--}}
{{--                            <p class="mb-2">Nov</p>--}}
{{--                        </div>--}}
{{--                        <div class="p-3">--}}
{{--                            <a href="blog-single.html" class="h4 font-primary text-dark">Cras sed--}}
{{--                                elit sit amet.</a>--}}
{{--                            <p>by Admin</p>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="d-flex border-bottom">--}}
{{--                        <div class="py-3 px-4 border-right text-center">--}}
{{--                            <h3 class="text-primary mb-0">25</h3>--}}
{{--                            <p class="mb-2">Nov</p>--}}
{{--                        </div>--}}
{{--                        <div class="p-3">--}}
{{--                            <a href="blog-single.html" class="h4 font-primary text-dark">Cras sed--}}
{{--                                elit sit amet.</a>--}}
{{--                            <p>by Admin</p>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="d-flex">--}}
{{--                        <div class="py-3 px-4 border-right text-center">--}}
{{--                            <h3 class="text-primary mb-0">25</h3>--}}
{{--                            <p class="mb-2">Nov</p>--}}
{{--                        </div>--}}
{{--                        <div class="p-3">--}}
{{--                            <a href="blog-single.html" class="h4 font-primary text-dark">Cras sed--}}
{{--                                elit sit amet.</a>--}}
{{--                            <p>by Admin</p>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- /blog -->--}}

<!-- client logo slider -->
<section class="bg-white py-4">
    <div class="container">
        <div class="client-logo-slider align-self-center">
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                             src="{{asset('/')}}website/images/client-logo/client-logo-1.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                             src="{{asset('/')}}website/images/client-logo/client-logo-2.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                             src="{{asset('/')}}website/images/client-logo/client-logo-3.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                             src="{{asset('/')}}website/images/client-logo/client-logo-4.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                             src="{{asset('/')}}website/images/client-logo/client-logo-5.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                             src="{{asset('/')}}website/images/client-logo/client-logo-1.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                             src="{{asset('/')}}website/images/client-logo/client-logo-2.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                             src="{{asset('/')}}website/images/client-logo/client-logo-3.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                             src="{{asset('/')}}website/images/client-logo/client-logo-4.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                             src="{{asset('/')}}website/images/client-logo/client-logo-5.png" alt="client-logo"></a>
        </div>
    </div>
</section>
<!-- /client logo slider -->

<!-- footer -->
<footer class="bg-secondary">
    <div class="py-100 border-bottom" style="border-color: #454547 !important">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-5 mb-md-0 text-center text-md-left">
                        <!-- logo -->
                        <img class="mb-30" src="{{asset('/')}}website/images/logo-footer.png" alt="logo">
                        <p class="text-white mb-30">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt
                            labore dolore magna aliqua enim.</p>
                        <!-- social icon -->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="ti-vimeo-alt"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer links -->
                <div class="col-lg-2 col-md-4 col-6">
                    <h4 class="text-white mb-4">Services</h4>
                    <ul class="footer-links">
                        <li>
                            <a href="#">Company History</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="service.html">Service</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <!-- footer links -->
                <div class="col-lg-2 col-md-4 col-6">
                    <h4 class="text-white mb-4">Quick Link</h4>
                    <ul class="footer-links">
                        <li>
                            <a href="#">Company History</a>
                        </li>
                        <li>
                            <a href="about-2.html">About Us</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="service-2.html">Service</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <!-- subscribe form -->
                <div class="col-lg-3 offset-lg-1">
                    <div class="mt-5 mt-lg-0 text-center text-md-left">
                        <h4 class="mb-4 text-white">Subscribe Us</h4>
                        <p class="text-white mb-4">Lorem ipsum dolor sit amet, consect etur adipisicing. elit sed do
                            eiusmod. </p>
                        <form action="#" class="position-relative">
                            <input type="text" class="form-control subscribe" name="subscribe" id="Subscribe"
                                   placeholder="Enter Your Email">
                            <button class="btn-subscribe" type="submit" value="send">
                                <i class="ti-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="pt-4 pb-3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <p class="text-white text-center text-md-left">
                        <span class="text-primary">Bizpro</span> &copy; 2017 All Right Reserved</p>
                </div>
                <div class="col-lg-6 col-md-7">
                    <ul class="list-inline text-center text-md-right">
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="#">Legal</a>
                        </li>
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="#">Sitemap</a>
                        </li>
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item ml-lg-3 my-lg-0 ml-2 my-2 ml-0">
                            <a class="font-secondary text-white" href="#">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- back to top -->
        <button class="back-to-top">
            <i class="ti-angle-up"></i>
        </button>
    </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('/')}}website/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src={{asset('/')}}website/plugins/bootstrap/bootstrap.min.js"></script>
<!-- magnific popup -->
<script src="{{asset('/')}}website/plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
<!-- slick slider -->
<script src="{{asset('/')}}website/plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="{{asset('/')}}website/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script  src="{{asset('/')}}website/plugins/google-map/gmap.js"></script>
<!-- Syo Timer -->
<script src="{{asset('/')}}website/plugins/syotimer/jquery.syotimer.js"></script>
<!-- aos -->
<script src="{{asset('/')}}website/plugins/aos/aos.js"></script>
<!-- swiper -->
<script src="{{asset('/')}}website/plugins/swiper/swiper.min.js"></script>
<!-- Main Script -->
<script src="{{asset('/')}}website/js/script.js"></script>

</body>

<!-- Mirrored from demo.themefisher.com/biztrox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:06:55 GMT -->
</html>
