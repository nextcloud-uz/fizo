<?php
    include_once 'db_conn.php';
    $db = mysqli_query($conn,'fizo');    

    if(isset($_POST['edit_data']))
    {   
        $id = $_POST['edit_id'];
        $fish = $_POST['fish'];
        $natija1 = $_POST['natija1'];
        $natija2 = $_POST['natija2'];
        $natija3 = $_POST['natija3'];
        $natija4 = $_POST['natija4'];

        $query = "UPDATE `user401` SET `fish`='$fish', `natija1`='$natija1', `natija2`='$natija2', `natija3`='$natija3', `natija4`='$natija4' WHERE `user_id`='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            $yili = "SELECT `tugilgan_kuni` FROM `user401` WHERE `user_id`='$id'";            
            $yoshi = "SELECT TIMESTAMPDIFF(YEAR, ($yili), curdate())";            
            $sql = "UPDATE `user401` SET `yoshi`= ($yoshi) WHERE `user_id`='$id'";
            $query_run3 = mysqli_query($conn, $sql);
            
            echo '<script> alert("Ma`lumotlar yangilandi"); </script>';            
            header("Location:home.php");            
        }
        else
        {
            echo '<script> alert("Ma`lumotlar yangilanmadi"); </script>';            
        }
    }
?>