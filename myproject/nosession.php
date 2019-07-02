<?php
include 'header.php';
require 'dbconnect.php';


?>

<h2 style="width: 100%;background-color: black;color: white;"><CENTER>Item Details</CENTER></h2>


<div align="center">

    <table border="1" style="background-color: white;color: white">
        <tr>
            <td>Item Code</td>
            <td>Item Name</td>
            <td>Item Price</td>
            <td>Item Quantity</td>


        </tr>

        <?php

        $sql="SELECT *FROM items";
        $query=mysqli_query($con,$sql);

        while($row=mysqli_fetch_array($query)) {
            ?>

            <tr>
                <td><?php echo $row['itemcode']; ?></td>
                <td><?php echo $row['itemname']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['quantity']; ?></td>


            </tr>
            <?php
        }
        ?>



    </table>

</div>
<div class="img">
    <img src="moonn.jpg" width="100%" height="150"  border="2px" id="moon1">

</div>
<?php

include 'footer.php';

?>
