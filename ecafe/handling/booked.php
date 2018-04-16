<!--written by Anurag Yadav 1/24/2018-->
<?php
ob_start();
$page_title = 'Reservation';
require('./../mysqli_connect.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>
            <?php echo $page_title;?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1 " />
        <link rel="stylesheet" type="text/css" href="reservation-handle.css" />
        <link rel="stylesheet" type="text/css" href="./../css/footer.css" />
        <link rel="stylesheet" type="text/css" href="./../css/customer-header.css" />
        <link rel="stylesheet" type="text/css" href="./../c.css">
        <script type="text/javascript" src="./../c.js"></script>
    </head>

    <body>
        <?php
        include('./../includes/customer-header.php');
        
        //registration if not registered
            if(($_SERVER['REQUEST_METHOD'] == 'POST')&&(!strcmp($_POST['check'], 'register'))){
                $errors = array(); 
                if(empty($_POST['first_name'])){
                    $errors[] = 'You forgot to enter your username'; 
                }
                else{
                    $fn = trim($_POST['first_name']); 
                }
                if(empty($_POST['middle_name'])){
                    $mn = NULL;
                }
                else{
                    $mn = trim($_POST['middle_name']);

                }
                if(empty($_POST['last_name'])){
                    $ln = NULL;
                }
                else{
                    $ln = trim($_POST['last_name']);
                }
                if(isset($_POST['gender'])){
                    $gender = $_POST['gender'];
                }
                else{
                    $errors[] = 'Plese choose your gender';
                }
                if(empty($_POST['email'])){
                    $errors[] = 'Please enter your email';
                }
                else{
                    $email = trim($_POST['email']);
                }
                if(!empty($_POST['password'])){
                    if($_POST['password'] != $_POST['confirm-password']){
                        $errors[] = 'Your password does not match';
                    }
                    else{
                        $pass = trim($_POST['password']);    
                    }
                }
                else{
                    $error[] = 'Please Enter Your Password';
                }
                if(empty($_POST['contact-number'])){
                    $errors[] = 'Please enter your contact number';
                }
                else{
                    $contact_number = trim($_POST['contact-number']);
                }
                if(empty($_POST['address'])){
                    $errors[] = 'Please enter your address';
                }
                else{
                    $address = trim($_POST['address']);
                }

                if(empty($errors)){
                    $q = "insert into users(first_name, middle_name, last_name, gender_id, email, pass, mobile, address, date_entered) VALUES('$fn', 
                    '$mn', '$ln', $gender, '$email', '$pass', '$contact_number', '$address', NOW())";
                    $res = @mysqli_query($dbc, $q);
                    $display = '';
                    if($res){
                        $display = 'You have been registerd';
                    }
                    else{
                        if(strcmp("Duplicate entry", substr(mysqli_error($dbc), 0, 15))==0){
    //                      echo 'You have already sbmitted your feedback';
                            $display = 'YOU ARE ALREADY REGISTERED';
                        }
                        else{
    //                      echo '<p>Your feedback can\'t be submit sorry of any inconvinience</p>'.mysqli_error($dbc);
                            $display = 'Your registration can not be process sorry of any inconvinience</p>'.mysqli_error($dbc);
                        }
                    }
                    mysqli_close($dbc);
                } 
                else{ 
                    echo '<h1>Registration error The Following errors has occurred</h1>';
                    foreach($errors as $key){ 
                    echo "$key<br />"; 
                    } 

                }
        }
        //registration  end
        
        
        //if already registerd
            if(($_SERVER['REQUEST_METHOD'] == 'POST')&&(!strcmp($_POST['check'], 'reservation'))){
                $errors = array();
                if(!empty($_POST['people'])){
                    $people = intval(trim($_POST['people']));
                }
                else{
                    $errors = 'Please enter the number of People for Reservation';
                }
                if(!empty($_POST['time'])){
                    $date = $_POST['date'];
                    $time = $_POST['time'];
                    $date_exp = explode(":", $time);
                    $datetime ="" . date("Y-m-d H:i:s", strtotime("+".$date_exp[0]." hours +".$date_exp[1]." minutes", strtotime(date("Y-m-d", strtotime($date)))));
                }
                else{
                    $errors = 'Plesae Choose the time ';
                }
                if(!empty($_POST['table'])){
                    $table_no = (int)$_POST['table'];
                }
                else{
                    $errors = 'Please choose the Table Number';
                }
                if(!empty($_POST['email'])){
                    $email = trim($_POST['email']);
                }
                else{
                    $errors = 'Pleae Enter the Registerd Email';
                }
                if(empty($errors)){
                    $bool = FALSE;
                    $q = 'SELECT email, user_id from users';
                    $res = @mysqli_query($dbc, $q); 
                    echo mysqli_error($dbc);
                    while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                         if(strcmp($row['email'],$email)==0){
                             $bool = TRUE;
                             echo $user_id = $row['user_id'];
                         }
                    }
                    if($bool){
                        echo "Inserting";
                        $q = "INSERT INTO reservations (user_id, table_no, table_datetime, people, date_entered) values ({$user_id}, {$table_no}, '{$datetime}', {$people},  current_timestamp)";
                        $res = @mysqli_query($dbc,$q);
                        echo mysqli_error($dbc);
                        if($res){
                            echo $display = 'Successfulllll table booked';
                        }
                        else{
                            if(strcmp("Duplicate entry", substr(mysqli_error($dbc), 0, 15))==0){
    //                      echo 'You have already sbmitted your feedback';
                            $display = 'Table Has Been Booked Please Choose another One';
                            }
//                            $display = 'Your table can not be booked sorry of any inconvinience</p>'.mysqli_error($dbc);
                        }
                        mysqli_close($dbc);
                    }
                    else{
                         echo 'You are not registered you will be redirect to another page';
                            header("Location:./../customer/sign-up.php");
                    }
                } 
                else{ 
                    echo '<h1>Error!</h1>
                    <h1>Table booking error</h1>
                    <p class="error">The following error(s) occurred:<br />';
                    print_r($errors);
                }
            }
        
        //already registered end
        
        ?>
            <div class="parent">
                <div class="child">
                    <p class="card-main-heading">
                        <?php echo $display ;?>
                    </p>
                    <p class="card-info">PLEASE GIVE US ANOTHER TIME TO SERVE YOU</p>
                    <a></a>
                </div>
            </div>
            <?php include('./../includes/footer.php')?>
    </body>

    </html>
