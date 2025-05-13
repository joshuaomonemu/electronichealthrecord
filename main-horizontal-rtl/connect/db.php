<?php

                	$servername = "adogheproject-server";
					$dbusername = "logeswqdgm";
					$dbpassword = "ttw7CE7IT0$5POMc";
					$dbname = "adogheproject-database";

					$con = new mysqli($servername, $dbusername, $dbpassword, $dbname);

					if ($con->connect_error) {
					die("Connection failed: " . $con->connect_error);
					}
?> 