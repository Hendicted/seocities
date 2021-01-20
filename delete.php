<?php
include "config.php";
$postName = htmlspecialchars($_POST["name"]);
$postPass = $_POST["pass"];
if (file_exists("./$postName/index.html") == false) exit ("The website doesn't exist.");
if(strpos($postName, ".") !== false) exit("Your title contains an illegal character.");
if(strpos($postName, "/") !== false) exit("Your title contains an illegal character.");
if ($postName == null || $postPass == null) exit("You forgot to input on one of the fields.");
$conn = new mysqli($QL_SERVER, $sqlusername, $sqlpassword);
$conn-> select_db($database);
$result = $conn->query("SELECT PASSWORD FROM sites WHERE PASSWORD = '$postPass'");
if($result->num_rows == 0) {
    exit("Wrong password!");
}
deleteDirectory($postName);
$conn->query("DELETE FROM sites WHERE NAME='$postName';");
$contents = file_get_contents("sites.html");
$contents = str_replace("<li><a href='$address/$postName'>$postName</a></li><br>", "", $contents);
file_put_contents("sites.html", $contents);
echo("Site deleted!");