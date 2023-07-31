<?php
$host = "localhost";
$username = "students"; 
$password = "nsbm"; 
$dbname = "university";

$conn = new mysqli('localhost','root','','university');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
}}

   
    $sql = "INSERT INTO students (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


$conn->close();


?>