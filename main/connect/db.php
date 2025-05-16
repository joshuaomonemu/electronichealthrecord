<?php
$host = 'nozomi.proxy.rlwy.net';
$port = 46177;
$user = 'root';
$password = 'ELKvJGsHuzcyADbsOABGJAlFREOJjWGX';  // Replace with the actual password from Railway
$database = 'railway';             // This is your default Railway DB name

// Connect using procedural MySQLi
$con = mysqli_connect($host, $user, $password, $database, $port);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "✅ Connected successfully to Railway MySQL!";
?>
