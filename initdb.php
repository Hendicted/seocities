<?php
include "config.php";
$init = "CREATE TABLE sites (
    ID int(11) AUTO_INCREMENT,
                          NAME varchar(255) NOT NULL,
                          PASSWORD varchar(255) NOT NULL,
                          primary key (id)
                          )";
$conn = new mysqli($QL_SERVER, $sqlusername, $sqlpassword);
$conn-> select_db($database);
if ($conn->query($init) === TRUE) {
    echo "Database initialized!";
} else {
    echo "Error initializing database: " . $conn->error;
}