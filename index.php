<script src="https://codemirror.net/lib/codemirror.js"></script>
<link rel="stylesheet" href="https://codemirror.net/lib/codemirror.css">
<script src="https://codemirror.net/mode/javascript/javascript.js"></script>
<h1>welcome to seocities!</h1>
<div id="postBox">
    <form action="post.php" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td> <input type="text" name="name" value="Anonymous"><input type="submit" value="Post"></td>
            </tr>
            <tr>
                <td>Code:</td>
                <td><textarea name="post"></textarea></td>
            </tr>
        </table>
    </form>
</div>
<p>List of Websites</p>
<!--database fetch here, WIP-->
<?php
include "config.php";
echo file_get_contents("sites.html");