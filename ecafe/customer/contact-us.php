<?php $page_title='Contact Us'?>
<html>

<head>
    <title>
        <?php echo $page_title?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 " />
    <link rel="stylesheet" type="text/css" href="./../css/contact-us.css" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
</head>

<body>
    <?php include('./../includes/customer-header.php')?>
    <div class="menu-main-heading">
        <?php $heading = 'Get In Touch';?>
        <p class="menu-title">
            <?php echo $heading;?>
        </p>
    </div>
    <div class="container">
        <div class="main-container">
            <div class="parent">
                <div class="child" style="background-color: #b2dbef">
                    <p class="card-main-heading">CONTACT US </p>
                    <div style="border-bottom:1px solid firebrick; margin:auto;width:10%; margin-top:15px"></div>

                    <div class="text-container-div">
                        <p class="card-info">GET IN TOUCH WITH OUR TEEM</p>
                        <p class="contact-us-address">
                            ROOM NO. F-17 TAGORE BHAWAN
                            <br />B-2-7 GOLGHAR GORAKHPUR
                            <br />24/60 KAROL BAG DELHI
                        </p>
                    </div>
                    <div class="table-main-container">
                    </div>
                </div>
            </div>

        </div>

    </div>
    <?php include('./../includes/footer.php')?>
</body>

</html>
