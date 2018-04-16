<?php $page_title='Feedback'?>
<html>

<head>
    <title>
        <?php echo $page_title?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 " />
    <link rel="stylesheet" type="text/css" href="./../css/feedback.css" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
</head>

<body>
    <?php include('./../includes/customer-header.php')?>
    <div class="menu-main-heading">
        <?php $heading = 'Valuable Feedback';?>
        <p class="menu-title">
            <?php echo $heading;?>
        </p>
    </div>
    <div class="main-container">
        <div class="parent">
            <div class="child" style="background-color: #b2dbef">
                <p class="card-main-heading">FEEDBACK</p>
                <div style="border-bottom:1px solid firebrick; margin:auto;width:10%; margin-top:15px"></div>
                <p class="card-info">THIS IS OUR MENU FEED WITH US BHUKKHAD KHI KE</p>
                <p class="card-last-info">100% VEGETARIAN</p>
                <div class="text-container-div">
                    <p class="text">
                        Book online or give us a call on +91 8354820950 between 9.30am-10pm, <br />or send us an email on
                        <br />
                        <i><a href="#" class="table-email">cafe-reservation@gmail.com</a></i>
                    </p>
                    <p class="text">
                        Your feedback is important to us. Tell us what you think at
                        <br />
                        <i><a href="#" class="table-email">cafe-feedback@gmail.com</a></i>
                    </p>
                    <h2 class="text-heading">
                        Lunch
                    </h2>
                    <p class="text">
                        Monday to Saturday 12pm-3pm
                        <br /> Sunday 12pm-3pm
                    </p>
                    <h2 class="text-heading">
                        Dinner
                    </h2>
                    <p class="text">
                        Monday to Thursday 6pm-10.30pm
                        <br /> Friday & Saturday 5.30pm-10.30pm
                        <br /> Sunday 6pm-9.30pm
                    </p>
                </div>
                <div class="table-main-container">
                    <div class="sign-up-form-container">
                        <form id="form" action="./../handling/feedback-handle.php" method="post">
                            <label class="inputLbl">Email</label>
                            <br />
                            <input name="email" type="email" maxlength="100" placeholder="you@gamil.com" required="" />
                            <br />
                            <label class="inputLbl">Feedback</label>
                            <br />
                            <textarea name="feedback" placeholder="Write Your Feedback" required="" style="height:200px;"></textarea>
                            <br />
                            <input class="signup-btn" name="submitBtn" type="submit" value="SUBMIT" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include('./../includes/footer.php')?>
</body>

</html>
