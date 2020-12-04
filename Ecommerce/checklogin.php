<?php
session_start();
    if(isset($_POST['user'])){
        include('backend/condb.php');
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql="SELECT * FROM tb_admin
        WHERE user = '".$user."'
        AND password = '".$password."'
        AND status = 'use'";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["name"] = $row["name"];
            $_SESSION["level"] = $row["level"];
            if($_SESSION["user_id"] != ''){
                Header("Location: backend/index.php");
            }
        }else{
            echo "<script>";
            echo "alertify.error('Error message');"; 
            echo "window.history.back()";
            echo "</script>";
        }
    }
?>