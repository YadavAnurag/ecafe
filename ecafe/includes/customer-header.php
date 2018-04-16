<div class="navbar">
    <div class="site-name-div">
        <span style="color:white; margin:0px; padding:0px ">THE</span>
        <?php $heading = 'CAFE';?>
        <p class="site-name">
            <?php echo $heading;?>
        </p>
    </div>
    <div class="nav-menu">
        <a href="./../index.php">HOME</a>
        <a href="./../customer/menu.php">MENU</a>
        <!--
        <div class="dropdown">
            <button class="dropbtn">Menu&nbsp; </button>
            <div class="dropdown-content">
                <a href="./../customer/menu.php">Starter</a>
                <a href="menu-north-indian.php">Lunch</a>
                <a href="menu-chinese.php">Dinner</a>
            </div>
        </div>
-->
        <div class="dropdown">
            <button class="dropbtn">RESERVATION&nbsp; </button>
            <div class="dropdown-content">
                <a href="./../customer/new-reservation.php">FIND A TABLE</a>
                <a href="./../handling/check-status.php">YOUR RESERVATIONS</a>
            </div>
        </div>
        <a href="./../customer/feedback.php">FEEDBACK</a>
        <a href="./../customer/contact-us.php">CONTACT US</a>
        <a href="./../customer/about-us.php">ABOUT US</a>
        <div class="dropdown">
            <button class="dropbtn">OTHERS&nbsp; </button>
            <div class="dropdown-content">
                <a href="./../admin/login.php">ADMIN</a>
                <a href="./../index.php">CUSTOMER</a>
            </div>
        </div>
    </div>
</div>
