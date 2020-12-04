<?php
      include('h.php');
                include('condb.php');
                $query = "SELECT * FROM tbl_product WHERE status != 'delete' ORDER BY id ASC" or die("Error:" . mysqli_error());
                $result = mysqli_query($con, $query);
                // print_r($result);exit();
                echo '<table class="table table-striped">';
                    echo "
                      <tr>
                      <td>Product_code</td>
                      <td>Product_name</td>
                      <td>Product_price</td>
                      <td>Product_img</td>
                      <td>ลบ</td>
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {

                  echo "<tr tyle='color : black;' >";
                    echo "<td>" .$row["product_code"] .  "</td> ";
                    echo "<td>" .$row["product_name"] .  "</td> ";
                    echo "<td>" .$row["price"] .  "</td> ";
                    echo "<td> <img src='upload/'  width='100px' height='100px' " . "</td> ";
                    echo "<td><a href='product_delete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                  echo "</tr>";
                  }
                echo "</table>";
                
                mysqli_close($con);
?>