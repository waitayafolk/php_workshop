<?php
include('condb.php');
$id = $_REQUEST["ID"];

$sql = "UPDATE tb_product set status = 'delete' WHERE id = '$id'";
$result = mysqli_query($con , $sql) or die("Error on query:$sql " . mysqli_error());

    if($result){
        echo "<script type='text/javascript'>
        alert('Delete Suscess');
        window.location = 'product.php';
        </script>";
    }else{
        echo"<script type='text/javascript'>
        alert('Delete fail');
        </script>";
    }
?>