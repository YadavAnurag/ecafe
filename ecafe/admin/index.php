<?php $page_title = 'Home';?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./css/index.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />

</head>

<body>
    <?php
        include('./includes/header.php');
    ?>
        <div class="menu-container">
            <div class="menu-main-heading">
                <?php $heading = 'Cafetaria Dishes';?>
                <p class="menu-title">
                    <?php echo $heading;?>
                </p>
            </div>
            <div class="menu-card-container">
                <div class="menu-card" style="background-color: #b2dbef;">
                    <p class="menu-card-main-heading">MENUS</p>
                    <div style="border-bottom:1px solid firebrick; margin:auto;width:10%; margin-top:15px"></div>
                    <p class="menu-card-info">THIS IS OUR MENU FEED WITH US BHUKKHAD KHI KE</p>
                    <div class="menu-table-div">
                        <div class="starter">
                            <p class="menu-table-title">Starter</p>
                            <div class="just-menu">
                                <div class="just-menu-info-div">
                                    <p class="menu-name">Samosa</p>
                                    <p class="price">&#8377;&nbsp;5</p>
                                    <p class="menu-info">
                                        ABE BHUKKHA KHI KE SAMOSA KHANA HAI KYA TO AA JAO
                                        <br />HI THIS IS ME ANURAG YADAV
                                        <br>AND WHO ARE YOU
                                    </p>
                                    <div style="border-bottom:1px solid rgba(0,0,0,0.4); margin:auto;width:80%;"></div>
                                </div>
                            </div>
                            <div class="just-menu">
                                <div class="just-menu-info-div">
                                    <p class="menu-name">Samosa</p>
                                    <p class="price">&#8377;&nbsp;5</p>
                                    <p class="menu-info">
                                        ABE BHUKKHA KHI KE SAMOSA KHANA HAI KYA TO AA JAO
                                        <br />HI THIS IS ME ANURAG YADAV
                                        <br>AND WHO ARE YOU
                                    </p>
                                    <div style="border-bottom:1px solid rgba(0,0,0,0.4); margin:auto;width:80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="lunch">
                            <p class="menu-table-title">Lunch</p>
                            <div class="just-menu">
                                <div class="just-menu-info-div">
                                    <p class="menu-name">Samosa</p>
                                    <p class="price">&#8377;&nbsp;5</p>
                                    <p class="menu-info">
                                        ABE BHUKKHA KHI KE SAMOSA KHANA HAI KYA TO AA JAO
                                        <br />HI THIS IS ME ANURAG YADAV
                                        <br>AND WHO ARE YOU
                                    </p>
                                    <div style="border-bottom:1px solid rgba(0,0,0,0.4); margin:auto;width:80%;"></div>

                                </div>
                            </div>
                            <div class="just-menu">
                                <div class="just-menu-info-div">
                                    <p class="menu-name">Samosa</p>
                                    <p class="price">&#8377;&nbsp;5</p>
                                    <p class="menu-info">
                                        ABE BHUKKHA KHI KE SAMOSA KHANA HAI KYA TO AA JAO
                                        <br />HI THIS IS ME ANURAG YADAV
                                        <br>AND WHO ARE YOU
                                    </p>
                                    <div style="border-bottom:1px solid rgba(0,0,0,0.4); margin:auto;width:80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="dinner">
                            <p class="menu-table-title">Dinner </p>
                            <div class="just-menu">
                                <div class="just-menu-info-div">
                                    <p class="menu-name">Samosa</p>
                                    <p class="price">&#8377;&nbsp;5</p>
                                    <p class="menu-info">
                                        ABE BHUKKHA KHI KE SAMOSA KHANA HAI KYA TO AA JAO
                                        <br />HI THIS IS ME ANURAG YADAV
                                        <br>AND WHO ARE YOU
                                    </p>
                                    <div style="border-bottom:1px solid rgba(0,0,0,0.4); margin:auto;width:80%;"></div>

                                </div>
                            </div>
                            <div class="just-menu">
                                <div class="just-menu-info-div">
                                    <p class="menu-name">Samosa</p>
                                    <p class="price">&#8377;&nbsp;5</p>
                                    <p class="menu-info">
                                        ABE BHUKKHA KHI KE SAMOSA KHANA HAI KYA TO AA JAO
                                        <br />HI THIS IS ME ANURAG YADAV
                                        <br>AND WHO ARE YOU
                                    </p>
                                    <div style="border-bottom:1px solid rgba(0,0,0,0.4); margin:auto;width:80%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--        end of menu container-->
        <div class="parent">
            <div class="child" style="background-color: #b2dbef;">
                <p class="card-main-heading">RESERVATIONS </p>
                <div style="border-bottom:1px solid firebrick; margin:auto;width:10%; margin-top:15px"></div>
            </div>
        </div>
        <!--        END OF feedbacks-->
        <div class="parent">
            <div class="child" style="background-color: #b2dbef;">
                <p class="card-main-heading">FEEDBACKS </p>
                <div style="border-bottom:1px solid firebrick; margin:auto;width:10%; margin-top:15px"></div>
            </div>
        </div>
</body>
<?php require_once('./../includes/footer.php'); ?>

</html>
