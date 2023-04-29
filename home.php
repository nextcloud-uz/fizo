<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

include 'db_conn.php';
$result1 = mysqli_query($conn, "SELECT * FROM mashqlar");
$result2 = mysqli_query($conn, "SELECT * FROM mashqlar");
$result3 = mysqli_query($conn, "SELECT * FROM mashqlar");
$result4 = mysqli_query($conn, "SELECT * FROM mashqlar");
$resuser401 = mysqli_query($conn, "SELECT * FROM user401");
$resuserbolinma = mysqli_query($conn, "SELECT * FROM userbolinma");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fizo.uz | Bosh sahifa</title>
     <link rel="icon" type="image/x-icon" href="./img/fizo.ico">
     
	<link rel="stylesheet" type="text/css" href="style.css">
     <script src="js/script.js" defer></script>
     
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" /> -->
     <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" /> -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
     <!-- MDB -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
     <link rel="stylesheet" href="css/mdb.min.css" />
     
     
</head>
<body>     
     <!-- Navbar -->
     <header class="header">     
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container-fluid">
                    <a class="navbar-brand" href="./home.php">FIZO.UZ</a>
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
                              <a class="nav-link" href="#">Mashqlar</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="#">Ro`yxatlar</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="#" data-mdb-toggle="modal" data-mdb-target="#PROClick">PRO versiya</a>
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
                              <button type="button" class="btn btn-success bg-gradient" data-mdb-toggle="modal" data-mdb-target="#ModalCreateTable"><i class="fas fa-plus-circle me-2"></i>Ro`yxat tuzish</button>
                              <button type="button" class="btn btn-primary bg-gradient ms-1">
                              <a href="logout.php" class="chiqish">Chiqish</a>
                              </button>                         
                         </div>
               </div>
          </nav>          
     
          <!-- <div class="header__content">
                    <a href="#" class="logo">fizo.uz</a>
                    <nav class="nav">
                         <ul class="nav__list">
                              <li class="nav__item">
                                   <a href="#" class="nav__link">Solution</a>
                              </li>
                              <li class="nav__item">
                                   <a href="#" class="nav__link">Solution</a>
                              </li>
                              <li class="nav__item">
                                   <a href="#" class="nav__link">Solution</a>
                              </li>
                         </ul>
                    </nav>
               </div> -->
     </header>
     <main>
          <div class="container mt-1 mt-1">
               <h3 class="mt-2 align">Xush kelibsiz, <?php echo $_SESSION['name']; ?></h3>
               <div class="note note-info mb-2 ">
               <strong>Birinchi navbatda:</strong> Birinchi navbatda ro`yxat shakllantirish tugmasini bosib kerakli mashqlarni tanlang va OK tugmasini bosing 
               Lorem, <code>ipsum dolor</code>  sit amet consectetur adipisicing elit. Cum
               doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus
               placeat illo rem id nisi consequatur esse, sint perspiciatis soluta porro?
               </div>

               <ul class="list-unstyled">
               <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>Birinchi navbatda ro`yxat shakllantirish tugmasini bosib kerakli mashqlarni tanlang</li>
               <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>Ikkinchi navbatda shaxsiy tarkib haqidagi kerakli ma'lumotlarni birin-ketinlik bilan kiriting</li>
               <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>Uchinchi navbatda jismoniy tayyorgarlikdan egallangan natijalarni kerakli qatorlarga kiriting</li>
               </ul>

               <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste dolore natus officiis, laudantium ab alias, ad nihil sint debitis exercitationem ea accusantium odit, doloribus quibusdam at optio porro recusandae necessitatibus.</p>
               <!-- <table border="1" cellspacing="0" width="800" align="center"> -->
               <!-- <div class="table-responsive-sm"> -->
               <section class="pb-4">               
                    <div class="bg-white border rounded-2">
                    <button type="button" class="btn btn-outline-success m-2" data-mdb-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#ModalInsertNatija">Natijalarni kiritish<i class="fas fa-plus-circle ms-2"></i></button>
                    <button type="button" class="btn btn-outline-primary m-2" data-mdb-ripple-color="dark">Exceldagi natijalarni yuklash<i class="fas fa-download ms-2"></i></button>
                    <section class="w-100 p-2 text-center table-responsive">
                         
                         <table id="datatable" class="table table-bordered">
                              
                                   <thead>
                                        <tr class="table-active">
                                        <?php
                                        while ($row = mysqli_fetch_array($resuserbolinma)) {
                                        ?>
                                             <th colspan="14"><?php echo $row['bolinma_nomi']; ?></th>
                                        <?php 
                                        }
                                        ?>
                                        </tr>

                                        <tr>                                             
                                             <th rowspan="3">T/R</th>
                                             <th rowspan="3">F.I.SH</th>
                                             <th colspan="8">Mashqlar nomlanishi</th>
                                             <th rowspan="3">Umumiy ball</th>
                                             <th rowspan="3">Baho</th>
                                             <th rowspan="3">Amallar</th>
                                        </tr>

                                        <tr>
                                             <th colspan="2">2-mashq</th>
                                             <th colspan="2">5b-mashq</th>
                                             <th colspan="2">9-mashq</th>
                                             <th colspan="2">25-mashq</th>
                                        </tr>
                                        <tr>
                                             <th>Natija</th>
                                             <th>Ball</th>
                                             <th>Natija</th>
                                             <th>Ball</th>
                                             <th>Natija</th>
                                             <th>Ball</th>
                                             <th>Natija</th>
                                             <th>Ball</th>
                                        </tr>
                                   </thead>
                              <?php                              
                              while ($row = mysqli_fetch_array($resuser401)) {                                   
                              ?>
                                   <tbody>
                                        <tr>                                             
                                             <td><?php echo $row["user_id"]; ?></td>                                                                                          
                                             <td align="left"><?php echo $row['fish']; ?></td>
                                             <td><?php echo $row['natija1']; ?></td>
                                             <td><?php echo $row['ball1']; ?></td>
                                             <td><?php echo $row['natija2']; ?></td>
                                             <td><?php echo $row['ball2']; ?></td>
                                             <td><?php echo $row['natija3']; ?></td>
                                             <td><?php echo $row['ball3']; ?></td>
                                             <td><?php echo $row['natija4']; ?></td>
                                             <td><?php echo $row['ball4']; ?></td>
                                             <td><p class="ball aloball"><?php echo $row['umumiyball']; ?></p></td>
                                             <td><?php echo $row['baho']; ?></td>
                                             <td>
                                                  <button type="button" class="btn btn-secondary editbtn btn-sm px-3" data-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#ModalEdit">
                                                  <i class="fas fa-pen"></i>
                                                  </button>
                                                  <button type="button" class="btn btn-danger deletebtn btn-sm px-3" data-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#ModalDelete">
                                                  <i class="fas fa-trash-alt"></i>
                                                  </button>
                                             </td>
                                        </tr>                                       
                                   </tbody>
                              <?php 
                              }
                              ?>
                         </table> 

                              <!-- Modal Edit data Start-->
                              <div class="modal top fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                   <div class="modal-dialog  ">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tahrirlash</h5>
                                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="edit_data.php" method="POST">
                                             <div class="modal-body">
                                                  
                                                  <input type="hidden" name="edit_id" id="edit_id">

                                                  <div class="form-outline">
                                                  <input type="text" id="fish" name="fish" class="form-control" />
                                                  <label class="form-label" for="form12">F.I.SH</label>
                                                  </div>

                                                  <br>
                                                  <div class="form-outline">
                                                  <input type="text" id="natija1" name="natija1" class="form-control" />
                                                  <label class="form-label" for="form13">2-mashq natijalarini kiriting</label>                                             
                                                  </div>

                                                  <br>
                                                  <div class="form-outline">
                                                  <input type="text" id="natija2" name="natija2" class="form-control" />
                                                  <label class="form-label" for="form13">5b-mashq natijalarini kiriting</label>                                             
                                                  </div>

                                                  <br>
                                                  <div class="form-outline">
                                                  <input type="text" id="natija3" name="natija3" class="form-control" />
                                                  <label class="form-label" for="form13">9-mashq natijalarini kiriting</label>                                             
                                                  </div>

                                                  <br>
                                                  <div class="form-outline">
                                                  <input type="text" id="natija4" name="natija4" class="form-control" />
                                                  <label class="form-label" for="form13">25-mashq natijalarini kiriting</label>
                                                  </div>                                             
                                                  
                                             </div>
                                        
                                             <div class="modal-footer">
                                                  <button type="submit" name="edit_data" class="btn btn-primary">Saqlash</button>
                                                  <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Qaytish</button>
                                             </div>
                                        </form>
                                   </div>
                                   </div>
                              </div>
                              <!-- Modal Edit data End -->

                              <!-- Modal Create table Start-->
                              <div class="modal top fade" id="ModalCreateTable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                   <div class="modal-dialog  ">
                                   <div class="modal-content">                                        
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ro`yxatni shakllantirish</h5>
                                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                             <div class="form-outline">
                                             <input type="text" id="form12" class="form-control" />
                                             <label class="form-label" for="form12">Bo‘linmaning nomlanishi</label>                                             
                                             </div>
                                             <br>
                                             <div class="form-outline">
                                             <input type="text" id="form13" class="form-control" />
                                             <label class="form-label" for="form13">Shaxsiy tarkib soni</label>                                             
                                             </div>
                                                  
                                             <br>
                                             <div class="form-floating">
                                                                                          
                                             <select id="select1" class="form-select">
                                                  <?php
                                                  while ($row = mysqli_fetch_array($result1)) {
                                                  ?>                                          
                                                  <option value="
                                                  <?= $row["mashqlar_id"] ?>">
                                                  <?php echo $row['mashq_nomi']; ?>
                                                  </option>
                                                  <?php 
                                                  }
                                                  ?>                                                  
                                             </select>
                                             <label for="select1">1-mashqni tanlang</label>
                                             </div>
                                             
                                             <br>
                                             <div class="form-floating">                                             
                                             <select id="select2" class="form-select">
                                             <?php
                                             while ($row = mysqli_fetch_array($result2)) {
                                             ?>                                                    
                                                  <option value="
                                                  <?= $row["mashqlar_id"] ?>">
                                                  <?php echo $row['mashq_nomi']; ?>
                                                  </option>
                                                  <?php 
                                                  }
                                                  ?>                                                  
                                             </select>
                                             <label for="select2">2-mashqni tanlang</label>
                                             </div>

                                             <br>
                                             <div class="form-floating">                                             
                                             <select id="select3" class="form-select">
                                             <?php
                                             while ($row = mysqli_fetch_array($result3)) {
                                             ?>                                                    
                                                  <option value="
                                                  <?= $row["mashqlar_id"] ?>">
                                                  <?php echo $row['mashq_nomi']; ?>
                                                  </option>
                                                  <?php 
                                                  }
                                                  ?>                                                  
                                             </select>
                                             <label for="select3">3-mashqni tanlang</label>
                                             </div>

                                             <br>
                                             <div class="form-floating">                                             
                                             <select id="select4" class="form-select">
                                             <?php
                                             while ($row = mysqli_fetch_array($result4)) {
                                             ?>                                                    
                                                  <option value="
                                                  <?= $row["mashqlar_id"] ?>">
                                                  <?php echo $row['mashq_nomi']; ?>
                                                  </option>
                                                  <?php 
                                                  }
                                                  ?>                                                  
                                             </select>
                                             <label for="select4">4-mashqni tanlang</label>
                                             </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Yaratish</button>
                                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                             Qaytish
                                        </button>
                                        </div>
                                   </div>
                                   </div>
                              </div>
                              <!-- Modal Create table End -->

                              <!-- Modal Delete data Start -->
                              <div class="modal top fade" id="ModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                   <div class="modal-dialog">
                                   <div class="modal-content">
                                        <form action="delete_data.php" method="POST">
                                             <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Ma'lumotni o‘chirish</h5>
                                             <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                             <div class="modal-body">
                                                  <input type="hidden" name="delete_id" id="delete_id">
                                                  <label for="" name="fish_delete" id="fish_delete"></label>
                                                  <input type="text" name="fish_delete" id="fish_delete"> ma'lumotlarini o‘chirmoqchimisiz?
                                             </div>
                                             <div class="modal-footer">
                                             <button type="submit" name="delete_data" class="btn btn-danger">Ha</button>
                                             <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                                  Qaytish
                                             </button>
                                             </div>
                                        </form>
                                   </div>
                                   </div>
                              </div>
                              <!-- Modal Delete data End -->

                              <!-- Modal Natijalarni kiritish Start-->
                              <div class="modal top fade" id="ModalInsertNatija" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                   <div class="modal-dialog  ">
                                        <div class="modal-content">
                                             <form id="Natijakiritish" method="post" action="insert_natija_data.php">                                        
                                                  <div class="modal-header">
                                                       <h5 class="modal-title" id="exampleModalLabel">Natijalarni kiritish</h5>
                                                       <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body">

                                                       <input type="hidden" name="user_id" id="user_id">

                                                       <div class="form-outline">
                                                       <input type="text" name="input_fish" id="form12" class="form-control" />
                                                       <label class="form-label" for="form12">F.I.SH</label>                                             
                                                       </div>

                                                       <br>
                                                       <div class="form-outline">
                                                       <input type="date" name="input_tugilgan_kuni"  id="datepicker" class="form-control" />
                                                       <label class="form-label" for="date">Tug‘ilgan sanasi</label>                                             
                                                       </div>

                                                       <br>
                                                       <div class="form-outline">
                                                       <input type="text" name="input_natija1" id="form13" class="form-control" />
                                                       <label class="form-label" for="form13">2-mashq natijalarini kiriting</label>                                             
                                                       </div>

                                                       <br>
                                                       <div class="form-outline">
                                                       <input type="text" name="input_natija2" id="form13" class="form-control" />
                                                       <label class="form-label" for="form13">5b-mashq natijalarini kiriting</label>                                             
                                                       </div>

                                                       <br>
                                                       <div class="form-outline">
                                                       <input type="text" name="input_natija3" id="form13" class="form-control" />
                                                       <label class="form-label" for="form13">9-mashq natijalarini kiriting</label>                                             
                                                       </div>

                                                       <br>
                                                       <div class="form-outline">
                                                       <input type="text" name="input_natija4" id="form13" class="form-control" />
                                                       <label class="form-label" for="form13">25-mashq natijalarini kiriting</label>                                             
                                                       </div>                                                       
                                                  </div>
                                                  <div class="modal-footer">
                                                       <button type="submit" class="btn btn-success" name="insertdata">Kiritish</button>
                                                       <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Qaytish</button>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>
                              </div>
                              <!-- Modal Natijalarni kiritish End -->

                              <!-- Modal Pro versiya Start-->
                              <div class="modal top fade" id="PROClick" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                   <div class="modal-dialog modal-dialog-centered">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tahrirlash</h5>
                                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                              
                                             PRO versiya ustida amaliy ishlar olib borilmoqda. Yaqin kunlar ichida ishga tushiramiz. 
                                              
                                        </div>
                                        <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-primary">Saqlash</button> -->
                                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                             OK
                                        </button>
                                        </div>
                                   </div>
                                   </div>
                              </div>
                              <!-- Modal Pro versiya End -->


                         
                    </section>
                    </div>
               </section>
               <!-- </div> -->
               
          </div>
     </main>
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script
     type="text/javascript"
     src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
     ></script>

     <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#ModalEdit').modal('show');

                $tr = $(this).closest('tr');          

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#edit_id').val(data[0]);
                $('#fish').val(data[1]);
                $('#natija1').val(data[2]);
                $('#natija2').val(data[4]);
                $('#natija3').val(data[6]);
                $('#natija4').val(data[8]);
            });
        });
    </script>

     <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#ModalDelete').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);
                $('#fish_delete').val(data[1]);


            });
        });
    </script>

     <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>     
     <script type="text/javascript">
          $('#datatable').DataTable({});
     </script> -->
     <!-- <script type="text/javascript">
          $(document).on('submit', '$Natijakiritish', function(event){
               event.preventDefault();
               var fish = $('#input_fish').val();
               var tugilgan_kuni = $('#input_tugilgan_kuni').val();
               var natija1 = $('#input_natija1').val();
               var natija2 = $('#input_natija2').val();
               var natija3 = $('#input_natija3').val();
               var natija4 = $('#input_natija4').val();
               if(fish !='' && tugilgan_kuni !='' && natija1 !='' && natija2 !='' && natija3 !='' && natija4 !='')
               {
                    $.ajax({
                         url:"test_insert_data.php",
                         data:{fish:fish,tugilgan_kuni:tugilgan_kuni,natija1:natija1,natija2:natija2,natija3:natija3,natija4:natija4},
                         type:'post',
                         success:function(data)
                         {
                              var json = JSON.parse(data);
                              status json.status;
                              if(status=='success')
                              {
                                   table = $('datatable').DataTable();
                                   table.draw();
                                   alert('Malumotlar muvofaqqiyatli yuklandi');

                              }
                         }
                    });
               }
               else
               {
                    alert("Iltimos bo`sh kataklarni to`ldiring");
               }

          });
     </script> -->
</body>
<footer class="bg-light text-center text-lg-start fixed-bottom">
<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
© 2023 Copyright:
<a class="text-reset fw-bold" href="https://fizo.uz/">Fizo.uz</a>
| Barcha huquqlar himoyalangan.
</div>
<!-- Copyright -->
</footer>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>