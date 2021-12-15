<?php
include_once 'connection.php'; //initial connection to php
if(isset($_POST['customsave'])) //this is the name of button
{
    $id = rand(); //names of the inputs
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $credit = $_POST['credit'];
    $creditmonth = $_POST['creditmonth'];
    $credityear = $_POST['credityear'];
    $creditCVV = $_POST['creditCVV'];
    $money = $_POST['money'];

	$sql = "INSERT INTO transmitter.customers (idCustomers, fnCustomers, lnCustomers, emailCustomers, numCustomers, addCustomers, credCustomers, credExpireMonth, credExpireYear, credCVV, donationAmount)
		VALUES ('$id', '$firstname', '$lastname', '$email', '$number', '$address', '$credit', '$creditmonth', '$credityear', '$creditCVV', '$money')";

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