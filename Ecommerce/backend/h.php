
<?php session_start(); 
include('condb.php');

  $user_id = $_SESSION['user_id'];
  $name = $_SESSION['name'];
  $level = $_SESSION["level"];
//   print_r($user_id);exit();

  if($user_id == ''){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
  *{
    font-family: 'Prompt', sans-serif;
  }
  </style>
</head>

</html>