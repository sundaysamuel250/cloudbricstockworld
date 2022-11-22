<?php 
include("_config.php");


$db = new DBConnection();

$db = $db->__construct();

if (isset($_POST['sign_up'])){

    // getting form variables 
    $fullname = $_POST['name']; #remember the name of the input
    $email = $_POST['email']; #remember the name of the input
    $mobile = $_POST['mobile']; #remember the name of the input
    $password = $_POST['password']; #remember the name of the input
    $password2 = $_POST['confirm_password']; #remember the name of the input
    $message = $_POST['message']; #remember the name of the input
    
    // validate data, check if empty
    if (empty($fullname) || empty($email) || empty($mobile) || empty($password)){
        header("Location: ../signup.php?err=All fieds are required");
    }

    if (strlen($password) < 8){
        header("Location: ../signup.php?err=Password more be more than 8 characters");
    }

    if ($password != $password2){
        header("Location: ../signup.php?err=Password not matched");
    }


    // clean data
        $fullname = mysqli_real_escape_string($db, $fullname);
        $email = mysqli_real_escape_string($db, $email);
        $mobile = mysqli_real_escape_string($db, $mobile);
        $password = mysqli_real_escape_string($db, $password);
        $message = mysqli_real_escape_string($db, $message);
    // 


    // hash password   
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    // 

    // check if user exit in the db using the email
    $check_user = "SELECT * from `users` WHERE `email` = '$email'";
    $check_result = mysqli_query($db, $check_user);
    $has_rows = mysqli_num_rows($check_result) > 0;

    if($has_rows){
        header("Location: ../signup.php?err=User already exist");
        die();
    }
    // 

    // save record to the db
    $query = "INSERT INTO `users`(`id`, `fullname`, `email`, `mobile`, `password`, `message`, `date_added`) VALUES (NULL,'$fullname','$email','$mobile','$hash_password','$message', CURRENT_TIMESTAMP)";

    $result = mysqli_query($db, $query);

    if($result){
        session_start();
        $_SESSION["loggedin"] = $email;

        header("Location: ../dashboard.php");
    }else{
        header("Location: ../signup.php?err=User already exist".mysqli_error($db));
        die();
    }

    //start session ; this is to knw the active user
    session_start();
    $_SESSION["loginusername"] = $username;
}