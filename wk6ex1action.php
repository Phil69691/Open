<?php

$servername = "localhost";
$username = "username"; 
$password = "password"; 
$database = "database"; 

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $name = mysqli_real_escape_string($connection, $_POST['txtName']);
    $email = mysqli_real_escape_string($connection, $_POST['txtEmail']);
    $phone_number = mysqli_real_escape_string($connection, $_POST['txtPhoneNumber']);
    $sql = "INSERT INTO test (name, email, phone_number) ";
    $sql .= "VALUES ('$name', '$email', '$phone_number')";
    
    if(mysqli_query($connection, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($connection);
    }
}
$sql = "SELECT * FROM test";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "{$row['name']} {$row['email']} {$row['phone_number']} <br/>";
    }
} else {
    echo "No records found";
}
mysqli_close($connection);
?>
