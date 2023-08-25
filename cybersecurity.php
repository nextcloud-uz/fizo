<?php
include 'db_conn.php';

if(isset($_POST["ip"])){
    $ip = $_POST["ip"];
    $isp = $_POST["isp"];
    $country = $_POST["country"];
    $city = $_POST["city"];

    $counter_query = "SELECT * FROM tb_data WHERE `ip` = '$ip'";
    $counter_result = mysqli_query($conn, $counter_query);

    if(!$counter_result){
    die("Result error<br>".$counter_query);
    }

    $total_visitors = mysqli_num_rows($counter_result);
    if($total_visitors<1){
    $counter_query = "INSERT INTO `tb_data` (`ip`, `isp`, `country`, `city`) VALUES('$ip', '$isp', '$country', '$city')";
    $counter_result = mysqli_query($conn, $counter_query);

    if ($counter_result)
        {
            echo '<script> alert("Ma`lumotlar bazaga kiritildi"); </script>';
            echo $counter_result;
            // header('Location: home.php');
        }
        else
        {
            echo '<script> alert("Ma`lumotlar bazaga kiritilmadi"); </script>';
        }
    }

    // $query = "INSERT INTO tb_data VALUES('', '$ip', '$isp', '$country', '$city')";
    // mysqli_query($conn, $query);
}

?>