<?php
include('condb.php');
$id = $_REQUEST["ID"];
// print_r($id);exit();

$sql="UPDATE tb_admin set status = 'delete' WHERE id ='$id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    if($result){
        print_r($result);exit();
        echo "<script type='text/javascript'>";
        echo "alert('Delete Succesfuly');";
        echo "window.location = 'admin.php'; ";
        echo "</script>";
        }
        else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "</script>";
      }
?>