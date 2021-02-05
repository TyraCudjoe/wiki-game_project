<?php
    function sanitize ($raw_data) {
        global $conn;
        $data = mysqli_real_escape_string($conn, $raw_data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    include("./connectdb.php");

    // $name = ($_POST["id"]);
    // $info = sanitize($_POST["info"]);

    // $sql= "UPDATE `pages`
    //         SET `info` = '$info',
            
    //         WHERE `users`.`name`= $name;";
 
    // mysqli_query($conn, $sql);
    // header("Location: ./index.php?content=home");

?>