<?php

$servername = "localhost";
$username = "root";
$password = "limboda";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 
echo "Connected successfully";
$sql = "SELECT * FROM session";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["sl_no"];
    }
} else {
    echo "0 results";
}
$conn->close();

?>



