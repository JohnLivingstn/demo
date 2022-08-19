<?php
error_reporting(0);
include "db.php";
//$_POST['term'])) {

?>


<table class="table table-border">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>place</th>
    </tr>
    <?php

    $query = "SELECT * FROM search WHERE name LIKE '{$_GET['q']}%' LIMIT 25";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
   
      while($row = $result->fetch_assoc()) {
    
    ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo $row['place'];?></td>
    </tr>
    <?php

    }
    } else {
        echo "0 results";
    }
    
    ?>
</table>

