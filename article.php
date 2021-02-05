<?php 

    if (isset($_GET['name'])) {
        require_once 'connectdb.php';
        require_once 'functions.php';
        
        $name = sanitize($_GET['name']);
        
        $sql = "SELECT * FROM pages WHERE name='$name'";
        
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

        //var_dump($row);

    } else {
        echo 'doei';
    }

?>

<div class="container info">
    <div class="card" id="infoCard">
        <div class="card-body">
            <h1 class="infoTitle"><?=$row['name']?> 
            <hr>
            <p><?=$row['info']?></p>
        </div>
    </div>    
</div>