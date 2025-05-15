<?php
$server = "tcp:adogheproject-server.database.windows.net,1433";
$database = "adoghe-project";
$username = "adoghe";
$password = "Mylovefordogs1$";

// ODBC DSN connection string
$dsn = "Driver={ODBC Driver 17 for SQL Server};Server=$server;Database=$database;Encrypt=yes;TrustServerCertificate=no;";

// Establish connection
$con = odbc_connect($dsn, $username, $password);

if (!$con) {
    echo "Error connecting to SQL Server.<br>";
    echo odbc_errormsg();
    exit;
}

echo "Connected successfully to Azure SQL via ODBC!";
?>
