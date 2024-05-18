<?php require_once("./includes/func.php"); ?>

<?php require_once("./includes/head.php"); ?>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header-three">
            <?php include_once("./includes/nav.php"); ?>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-three clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url(assets/new/slide1.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-three-color"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <p class="main-slider-three__sub-title">Relief4Gaza </p>
                                        <h2 class="main-slider-three__title">Bringing Hope,<br> One Relief at a Time</h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="about.php" class="thm-btn main-slider-three__btn">Discover
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url(assets/new/slide2.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-three-color"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <p class="main-slider-three__sub-title">Relief4Gaza</p>
                                        <h2 class="main-slider-three__title">Bringing Hope,<br> One Relief at a Time.</h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="about.php" class="thm-btn main-slider-three__btn">Discover
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url(assets/new/slide3.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-three-color"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <p class="main-slider-three__sub-title"> Relief4Gaza</p>
                                        <h2 class="main-slider-three__title"> Bringing hope, <br> One Relief at a Time.</h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="about.php" class="thm-btn main-slider-three__btn">Discover
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->


            </div>
        </section>
        <!--Main Slider End-->

        <!--Make Donation Start-->
        <section class="make-donation">
            <div class="container">
                <div class="make-donation__inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="make-donation__left">
                                <div class="make-donation__img">
                                    <img src="./assets/new/children-boxe.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-6">
                            <div class="make-donation__right">
                                <div class="make-donation__content">
                                    <div class="make-donation__btn-box">
                                        <a href="https://buy.stripe.com/test_dR63cL0zFaKgcI85kk" target="_blank" class="thm-btn make-donation__btn">Donate now</a>
                                    </div>
                                    <!-- <ul class="list-unstyled make-donation__meta">
                                        <li><a href="#"> <i class="fas fa-calendar-alt"></i> 45 Days Left</a></li>
                                        <li><a href="#"> <i class="fas fa-user"></i> 40+ Suppoters</a></li>
                                    </ul> -->
                                    <h3 class="make-donation__title">Immediate aid and need for Gaza residents</h3>
                                    <p class="make-donation__text">This is a critical moment for Gaza. Stand in solidarity with its residents during their darkest hour.</p>
                                    <ul class="list-unstyled make-donation__raised-goal">
                                        <li>
                                            <div class="icon">
                                                <i class="far fa-hand-paper"></i>
                                            </div>
                                            <div class="content">
                                                <p>Support</p>
                                                <h4>588</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="dolar-icon-style">$</i>
                                            </div>
                                            <div class="content">
                                                <p>Raised</p>
                                                <h4>$266,000</h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Make Donation End-->

        <!--About Three Start-->
        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-three__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Join us and start donating</span>
                                <h2 class="section-title__title">In the midst of darkness, light persists.</h2>
                            </div>
                            <p class="about-three__text-1">But amidst the darkness, there was also light. Amidst the despair, 
                                there was hope. It came in the form of aid workers, brave souls who risked their lives to 
                                bring relief to the afflicted. They provided food for the hungry, shelter for the homeless, and medicine for the sick and injured.</p>
                            <p class="about-three__text-2">As I grew older, the memories of my childhood haunted me, driving me to action. 
                                I could not stand idly by while others suffered as I had suffered. And so, 
                                with determination burning in my heart, I set out to make a difference.</p>
                            <a href="about.php" class="thm-btn about-three__btn">Learn More</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-three__right">
                            <div class="about-three__img-box  wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-three__img">
                                    <img src="./assets/new/children3.jpg" alt="">
                                </div>
                                <div class="about-three__img-two">
                                    <img src="./assets/new/IMG_6421.PNG" alt="">
                                </div>
                                <div class="about-three__help">
                                    <div class="about-three__help-shape"
                                        style="background-image: url(assets/images/shapes/about-three-help-shape.png);">
                                    </div>
                                    <div class="about-three__help-conten-box">
                                        <div class="about-three__help-count">
                                            <h3 class="odometer" data-count="280">00</h3>
                                            <span class="about-three__help-letter">k</span>
                                        </div>
                                        <p class="about-three__help-text">We’ve helped over <br>280k men, women and children</p>
                                    </div>
                                </div>
                                <div class="about-three__border"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Three End-->

        <!--Feature Three Start-->
        <!-- <section class="feature-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="feature-three__single">
                            <div class="feature-three__img"
                                style="background-image: url(assets/images/resources/feature-3-1.png);"></div>
                            <div class="feature-three__title-box">
                                <h3 class="feature-three__title">Partner</h3>
                            </div>
                            <div class="feature-three__btn">
                                <a href="about.html">Join us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="feature-three__single">
                            <div class="feature-three__img"
                                style="background-image: url(assets/images/resources/feature-3-2.png);"></div>
                            <div class="feature-three__title-box">
                                <h3 class="feature-three__title">Mission</h3>
                            </div>
                            <div class="feature-three__btn feature-three__btn-two">
                                <a href="about.html">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="feature-three__single">
                            <div class="feature-three__img"
                                style="background-image: url(assets/images/resources/feature-3-3.png);"></div>
                            <div class="feature-three__title-box">
                                <h3 class="feature-three__title">Vision</h3>
                            </div>
                            <div class="feature-three__btn feature-three__btn-two">
                                <a href="about.html">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--Feature Three End-->

        <!--Causes Three Start-->
        <section class="causes-three">
            <div class="causes-three-bg-box">
                <div class="causes-three-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(assets/new/helpers.png);"></div>
                <div class="causes-three-shape-1"
                    style="background-image: url(assets/new/helpers.png);"></div>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">How to support</span>
                    <h2 class="section-title__title">You can support our <br> work and mission</h2>
                    <span class="section-title__tagline">by</span>
                </div>
                <div class="row">
                    <!--Causes One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="./assets/new/shelter.jpg" alt="">
                                <div class="causes-one__cat">
                                    <p>Shelter</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="donation-details.html">From chaos to comfort, cur shelter 
                                    initiative.</a>
                                </h3>
                                <p class="causes-one__text">We are bringing Roof, Refuge, and Renewal to conflicted people of Gaza.</p>
                                <!-- <div class="causes-one__progress">
                                    <div class="causes-one__progress-shape"
                                        style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                    </div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="causes-one__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!--Causes One Single End-->
                    <!--Causes One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="./assets/new/medication.jpeg" alt="">
                                <div class="causes-one__cat">
                                    <p>Medication</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="donation-details.html">Healing hearts and bodies 
                                    our medicine mission.</a>
                                </h3>
                                <p class="causes-one__text">By providing believe of hope, we are restoring health amidst conflict.</p>
                                <!-- <div class="causes-one__progress">
                                    <div class="causes-one__progress-shape"
                                        style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                    </div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="causes-one__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!--Causes One Single End-->
                    <!--Causes One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="./assets/new/food.png" alt="">
                                <div class="causes-one__cat">
                                    <p>Food</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="donation-details.html">Feeding bodies, fueling dreams</a>
                                </h3>
                                <p class="causes-one__text">Our program strongly believes in nourishing lives of the conflicted, thereby sustaining ope.</p>
                                <!-- <div class="causes-one__progress">
                                    <div class="causes-one__progress-shape"
                                        style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                    </div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="causes-one__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!--Causes One Single End-->
                    <!--Causes One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="./assets/new/education.jpg" alt="">
                                <div class="causes-one__cat">
                                    <p>Education</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="donation-details.html">From conflict to classroom: providing paths to prosperity</a>
                            </h3>
                            <p class="causes-one__text">We are providing books over bullets by investing in education for a peaceful tomorrow.</p>
                                <!-- <div class="causes-one__progress">
                                    <div class="causes-one__progress-shape"
                                        style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                    </div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="causes-one__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!--Causes One Single End-->
                </div>
            </div>
        </section>
        <!--Causes Three End-->

       
      

        

        <!--News One Start-->
        <section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">News & articles</span>
                    <h2 class="section-title__title">Directly from the <br> latest news and articles
                    </h2>
                </div>
                <div class="row">
                    <?php if($articles = getArticles()){ ?>
                    <?php for ($i=0; $i <= 2; $i++){ ?>

                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?php echo $articles[$i]['img_url']; ?>" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="#"><i class="far fa-user-circle"></i> <?php echo $articles[$i]['author']; ?></a>
                                            </li>
                                            <!-- <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                    Comments</a>
                                            </li> -->
                                        </ul>
                                        <h3 class="news-one__title"><a href="<?php echo $articles[$i]['url_link']; ?>" target="_blank"><?php echo $articles[$i]['title']; ?></a></h3>
                                    </div>
                                    <div class="news-one__bottom">
                                        <div class="news-one__read-more">
                                            <a href="<?php echo $articles[$i]['url_link']; ?>" target="_blank"> <span class="icon-right-arrow"></span> View</a>
                                        </div>
                                        <div class="news-one__share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="news-one__social-box">
                                        <ul class="list-unstyled news-one__social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-one__date">
                                    <p><?php echo convertDate($articles[$i]['date_publish']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->

                    <?php }?>
                    <?php }?>

                    <!--News One Single Start-->
                    <!-- <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="./assets/images/blog/news-1-2.jpg" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                            <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="news-details.html">Lorem Ipsum has been the
                                                industry's standard</a></h3>
                                    </div>
                                    <div class="news-one__bottom">
                                        <div class="news-one__read-more">
                                            <a href="news-details.html"> <span class="icon-right-arrow"></span> Read
                                                More</a>
                                        </div>
                                        <div class="news-one__share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="news-one__social-box">
                                        <ul class="list-unstyled news-one__social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <!-- <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="./assets/images/blog/news-1-3.jpg" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                            <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="news-details.html">There are many
                                                variations of passages of Lorem</a></h3>
                                    </div>
                                    <div class="news-one__bottom">
                                        <div class="news-one__read-more">
                                            <a href="news-details.html"> <span class="icon-right-arrow"></span> Read
                                                More</a>
                                        </div>
                                        <div class="news-one__share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="news-one__social-box">
                                        <ul class="list-unstyled news-one__social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--News One Single End-->
                </div>
            </div>
        </section>
        <!--News One End-->

        <!--Gallery Three Start-->
        <!-- <section class="gallery-two">
            <div class="gallery-one__bottom">
                <div class="gallery-one__container">
                    <ul class="list-unstyled gallery-one__list">
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="gallery-one__img">
                                <img src="./assets/images/gallery/gallery-1-1.jpg" alt="">
                                <a href="./assets/images/gallery/gallery-1-1.jpg" class="img-popup"></a>
                                <div class="gallery-one__content">
                                    <p class="gallery-one__sub-title">Charity</p>
                                    <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </li>
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="gallery-one__img">
                                <img src="./assets/images/gallery/gallery-1-2.jpg" alt="">
                                <a href="./assets/images/gallery/gallery-1-2.jpg" class="img-popup"></a>
                                <div class="gallery-one__content">
                                    <p class="gallery-one__sub-title">Charity</p>
                                    <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </li>
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="gallery-one__img">
                                <img src="./assets/images/gallery/gallery-1-3.jpg" alt="">
                                <a href="./assets/images/gallery/gallery-1-3.jpg" class="img-popup"></a>
                                <div class="gallery-one__content">
                                    <p class="gallery-one__sub-title">Charity</p>
                                    <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </li>
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="400ms">
                            <div class="gallery-one__img">
                                <img src="./assets/images/gallery/gallery-1-4.jpg" alt="">
                                <a href="./assets/images/gallery/gallery-1-4.jpg" class="img-popup"></a>
                                <div class="gallery-one__content">
                                    <p class="gallery-one__sub-title">Charity</p>
                                    <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </li>
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="500ms">
                            <div class="gallery-one__img">
                                <img src="./assets/images/gallery/gallery-1-5.jpg" alt="">
                                <a href="./assets/images/gallery/gallery-1-5.jpg" class="img-popup"></a>
                                <div class="gallery-one__content">
                                    <p class="gallery-one__sub-title">Charity</p>
                                    <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section> -->
        <!--Gallery Three End-->

        <!--Become Volunteer Start-->
        <section class="become-volunteer">
            <div class="container">
                <div class="become-volunteer__inner">
                    <div class="become-volunteer__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Become a volunteers</span>
                            <h2 class="section-title__title">Join your hand with us for a better <br> life and future
                            </h2>
                        </div>
                    </div>
                    <div class="become-volunteer__right">
                        <a href="./about.php" class="thm-btn become-volunteer__btn">Discover More</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Become Volunteer End-->

        <!--Site Footer Start-->
        <?php include_once('./includes/footer.php'); ?>

</html>