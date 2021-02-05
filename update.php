<?php
    $name = $_GET["name"];

    include("./connectdb.php");
    include("./functions.php");

    $sql = "SELECT * FROM `pages` WHERE `name` = $name";
    $result = mysqli_query($conn, $sql);
    $record = mysqli_fetch_all($record);

?>



<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="Text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?php echo$record[""] ?>"></textarea>
</div>