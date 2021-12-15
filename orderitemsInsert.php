<?php
include_once 'connection.php'; //initial connection to php
if(isset($_POST['save'])) //this is the name of button
{
    $orderid = $_POST['orderid']; //names of the inputs
    $productid = $_POST['productid'];
    $amount = $_POST['amount'];

	$sql = "INSERT INTO transmitter.orderitems (idOrder, idProducts, quantity)
		VALUES ('$orderid', '$productid', '$amount')";

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