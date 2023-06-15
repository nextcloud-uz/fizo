<?php 
  include 'db_conn.php';
  session_start();


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
<html>
<head>
	<title>Fizo.uz | Bosh sahifa</title>
     <link rel="icon" type="image/x-icon" href="./img/fizo.ico">

	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="styles_index.css">
  <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
     <script src="js/script.js" defer></script>

     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" /> -->
     <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" /> -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
     <!-- MDB -->
     <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" /> -->
     <link rel="stylesheet" href="css/mdb.min.css" />
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <!-- <script
     type="text/javascript"
     src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
     ></script> -->


</head>
<body>
     <!-- Navbar -->
    <header class="header">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container-fluid">
                    <a class="navbar-brand" href="./index.php">FIZO.UZ</a>
                    <button
                         class="navbar-toggler"
                         type="button"
                         data-mdb-toggle="collapse"
                         data-mdb-target="#navbarNav"
                         aria-controls="navbarNav"
                         aria-expanded="false"
                         aria-label="Toggle navigation"
                    >
                         <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                         <ul class="navbar-nav">
                         <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#">Bosh sahifa</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="#mashqlar">Mashqlar</a>
                         </li>
                         <li class="nav-item">
                         <?php
                              
                              if (isset($_SESSION['id']) && isset($_SESSION['username'])){ ?>
                              <a class="nav-link" href="./home.php">Ro`yxatlar</a>
                              <?php 
                              } else { ?>
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#LoginModal1">Ro`yxatlar</a>
                              <?php
                              } ?>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#PROClickmodal">PRO versiya</a>
                         </li>
                         </ul>
                    </div>
                    <div class="d-flex align-items-center">
                              <button type="button" class="btn btn-outline-secondary soat me-1"><i class="far fa-clock me-1 "></i>
                                   <!-- Soat boshlanishi -->
                                   <span class="soat" id="hours">00</span>
                                   <span class="soat">:</span>
                                   <span class="soat" id="minutes">00</span>
                                   <span class="soat">:</span>
                                   <span class="soat" id="seconds">00</span>
                                   <!-- Soat tugashi -->
                              </button>
                              <!-- <div class="d-flex justify-content-center dobavit"> -->

                              <!-- </div> -->
                              
                              <?php
                              
                              if (isset($_SESSION['id']) && isset($_SESSION['username'])){ ?>
                                
                                <a class="btn btn-warning bg-gradient ms-1" href="logout.php" role="button">Chiqish</a>
                                
                                <?php
                              }else{ ?>
                                
                              <a class="btn btn-primary bg-gradient ms-1" data-bs-toggle="modal" data-bs-target="#LoginModal1" role="button">Kirish</a>
                               
                              

                              <?php } ?>
                              
                              
                         </div>
               </div>
          </nav>

          <!-- Index 1 secsiya -->
          <div class="section__container header__container">
            <div class="header__image">
              <img src="assets/pexels4.jpg" alt="header" />
              <img src="assets/pexels5.jpg" alt="header" />
            </div>
            <div class="header__content">
              <div>
                <p class="sub__header">Hisoblash endi qiyin emas</p>
                <h1>Bu juda oson 😊</h1><br /><h1 class="hash">natijalarni kiritsak bo'ldi</h1> 
                <p class="section__subtitle">
                  Fizo.uz elektron portali jismoniy tayyorgarlik natijalarini avtomatik tarzda hisoblaydi 
                  va sizga kerakli formatda ro'yxatni shakllantirib beradi. Sizdan faqatgina natijalarni kiritish, bizdan hisoblash. 
                </p>
                <div class="action__btns">
                  <button class="btn2">Sinov</button>
                  <div class="story">
                    <div class="video__image">
                      <img src="assets/story.jpg" alt="story" />
                      <span><i class="ri-play-fill"></i></span>
                    </div>
                    <span>Video yo`riqnoma</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

    </header>
    <main>

    <section id="mashqlar" class="section__container destination__container">
      <div class="section__header">
        <div>
          <h2 class="section__title">Mashqlar ro'yxati</h2>
          <p class="section__subtitle">
            Har bir mashq haqida ma'lumot va uni bajarish tartibi ko'rsatib o'tilgan.
          </p>
        </div>
        <div class="destination__nav">
          <span><i class="ri-arrow-left-s-line"></i></span>
          <span><i class="ri-arrow-right-s-line"></i></span>
        </div>
      </div>
      <div class="destination__grid">
        <div class="destination__card">
          <img src="assets/destination-1.jpg" alt="destination" />
          <div class="destination__details">
            <p class="destination__title">Banff</p>
            <p class="destination__subtitle">Canada</p>
          </div>
        </div>
        <div class="destination__card">
          <img src="assets/destination-2.jpg" alt="destination" />
          <div class="destination__details">
            <p class="destination__title">Machu Picchu</p>
            <p class="destination__subtitle">Peru</p>
          </div>
        </div>
        <div class="destination__card">
          <img src="assets/destination-3.jpg" alt="destination" />
          <div class="destination__details">
            <p class="destination__title">Lauterbrunnen</p>
            <p class="destination__subtitle">Switzerland</p>
          </div>
        </div>
        <div class="destination__card">
          <img src="assets/destination-4.jpg" alt="destination" />
          <div class="destination__details">
            <p class="destination__title">Zhangjiajie</p>
            <p class="destination__subtitle">China</p>
          </div>
        </div>
        <div class="destination__card">
          <img src="assets/destination-3.jpg" alt="destination" />
          <div class="destination__details">
            <p class="destination__title">Lauterbrunnen</p>
            <p class="destination__subtitle">Switzerland</p>
          </div>
        </div>
        <div class="destination__card">
          <img src="assets/destination-4.jpg" alt="destination" />
          <div class="destination__details">
            <p class="destination__title">Zhangjiajie</p>
            <p class="destination__subtitle">China</p>
          </div>
        </div>
      </div>
    </section>

    <section class="trip">
      <div class="section__container trip__container">
        <h2 class="section__title">Baholash tartibi</h2>
        <p class="section__subtitle">
          Harbiy xizmatchilarni jismoniy tayyorgarlik holatini tekshirish va baholash tartibi
        </p>
        <div class="trip__grid">
          <div class="trip__card">
            <img src="assets/trip-1.jpg" alt="trip" />
            <div class="trip__details">
              <p>"A'lo" baho</p>
              <div class="rating"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i> 5</div>
              <div class="booking__price">
                <div class="price"> 70 <span>balldan</span> 100 <span>ballgacha</span></div>
                <button class="book__now">Batafsil</button>
              </div>
            </div>
          </div>
          <div class="trip__card">
            <img src="assets/trip-2.jpg" alt="trip" />
            <div class="trip__details">
              <p>"Yaxshi" baho</p>
              <div class="rating"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i> 4</div>
              <div class="booking__price">
                <div class="price">55 <span>balldan</span> 70 <span>ballgacha</span></div>
                <button class="book__now">Batafsil</button>
              </div>
            </div>
          </div>
          <div class="trip__card">
            <img src="assets/trip-3.jpg" alt="trip" />
            <div class="trip__details">
              <p>"Qoniqarli" baho</p>
              <div class="rating"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i> 3</div>
              <div class="booking__price">
                <div class="price"> 38 <span>balldan</span> 55 <span>ballgacha</span></div>
                <button class="book__now">Batafsil</button>
              </div>
            </div>
          </div>
        </div>
        <div class="view__all">
          <button class="btn2">Batafsil</button>
        </div>
      </div>
    </section>

    <section class="gallary">
      <div class="section__container gallary__container">
        <div class="image__gallary">
          <div class="gallary__col">
            <img src="assets/gallery-1.jpg" alt="gallary" />
          </div>
          <div class="gallary__col">
            <img src="assets/gallery-2.jpg" alt="gallary" />
            <img src="assets/gallery-3.jpg" alt="gallary" />
          </div>
        </div>
        <div class="gallary__content">
          <div>
            <h2 class="section__title">
              Harbiy sportchi
            </h2>
            <p class="section__subtitle">
              90 balldan ko`p ball jamlagan harbiy xizmatchilar yuqori jismoniy tayyorgarlikka ega hisoblanib, ular <br><span class="harbiysportchi">"Harbiy sportchi"</span>  ko`krak nishoni talabini bajargan hisoblanadi.
            </p>
            <button class="btn2">Batafsil</button>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="subscribe">
      <div class="section__container subscribe__container">
        <div class="subscribe__content">
          <h2 class="section__title">Subscribe to get special prize</h2>
          <p class="section__subtitle">
            Explore your suitable and dream places around the world. Here you
            can find your right destination.
          </p>
        </div>
        <div class="subscribe__form">
          <form>
            <input type="email" placeholder="Your email here" />
            <button class="btn2" type="submit">Send</button>
          </form>
        </div>
      </div>
    </section> -->

    

    <!-- Modal Pro versiya Start-->
    <div class="modal fade" id="PROClickmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PRO versiya</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    <p class="pro">PRO versiya ustida amaliy ishlar olib borilmoqda. <br>
                        Yaqin kunlar ichida ishga tushadi.</p>
                        <!-- <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Pro versiya nimalar beradi?
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                              </div>
                            </div>
                          </div> -->
                          
                        </div>


                    </div>
                    <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary">Saqlash</button> -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        OK
                    </button>
                    </div>
              </div>
          </div>
    </div>
    <!-- Modal Pro versiya End -->

    <!-- Login modal dialog -->
    <div class="modal fade" id="LoginModal1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header login">
            <h5 class="modal-title" id="LoginModal1">Tizimga kirish</h5>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
          </div>
          <div class="modal-body login">
          <form action="login.php" class="signform" method="post">
          <!-- <h2 class="title">Tizimga kirish</h2> -->
          <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" required name="username" placeholder="Login" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" required name="password" placeholder="Parol" />
          </div>
          
          <input type="submit" value="Kirish" class="btn1 solid" />
        
        </form>
          <p class="login">
          Siz tizimda birinchi martamisiz? <a href="#" data-bs-target="#RegisterModal" data-bs-toggle="modal" data-bs-dismiss="modal">Ro'yxatdan o'tish</a>
          </p>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
            <!-- <button class="btn btn-primary" data-bs-target="#RegisterModal" data-bs-toggle="modal" data-bs-dismiss="modal">
              Ro'yxatdan o'tish
            </button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Registr modal dialog -->
    <div class="modal fade" id="RegisterModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel22" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header login">
            <h5 class="modal-title" id="exampleModalToggleLabel22">Ro'yxatdan o'tish</h5>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
          </div>
          <div class="modal-body login">
          <form action="registr_user.php" method="post" class="sign-in-form">
          
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
              <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <div class="input-field">
              <i class="fas fa-file-signature"></i>
              <?php if (isset($_GET['name'])) { ?>
                <input type="text" required name="name" placeholder="Ismingiz" value="<?php echo $_GET['name']; ?>" />
              <?php } else { ?>
                <input type="text" required name="name" placeholder="Ismingiz">
              <?php } ?>
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <?php if (isset($_GET['username'])) { ?>
                <input type="text" name="username" placeholder="Login" value="<?php echo $_GET['username']; ?>" />
              <?php } else { ?>
                <input type="text" required name="username" placeholder="Login">
              <?php } ?>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" required name="password" placeholder="Parol " />
            </div>

            <input type="submit" class="btn1" name="reg_user" value="Tasdiqlash" />
            
          </form>

            Siz ro'yxatdan o'tganmisiz? <a href="#" data-bs-target="#LoginModal1" data-bs-toggle="modal" data-bs-dismiss="modal">Tizimga kirish</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-light text-center text-lg-start">
     <div class="d-flex justify-content-between" style="background-color: rgba(0, 0, 0, 0.025);">
          <div class="text-center p-2">Location</div>
          <!-- Copyright -->
          <div class="text-center p-2" >
          © 2023 Copyright:
          <a class="text-reset fw-bold" href="https://fizo.uz/">Fizo.uz</a>
          | Barcha huquqlar himoyalangan.
          </div>
          <!-- Copyright -->
          <div class="text-center p-2">
          <p class="fw-light m-0">STBS: <?php echo $total_visitors ?></p>
          </div>
     </div>
</footer>

    

    </main>



  

          
   

  <!-- <script src="app.js"></script> -->
</body>

</html>