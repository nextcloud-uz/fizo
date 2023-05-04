<?php
    include_once 'db_conn.php';
    session_start();

    $row_bolinmanomi = mysqli_fetch_row(mysqli_query($conn, "SELECT bolinmanomi FROM users WHERE `id` =".$_SESSION['id']));
    $bolinmanomi = $row_bolinmanomi[0];

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
        $result = mysqli_query($conn, $yoshi);
        $row = mysqli_fetch_row($result);
        // echo $row[0];
        if($row[0] < 28){
          $guruhi = "1guruh";
        }
        if($row[0] >= 28 && $row[0] < 33){
          $guruhi = "2guruh";
        }
        if($row[0] >= 33 && $row[0] < 38){
          $guruhi = "3guruh";
        }
        if($row[0] >= 38 && $row[0] < 43){
          $guruhi = "4guruh";
        }
        if($row[0] >= 43 && $row[0] < 48){
          $guruhi = "5guruh";
        }
        if($row[0] >= 48 && $row[0] < 53){
          $guruhi = "6guruh";
        }
        // natija1 ni jadval bilan solishtirish va qiymatini o`zgaruvchiga yozish
        if(empty($natija1) === true){
          $ball1 = 0;
        }
        else{
          $ball1 = "SELECT ball FROM `$guruhi` WHERE `2-mashq` >= '$natija1' ORDER BY id DESC limit 1";
          $result_ball1 = mysqli_query($conn, $ball1);
          $row_ball1 = mysqli_fetch_row($result_ball1);
          $ball1 = $row_ball1[0];
        }

        // natija2 ni jadval bilan solishtirish va qiymatini o`zgaruvchiga yozish
        if(empty($natija2) === true){
          $ball1 = 0;
        }
        else{
          $ball2 = "SELECT ball FROM `$guruhi` WHERE `5b-mashq` >= '$natija2' ORDER BY id DESC limit 1";
          $result_ball2 = mysqli_query($conn, $ball2);
          $row_ball2 = mysqli_fetch_row($result_ball2);
          $ball2 = $row_ball2[0];
        }

        // natija3 ni jadval bilan solishtirish va qiymatini o`zgaruvchiga yozish
        if(empty($natija3) === true){
          $ball3 = 0;
        }
        else{
          $ball3 = "SELECT ball FROM `$guruhi` WHERE `9-mashq` <= '$natija3' ORDER BY id DESC limit 1";
          $result_ball3 = mysqli_query($conn, $ball3);
          $row_ball3 = mysqli_fetch_row($result_ball3);
          $ball3 = $row_ball3[0];
        }

        // natija4 ni jadval bilan solishtirish va qiymatini o`zgaruvchiga yozish
        if(empty($natija4) === true){
          $ball4 = 0;
        }
        else{
          $ball4 = "SELECT ball FROM `$guruhi` WHERE `251-mashq` >= '$natija4' ORDER BY id DESC limit 1";
          $result_ball4 = mysqli_query($conn, $ball4);
          $row_ball4 = mysqli_fetch_row($result_ball4);
          $ball4 = $row_ball4[0];
        }

        // Umumiy ballni hisoblash va o`zgaruvchiga yozish
        $umumiyball = $ball1 + $ball2 + $ball3 + $ball4;
        // echo $umumiyball;

        // Bahoni chiqarish va o`zgaruvchiga yozish
        if($umumiyball > 80){
          $baho = 5;
        }
        if($umumiyball > 70 && $umumiyball < 80){
          $baho = 4;
        }
        if($umumiyball > 60 && $umumiyball < 70){
          $baho = 3;
        }
        if($umumiyball < 50){
          $baho = 2;
        }

        // Barcha var larni bazaga kiritish
        $sql = "INSERT INTO `user401` (`fish`, `tugilgan_kuni`, `yoshi`, `guruhi`, `natija1`, `ball1`, `natija2`, `ball2`, `natija3`, `ball3`, `natija4`, `ball4`, `umumiyball`, `baho`, `bolinma_nomi`)
        VALUES ('$fish', '$tugilgan_kuni', ($yoshi), '$guruhi', '$natija1', '$ball1', '$natija2', '$ball2', '$natija3', '$ball3', '$natija4', '$ball4', '$umumiyball', '$baho', '$bolinmanomi')";
        $res = mysqli_query($conn, $sql);

        if ($res)
        {
            echo '<script> alert("Ma`lumotlar bazaga kiritildi"); </script>';
            // header('Location: home.php');
        }
        else
        {
            echo '<script> alert("Ma`lumotlar bazaga kiritilmadi"); </script>';
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
