<?php
$address = ""; #what the default address is (example: https://yourdomain.com/seocities will output https://yourdomain.com/seocities/sitename)
$QL_SERVER = "localhost"; # dont change if you dont know what you are doing!
$database = "seo"; # the database ur gonna use
$QL_PORT = "3306"; #dont change if you dont know what you are doing!
$sqlusername = "hendicted";
$sqlpassword = "ass";
$MAX_FPENTRIES = "10"; #how many sites should be featured on the front page

function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }

    if (!is_dir($dir)) {
        return unlink($dir);
    }

    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }

        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }

    }

    return rmdir($dir);
}