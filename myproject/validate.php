<?php

if(isset($_POST["r1"]) && isset($_POST["r2"]) && isset($_POST["r3"]) && isset($_POST["r4"]) && isset($_POST["r5"]) && isset($_POST["r6"]) && isset($_POST["r7"])  && isset($_POST["r8"])  && isset($_POST["r9"])  && isset($_POST["r10"])  && isset($_POST["r11"])  && isset($_POST["r12"])  && isset($_POST["r13"])  && isset($_POST["r14"])  && isset($_POST["r15"]) ) {
    $itemNo = $_POST["r1"];
    $type = $_POST["r2"];
    $category = $_POST["r3"];
    $title = $_POST["r4"];
    $pub = $_POST["r5"];
    $year = $_POST["r6"];
    $place = $_POST["r7"];
    $abstract = $_POST["r8"];
    $medium = $_POST["r9"];
    $edition = $_POST["r10"];
    $isbn = $_POST["r11"];
    $shelf = $_POST["r12"];
    $call = $_POST["r13"];
    $barcode = $_POST["r14"];
    $pages = $_POST["r15"];


    if (trim($itemNo) == "" || trim($type) == "" || trim($category) == "" || trim($title) == "" || trim($pub) == "" || trim($year) == "" || trim($place) == "" || trim($abstract) == "" || trim($medium) == "" || trim($edition) == "" || trim($isbn) == "" || trim($shelf) == "" || trim($call) == "" || trim($barcode) == "" || trim($pages) == "") {


        $error = '<font color="red">' . " * One or more fields are empty , please check your Application Form" . '</font>';
        echo "$error";
        echo '<br/></br><br/>';
    } else if (is_numeric($barcode)) {
        if (is_numeric($shelf)) {
            if (is_numeric($pages)) {
                if (is_numeric($call)) {


                    if (strlen("$barcode") < 12 || strlen("$barcode") > 16) {

                        echo "<font color='red'>* You should enter a ~Barcode~ value in between 12 and 16</font><br/><br/></br>";
                    }

                    echo "
                    
                    <table border='2px' align='center' width='500px'>

    <tr>
        <td>Item Number:</td>
        <td>$itemNo</td>
</tr>

<tr>
    <td>Item Type:</td>
    <td>$type</td>
</tr>

<tr>
    <td>Category:</td>
    <td>$category</td>
</tr>


<tr>
    <td>Title:</td>
    <td>$title</td>
</tr>

<tr>
    <td>Publisher:</td>
    <td>$pub</td>
</tr>

<tr>
    <td>Year of Publication:</td>
    <td>$year</td>
</tr>
<tr>
    <td>Place of Publication:</td>
    <td>$pub</td>
</tr>

<tr>
    <td>Abstract:</td>
    <td>$abstract</td>
</tr>


<tr>
    <td>Medium:</td>
    <td>$medium</td>
</tr>

<tr>
    <td>Edition:</td>
    <td>$edition</td>
</tr>




<tr>
    <td>ISBN/ISSN No:</td>
    <td>$isbn</td>
</tr>

<tr>
    <td>Shelf Number:</td>
    <td>$shelf</td>
</tr>

<tr>
    <td>Call Number:</td>
    <td>$call</td>
</tr>

<tr>
    <td>Barcode No:</td>
    <td>$barcode</td>
</tr>

<tr>
    <td>No of Pages:</td>
    <td>$pages</td>
</tr>


</table>

<center><h4><strong><font color=red>.............................................Successfully Updated.............................................</font></strong></h4></center>

 ";
                }else{
                    echo "<font color='red'>* You should enter a ~Numeric~ value for   ~Call Number~ </font>";
                }
            }

            } else {
                echo "<font color='red'>* You should enter a ~Numeric~ value for   ~Shelf Number~ </font>";
            }
        } else {

            echo "<font color='red'>* You should enter a ~Numeric~ value for   ~Barcode~ </font>";
        }
    }



else{

    $error="Please check your Form structure";
    echo" $error";



}

?>


