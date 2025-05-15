<?php

                	$servername = "localhost";
					$dbusername = "root";
					$dbpassword = "";
					$dbname = "adoghe";

					$con = new mysqli($servername, $dbusername, $dbpassword, $dbname);

					if ($con->connect_error) {
					die("Connection failed: " . $con->connect_error);
					}
?> 

<?php
// Define connection parameters
// $serverName = "tcp:adogheproject-server.database.windows.net,1433";
// $connectionOptions = array(
//     "UID" => "adoghe",
//     "PWD" => "{your_password_here}",  // Replace with your actual password
//     "Database" => "adoghe-project",
//     "LoginTimeout" => 30,
//     "Encrypt" => 1,
//     "TrustServerCertificate" => 0
// );

// // Attempt to connect to SQL Server
// $conn = sqlsrv_connect($serverName, $connectionOptions);

// if ($conn === false) {
//     echo "Error connecting to SQL Server.<br>";
//     die(print_r(sqlsrv_errors(), true));
// }

// You can now use $conn to execute queries
?> 
