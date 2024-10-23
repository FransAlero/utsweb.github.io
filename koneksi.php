<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utsweb"; 
$port = "3306";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 
} catch (mysqli_sql_exception $error) {
    echo "Koneksi gagal: " . $error->getMessage();
}
?>