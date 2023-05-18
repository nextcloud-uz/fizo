<?php
    include_once 'db_conn.php'; 
    session_start();

    $row_bolinmanomi = mysqli_fetch_row(mysqli_query($conn, "SELECT bolinmanomi FROM users WHERE `id` =".$_SESSION['id']));
    $bolinmanomi = $row_bolinmanomi[0];
    $username = $_SESSION['username'];

    if(isset($_POST['delete_table']))
    {
        $id = $_SESSION['id'];

        $query = "DELETE FROM `user401` WHERE `bolinma_nomi` = '$bolinmanomi' AND `data_username` = '$username'";
        $query_run = mysqli_query($conn, $query);
        
        $nullrows = "UPDATE `users` SET `bolinmanomi`= NULL, `1-mashq`= NULL, `2-mashq` = NULL, `3-mashq`= NULL, `4-mashq` = NULL WHERE `id`='$id'";
        $nullrows_run = mysqli_query($conn, $nullrows);

        if ($nullrows_run)
        {
            echo '<script>alert("Jadval o`chirildi"); </script>';
            header("location:home.php");
        }
        else
        {
            echo '<script>alert("Ma`lumot o`chirilmadi"); </script>';
        }
    }
?>
