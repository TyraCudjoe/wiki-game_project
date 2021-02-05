<?php
include("./connectdb.php");
$sql = "SELECT * FROM pages WHERE name='franklin'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_result($result);
var_dump()
?>
<div class="container">
    <p><?php
echo $result
?></p>
</div>
