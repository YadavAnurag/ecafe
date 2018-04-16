<?php $page_title='Register'?>
<html>

<head>
    <title>
        <?php echo $page_title?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 " />
    <link rel="stylesheet" type="text/css" href="./../css/sign-up.css" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
</head>

<body>
    <?php include('./../includes/customer-header.php');
        require('./../../mysqli_connect.php');
        $foo = 'register';
    
    ?>
    <div class="about-main-heading">
        <?php $heading = 'Register Here';?>
        <p class="about-title">
            <?php echo $heading;?>
        </p>
    </div>
    <div class="container">
        <div class="main-container">
            <div class="parent">
                <div class="child" style="background-color: #b2dbef;">
                    <p class="card-main-heading">SIGN UP</p>
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
                            <form id="form" action="./../handling/booked.php" method="post">
                                <label class="inputLbl">First Name</label>
                                <br />
                                <input id="username-input" name="first_name" type="text" maxlength="100" placeholder="First Name" required="" />

                                <label class="inputLbl">Middle Name</label>
                                <br />
                                <input id="username-input" name="middle_name" type="text" maxlength="100" placeholder="Middle Name" />

                                <label class="inputLbl" na>Last Name</label>
                                <br />
                                <input id="username-input" me="last_name" type="text" maxlength="100" placeholder="Last Name" />
                                <br />
                                <label class="inputLbl">Your Gender</label>
                                <br />
                                <input type="radio" name="gender" value="1" /><span class="gender-heading">Male</span>
                                <input type="radio" name="gender" value="2" /><span class="gender-heading">Female</span>
                                <input type="radio" name="gender" value="3" /><span class="gender-heading">Other</span>
                                <br />
                                <label class="inputLbl">Email</label>
                                <br />
                                <input name="email" type="email" maxlength="100" placeholder="you@gamil.com" required="" />
                                <br />
                                <label class="inputLbl">Password</label>
                                <br />
                                <input name="password" type="password" placeholder="********" required="" />
                                <br />
                                <label class="inputLbl">Confirm Password</label>
                                <br />
                                <input name="confirm-password" type="password" placeholder="********" required="" />
                                <br />
                                <label class="inputLbl">Contact Number</label>
                                <br />
                                <input name="contact-number" type="text" placeholder="Contact Number" required="" />
                                <br />
                                <label class="inputLbl">Address</label>
                                <br />
                                <textarea id="address-input" name="address" placeholder="Your Address" required="" style="height:200px;"></textarea>
                                <br />
                                <input type="hidden" name="check" value="<?php echo $foo;?>" />
                                <input class="signup-btn" name="submitBtn" type="submit" value="RESERVE YOUR TABLE" />
                                <br /><a href="#" class="login-link">Already Reserved?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include('./../includes/footer.php')?>
</body>

</html>
