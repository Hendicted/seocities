<?php
include "config.php";
$postName = htmlspecialchars($_POST["name"]);
$postText = $_POST["post"];
$postPass = $_POST["pass"];
$title = strlen($postName);
$sites = fopen('sites.html', 'a');
$conn = new mysqli($QL_SERVER, $sqlusername, $sqlpassword);
$conn-> select_db($database);
if(strpos($postName, ".") !== false) exit("Your title contains an illegal character.");
if(strpos($postName, "/") !== false) exit("Your title contains an illegal character.");
if ($title > 20) exit("Your site name cannot be longer than 20 characters.");
if ($postName == null || $postText == null) exit("You forgot to input on one of the fields.");
if (file_exists("./$postName/index.html")) exit ("This site already exists.");
fwrite($sites, "<li><a href='$address/$postName'>$postName</a></li><br>");
mkdir($postName);
file_put_contents("$postName/index.html", $postText);
if ($conn->query("INSERT INTO `sites` (`ID`, `NAME`, `PASSWORD`) VALUES (NULL, '$postName', '$postPass')") === TRUE) {
    echo "Entry added!";
} else {
    echo "Error putting entry inside table: " . $conn->error;
}
echo("website is created at <a href='$address/$postName'>$address/$postName</a>")
?>