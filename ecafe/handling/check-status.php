<?php $page_title='Status';?>
<html>

<head>
    <title>
        <?php echo $page_title?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 " />
    <link rel="stylesheet" type="text/css" href="./check-status.css" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
</head>

<body>
    <?php include('./../includes/customer-header.php')?>
    <div class="menu-main-heading">
        <?php $heading = 'Check Your Status';?>
        <p class="menu-title">
            <?php echo $heading;?>
        </p>
    </div>
    <div class="parent" style="margin-top:25%">
        <div class="child" style="background-color: #b2dbef">
            <p class="card-main-heading">RESERVATION STATUS </p>
            <div style="border-bottom:1px solid firebrick; margin:auto;width:10%; margin-top:15px"></div>
            <div class="container">
                <form id="form" action="./../customer/old-reservation.php" method="post">
                    <label class="inputLbl">Reservation Id</label>
                    <br />
                    <input name="id" type="text" maxlength="100" placeholder="Your Reservation Id" required="" />
                    <br />
                    <label class="inputLbl">Password</label>
                    <br />
                    <input name="password" type="password" placeholder="********" required="" />
                    <br />
                    <input class="signup-btn" name="submitBtn" type="submit" value="CHECK" />
                </form>
            </div>
        </div>
    </div>
    <?php include('./../includes/footer.php')?>
</body>

</html>
