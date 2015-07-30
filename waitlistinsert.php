<html>
<body>
<?php
$servername = "localhost";
$username = "dbuser";
$password = "dbpass";
$dbname = "dbname";
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$phone = $_POST["phone"];
$party = $_POST["party"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO waitlist (firstname, lastname, phone, party) VALUES ('$firstname', '$lastname', '$phone', '$party')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

Welcome <?php echo $_POST["firstname"]; ?><br>
Your phone number is: <?php echo $_POST["phone"]; ?><br>
Your party size is: <?php echo $_POST["party"]; ?>

</body>
</html>
