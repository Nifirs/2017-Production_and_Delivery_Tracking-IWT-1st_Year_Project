<?php
include 'header.php';
require 'dbconnect.php';
$sql="SELECT *FROM items";
$query=mysqli_query($con,$sql);


?>

<h2 style="width: 100%;background-color: black;color: white;"><CENTER>Item Details</CENTER></h2>


<div align="center">

    <table  width="80%" border="1" style="background-color: white;color: white;padding: 0px;font-size: 17px">
        <tr >
            <td align="center" style="background-color:blanchedalmond;color: #333333"><b>Item Code</b></td>
            <td align="center" style="background-color:blanchedalmond;color: #333333"><b>Item Name</b></td>
            <td align="center" style="background-color:blanchedalmond;color: #333333"><b>Item Price</b></td>
            <td align="center" style="background-color:blanchedalmond;color: #333333"><b>Item Quantity</b></td>
            <td align="center" style="background-color:blanchedalmond;color: #333333"><b>Do you want to Edit</b></td>
            <td align="center" style="background-color:blanchedalmond;color: #333333"><b>Do you want to Delete</b></td>


        </tr>


        <?php

        while($row=mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td style=\"border-radius: 0px\">" . $row['itemcode'] . "</td>";
            echo "<td style=\"border-radius: 0px\">" . $row['itemname'] . "</td>";
            echo "<td style=\"border-radius: 0px\">" . $row['price'] . "</td>";
            echo "<td style=\"border-radius: 0px\">" . $row['quantity'] . "</td>";
            echo "<td style='background-color:blanchedalmond;border-radius: 0px'>" . "<a href=edit.php?" . $row['itemcode'];
            echo ">EDIT</a></td>";
            echo "<td style='background-color:blanchedalmond;border-radius: 0px'>" . "<a href=delete.php?" . $row['itemcode'];
            echo ">DELETE</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<BR>";
        $num = mysqli_num_rows($query);
        echo "<font size='5'>Total Number of Records</font> : ";
        echo "<font size='5'>";
        echo $num.'<font>';

        mysqli_close($con);


        ?>



    </table>

</div><br/><br/>
<div class="img">
    <img src="moonn.jpg" width="100%" height="150"  border="2px" id="moon1">

</div>
<?php

include 'footer.php';

?>
