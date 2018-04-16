<?php 
$page_title='Feedback';
require('./../mysqli_connect.php');
?>
<html>

<head>
    <title>
        <?php echo $page_title?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 " />
    <link rel="stylesheet" type="text/css" href="./css/feedback.css" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
</head>

<body>
    <?php include('./includes/header.php')
    ?>
    <div class="menu-main-heading">
        <?php $heading = 'Valuable Feedbacks';?>
        <p class="menu-title">
            <?php echo $heading;?>
        </p>
    </div>
    <div class="parent">
        <div class="child" style="background-color: #b2dbef;">
            <p class="card-main-heading">FEEDBACK</p>

            <?php
                 
                $q = "SELECT feedback_id as id, email, body, DATE_FORMAT(date_entered, '%M %d, %Y') as de from feedbacks ORDER BY date_entered ASC";
                $res = @mysqli_query($dbc, $q);
                if($res){
                     echo '<div class="table-container">';
                    echo '<table>
                        <tr><th>Id</th><th>Email</th><th>Body</th><th>Entry Date</th><th>Delete</th></tr>
                    ';
                    while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                        echo '<tr><td>'.$row['id'].'</td><td>'.$row['email'].'</td><td>'.$row['body'].'</td><td>'.$row['de'].'</td><td><button>Delete</button></td></tr>';
                    }
                    echo '</table>';
                    echo '</div>';
                    mysqli_free_result($res);
                }
                else{
                    echo '<h1>Current Feedbacks could not be retrieved sorry for any inconvinience</h1>';
                    echo '<p>'.mysqli_error($dbc).'<br />'.'<br />Query:'.$q.'<br />';
                }
                mysqli_close($dbc);
            ?>
        </div>
    </div>
    <?php include('./../includes/footer.php')?>
</body>

</html>
