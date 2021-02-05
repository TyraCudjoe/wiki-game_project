<?php 
    // connects the datbase
    if (isset($_GET['name'])) {
        require_once 'connectdb.php';
        require_once 'functions.php';
        
        //makes sure no one can hack the site
        $name = sanitize($_GET['name']);

        // selects all from name from the database
        $sql = "SELECT * FROM pages WHERE name='$name'";
        
        // makes sure the mysql query comes trough
        $result = mysqli_query($conn, $sql);

        
        $row = mysqli_fetch_assoc($result);

        $records = "";
        while ($record = mysqli_fetch_all($result)) {
            $records .= "
                        <a href='./index.php?content=update&name=". $record['name'] . "'>
                            <img src='./img/b_edit.png' alt='pencil'>
                        </a>";
        }

        //var_dump($row);

    } else {
        echo 'doei';
    }
?>

<div class="container info">
    <div class="card" id="infoCard">
        <div class="card-body">
            <h1 class="infoTitle"><?=$row['name']?> 
                <?php echo $records ?>
            <hr>
            <p><?=$row['info']?></p>
        </div>
    </div>    
</div>