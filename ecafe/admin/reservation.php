<?php $page_title='Reservation';
require('./../mysqli_connect.php');
?>
<html>

<head>
    <title>
        <?php echo $page_title?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 " />
    <link rel="stylesheet" type="text/css" href="./css/reservation.css" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
</head>

<body>
    <?php include('./includes/header.php')?>
    <div class="menu-main-heading">
        <?php $heading = 'Cafetaria Dishes';?>
        <p class="menu-title">
            <?php echo $heading;?>
        </p>
    </div>
    <div class="parent">
        <div class="child" style="background-color: #b2dbef;">
            <p class="card-main-heading">RESERVATIONS</p>
            <div style="border-bottom:1px solid firebrick; margin:auto;width:10%; margin-top:15px"></div>
            <?php
                
                $q = "SELECT r.reservation_id as rid, u.user_id as uid, CONCAT_WS(' ',u.first_name, u.middle_name, u.last_name) as name, u.email as email, r.table_no,date_format(table_datetime, '%M %D %Y') as d, time_format(table_datetime, '%l:%i %p') as t,r.people,r.date_entered as de from reservations as r INNER JOIN users AS u ON r.user_id = u.user_id ORDER BY de";
                $res = mysqli_query($dbc, $q);
                if($res){
                     echo '<div class="table-container">';
                    echo '<table>
                        <tr><th>Reservation Id</th><th>User Id</th><th>Name</th><th>Email</th><th>Table No.</th><th>Date</th><th>Time</th><th>People</th><th>Entry Date</th><th>Approve</th><th>Delete</th></tr>
                        ';
                    while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                        echo '<tr><td>'.$row['rid'].'</td><td>'.$row['uid'].'</td><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['table_no'].'</td><td>'.$row['d'].'</td><td>'.$row['t'].'</td><td>'.$row['people'].'</td><td>'.$row['de'].'</td><td><button>Approve</button></td><td><button>Delete</button></td>';
                    }
                    echo '</table>';
                    echo '</div>';
                    mysqli_free_result($res);
                }
                else{
                    echo '<h1>Current reservations could not retrieved sorry for any inconvinience</h1>';
                    echo '<p>'.mysqli_error($dbc).'<br />'.'Query:<br />'.$q;
                }
                mysqli_close($dbc);
            ?>
        </div>
    </div>
    <?php include('./../includes/footer.php')?>
</body>

</html>
