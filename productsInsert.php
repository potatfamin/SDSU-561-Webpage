<?php
include_once 'connection.php'; //initial connection to php
if(isset($_POST['save'])) //this is the name of button
{
    $productid = $_POST['productid'];
    $productname = $_POST['productname'];
    $productprice = $_POST['productprice']; //names of the inputs

	$sql = "INSERT INTO transmitter.products (idProducts, nameProducts, priceProducts)
		VALUES ('$productid', '$productname', '$productprice')";

    if (mysqli_query($conn, $sql))
    {
        echo "New record created successfully!\n";
        header( "refresh:5;url=indexcopy.php" );
        echo 'You\'ll be redirected in about 5 secs. If not, click <a href="indexcopy.php">here</a>.';
    }
    else 
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

?>