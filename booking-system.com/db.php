<?php
$serverName = "MYSERVER";
$database = "BookingSystem";
$username = "sa";
$password = "admin@123";

$dsn = "sqlsrv:server=$serverName;Database=$database";

try {
    $conn = new PDO($dsn, $username, $password);
    // Set error mode to exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
