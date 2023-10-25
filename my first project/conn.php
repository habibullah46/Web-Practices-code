
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'registration';
// For Registration
$first_name= 'first_name';
$last_name = 'last_name';
$father_name = 'father_name';
$cnic = 'cnic';
$dob = 'dob';
$status = 'status';
$address = 'address';
$email = 'email';
$contact='contact';


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}
// Registration
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $father_name = $_POST['father_name'];
    $cnic = $_POST['cnic'];
    $dob = $_POST['dob'];
    $status = $_POST['status'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    // Insert data into the database
    $sql = "INSERT INTO tbl_reg (first_name, last_name, father_name, cnic, dob, status, address, email, contact) 
            VALUES ('$first_name', '$last_name', '$father_name', '$cnic', '$dob', '$status', '$address', '$email', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



$conn->close();
?>
