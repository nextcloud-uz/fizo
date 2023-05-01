<?php
    include_once 'db_conn.php'; 

    if(isset($_POST['delete_data']))
    {
        $id = $_POST['delete_id'];

        $query = "DELETE FROM `user401` WHERE `user_id` = '$id'";
        $query_run = mysqli_query($conn, $query);

        if ($query_run)
        {
            $query1 = "SET @autoid := 0";
            $query_run = mysqli_query($conn, $query1);
            $query2 = "UPDATE `user401` SET user_id = @autoid := (@autoid+1)";
            $query_run = mysqli_query($conn, $query2);
            $query3 = "ALTER TABLE `user401` AUTO_INCREMENT = 1";
            $query_run = mysqli_query($conn, $query3);
            echo '<script>alert("Ma`lumot o`chirildi"); </script>';
            header("location:home.php");
        }
        else
        {
            echo '<script>alert("Ma`lumot o`chirilmadi"); </script>';
        }
    }
?>
