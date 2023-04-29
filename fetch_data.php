<?php
    include_once 'db_conn.php';
    $query ="SELECT * FROM mashqlar";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_assoc($result, MYSQLI_ASSOC);
    }
?>