<?php
include('condb.php');

$user = $_POST['user'];
$password = $_POST['password'];
$name = $_POST['name'];
$level = $_POST['level']; 
// print_r($_POST);exit();

$sql ="INSERT INTO tb_admin
    
    (user,  password, name, status, level ) 

    VALUES 

    ('$user', '$password', '$name' , 'use' ,'$level' )";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('suscess');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    }
?>