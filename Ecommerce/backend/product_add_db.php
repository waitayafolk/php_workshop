<?php 
include('condb.php');
    $product_code = $_POST['product_code'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];

if (($_FILES['my_file']['name']!="")){

    $target_dir = "images/";
    $file = $_FILES['my_file']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['my_file']['tmp_name'];
    $path_filename_ext = $target_dir.$filename.".".$ext;
   
   if (file_exists($path_filename_ext)) {
    echo "Sorry, file already exists.";
    }else{
    move_uploaded_file($temp_name,$path_filename_ext);
    $sql ="INSERT INTO tbl_product
    
        (product_code,  product_name, price , image , status) 

        VALUES 

        ('$product_code', '$product_name', '$price' , '$file','use')";

        $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
        mysqli_close($con);

        if($result){
        echo "<script>";
        echo "alert('เพิ่มข้อมูลสำเร็จ');";
        echo "window.location ='product.php'; ";
        echo "</script>";
        } else {
        
        echo "<script>";
        echo "alert('ERROR!');";
        echo "window.location ='product.php'; ";
        echo "</script>";
        }
    }  
}
?>