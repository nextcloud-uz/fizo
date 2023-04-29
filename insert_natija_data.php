<?php
    include_once 'db_conn.php';    
  
    if(isset($_POST['insertdata']))
    {	 
        $id = $_POST['user_id'];
        $fish           = $_POST['input_fish'];
        $tugilgan_kuni  = $_POST['input_tugilgan_kuni'];
        $natija1        = $_POST['input_natija1'];                  
        $natija2        = $_POST['input_natija2'];
        $natija3        = $_POST['input_natija3'];
        $natija4        = $_POST['input_natija4'];  
        
        $yoshi = "SELECT TIMESTAMPDIFF(YEAR, '$tugilgan_kuni', curdate())";
        
        $sql = "INSERT INTO `user401` (`fish`, `tugilgan_kuni`, `yoshi`, `natija1`, `natija2`, `natija3`, `natija4`) 
        VALUES ('$fish', '$tugilgan_kuni', ($yoshi), '$natija1', '$natija2', '$natija3', '$natija4')";
        
        $res = mysqli_query($conn, $sql);
        if ($res)
        {
            echo '<script> alert("Ma`lumotlar bazaga kiritildi"); </script>';
            header('Location: home.php');
        }
        else
        {        
            echo '<script> alert("Ma`lumotlar bazaga kiritilmadi"); </script>';
        }
    }

?>
<!-- SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='yourdatabasename' 
    AND `TABLE_NAME`='yourtablename'; -->


     <!-- include_once 'db_conn.php';
    $result_natija = mysqli_query($conn,"SELECT * FROM user401");
  	$row_link = mysqli_fetch_array($result_natija);
    $success  = "";
    if(isset($_POST['add']))
    {	 
        $fish           = $_POST['fish'];
        $tugilgan_kuni  = $_POST['tugilgan_kuni'];
        $natija1        = $_POST['2-mashq'];                  
        $natija2        = $_POST['5b-mashq'];
        $natija3        = $_POST['9-mashq'];
        $natija4        = $_POST['25-mashq'];        
        
        $sql = "INSERT INTO user401 (`fish`, `tugilgan_kuni`, `2-mashq`, `5b-mashq`, `9-mashq`, `25-mashq`) 
        VALUES ('$fish', '$tugilgan_kuni', '$natija1', '$natija2', '$natija3', '$natija4')";
    if (mysqli_query($conn, $sql))
    {
        $success    =   "Ma'lumotlar bazaga muvoffaqiyatli kiritildi!";
    }
    else
    {
    echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
    } -->