
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'registration';

// For Contact 
$name = 'name';
$email = 'email';
$number = 'number';
$message = 'message';


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

// For Contact 
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["message"];

    // Insert in TAble
    $sql = "INSERT INTO tbl_contact (name, email, number, message) VALUES('$name','$email', '$number', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}



$conn->close();
?>
