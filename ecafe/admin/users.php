<?php $page_title='User';
require('./../mysqli_connect.php');
?>
<html>

<head>
    <title>
        <?php echo $page_title?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 " />
    <link rel="stylesheet" type="text/css" href="./css/users.css" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
</head>

<body>
    <?php include('./includes/header.php')?>
    <div class="parent">
        <div class="child">
            <p class="card-main-heading">USERS</p>

            <?php
                
                $q = 'SELECT u.user_id as id, CONCAT_WS(" ", u.first_name, u.middle_name, u.last_name) as name, g.gender, u.email, u.pass, u.mobile, u.address, u.date_entered AS de from users as u INNER JOIN genders AS g ON u.gender_id = g.gender_id ORDER BY de';
                $res = mysqli_query($dbc, $q);
                if($res){
                     echo '<div class="table-container">';
                    echo '<table>
                        <tr><th>User Id</th><th>Name</th><th>Gender</th><th>Email</th><th>Mobile</th><th>Address</th><th>Entry Date</th><th>Delete</th></tr>
                        ';
                    while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                        echo '<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['gender'].'</td><td>'.$row['email'].'</td><td>'.$row['mobile'].'</td><td>'.$row['address'].'</td><td>'.$row['de'].'</td><td><button>Delete</button></td>';
                    }
                    echo '</table>';
                    echo '</div>';
                    mysqli_free_result($res);
                }
                else{
                    echo '<h1>Current User couldn\'t be retrieved sorry for any inconvinience</h1>';
                    echo '<p>'.mysqli_error($dbc).'<br />'.'Query:<br />'.$q;
                }
                mysqli_close($dbc);
            ?>
        </div>
    </div>
    <?php include('./../includes/footer.php')?>
</body>

</html>
