<?php
include_once 'connection.php'; //initial connection to php
if(isset($_POST['save'])) //this is the name of button
{
    $contactid = rand(); //names of the inputs
    $contactname = $_POST['contactname'];
    $contactemail = $_POST['contactemail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

	$sql = "INSERT INTO transmitter.contact (idContact, nameContact, emailContact, subject, message)
		VALUES ('$contactid', '$contactname', '$contactemail', '$subject', '$message')";

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