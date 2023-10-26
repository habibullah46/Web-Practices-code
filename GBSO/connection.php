
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'registration';

// For Contact 
$name = 'name';
$fname = 'fName';
$phone = 'phone';
$email = 'message';
$address = 'address';   
$institute = 'institute';
$class='class';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

// For Contact 
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST["name"];
    $fname = $_POST["fname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $institute = $_POST["institute"];
    $class = $_POST["class"];

    // Insert in TAble
    $sql = "INSERT INTO tbl_GBSO (name, fname, phone, email, address, institute, class  ) VALUES('$name','$fname', '$phone', '$email' ,'$address','$institute','$class')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}



$conn->close();
?>
