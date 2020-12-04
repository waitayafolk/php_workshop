<?php

session_start();
include('condb.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == "add")
	{
		if(isset($_SESSION["shopping_cart"]))
		{
			$is_available = 0;
			foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])
				{
					$is_available++;
					$_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];
				}
			}
			if($is_available == 0)
			{
				$item_array = array(
					'product_id'               =>     $_POST["product_id"],  
					'product_name'             =>     $_POST["product_name"],  
					'product_price'            =>     $_POST["product_price"],  
					'product_quantity'         =>     $_POST["product_quantity"]
				);
				$_SESSION["shopping_cart"][] = $item_array;
			}
		}
		else
		{
			$item_array = array(
				'product_id'               =>     $_POST["product_id"],  
				'product_name'             =>     $_POST["product_name"],  
				'product_price'            =>     $_POST["product_price"],  
				'product_quantity'         =>     $_POST["product_quantity"]
			);
			$_SESSION["shopping_cart"][] = $item_array;
		}
	}
	if($_POST["action"] == 'remove')
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["product_id"] == $_POST["product_id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
			}
		}
	}
	if($_POST["action"] == 'empty')
	{
		unset($_SESSION["shopping_cart"]);
	}
	if($_POST["action"] == 'confirm')
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			$arr = array(
				':product_name'=>$values["product_name"],
				':product_code'=>$values["product_name"],
				':price'=>$values["product_price"],
				':qty'=>$values["product_quantity"],
				':status'=>'use'
			);
				$query = "INSERT INTO tb_sale
				(
					product_code, 
					product_name, 
					price,
					qty,
					status
				  )
				  VALUES(
					:product_code, 
					:product_name, 
					:price,
					:qty,
					:status
					)
				  ";
				$statement = $connect->prepare($query);
				if($statement->execute($arr)){
					echo "<script type='text/javascript'>";
					echo "alert('Success');";
					echo "window.location ='index.php'; ";
					echo "</script>";
					unset($_SESSION["shopping_cart"]);
				  } else {
					echo "<script type='text/javascript'>";
					echo "alert('Error back to delete again');";
					echo "</script>";
				  }
		}
	}
}

?>