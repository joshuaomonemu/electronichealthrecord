<?php
$serverName = "tcp:adogheproject-server.database.windows.net,1433";
$connectionInfo = array(
    "UID" => "adoghe",
    "PWD" => "Mylovefordogs1$",
    "Database" => "adoghe-project",
    "Encrypt" => 1,
    "TrustServerCertificate" => 0,
    "LoginTimeout" => 30
);

$conn = sqlsrv_connect($serverName, $connectionInfo);

if (!$conn) {
    echo "Error connecting to SQL Server.<br>";
    print_r(sqlsrv_errors());
    exit;
}

echo "Connected successfully!";
?>
