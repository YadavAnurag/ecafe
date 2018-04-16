<?php $page_title='Reservation'?>
<html>

<head>
    <title>
        <?php echo $page_title?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 " />
    <link rel="stylesheet" type="text/css" href="./../css/new-reservation.css" />
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
                    <p class="card-main-heading">RESERVATION</p>
                    <div style="border-bottom:1px solid firebrick; margin:auto;width:10%; margin-top:15px"></div>
                    <p class="card-info">THIS IS OUR MENU FEED WITH US BHUKKHAD KHI KE</p>
                    <p class="card-last-info">100% VEGETARIAN</p>
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
                        <p class="table-booking-heading">MAKING A BOOKING</p>
                        <form class="form" action="./../handling/booked.php" method="post">
                            <div class="row">
                                <img src="./../images/cal96.png" alt="cal" width="15%" height="70%" />
                                <input type="date" name="date" required="">
                            </div>
                            <div class="row">
                                <img src="./../images/clock.png" alt="clock" width="15%" height="70%" />
                                <?php
                                    echo '<select name="time">';
                                    $start = "+ 10 hours";
                                    $end = "+22 hours";
                                    $tStart = strtotime($start, strtotime(date("Y-m-d")));
                                    $tEnd = strtotime($end, strtotime(date("Y-m-d")));
                                    $tNow = $tStart;
                                    while($tNow <= $tEnd){
                                        echo "<option value='". date("H:i", $tNow) . "' />".date("h:i A", $tNow)."</option>\n";
                                        $tNow = strtotime('+30 minutes',$tNow);
                                    }  
                                    echo '</select>';
                                    ?>
                            </div>
                            <div class="row">
                                <img src="./../images/people.png" alt="people" width="15%" height="70%" />
                                <?php
                                    echo '<select name="people">';
                                    for($n =1;$n<=30;$n++){
                                        echo "<option value='". $n . "' />".$n." People"."</option>\n";
                                    }  
                                    echo '</select>';
                                ?>
                            </div>
                            <div class="row">
                                <img src="./../images/table.png" alt="table" width="15%" height="70%" />
                                <?php
                                    echo '<select name="table">';
                                        echo "<option value='1' />1st Table"."</option>\n";
                                        echo "<option value='2' />2nd Table"."</option>\n";
                                        echo "<option value='3' />3rd Table"."</option>\n";
                                    for($n =4;$n<=30;$n++){
                                        echo "<option value='". $n . "' />".$n."th Table"."</option>\n";
                                    }  
                                    echo '</select>';
                                ?>
                            </div>
                            <div class="row">
                                <img src="./../images/email.png" alt="table" width="15%" height="70%" />
                                <input type="email" name="email" required="" placeholder="Enter Registered Email" />
                            </div>
                            <input type="hidden" name="check" value="reservation" />
                            <input type="submit" value="FIND YOUR TABLE" />
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include('./../includes/footer.php')?>
</body>

</html>
