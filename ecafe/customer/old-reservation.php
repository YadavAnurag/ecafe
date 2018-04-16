<?php $page_title='Your Reservations'?>
<html>

<head>
    <title>
        <?php echo $page_title?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 " />
    <link rel="stylesheet" type="text/css" href="./../css/old-reservation.css" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
</head>

<body>
    <?php include('./../includes/customer-header.php')?>
    <div class="container">
        <div class="container-main-reservation">
            <div class="menu-main-heading">
                <?php $heading = 'Reservation';?>
                <p class="menu-title">
                    <?php echo $heading;?>
                </p>
            </div>
            <div class="parent">
                <div class="child" style="background-color: #b2dbef">
                    <p class="card-main-heading">YOUR RESERVATIONS</p>
                    <div style="border-bottom:1px solid firebrick; margin:auto;width:10%; margin-top:15px"></div>
                    <p class="card-info">THANK YOU FOR YOUR BOOKING</p>
                    <div class="text-container-div">
                        <p class="text">
                            Book online or give us a call on +91 8354820950 between 9.30am-10pm, or send us an email on
                            <br />
                            <i><a href="#" class="table-email">anuragyadav13481@gmail.com</a></i>
                        </p>
                        <p class="text">
                            Your feedback is important to us. Tell us what you think at
                            <br />
                            <i><a href="#" class="table-email">anufz00@gmail.com</a></i>
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
                    <div class="form-container">
                        <?php
                            $heading_status = 'UNDER PROCESS';
                            $button_status = 'PROCESSED';
                            
                            $display = 'none';
                            $checking_display = '';
                        ?>
                            <p class="table-booking-heading">
                                <?php echo "$heading_status";?>
                            </p>
                            <hr style="color: #32496f" />
                            <form class="form" action="./sign-up.php" method="post">
                                <div class="under-process">
                                    <div class="input-div">
                                        <div class="image-div"><img src="./../images/cal96.png" alt="clock" width="80%" height="100%" /></div>
                                        <input name="date" type="text" value="" placeholder="<?php echo '24th August 2018'?>" readonly />
                                    </div>
                                    <hr style="color: #32496f" />
                                    <div class="input-div">
                                        <div class="image-div"><img src="./../images/people.png" height="100%" width="80%" /></div>
                                        <input type="text" value="" name="people" placeholder="<?php echo '3 People'?>" readonly />
                                    </div>

                                    <div class="input-div">
                                        <hr style="color: #32496f" />
                                        <div class="image-div"><img src="./../images/clock.png" height="100%" width="80%" /></div>
                                        <input type="text" name="rtime" value="" placeholder="03:00 A.M." readonly/>
                                    </div>
                                    <div class="input-div">
                                        <!--                                <hr style="color: #32496f; width:100% ; margin-top:20px;" />-->
                                        <input type="submit" value="<?PHP echo 'CANCEL YOUR BOOKING'?>" />
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include('./../includes/footer.php')?>
</body>

</html>
