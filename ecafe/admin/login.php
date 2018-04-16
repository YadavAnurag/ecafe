<?php $page_title='Admin Login';
require('./../mysqli_connect.php');
?>
<html>

<head>
    <title>
        <?php echo $page_title?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 " />
    <link rel="stylesheet" type="text/css" href="./css/login.css" />
    <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
</head>

<body>
    <?php 
        if(($_SERVER['REQUEST_METHOD'] == 'POST')){
                $errors = array();
                if(!empty($_POST['email'])){
                    $email = trim($_POST['email']);
                }
                else{
                    $errors = 'Pleae Enter the Registerd Email';
                }
                if(!empty($_POST['password'])){
                        $pass = trim($_POST['password']);
                    }
                    else{
                        $errors = 'Pleae Enter the password';
                    }
                if(empty($errors)){
                    $bool = FALSE;
                    $q = 'SELECT email, pass from users';
                    $res = @mysqli_query($dbc, $q); 
                    echo mysqli_error($dbc);
                    while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                         if((strcmp($row['email'],$email)==0)&&(strcmp($row['pass'],$pass)==0)){
                             $bool = TRUE;
                             echo $user_id = $row['email'];
                             echo $user_id = $row['pass'];
                         }
                    }
                    if($bool){
                        echo "Admin Login Successfull";
                        header("Location:./index.php");
                        mysqli_close($dbc);
                    }
                    else{
                         echo '<h1 style="text-align:center">Access Denied</h1>';
                    }
                } 
                else{ 
                    echo '<h1>Error!</h1>
                    <h1>Admin Login Error</h1>
                    <p class="error">The following error(s) occurred:<br />';
                    print_r($errors);
                }
            }
    ?>
    <div class="menu-main-heading">
        <?php $heading = 'Admin Login';?>
        <p class="menu-title">
            <?php echo $heading;?>
        </p>
    </div>
    <div class="parent">
        <div class="child">
            <p class="card-main-heading">ADMIN LOGIN </p>
            <div style="border-bottom:1px solid firebrick; margin:auto;width:10%; margin-top:15px"></div>
            <div class="container">
                <form id="form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                    <label class="inputLbl">Email</label>
                    <br />
                    <input name="email" type="email" maxlength="100" placeholder="you@gamil.com" required="" />
                    <br />
                    <label class="inputLbl">Password</label>
                    <br />
                    <input name="password" type="password" placeholder="********" required="" />
                    <br />
                    <input class="signup-btn" name="submitBtn" type="submit" value="LOGIN" />
                </form>
            </div>
        </div>
    </div>
    <?php include('./../includes/footer.php')?>
</body>

</html>
