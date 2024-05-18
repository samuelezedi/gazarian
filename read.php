<?php require_once './includes/func.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once './includes/head.php'; ?>
<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header">
        <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="./index.php"><img src="./assets/new/logo_light.JPG" width="150px" alt=""></a>
                            </div>
                            <div class="main-menu__shape-1 float-bob-x">
                                <img src="./assets/images/shapes/main-menu-shape-1.png" alt="">
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__right-top">
                                <div class="main-menu__right-top-left">
                                    <div class="main-menu__volunteers">
                                        <div class="main-menu__volunteers-icon">
                                            <img src="./assets/images/icon/main-menu-heart-icon.png" alt="">
                                        </div>
                                        <div class="main-menu__volunteers-text-box">
                                            <p class="main-menu__volunteers-text"><a href="./contact.php">Become
                                                    a
                                                    <span>volunteers</span></a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-menu__right-top-right">
                                    <div class="main-menu__right-top-address">
                                        <ul class="list-unstyled main-menu__right-top-address-list">
                                        <?php require_once './includes/contact_head.php'; ?>

                                            <!-- <li>
                                                <div class="icon">
                                                    <span class="icon-location"></span>
                                                </div>
                                                
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="main-menu__right-top-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php require_once './includes/navigation1.php'; ?>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(./assets/new/men.png)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <!-- <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="./index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Pages</li>
                    </ul> -->
                    <h2>Articles</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <section class="news-sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 offset-xl-1">
                        <div class="blog-sidebar__left">
                            <div class="news-sidebar__content">
                            <?php if($articles = getArticles()){ ?>
                            <?php foreach ($articles as $article){ ?>
                                <div class="news-sidebar__single">
                                    <div class="news-sidebar__img">
                                        <img src="<?php echo $article['img_url']; ?>" style="width: auto; height:100%; " alt="">
                                        <div class="news-sidebar__date">
                                            <p><?php echo convertDate($article['date_publish']); ?></p>
                                        </div>
                                    </div>
                                    <div class="news-sidebar__content-box">
                                        <ul class="list-unstyled news-sidebar__meta">
                                            <li><a href="#"><i class="far fa-user-circle"></i> <?php echo $article['author']; ?></a>
                                            </li>
                                            <!-- <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                    Comments</a>
                                            </li> -->
                                        </ul>
                                        <h3 class="news-sidebar__title">
                                            <a href="./news-detail.php?read=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a>
                                        </h3>
                                        <p class="news-sidebar__text"><?php echo $article['body']; ?></p>
                                        <div class="news-sidebar__bottom">
                                            <a href="news-details.html" class="news-sidebar__arrow"><span
                                                    class="icon-right-arrow"></span></a>
                                            <a href="./news-detail.php?read=<?php echo $article['id']; ?>" class="news-sidebar__read-more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-3">
                            <?php }?>
                            <?php }?>
                                <!-- <div class="news-sidebar__single">
                                    <div class="news-sidebar__img">
                                        <img src="assets/images/blog/news-sidebar-img-2.jpg" alt="">
                                        <div class="news-sidebar__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                    </div>
                                    <div class="news-sidebar__content-box">
                                        <ul class="list-unstyled news-sidebar__meta">
                                            <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                            <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-sidebar__title">
                                            <a href="news-details.html">The point of using Lorem Ipsum</a>
                                        </h3>
                                        <p class="news-sidebar__text">There are many variations of passages of Lorem
                                            Ipsum available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage.</p>
                                        <div class="news-sidebar__bottom">
                                            <a href="news-details.html" class="news-sidebar__arrow"><span
                                                    class="icon-right-arrow"></span></a>
                                            <a href="news-details.html" class="news-sidebar__read-more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="news-sidebar__single">
                                    <div class="news-sidebar__img">
                                        <img src="assets/images/blog/news-sidebar-img-3.jpg" alt="">
                                        <div class="news-sidebar__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                    </div>
                                    <div class="news-sidebar__content-box">
                                        <ul class="list-unstyled news-sidebar__meta">
                                            <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                            <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-sidebar__title">
                                            <a href="news-details.html">It is a long established fact that a reader</a>
                                        </h3>
                                        <p class="news-sidebar__text">There are many variations of passages of Lorem
                                            Ipsum available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage.</p>
                                        <div class="news-sidebar__bottom">
                                            <a href="news-details.html" class="news-sidebar__arrow"><span
                                                    class="icon-right-arrow"></span></a>
                                            <a href="news-details.html" class="news-sidebar__read-more">Read More</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="news-sidebar__bottom-box">
                                <div class="news-sidebar__shape-1"
                                    style="background-image: url(assets/images/shapes/news-sidebar-shape-1.png);"></div>
                                <div class="news-sidebar__bottom-box-icon">
                                    <img src="assets/images/icon/news-sidebar-bottom-box-icon.png" alt="">
                                </div>
                                <p class="news-sidebar__bottom-box-text">But amidst the darkness, there was also light. Amidst the despair, there was hope. It came in the form of aid workers, brave souls who risked their lives to bring relief to the afflicted. They provided food for the hungry, shelter for the homeless, and medicine for the sick and injured.</p>
                            </div>
                            <div class="news-sidebar__delivering-services">
                                <div class="news-sidebar__shape-1"
                                    style="background-image: url(assets/images/shapes/news-sidebar-shape-1.png);"></div>
                                <div class="news-sidebar__delivering-services-icon">
                                    <a href="#"><img
                                            src="assets/images/icon/news-sidebar__delivering-services-icon.png"
                                            alt=""></a>
                                </div>
                                <h3 class="news-sidebar__delivering-services-title"><a href="#">Educate
                                        children in rural areas our priority</a></h3>
                            </div>
                            <div class="news-sidebar__load-more">
                                <a href="#" class="thm-btn news-sidebar__load-more-btn">Load more
                                    posts</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <div class="sidebar-shape-1"
                                    style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                                <h3 class="sidebar__title">Latest posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i> By admin</span>
                                                <a href="news-details.html">Promoting the rights
                                                    of children</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i> By admin</span>
                                                <a href="news-details.html">There are many variations of</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i> By admin</span>
                                                <a href="news-details.html">Bring to the table win-win survival</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__category">
                                <div class="sidebar-shape-1"
                                    style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="news-details.html">Donations <span class="icon-right-arrow"></span></a>
                                    </li>
                                    <li class="active"><a href="news-details.html">Charity <span
                                                class="icon-right-arrow"></span></a></li>
                                    <li><a href="news-details.html">Fundraising <span
                                                class="icon-right-arrow"></span></a>
                                    </li>
                                    <li><a href="news-details.html">Food & Water <span
                                                class="icon-right-arrow"></span></a></li>
                                    <li><a href="news-details.html">Kids Education <span
                                                class="icon-right-arrow"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <div class="sidebar-shape-1"
                                    style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">fundraising</a>
                                    <a href="#">charity</a>
                                    <a href="#">donation</a>
                                    <a href="#">water</a>
                                    <a href="#">kids</a>
                                    <a href="#">Education</a>
                                </div>
                            </div>
                            <div class="sidebar__single sidebar__comments">
                                <div class="sidebar-shape-1"
                                    style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                                <h3 class="sidebar__title">Comments</h3>
                                <ul class="sidebar__comments-list list-unstyled">
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p>John Doe on Template:</p>
                                            <h5>Comments</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p>John Doe on Template:</p>
                                            <h5>Comments</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <!--Site Footer Start-->
        <?php include_once('./includes/footer.php'); ?>                 

</html>