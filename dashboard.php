<?php 
    include("inc/_config.php");

    $db = new DBConnection();
    $db = $db->__construct();
    session_start();

    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == ""){
        header("Location: login.php");
    }

    $activeUser = $_SESSION["loggedin"];
    $userFullname = "";

    // get user details from db
    // there are more efficient way of doing this, but since i 
    //don't know how u want to go about ur dashboard, I will just use this approach

    $query = "SELECT * from `users` WHERE `email` = '$activeUser' limit 1";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result) > 0;

    if($count){
        while ($row = mysqli_fetch_assoc($result)) {
            $userFullname = $row["fullname"];
        }
    }else{
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO <?php echo $userFullname;?></h1>
    <a href="logout.php" >Logout</a>
</body>
</html>