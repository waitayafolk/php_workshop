<?php
    include('h.php');

        include('condb.php');
        $sql = "SELECT * FROM tb_admin WHERE status != 'delete' ORDER BY id ASC" or die("Error:".mysqli_error());
        $result = mysqli_query($con , $sql);
        // print_r($result);exit();
        echo '<table class="table table-dark">';
                echo "
                <tr>
                <td>User</td>
                <td>Pass</td>
                <td>Name</td>
                <td>แก้ไข</td>
                <td>ลบ</td>
                </tr>";
  
            while($row = mysqli_fetch_array($result)) {
                echo "<tr tyle='color : black;' >";
                echo "<td>" .$row["user"] .  "</td> ";
                echo "<td>" .$row["password"] .  "</td> ";
                echo "<td>" .$row["name"] .  "</td> ";
                echo "<td><a href='admin.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
                echo "<td><a href='admin_del.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                echo "</tr>";
                }
                    echo "</table>";
            
            mysqli_close($con);
?>