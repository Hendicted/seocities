<title>Seocities - design your bad website</title>
<h1>welcome to seocities!</h1>
<div id="postBox">
    <form action="post.php" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td> <input type="text" name="name"><input type="submit" value="Post"></td>
            </tr>
            <tr>
                <td>Code:</td>
                <td><textarea name="post"></textarea></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><textarea name="pass"></textarea></td>
            </tr>
        </table>
    </form>
</div>
<hr>
<h2>Delete Site</h2>
<div id="delete">
    <form action="delete.php" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td> <input type="text" name="name"><input type="submit" value="Post"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><textarea name="pass"></textarea></td>
            </tr
        </table>
    </form>
</div>

<center>
    <table border="10" cellpadding="0" width="488">
</table>
</center>
<script src="https://codemirror.net/lib/codemirror.js"></script>
<link rel="stylesheet" href="https://codemirror.net/lib/codemirror.css">
<link rel="stylesheet" href="./skins/bootstrap.min.css">
<script src="https://codemirror.net/mode/javascript/javascript.js"></script>
<style>
    body {
        background-image: url("./skins/space.gif");
    }
</style>

<h2>List of Websites</h2>
<!--database fetch here, WIP-->
<?php
include "config.php";
echo file_get_contents("sites.html");