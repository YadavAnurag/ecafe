<?php $page_title='Menu';
require('./../mysqli_connect.php');
ob_start();
?>
<html>

<head>
    <title>
        <?php echo $page_title?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 " />
    <link rel="stylesheet" type="text/css" href="./css/menu.css" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
</head>

<body>
    <?php 
        include('./includes/header.php');
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $errors = array();
            if(isset($_POST['cat'])){
                $cat = $_POST['cat'];
            }
            else{
                $errors[] = 'Pleae select any Menu Category';
            }
            if(!empty($_POST['item_name'])){
                $n = trim($_POST['item_name']);
            }
            else{
                $errors[] = 'Plesae enter Item Name';
            }
            if(!empty($_POST['item_info'])){
                $info = trim($_POST['item_info']);
            }
            else{
                $errors[] = 'Please Enter somthing about the Menu Item';
            }
            if(!empty($_POST['price'])){
                $p = trim($_POST['price']);
            }
            else{
                $errors[] = 'Please Enter The Price of the Menu Item';
            }
            
            if(empty($errors)){
                $q = "INSERT INTO menus(category_id , name, info, price , date_entered)values($cat, '$n', '$info', $p, NOW())";
                $res = @mysqli_query($dbc, $q);
                
                if($res){
                    echo $display = "$n Succesfully Added to $cat";
                }
                else{
                    if(strcmp("Duplicate entry", substr(mysqli_error($dbc), 0, 15))==0){
//                    echo 'You have already sbmitted your feedback';
                    echo $display = "$n is Already added to ";
                }
                else{
//                    echo '<p>Your feedback can\'t be submit sorry of any inconvinience</p>'.mysqli_error($dbc);
                    echo $display = 'Item can\'t  be add sorry of any inconvinience</p>'.mysqli_error($dbc);
                }
                }
                mysqli_close($dbc);
            }
            else{ 
                echo '<h1>The Following errors has occurred</h1>';
                foreach($errors as $key){ 
                echo "$key<br />"; 
                } 
              
            }
        }
    ?>
    <div class="menu-main-heading">
        <?php $heading = 'Cafetaria Dishes';?>
        <p class="menu-title">
            <?php echo $heading;?>
        </p>
    </div>
    <div class="parent" style="margin-top:25%">
        <div class="child" style="background-color: #b2dbef;">
            <p class="card-main-heading">ADD NEW MENU ITEM </p>
            <div style="border-bottom:1px solid firebrick; margin:auto;width:10%; margin-top:15px"></div>
            <div class="container">
                <form id="form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                    <label class="inputLbl">Menu Type</label>
                    <br />
                    <?php
                         $type = array(1=>'Starter', 'Lunch','Dinner');
                        echo '<select name="cat">';
                        foreach($type as $key => $value){
                        echo "<option value=\"$key\">$value</option> \n";
                        }
                        echo '</select>';
                    ?>
                        <br />
                        <label class="inputLbl">Item Name</label>
                        <br />
                        <input name="item_name" type="text" maxlength="100" placeholder="Samosa" required="" />
                        <br />
                        <label class="inputLbl">About the Item</label>
                        <br />
                        <textarea name="item_info" placeholder="The authentic Samosa and Maggi" required="" style="height:200px;"></textarea>
                        <br />
                        <label class="inputLbl">Price</label>
                        <br />
                        <input name="price" type="text" maxlength="100" placeholder="&#8377;&nbsp;5" required="" />
                        <br />
                        <input class="signup-btn" name="submitBtn" type="submit" value="ADD TO MENU" />
                        <br />
                </form>
            </div>
        </div>
    </div>
    <div class="parent">
        <div class="child" style="background-color: #b2dbef;">
            <p class="card-main-heading">MENU ITEMS </p>

            <?php
                
                $q = "SELECT m.menu_id as id, c.name as category, m.name, m.info, m.price, m.date_entered FROM menus as m INNER JOIN menu_category as c ON m.category_id=c.category_id";
                $res = @mysqli_query($dbc,$q);
                if($res){
                    echo '<div class="table-container">';
                    echo '<table align="center">
                        <tr><th>Menu Id</th><th>Category</th><th>Item Name</th><th>About</th><th>Price</th><th>Entry Date</th><th>Delete</th>
                    ';
                    while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                        echo '<tr><td>'.$row['id'].'</td><td>'.$row['category'].'</td><td>'.$row['name'].'</td><td>'.$row['info'].'</td><td>'.$row['price'].'</td><td>'.$row['date_entered'].'</td><td><button>Delete</button></td>';
                    }
                    echo '</table>';
                    echo '</div>';
                    mysqli_free_result($res);
                }
                else{
                    echo '<h1>Current menu items can\'t be retrieved Sorry for any Inconvinience</h1>';
                    echo '<p>'.mysqli_error($dbc).'<br /><br />Query:'.$q;
                    mysqli_close($dbc);
                }
            ?>
        </div>
    </div>
    <?php include('./../includes/footer.php')?>
</body>

</html>
