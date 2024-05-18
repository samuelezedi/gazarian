<?php require_once './includes/func.php'; $article = getArticle()[0];?>

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
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="./index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Articles</li>
                    </ul>
                    <h2>News Details</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <section class="news-sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 offset-xl-1 offset-lg-1">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img src="<?php echo $article['img_url']; ?>" alt="">
                                <div class="news-details__date">
                                    <p><?php echo convertDate($article['date_publish']); ?></p>
                                </div>
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> <?php echo $article['author']; ?></a>
                                            </li>
                                    <!-- <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                            Comments</a>
                                    </li> -->
                                </ul>
                                <h3 class="news-details__title"><?php echo $article['title']; ?></h3>
                                <p class="news-details__text-1"><?php echo $article['body']; ?></p>
                            </div>
                            <!-- <div class="news-details__bottom">
                                <p class="news-details__tags">
                                    <span>Tags</span>
                                    <a href="#">fundraising</a>
                                    <a href="#">charity</a>
                                </p>
                                <div class="news-details__social-list">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="news-details__pagenation-box">
                                <ul class="list-unstyled news-details__pagenation">
                                    <li>Why is it important to support them</li>
                                    <li>Survived not only five centuries</li>
                                </ul>
                            </div> -->
                            <!-- <div class="comment-one">
                                <h3 class="comment-one__title">2 comments</h3>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="./assets/images/blog/comment-1-1.jpg" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Kevin martin</h3>
                                        <p>It has survived not only five centuries, but also the leap into electronic
                                            typesetting unchanged. It was popularised in the sheets containing lorem
                                            ipsum is simply free text.</p>
                                        <a href="news-details.html" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="./assets/images/blog/comment-1-2.jpg" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Sarah albert</h3>
                                        <p>It has survived not only five centuries, but also the leap into electronic
                                            typesetting unchanged. It was popularised in the sheets containing lorem
                                            ipsum is simply free text.</p>
                                        <a href="news-details.html" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave a comment</h3>
                                <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a message"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Submit
                                                    comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Site Footer Start-->
        <?php include_once('./includes/footer.php'); ?>                 

</html>