<?php

// // Database του Plesk
// $host = '185.138.42.190'; // Απομακρυσμένη διεύθυνση IP του MySQL server
// $username = 'todatabasem'; // Όνομα χρήστη της βάσης δεδομένων
// $password = 'auL0uLModkPZxELR8ZrF'; // Κωδικός πρόσβασης της βάσης δεδομένων
// $database = 'w173689bea_'; // Όνομα της βάσης δεδομένων
// // Σύνδεση στη βάση δεδομένων
// $conn = mysqli_connect($host, $username, $password, $database);

$host = "localhost";
$dbname = "projects";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);


// if (!$conn) {
// 	echo "Connection failed!";
// } else {
// 	echo "Connection succeed!";
// }