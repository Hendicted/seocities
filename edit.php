<?php
include "config.php";
$postName = htmlspecialchars($_POST["name"]);
$postCont = $_POST["post"];
$postPass = $_POST["pass"];
if (file_exists("./$postName/index.html") == false) exit ("The website doesn't exist.");
if(strpos($postName, ".") !== false) exit("Your title contains an illegal character.");
if(strpos($postName, "/") !== false) exit("Your title contains an illegal character.");
if ($postName == null || $postPass == null) exit("You forgot to input on one of the fields.");
$conn = new mysqli($QL_SERVER, $sqlusername, $sqlpassword);
$conn-> select_db($database);
$result = $conn->query("SELECT PASSWORD FROM sites WHERE NAME='$postName' AND PASSWORD = '$postPass'");
if($result->num_rows == 0) {
    exit("Wrong password!");
}
if(!$postCont) {
    $contents = file_get_contents("./$postName/index.html");
    $editpage = file_get_contents("editsite.html");
    $editpage = str_replace("strTOREPLACE", $contents, $editpage);
    echo($editpage);
}
else {
    file_put_contents("./$postName/index.html", $postCont);
    echo("Site edited!");
}

//$contents = file_get_contents("sites.html");
//file_put_contents("sites.html", $contents);