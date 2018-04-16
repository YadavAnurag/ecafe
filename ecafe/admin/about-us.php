<?php $page_title = 'About Us';?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial scale=1" />
    <link rel="stylesheet" type="text/css" href="./css/about-us.css" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
</head>

<body>
    <?php include('./../includes/customer-header.php');?>
    <div class="about-main-container">
        <div class="about-main-heading">
            <?php $heading = 'About Us';?>
            <p class="about-title">
                <?php echo $heading;?>
            </p>
        </div>
        <div class="teem-row">
            <p class="about-card-main-heading">MEET THE TEEM</p>
            <div style="border-bottom:1px solid firebrick; margin:auto;width:10%; margin-top:15px"></div>
            <p class="about-card-info">THIS IS OUR MENU FEED WITH US BHUKKHAD KHI KE</p>
            <p class="about-card-last-info">100% VEGETARIAN</p>
            <div class="teem-column">
                <div class="card">
                    <div class="image-div"></div>
                    <div class="text-container">
                        <h2 class="card-name">Anurag Yadav</h2>
                        <p class="card-title">CEO & Founder</p>
                        <p class="some-text">
                            Meet with Anurag Yadav If you want to play Counter Strike Global Offensive, but you can't meet with him without any prior permission.
                        </p>
                        <p class="card-email"><i>anuragyadav13481@gmail.com</i></p>
                        <p><button class="contact-button">Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="teem-column">
                <div class="card">
                    <div class="image-div"></div>
                    <div class="text-container">
                        <h2 class="card-name">Anurag Yadav</h2>
                        <p class="card-title">Art Director</p>
                        <p class="some-text">
                            Meet with Anurag Yadav If you want to play Counter Strike Global Offensive, but you can't meet with him without any prior permission.
                        </p>
                        <p class="card-email"><i>anuragyadav13481@gmail.com</i></p>
                        <p><button class="contact-button">Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="teem-column">
                <div class="card">
                    <div class="image-div"></div>
                    <div class="text-container">
                        <h2 class="card-name">Anurag Yadav</h2>
                        <p class="card-title">Designer</p>
                        <p class="some-text">
                            Meet with Anurag Yadav If you want to play Counter Strike Global Offensive, but you can't meet with him without any prior permission.
                        </p>
                        <p class="card-email"><i>anuragyadav13481@gmail.com</i></p>
                        <p><button class="contact-button">Contact</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('./../includes/footer.php');?>
</body>

</html>
