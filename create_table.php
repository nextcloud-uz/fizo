<?php
    include_once 'db_conn.php';
    session_start();

    if(isset($_POST['createtable']))
    {
        $id = $_SESSION['id'];
        $bolinmanomi   = $_POST['input_bolinmanomi'];
        $mashq1        = $_POST['input_mashq1'];
        $mashq2        = $_POST['input_mashq2'];
        $mashq3        = $_POST['input_mashq3'];
        $mashq4        = $_POST['input_mashq4'];

        $query = "UPDATE `users` SET `bolinmanomi`='$bolinmanomi', `1-mashq`='$mashq1', `2-mashq`='$mashq2', `3-mashq`='$mashq3', `4-mashq`='$mashq4' WHERE `id`='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Ma`lumotlar bazaga kiritildi!"); </script>';
            header("Location:home.php");
        }
        else
        {
            echo '<script> alert("Ma`lumotlar bazaga kiritilmadi!"); </script>';
        }
    }
?>

<!-- CREATE TABLE `user401` ( `user_id` int(11) NOT NULL, `fish` varchar(255) DEFAULT NULL, `tugilgan_kuni` date DEFAULT NULL, `yoshi` int(11) DEFAULT NULL, `vazni` int(11) DEFAULT NULL, `guruhi` varchar(255) DEFAULT NULL, `natija1` decimal(4,2) DEFAULT NULL, `ball1` int(11) DEFAULT NULL, `natija2` decimal(4,2) DEFAULT NULL, `ball2` int(11) DEFAULT NULL, `natija3` int(11) DEFAULT NULL, `ball3` int(11) DEFAULT NULL, `natija4` decimal(4,2) DEFAULT NULL, `ball4` int(11) DEFAULT NULL, `umumiyball` int(11) DEFAULT NULL, `baho` int(11) DEFAULT NULL, `current_time` date NOT NULL DEFAULT current_timestamp(), `bolinma_nomi` varchar(11) DEFAULT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; -->

<!-- CREATE TABLE Person (
    `PersonID`      INTEGER NOT NULL PRIMARY KEY,
    `LastName`      VARCHAR(80),
    `FirstName`     VARCHAR(80),
    `Address`       TEXT,
    `City`          VARCHAR(100)
) Engine=InnoDB; -->

<!-- CREATE TABLE Person (
    PersonID     INT UNSIGNED NOT NULL PRIMARY KEY,
    LastName     VARCHAR(66) NOT NULL,
    FirstName    VARCHAR(66),
    Address      VARCHAR(255),
    City         VARCHAR(66)
); -->




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
