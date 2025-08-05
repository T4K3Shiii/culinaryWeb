 <?php
$host = "localhost";
$port = 3306;
$user = "root"; 
$password = ""; 
$db = "backendproject";

$con = new mysqli($host, $user, $password, $db, $port);

if ($con->connect_errno) {
    echo "Connection failed: " . $con->connect_error;
    exit();
}

