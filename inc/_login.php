<?php 

include("_config.php");


$db = new DBConnection();

$db = $db->__construct();


if (isset($_POST['log_in'])){
    // getting form variables 
    $email = $_POST['email']; #remember the name of the input
    $password = $_POST['psw']; #remember the name of the input
    
    //clean data
    $email = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $password);
        
    // 

    // check if user exit in the db using the email
    $check_user = "SELECT * from `users` WHERE `email` = '$email' limit 1";
    $check_result = mysqli_query($db, $check_user);
    $has_rows = mysqli_num_rows($check_result) > 0;

    if($has_rows){
        while ($row = mysqli_fetch_assoc($check_result)) {
            $hash_passwowrd_from_db = $row["password"];

            if(password_verify($password, $hash_passwowrd_from_db)){
                session_start();
                $_SESSION['loggedin'] = $email;
                header("Location: ../dashboard.php");
            }else{
                header("Location: ../login.php?err=Invalid login combination password");
            }

        }
    }else{
        header("Location: ../login.php?err=Invalid login combination");
    }
    // 

    //start session ; this is to knw the active user
    session_start();
    $_SESSION["loginusername"] = $username;


}