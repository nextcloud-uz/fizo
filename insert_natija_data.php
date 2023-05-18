<?php
    include_once 'db_conn.php';
    session_start();

    $row_bolinmanomi = mysqli_fetch_row(mysqli_query($conn, "SELECT bolinmanomi FROM users WHERE `id` =".$_SESSION['id']));
    $bolinmanomi = $row_bolinmanomi[0];
    
    if(isset($_POST['insertdata']))
    {
        $username = $_SESSION['username'];
        $id = $_POST['user_id'];
        $fish           = $_POST['input_fish'];
        $tugilgan_kuni  = $_POST['input_tugilgan_kuni'];
        $natija1        = $_POST['input_natija1'];
        $natija2        = $_POST['input_natija2'];
        $natija3        = $_POST['input_natija3'];
        $natija4        = $_POST['input_natija4'];
        $mashqnomi1     = $_POST['mashqnomi1'];
        $mashqnomi2     = $_POST['mashqnomi2'];
        $mashqnomi3     = $_POST['mashqnomi3'];
        $mashqnomi4     = $_POST['mashqnomi4'];
        $mashqservernomi1     = $_POST['mashqservernomi1'];
        $mashqservernomi2     = $_POST['mashqservernomi2'];
        $mashqservernomi3     = $_POST['mashqservernomi3'];
        $mashqservernomi4     = $_POST['mashqservernomi4'];


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
        if(!isset($natija1)){
          $ball1 = 0;
        }
        else{
          if($mashqservernomi1 === 't'){
            $ball1 = "SELECT ball FROM `$guruhi` WHERE `$mashqnomi1` >= '$natija1' ORDER BY id DESC limit 1";
          }
          if($mashqservernomi1 === 'c'){
            $ball1 = "SELECT ball FROM `$guruhi` WHERE `$mashqnomi1` <= '$natija1' ORDER BY id DESC limit 1";
          }
          $result_ball1 = mysqli_query($conn, $ball1);
          $row_ball1 = mysqli_fetch_row($result_ball1);
          if(!isset($row_ball1[0])){
            $ball1 = 0;
          }else{
            $ball1 = $row_ball1[0];
          }
        }

        // natija2 ni jadval bilan solishtirish va qiymatini o`zgaruvchiga yozish
        if(!isset($natija2)){
          $ball2 = 0;
        }
        else{
          if($mashqservernomi2 === 't'){
            $ball2 = "SELECT ball FROM `$guruhi` WHERE `$mashqnomi2` >= '$natija2' ORDER BY id DESC limit 1";
          }
          if($mashqservernomi2 === 'c'){
            $ball2 = "SELECT ball FROM `$guruhi` WHERE `$mashqnomi2` <= '$natija2' ORDER BY id DESC limit 1";
          }
          $result_ball2 = mysqli_query($conn, $ball2);
          $row_ball2 = mysqli_fetch_row($result_ball2);
          if(!isset($row_ball2[0])){
            $ball2 = 0;
          }else{
            $ball2 = $row_ball2[0];
          }
        }

        // natija3 ni jadval bilan solishtirish va qiymatini o`zgaruvchiga yozish
        if(!isset($natija3)){
          $ball3 = 0;
        }
        else{
          if($mashqservernomi3 === 't'){
            $ball3 = "SELECT ball FROM `$guruhi` WHERE `$mashqnomi3` >= '$natija3' ORDER BY id DESC limit 1";
          }
          if($mashqservernomi3 === 'c'){
            $ball3 = "SELECT ball FROM `$guruhi` WHERE `$mashqnomi3` <= '$natija3' ORDER BY id DESC limit 1";
          }
          $result_ball3 = mysqli_query($conn, $ball3);
          $row_ball3 = mysqli_fetch_row($result_ball3);
          if(!isset($row_ball3[0])){
            $ball3 = 0;
          }else{
            $ball3 = $row_ball3[0];
          }
        }

        // natija4 ni jadval bilan solishtirish va qiymatini o`zgaruvchiga yozish
        if(!isset($natija4)){
          $ball4 = 0;
        }
        else{
          if($mashqservernomi4 === 't'){
            $ball4 = "SELECT ball FROM `$guruhi` WHERE `$mashqnomi4` >= '$natija4' ORDER BY id DESC limit 1";
          }
          if($mashqservernomi4 === 'c'){
            $ball4 = "SELECT ball FROM `$guruhi` WHERE `$mashqnomi4` <= '$natija4' ORDER BY id DESC limit 1";
          }
          $result_ball4 = mysqli_query($conn, $ball4);
          $row_ball4 = mysqli_fetch_row($result_ball4);
          if(!isset($row_ball4[0])){
            $ball4 = 0;
          }else{
            $ball4 = $row_ball4[0];
          }
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
        $sql = "INSERT INTO `user401` (`fish`, `tugilgan_kuni`, `yoshi`, `guruhi`, `natija1`, `ball1`, `natija2`, `ball2`, `natija3`, `ball3`, `natija4`, `ball4`, `umumiyball`, `baho`, `bolinma_nomi`, `data_username`)
        VALUES ('$fish', '$tugilgan_kuni', ($yoshi), '$guruhi', '$natija1', '$ball1', '$natija2', '$ball2', '$natija3', '$ball3', '$natija4', '$ball4', '$umumiyball', '$baho', '$bolinmanomi', '$username')";
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