<header class="navbar">
    <div class="navbar-top">
        <div class="logo-and-moto">
            <img src="/lawfirm/images/logo.png" alt="logo" id="logo" class=""> <!--class="inverted-img"-->
            <div class="moto">
                <p class="moto moto-main font-bold ">مكتب ألفا للمحاماة</p>
            <p class="moto moto-sub font-thin">العدالة دون قوة عاجزة<br> والقوة دون عدالة طاغية</p>
            </div>
        </div>
        
        <div class="navbar-links">
            <a href="index.php" class="dark-text font-normal ">الرئيسية</a>
            <a href="archive.php" class="dark-text font-normal ">الأرشيف</a>
            <a href="about.php" class="dark-text font-normal ">حول</a>
            

            
        </div>
        
        <div class="call-and-profile">
            <div class="call-us">
                <p class="phone-number font-bold font-small">+(972)598097999</p>
                <a href="tel:+972598097999" class="btn-link-dark call-us-btn font-bold font-sm"> اتصل بنا الان </a>

            </div>
            <?php  
                if (isset($_SESSION['username'])) {
                    // add profile page or dashboard if the user is admin
                    echo '<div class="profile-header-container">
                        <div class="profile-image-container">
                            <img src="images/user.png" class="profile-image">
                        </div>
                        <div class="profile-name-container">
                            <p class="profile-name">' . $_SESSION['username'] . '</p>
                        </div>
                        </div>';
                } else {
                    // echo '<div class="profile-icon">
                    //     <img src="images/user.png" class="user-image">
                    // </div>';

                    echo '<div class="profile-header-container">
                        <div class="profile-image-container">
                            <img src="images/user.png" class="profile-image">
                        </div>
                        <div class="profile-name-container">
                            <p class="profile-name font-normal">' .'test'. '</p>
                        </div>
                        </div>';
                }

            ?>
            
        </div>
        
    </div>
    <div class="navbar-bottom">
        <div class="navbar-bottom-item-1">
            <!-- icons here -->
            <a href="archive.php" class="golden-text">الأرشيف</a>
        </div>
        <div class="navbar-bottom-item-2">
            <!-- icons here -->
            <a href="index.php" class="golden-text">الرئيسية</a>
        </div>
        <div class="navbar-bottom-item-3">
            <!-- icons here -->
            <a href="about.php" class="golden-text">حول</a>

        </div>
    </div>
</header>