<div class="main-menu__right-bottom">
    <div class="main-menu__main-menu-box">
        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
        <ul class="main-menu__list">
            <li class="<?php echo current_url('') ? 'current' : ''; ?>">
                <a href="/">Home</a>
            </li>
            <li class="<?php echo current_url('about') ? 'current' : ''; ?>">
                <a href="/about.php">About</a>
            </li>
            <li class="dropdown">
                <a href="#">Projects</a>
                <ul>
                    <li><a href="./projects/education.php">Education</a></li>
                    <li><a href="./projects/shelter.php">Shelter</a></li>
                    <li><a href="./projects/food.php">Food</a></li>
                    <li><a href="./projects/medical.php">Medical</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Donations</a>
                <ul>
                    <li><a href="https://buy.stripe.com/5kAaGqbnFbxZg3S00e">Give once</a></li>
                    <li><a href="https://buy.stripe.com/7sIeWGajBgSj18Y4gv">Give everyday</a></li>
                    <li><a href="https://buy.stripe.com/14k5m6bnF45xbNC14k">Give everyweek</a></li>
                    <li><a href="https://buy.stripe.com/eVa4i2crJgSj5pe5kB">Give every month</a></li>
                    
                </ul>
            </li>
            
            <li class="<?php echo current_url('read') ? 'current' : ''; ?>">
                <a href="/read.php">Read</a>
            </li>
            <li class="<?php echo current_url('contact') ? 'current' : ''; ?>">
                <a href="/contact.php">Contact</a>
            </li>
        </ul>
    </div>
    <div class="main-menu__main-menu-content-box">
        <div class="main-menu__search-cat-btn-box">
            <div class="main-menu__btn-box">
                <a href="https://buy.stripe.com/test_dR63cL0zFaKgcI85kk" target="_blank" class="main-menu__btn"> <span
                        class="fa fa-heart"></span> Donate
                    now</a>
            </div>
        </div>
    </div>
</div>