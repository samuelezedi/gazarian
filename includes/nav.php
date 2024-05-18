<nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="main-menu-three__wrapper-inner">
                        <div class="main-menu-three__left">
                            <div class="main-menu-three__logo">
                                <a href="index.php" ><img src="./assets/new/logo.png" style="width: 170px !important;" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu-three__right">
                            <div class="main-menu-three__right-inner">
                                <div class="main-menu-three__right-content-box">
                                    <div class="main-menu-three__right-top">
                                        <div class="main-menu-three__volunteers">
                                            <div class="main-menu-three__volunteers-icon">
                                                <img src="./assets/images/icon/main-menu-heart-icon-2.png" alt="">
                                            </div>
                                            <div class="main-menu-three__volunteers-text-box">
                                                <p class="main-menu-three__volunteers-text"><a
                                                        href="./about.php">Become a
                                                        <span>volunteers</span></a></p>
                                            </div>
                                        </div>
                                        <div class="main-menu-three__call">
                                            <div class="main-menu-three__icon">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="main-menu-three__number">
                                                <a href="tel:980009630">+ 98 (000) - 9630</a>
                                            </div>
                                        </div>
                                        <!-- <div class="main-menu-three__call">
                                            <div class="main-menu-three__icon">
                                                <i class="fas fa-location-arrow"></i>
                                            </div>
                                            <div class="main-menu-three__volunteers-text-box">
                                                <p class="text-white">380 St Kilda Road</p>
                                                <h6 class="text-white">Melbourne, Australia</h6>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="main-menu-three__right-bottom">
                                        <div class="main-menu-three__main-menu-box">
                                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                            <ul class="main-menu__list">

                                                <li class="<?php echo current_url('about') ? 'current' : ''; ?>" >
                                                    <a href="./about.php">About</a>
                                                </li>
                                                
                                                <li class="dropdown <?php echo (current_url('projects/education') || current_url('projects/shelter') || current_url('projects/food') || current_url('projects/medical')) ? 'current' : ''; ?>">
                                                    <a href=".#">Projects</a>
                                                    <ul>
                                                        
                                                        <li><a href="./projects/education.php">Education</a></li>
                                                        <li><a href="./projects/shelter.php">Shelter</a></li>
                                                        <li><a href="./projects/food.php">Food</a>
                                                        </li>
                                                        <li><a href="./projects/medical.php">Medical</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown ">
                                                    <a href=".#">Donations</a>
                                                    <ul>
                                                        
                                                        <li><a href="https://buy.stripe.com/test_dR63cL0zFaKgcI85kk">Give once</a></li>
                                                        <li><a href="https://buy.stripe.com/test_dR63cL0zFaKgcI85kk">Give everyday</a></li>
                                                        <li><a href="https://buy.stripe.com/test_dR63cL0zFaKgcI85kk">Give every week</a>
                                                        </li>
                                                        <li><a href="https://buy.stripe.com/test_dR63cL0zFaKgcI85kk">Give every month</a></li>
                                                    </ul>
                                                </li>
                                                <!-- <li>
                                                    <a href="https://buy.stripe.com/test_dR63cL0zFaKgcI85kk" target="_blank">Donations</a>
                                                </li> -->
                                                
                                                <li class="<?php echo current_url('read') ? 'current' : ''; ?>">
                                                    <a href="./read.php">Read</a>
                                                </li>

                                                
                                                <li class="<?php echo current_url('contact') ? 'current' : ''; ?>">
                                                    <a href="./contact.php">Contact</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="main-menu-three__btn-box">
                                    <a href="https://buy.stripe.com/test_dR63cL0zFaKgcI85kk" target="_blank" class="main-menu-three__btn"> <span
                                            class="fa fa-heart"></span> Donate
                                        now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>