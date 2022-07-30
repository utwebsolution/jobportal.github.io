
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_portal";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['payment_id']) && isset($_POST['amt']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']))

{
    $payment_id=$_POST['payment_id'];
    $amt="500";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $payment_status="complete";
    $added_on=date('Y-m-d h:i:s');
}

$sql = "INSERT INTO  payment (name, email, phone, amount, payment_status, payment_id, added_on)
VALUES ('$name', '$email', '$phone', '$amt', '$payment_status', '$payment_id', '$added_on')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>