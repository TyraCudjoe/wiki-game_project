<?php
include("./connectdb.php");

$name = ($_POST["name"]);
$info = sanitize($_POST["info"]);

$sql= "UPDATE `pages`
        SET `info` = '$info',
        
        WHERE `users`.`name`= $name;";

mysqli_query($conn, $sql);
header("Location: ./index.php?content=home");
?>