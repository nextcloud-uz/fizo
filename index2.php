<?php 
  include 'db_conn.php';

  $visitor_ip = $_SERVER['REMOTE_ADDR'];

  $counter_query = "SELECT * FROM counter_table WHERE `ip_address` = '$visitor_ip'";
  $counter_result = mysqli_query($conn, $counter_query);

  if(!$counter_result){
    die("Result error<br>".$counter_query);
  }

  $total_visitors = mysqli_num_rows($counter_result);
  if($total_visitors<1){
    $counter_query = "INSERT INTO counter_table(`ip_address`) VALUES('$visitor_ip')";
    $counter_result = mysqli_query($conn, $counter_query);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style_log.css" />
  <title>Fizo.uz - natijalarni avtomatik hisoblash portali</title>
  <link rel="icon" type="image/x-icon" href="./img/fizo.ico">
</head>

<body>
  <div class="container1">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="login.php" class="sign-in-form" method="post">
          <h2 class="title">Tizimga kirish</h2>
          <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Login" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Parol" />
          </div>
          <input type="submit" value="Kirish" class="btn1 solid" />
        
        </form>
        <form action="registr_user.php" method="post" class="sign-up-form">
          <h2 class="title">Ro‘yxatdan o‘tish</h2>
          <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div class="input-field">
            <i class="fas fa-file-signature"></i>
            <?php if (isset($_GET['name'])) { ?>
              <input type="text" name="name" placeholder="Ismingiz" value="<?php echo $_GET['name']; ?>" />
            <?php } else { ?>
              <input type="text" name="name" placeholder="Ismingiz">
            <?php } ?>
          </div>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <?php if (isset($_GET['username'])) { ?>
              <input type="text" name="username" placeholder="Login" value="<?php echo $_GET['username']; ?>" />
            <?php } else { ?>
              <input type="text" name="username" placeholder="Login">
            <?php } ?>
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Parol " />
          </div>

          <input type="submit" class="btn1" name="reg_user" value="Tasdiqlash" />
          
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Siz endi tashrif buyurdingizmi?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn1 transparent" id="sign-up-btn">
            Ro‘yxatdan o‘tish
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Birinchi marta emasmisiz?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn1 transparent" id="sign-in-btn">
            Tizimga kirish
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>