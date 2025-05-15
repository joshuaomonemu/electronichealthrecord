<?php
$serverName = "tcp:adogheproject-server.database.windows.net,1433";
$connectionOptions = array(
    "UID" => "adoghe",
    "PWD" => "Mylovefordogs1$",  // ✅ no {} or quotes
    "Database" => "adoghe-project",
    "Encrypt" => 1,
    "TrustServerCertificate" => 0,
    "LoginTimeout" => 30,
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    echo "Error connecting to SQL Server.<br>";
    die(print_r(sqlsrv_errors(), true));
}
?>
