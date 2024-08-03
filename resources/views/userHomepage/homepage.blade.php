<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home - M/S RAJ TRAVELS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets') }}/userHomepage/img/favicon.ico" rel="icon">
    <link href="{{ asset('assets') }}/userHomepage/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/userHomepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/userHomepage/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/userHomepage/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/userHomepage/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/userHomepage/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/userHomepage/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Append
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        .nav-link {
            cursor: pointer;
        }
    </style>
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="{{ route('user.homepage') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img height="35" width="35"
                    src="{{ asset('uploads/dashboard/website/home/logo/' . $logo->logo) }}" alt="">
                <h1><span style="color:#e84545;">RAJ</span> TRAVELS</h1>
                {{-- <div>
                    <h1><span style="color:red;">RAJ</span> TRAVELS<span>.</span></h1>

                    <p>Contact: 01799745020</p>
                </div> --}}
            </a>

            <!-- Nav Menu -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('user.homepage') }}" class="active">Home</a></li>
                    <li><a class="nav-link" data-target="#about">About</a></li>
                    <li><a class="nav-link" data-target="#services">Services</a></li>
                    <li><a class="nav-link" data-target="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link" data-target="#team">Team</a></li>
                    {{-- <li><a class="nav-link" data-target="#recent-posts">Blog</a></li> --}}
                    {{-- <li class="dropdown has-dropdown"><a href="#"><span>Dropdown</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul class="dd-box-shadow">
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown has-dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul class="dd-box-shadow">
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="nav-link" data-target="#contact">Contact</a></li>
                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav><!-- End Nav Menu -->

            <a class="btn-getstarted" href=""><strong>Booking Now</strong></a>


        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- Hero Section - Home Page -->
        <section id="hero" class="hero">

            <img src="{{ asset('uploads') }}/dashboard/website/home/banner/{{ $banner->banner }}" alt=""
                data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Welcome to</h2>
                        <h2 data-aos="fade-up" data-aos-delay="100">Best Hajj and Umrah Travel Agency</h2>
                        <br>
                        <h2 data-aos="fade-up" data-aos-delay="100"><span style="color:;">M/S RAJ TRAVELS</span> <span
                                style="color: ; font-weight: bold; font-size: 20px">HL: 0935</span></h2>
                        {{-- <p data-aos="fade-up" data-aos-delay="200">Hajj Licence: 0935</p> --}}
                    </div>
                    <div class="col-lg-5">
                        <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" class="btn btn-primary" value="Sign up">
                        </form>
                    </div>
                </div>
            </div>

        </section><!-- End Hero Section -->

       

        <!-- About Section - Home Page -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">

                    <div class="col-xl-5 content">
                        <h3>About Us</h3>
                        <h2>{{ $aboutUs->title }}</h2>
                        <p style="text-align: justify">{{ $aboutUs->description }}</p>
                        {{-- <a href="" class="read-more"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a> --}}
                    </div>

                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">

                            @foreach ($aboutCard as $card)
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box">
                                        {{-- <i class="bi bi-clipboard-pulse"></i> --}}
                                        <i class="bi bi-{{ $card->icon }}"></i>
                                        <h3>{{ $card->title }}</h3>
                                        <p style="text-align: justify">{{ $card->description }}</p>
                                    </div>
                                </div> <!-- End Icon Box -->
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- Stats Section - Home Page -->
        <section id="stats" class="stats" text="center">
            <img src="{{ asset('uploads/dashboard/website/stats/background/' . $statBackgroundName) }}"
                alt="" data-aos="fade-in">

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    @foreach ($stats as $stat)
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="{{ $stat->data }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>{{ $stat->topic }}</p>
                            </div>
                        </div><!-- End Stats Item -->
                    @endforeach
                </div>
            </div>
        </section><!-- End Stats Section -->


        <!-- Services Section - Home Page -->
        <section id="services" class="services">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p style="color: #e84545; font-size: 20px">We have always kept the motto “Our Customer satisfaction is
                    the priority.”</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    @foreach ($services as $service)
                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-{{ $service->icon }}"></i></div>
                                <div>
                                    <h4 class="title"><a class="stretched-link">{{ $service->title }}</a>
                                    </h4>
                                    <p class="description" style="text-align: justify">{{ $service->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->
                    @endforeach
                </div>

            </div>

        </section><!-- End Services Section -->

        <!-- Pricing Section - Home Page -->
        <section id="pricing" class="pricing">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Package</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container" data-aos="zoom-in" data-aos-delay="100">

                <div class="row g-4">

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Umrah</h3>
                            <div class="icon">
                                <i class="bi bi-box"></i>
                            </div>
                            {{-- <h4><sup>$</sup>200000<span> / month</span></h4> --}}
                            <h4><sup>$</sup>200000<span></span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                </li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis
                                        hendrerit</span></li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Booking Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item featured">
                            <h3>Hajj Business Plan</h3>
                            <div class="icon">
                                <i class="bi bi-rocket"></i>
                            </div>

                            <h4><sup>$</sup>800000<span></span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Booking Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Tour Plan</h3>
                            <div class="icon">
                                <i class="bi bi-send"></i>
                            </div>
                            <h4><sup>$</sup>120000<span></span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Booking Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>

        </section><!-- End Pricing Section -->

        <!-- Features Section - Home Page -->
        <section id="features" class="features">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Features</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>{{ $feature1->title }}</h3>
                        <p style="font-size: 20px; text-align: justify">{{ $feature1->description }}</p>
                        {{-- <a href="#" class="btn btn-get-started">Get Started</a> --}}
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="100">
                        <div class="image-stack">
                            <img src="{{ asset('uploads/dashboard/website/features/' . $feature1->image1) }}"
                                alt="" class="stack-front">

                            <img src="{{ asset('uploads/dashboard/website/features/' . $feature1->image2) }}"
                                alt="" class="stack-back">
                        </div>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                        <img src="{{ asset('assets') }}/userHomepage/img/img1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Quality Policy</h3>
                        <p>We have the motto: “Customers satisfaction is the
                            priority”. We care every step of the customers with:</p>
                        <ul>
                            <li><i class="bi bi-check"></i><span>Well-done tour arrangements.</span></li>
                            <li><i class="bi bi-check"></i><span>Provision with the best services.</span></li>
                            <li><i class="bi bi-check"></i><span>24/7 available for communication.</span></li>
                            <li><i class="bi bi-check"></i><span>Quick responses to all urgent situations.</span></li>
                        </ul>
                        {{-- <a href="#" class="btn btn-get-started align-self-start">Get Started</a> --}}
                    </div>
                </div><!-- Features Item -->

            </div>

        </section><!-- End Features Section -->

        <!-- Portfolio Section - Home Page -->
        <section id="portfolio" class="portfolio">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Hajj</li>
                        <li data-filter=".filter-product">Umrah</li>
                        <li data-filter=".filter-branding">Tour</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-1.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Kaba</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-1.jpg"
                                    title="Kaba" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-2.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Kaba</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-2.jpg"
                                    title="Product 1" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-3.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Madina</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-3.jpg"
                                    title="Branding 1" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-4.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Makka</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-4.jpg"
                                    title="App 2" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-5.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Passport</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-5.jpg"
                                    title="Product 2" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-6.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Gate</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-6.jpg"
                                    title="Branding 2" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-7.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Pilgrims</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-7.jpg"
                                    title="App 3" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-8.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Pilgrims</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-8.jpg"
                                    title="Product 3" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-9.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Pilgrims</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assets') }}/userHomepage/img/masonry-portfolio/masonry-portfolio-9.jpg"
                                    title="Branding 2" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- End Portfolio Section -->



        <!-- Faq Section - Home Page -->
        {{-- <section id="faq" class="faq">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="content px-xl-5">
                            <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-container">
                            <div class="faq-item faq-active">
                                <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna
                                        duis?</span></h3>
                                <div class="faq-content">
                                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                        rhoncus dolor purus non.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc
                                        faucibus a pellentesque?</span></h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit
                                        pellentesque?</span></h3>
                                <div class="faq-content">
                                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                        suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                        convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend
                                        mi in nulla?</span></h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem
                                        et tortor consequat?</span></h3>
                                <div class="faq-content">
                                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse
                                        in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div>
                </div>

            </div>

        </section><!-- End Faq Section --> --}}

        <!-- Team Section - Home Page -->
        <section id="team" class="team">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('assets') }}/userHomepage/img/team/team-1.jpg" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Abdus Sattar</h4>
                            <span>Founder</span>
                            {{-- <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum
                                distinctio dire flow</p> --}}
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('assets') }}/userHomepage/img/team/team-2.jpg" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Md Abdul Zabbar</h4>
                            <span>Proprietor</span>
                            {{-- <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores
                                exercitationem ut</p> --}}
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('assets') }}/userHomepage/img/team/team-3.jpg" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Abdul Ajij</h4>
                            <span>Managing Director</span>
                            {{-- <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel
                                tque sed facilis at qui</p> --}}
                        </div>
                    </div><!-- End Team Member -->
                </div>

            </div>

        </section><!-- End Team Section -->

        {{-- <!-- Call-to-action Section - Home Page -->
        <section id="call-to-action" class="call-to-action">

            <img src="{{ asset('assets') }}/userHomepage/img/cta-bg.jpg" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Call To Action</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.</p>
                            <a class="cta-btn" href="#">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End Call-to-action Section --> --}}

        {{-- <!-- Testimonials Section - Home Page -->
        <section id="testimonials" class="testimonials">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                        <h3>Testimonials</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident.
                        </p>
                    </div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

                        <div class="swiper">
                            <template class="swiper-config">
                                {
                                "loop": true,
                                "speed" : 600,
                                "autoplay": {
                                "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                                }
                                }
                            </template>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="{{ asset('assets') }}/userHomepage/img/testimonials/testimonials-1.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Saul Goodman</h3>
                                                <h4>Ceo & Founder</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora
                                                entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam
                                                eget nibh et. Maecen aliquam, risus at semper.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="{{ asset('assets') }}/userHomepage/img/testimonials/testimonials-2.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Sara Wilsson</h3>
                                                <h4>Designer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="{{ asset('assets') }}/userHomepage/img/testimonials/testimonials-3.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Jena Karlis</h3>
                                                <h4>Store Owner</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum
                                                nulla quem veniam duis minim tempor labore quem eram duis noster aute
                                                amet eram fore quis sint minim.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="{{ asset('assets') }}/userHomepage/img/testimonials/testimonials-4.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Matt Brandon</h3>
                                                <h4>Freelancer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos
                                                export minim fugiat minim velit minim dolor enim duis veniam ipsum anim
                                                magna sunt elit fore quem dolore labore illum veniam.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="{{ asset('assets') }}/userHomepage/img/testimonials/testimonials-5.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>John Larson</h3>
                                                <h4>Entrepreneur</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam
                                                tempor noster veniam enim culpa labore duis sunt culpa nulla illum
                                                cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- End Testimonials Section --> --}}

        {{-- <!-- Recent-posts Section - Home Page -->
        <section id="recent-posts" class="recent-posts">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Recent Posts</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('assets') }}/userHomepage/img/blog/blog-1.jpg" alt=""
                                    class="img-fluid">
                            </div>

                            <p class="post-category">Politics</p>

                            <h2 class="title">
                                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets') }}/userHomepage/img/blog/blog-author.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Maria Doe</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jan 1, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('assets') }}/userHomepage/img/blog/blog-2.jpg" alt=""
                                    class="img-fluid">
                            </div>

                            <p class="post-category">Sports</p>

                            <h2 class="title">
                                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets') }}/userHomepage/img/blog/blog-author-2.jpg"
                                    alt="" class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Allisa Mayer</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 5, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('assets') }}/userHomepage/img/blog/blog-3.jpg" alt=""
                                    class="img-fluid">
                            </div>

                            <p class="post-category">Entertainment</p>

                            <h2 class="title">
                                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et
                                    soluta</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets') }}/userHomepage/img/blog/blog-author-3.jpg"
                                    alt="" class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Mark Dower</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 22, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                </div><!-- End recent posts list -->

            </div>

        </section><!-- End Recent-posts Section --> --}}

        <!-- Contact Section - Home Page -->
        <section id="contact" class="contact">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>189/1, Nayagola, Nayagola Hat-6300, Chapainawabganj,</p>
                                    <p>Rajshahi, Dhaka, Bangladesh.</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+880 1799 745020</p>
                                    <p>+880 2588 892032</p>
                                    <p>+966 57 827 4704</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>rajtravels.bd@gmail.com</p>
                                    <p>abdulajij.cb@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Sunday - Thursday</p>
                                    <p>9:00AM - 09:00PM</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- End Contact Section -->

         <!-- Clients Section - Home Page -->
         <section id="clients" class="clients">

        <div class="container-fluid" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                   <a target="_blank" href="https://hajj.gov.bd/"><img src="{{ asset('assets') }}/userHomepage/img/clients/bdGov.png" class="img-fluid"
                   alt="Hajj"></a>
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <a target="_blank" href="https://haabbd.com/"><img src="{{ asset('assets') }}/userHomepage/img/clients/haab.jpg" class="img-fluid"
                    alt="Haab"></a>
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                <a target="_blank" href="https://www.atab.org.bd/"><img src="{{ asset('assets') }}/userHomepage/img/clients/atab.jpg" class="img-fluid"
                alt="Atab"></a>
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                <a target="_blank" href="https://www.iata.org/"><img src="{{ asset('assets') }}/userHomepage/img/clients/iata.png" class="img-fluid"
                alt="IATA"></a>
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                <a target="_blank" href="https://www.nusuk.sa/"><img src="{{ asset('assets') }}/userHomepage/img/clients/nusuk.jpg" class="img-fluid"
                alt="Nusuk"></a>
                </div>
                <!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                <a target="_blank" href="https://www.biman-airlines.com/"> <img src="{{ asset('assets') }}/userHomepage/img/clients/bd_biman.png" class="img-fluid"
                alt="Biman Airlines"></a>
                </div>
                <!-- End Client Item -->
            
            </div>

        </div>

    </section><!-- End Clients Section -->

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="{{ route('user.homepage') }}" class="logo d-flex align-items-center">
                        <span><span style="color:#e84545;">RAJ</span> TRAVELS</span>
                    </a>
                    <p>We have always kept the motto “Our Customer satisfaction is the priority.” Apart from satisfying
                        our clients, M/S RAJ TRAVELS is committed to give all the efforts, to make the travel better.
                    </p>
                    <div class="social-links d-flex mt-4">
                        <a target="_blank" href="https://www.facebook.com/RajTravels.official"><i class="bi bi-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/abdulajij.cb/"><i class="bi bi-instagram"></i></a>
                        <a target="_blank" href="https://wa.me/+8801799745020"><i class="bi bi-whatsapp"></i></a>
                        <a target="_blank" href=""><i class="bi bi-twitter"></i></a>
                        <a target="_blank" href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Portfolio</a></li>
                        <li><a href="">Team</a></li>
                        <li><a href="">Contact</a></li>
                        {{-- <li><a href="">Terms of service</a></li>
                        <li><a href="">Privacy policy</a></li> --}}
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="">Hajj</a></li>
                        <li><a href="">Umrah</a></li>
                        <li><a href="">Visa</a></li>
                        <li><a href="">Tour</a></li>
                        <li><a href="">Passport</a></li>
                        <li><a href="">Hotel</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>189/1, Nayagola, Nayagola Hat-6300,</p>
                    <p>Chapainawabganj, Rajshahi,</p>
                    <p>Dhaka, Bangladesh.</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+880 1970 990935</span></p>
                    <p><strong>Email:</strong> <span>rajtravels.bd@gmail.com</span></p>
                </div>

            </div>
        </div>

        <p class="text-muted text-center text-md-left"></p>




        <div class="container copyright text-center mt-4">
            <p>The entirety of this site is protected by copyright © 2024. <a
                        href="https://msrajtravels.com" target="_blank">RAJ TRAVLES</a>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                <p>Developed by <a target="_blank" href="https://sehabkhanzehad.dev"><strong>Sk Zehad</strong></a> <i
                    class="mb-1 ml-1 bi bi-heart"></i></p>
            </div>
        </div>

    </footer><!-- End Footer -->

    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets') }}/userHomepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/userHomepage/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/userHomepage/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('assets') }}/userHomepage/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/userHomepage/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/userHomepage/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets') }}/userHomepage/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/userHomepage/js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.nav-link').forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const targetId = this.getAttribute('data-target');
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>


</body>

</html>
