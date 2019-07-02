<?php

include 'header.php';

?>

<h2 style="width: 100%;background-color: black;color: white;"><CENTER>You can Search here whatever the Product you want</CENTER></h2>

<html>
<body>
<form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table width="654" height="214" style="background-color: blueviolet;color:white;">
        <tr>
            <td width="74">Search</td>

            <td width="258">
                    <input name="itemsearch" type="text" id="name" maxlength="70" />
            </td>

            <td><input type="image" src="srch.jpg" style="width: 90px;height: 30px" name="submit" onMouseOver="this.src='srch.jpg'></td>

         </tr>



    </table>
</form>







<?php
include("dbconnect.php");
if(isset($_POST['itemsearch'])) {
    $productsearch = $_POST['itemsearch'];

    if ($productsearch == "") {
        $query = "SELECT * FROM items";
    } else {
        $query = "SELECT * FROM items WHERE itemname LIKE '%$productsearch%'";
    }
    $result = mysqli_query($con, $query);

    if (!$result) {
        die(mysqli_error($con));
    }
    echo "<table align='left' border='1' style='background-color: blueviolet;color: white;'>";

    echo "<p align='center'>Product Details</p>";
    echo "<tr><td>Product Code</td><td>Product Name</td><td>Unit Price</td><td>Quantity</td></tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
    }
    echo "</table>";
    mysqli_close($con);
}
?>


<?php

include 'footer.php';

?>
