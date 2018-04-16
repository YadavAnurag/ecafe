<?php 
$page_title = 'Menu';
require('./../mysqli_connect.php');
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
    <link rel="stylesheet" type="text/css" href="./../css/menu.css" />
</head>

<body>
    <?php
        include('./../includes/customer-header.php');
    ?>
        <div class="menu-main-heading">
            <?php $heading = 'Cafetaria Dishes';?>
            <p class="menu-title">
                <?php echo $heading;?>
            </p>
        </div>
        <div class="menu-container">
            <?php 
                $n=1;
            while($n<=3){
                $q = "SELECT c.name as category, m.name, m.info, m.price FROM menus as m INNER JOIN menu_category as c ON m.category_id=c.category_id where c.category_id = '$n'";
                $res = @mysqli_query($dbc,$q);
                if($res){
                    echo"<div class=\"menu-card\" style=\"width:80%;margin-top:25%\">";
                            echo "<p class="."menu-card-main-heading".">Starter</p>";
                            echo "<p class=\"menu-card-info\"> LOREM IPSUM DOLOR SIT AMET, CONSECTETUX ADIPISICING ELIT</p>";
                            if($n==1){
                                echo "<div class=\"menu-card-image\"><img src=\"./../images/starter.jpeg\"\" width=\"100%\" height=\"400px\"/></div>";
                            }
                            elseif($n==2){
                                echo "<div class=\"menu-card-image\"><img src=\"./../images/card.jpeg\"\" width=\"100%\" height=\"400px\"/></div>";
                            }
                            elseif($n==3){
                                echo "<div class=\"menu-card-image\"><img src=\"./../images/rest3.jpeg\"\" width=\"100%\" height=\"400px\"/></div>";
                            }
                            echo "<div class=\"menu-table-div\">";
                            echo "<p class=\"menu-table-title\">start searching</p>";
                            while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                                echo "<div style=\"border-bottom:1px solid rgba(0,0,0,0.4); margin:auto;width:80%;\"></div>";
                                echo "<div class=\"menu-card-container\" style=\"background-color: rgb(179, 219, 239);\">";
                                        echo "<div class=\"just-menu\">";
                                            echo "<div class=\"just-menu-info-div\">";
                                                echo "<p class=\"menu-name\">".$row['name']."</p>";
                                                echo "<p class=\"price\">&#8377;&nbsp;".$row['price']."</p>";
                                                echo "<p class=\"menu-info\">".$row['info']."</p>";
                                            echo "</div>";
                                        echo "</div>";
                                echo "</div>";
                            }
                            echo "</div>";    
                    echo "</div>";
                    mysqli_free_result($res);
                }
                else{
                    echo '<h1>Current menu items can\'t be retrieved Sorry for any Inconvinience</h1>';
                    echo '<p>'.mysqli_error($dbc).'<br /><br />Query:'.$q;
                    mysqli_close($dbc);
                }
                $n++;
            }
            ?>

        </div>
        <?php require_once('./../includes/footer.php'); ?>
</body>

</html>
