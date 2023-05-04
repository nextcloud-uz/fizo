<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

include 'db_conn.php';
$result1 = mysqli_query($conn, "SELECT * FROM mashqlar");
$result2 = mysqli_query($conn, "SELECT * FROM mashqlar");
$result3 = mysqli_query($conn, "SELECT * FROM mashqlar");
$result4 = mysqli_query($conn, "SELECT * FROM mashqlar");
$resuserbolinma = mysqli_query($conn, "SELECT * FROM userbolinma");

$row_bolinmanomi = mysqli_fetch_row(mysqli_query($conn, "SELECT bolinmanomi, `1-mashq`, `2-mashq`, `3-mashq`, `4-mashq` FROM users WHERE `id` =".$_SESSION['id']));
$bolinmanomi = $row_bolinmanomi[0];

$mashqnomi1 = mysqli_fetch_row(mysqli_query($conn, "SELECT `mashq_nomi`, mashq_server_nomi FROM mashqlar WHERE `mashqlar_id` = '$row_bolinmanomi[1]'"));
$mashqnomi2 = mysqli_fetch_row(mysqli_query($conn, "SELECT `mashq_nomi`, mashq_server_nomi FROM mashqlar WHERE `mashqlar_id` = '$row_bolinmanomi[2]'"));
$mashqnomi3 = mysqli_fetch_row(mysqli_query($conn, "SELECT `mashq_nomi`, mashq_server_nomi FROM mashqlar WHERE `mashqlar_id` = '$row_bolinmanomi[3]'"));
$mashqnomi4 = mysqli_fetch_row(mysqli_query($conn, "SELECT `mashq_nomi`, mashq_server_nomi FROM mashqlar WHERE `mashqlar_id` = '$row_bolinmanomi[4]'"));

$resuser401 = mysqli_query($conn, "SELECT * FROM user401 WHERE `bolinma_nomi` = '$row_bolinmanomi[0]'");

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
                              <button type="button" class="btn btn-primary bg-gradient ms-1">
                              <a href="logout.php" class="chiqish">Chiqish</a>
                              </button>
                         </div>
               </div>
          </nav>


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

               <section class="pb-4">
                    <!-- <div class="bg-white border rounded-2"> -->
                    <?php
                    if(empty($bolinmanomi) === true){
                    ?>
                    <!-- Agar bo`linma nomi kiritilmagan bo`lsa ushbu qator ishlaydi. Ya'ni jadval tuzilmagan bo`lsa -->
                    <!-- <div class="d-flex justify-content-center dobavit"> -->
                    <div class="container divroyxat p-0">
                         <div class="alert alert-success royxat">
                              <div class="d-flex justify-content-center">
                              <h4>Juda ham yaxshi!</h4>
                              </div>

                              <div class="d-flex justify-content-center dobavit">
                              <p class="royxat">Siz tomondan ro‘yxat shakllantirilmagan. Ro‘yxat tuzamizmi?</p>
                              </div>

                              <hr>

                              <div class="d-flex justify-content-center dobavit">
                                   <button type="button" class="btn btn-success bg-gradient" data-bs-toggle="modal" data-bs-target="#ModalCreateTable">Ro'yxat tuzish</button>
                              </div>

                              </div>
                         </div>

                    </div>


                    <!-- Modal Create Table Start -->
                    <div class="modal fade" id="ModalCreateTable" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <form id="Jadvalyaratish" method="post" action="create_table.php">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ro`yxatni shakllantirish</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>

                          <div class="modal-body">

                            <div class="input-group mb-3">
                              <input type="text" name="input_bolinmanomi" class="form-control" placeholder="Bo`linmaning nomlanishi" aria-label="bolinmanomi" aria-describedby="basic-addon1">
                            </div>

                            <select name="input_mashq1" class="form-select" aria-label="Default select example">
                              <option selected>1-mashqni tanlang</option>
                              <?php
                              while ($row = mysqli_fetch_array($result1)) {
                              ?>
                              <option value="<?= $row["mashqlar_id"] ?>"><?php echo $row['mashq_nomi']; ?></option>
                              <?php
                              }
                              ?>
                            </select>

                            <br>

                            <select name="input_mashq2" class="form-select" aria-label="Default select example">
                              <option selected>2-mashqni tanlang</option>
                              <?php
                              while ($row = mysqli_fetch_array($result2)) {
                              ?>
                              <option value="<?= $row["mashqlar_id"] ?>"><?php echo $row['mashq_nomi']; ?></option>
                              <?php
                              }
                              ?>
                            </select>

                            <br>

                            <select name="input_mashq3" class="form-select" aria-label="Default select example">
                              <option selected>3-mashqni tanlang</option>
                              <?php
                              while ($row = mysqli_fetch_array($result3)) {
                              ?>
                              <option value="<?= $row["mashqlar_id"] ?>"><?php echo $row['mashq_nomi']; ?></option>
                              <?php
                              }
                              ?>
                            </select>

                            <br>

                            <select name="input_mashq4" class="form-select" aria-label="Default select example">
                              <option selected>4-mashqni tanlang</option>
                              <?php
                              while ($row = mysqli_fetch_array($result4)) {
                              ?>
                              <option value="<?= $row["mashqlar_id"] ?>"><?php echo $row['mashq_nomi']; ?></option>
                              <?php
                              }
                              ?>
                            </select>

                          </div>
                          <div class="modal-footer">
                            <button type="submit" name="createtable" class="btn btn-primary">Yaratish</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                 Qaytish
                            </button>
                          </div>
                        </from>
                        </div>
                      </div>
                    </div>

                    <!-- Modal Create table End -->

                    <?php
                    } else {
                    ?>

                    <div class="bg-white border rounded-2">
                    <button type="button" class="btn btn-outline-success m-2" data-mdb-ripple-color="dark" data-bs-toggle="modal" data-bs-target="#ModalInsertNatija"><i class="fas fa-plus-circle me-2"></i>Natijalarni kiritish</button>
                    <button type="button" class="btn btn-outline-primary m-2" data-mdb-ripple-color="dark"><i class="fas fa-download me-2"></i>Exceldagi natijalarni yuklash</button>
                    <section class="w-100 p-2 text-center table-responsive">

                         <table id="datatable" class="table table-bordered m-0">

                                   <thead>
                                        <tr class="table-active">
                                        <?php
                                        while ($row = mysqli_fetch_array($resuserbolinma)) {
                                        ?>
                                             <th colspan="14">
                                                  <p class="bolinma_nomi"><?php echo $row_bolinmanomi[0]; ?></p>
                                             </th>
                                        <?php
                                        }
                                        ?>
                                        </tr>

                                        <tr>
                                             <th rowspan="3">T/R</th>
                                             <th rowspan="3">F.I.SH</th>
                                             <th colspan="8">Mashqlar nomlanishi</th>
                                             <th rowspan="3">Umumiy <br> ball</th>
                                             <th rowspan="3">Baho</th>
                                             <th rowspan="3">Amallar</th>
                                        </tr>

                                        <tr>
                                             <th colspan="2"><?php echo $mashqnomi1[0] ?></th>
                                             <th colspan="2"><?php echo $mashqnomi2[0] ?></th>
                                             <th colspan="2"><?php echo $mashqnomi3[0] ?></th>
                                             <th colspan="2"><?php echo $mashqnomi4[0] ?></th>
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
                                             <td><p class="baho baho5"><?php echo $row['baho']; ?></p></td>
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
                              <div class="modal top fade" id="ModalEdit" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
                                   <div class="modal-dialog">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tahrirlash</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="edit_data.php" method="POST">
                                             <div class="modal-body">

                                                  <input type="hidden" name="edit_id" id="edit_id">

                                                  <div class="input-group mb-3">
                                                  <input type="text" id="fish" name="fish" class="form-control" placeholder="F.I.SH" aria-label="fish" aria-describedby="basic-addon1">
                                                  </div>

                                                  <div class="input-group mb-3">
                                                  <input type="text" id="natija1" name="natija1" class="form-control" placeholder="1-mashq natijasini kiriting" aria-label="mashq" aria-describedby="basic-addon1">
                                                  </div>

                                                  <div class="input-group mb-3">
                                                  <input type="text" id="natija2" name="natija2" class="form-control" placeholder="2-mashq natijasini kiriting" aria-label="mashq" aria-describedby="basic-addon1">
                                                  </div>

                                                  <div class="input-group mb-3">
                                                  <input type="text" id="natija3" name="natija3" class="form-control" placeholder="3-mashq natijasini kiriting" aria-label="mashq" aria-describedby="basic-addon1">
                                                  </div>

                                                  <div class="input-group mb-3">
                                                  <input type="text" id="natija4" name="natija4" class="form-control" placeholder="4-mashq natijasini kiriting" aria-label="mashq" aria-describedby="basic-addon1">
                                                  </div>

                                             </div>
                                             <div class="modal-footer">
                                                  <button type="submit" name="edit_data" class="btn btn-primary">Saqlash</button>
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Qaytish</button>
                                             </div>
                                        </form>
                                   </div>
                                   </div>
                              </div>
                              <!-- Modal Edit data End -->



                              <!-- Modal Delete data Start -->
                              <div class="modal top fade" id="ModalDelete" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
                                   <div class="modal-dialog">
                                   <div class="modal-content">
                                        <form action="delete_data.php" method="POST">
                                             <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Ma'lumotni o‘chirish</h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                             <div class="modal-body">
                                                  <input type="hidden" name="delete_id" id="delete_id">
                                                  <!-- <label for="" name="fish_delete" id="fish_delete"></label> -->
                                                  Ushbu qator ma'lumotlarini o‘chirmoqchimisiz?
                                             </div>
                                             <div class="modal-footer">
                                             <button type="submit" name="delete_data" class="btn btn-danger">Ha</button>
                                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                  Qaytish
                                             </button>
                                             </div>
                                        </form>
                                   </div>
                                   </div>
                              </div>
                              <!-- Modal Delete data End -->

                              <!-- Modal Natijalarni kiritish Start-->
                              <div class="modal top fade" id="ModalInsertNatija" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
                                   <div class="modal-dialog  ">
                                        <div class="modal-content">
                                             <form id="Natijakiritish" method="post" action="insert_natija_data.php">
                                                  <div class="modal-header">
                                                       <h5 class="modal-title" id="exampleModalLabel">Natijalarni kiritish</h5>
                                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body">

                                                       <input type="hidden" name="user_id" id="user_id">

                                                       <div class="input-group mb-3">
                                                       <input type="text" name="input_fish" id="form12" class="form-control" placeholder="F.I.SH" aria-label="fish" aria-describedby="basic-addon1">
                                                       </div>

                                                       <div class="input-group mb-3">
                                                       <input type="date" name="input_tugilgan_kuni"  id="date" placeholder="Tug`ilgan yili" class="form-control" />
                                                       <!-- <label class="form-label" for="date">Tug‘ilgan sanasi</label> -->
                                                       </div>

                                                       <div class="input-group mb-3">
                                                       <input type="text" name="input_natija1" id="mashq" class="form-control" placeholder="2-mashq natijalarini kiriting" aria-label="fish" aria-describedby="basic-addon1">
                                                       </div>

                                                       <div class="input-group mb-3">
                                                       <input type="text" name="input_natija2" id="mashq" class="form-control" placeholder="5b-mashq natijalarini kiriting" aria-label="fish" aria-describedby="basic-addon1">
                                                       </div>

                                                       <div class="input-group mb-3">
                                                       <input type="text" name="input_natija3" id="mashq" class="form-control" placeholder="9-mashq natijalarini kiriting" aria-label="fish" aria-describedby="basic-addon1">
                                                       </div>

                                                       <div class="input-group mb-3">
                                                       <input type="text" name="input_natija4" id="mashq" class="form-control" placeholder="25-mashq natijalarini kiriting" aria-label="fish" aria-describedby="basic-addon1">
                                                       </div>

                                                  </div>
                                                  <div class="modal-footer">
                                                       <button type="submit" class="btn btn-success" name="insertdata">Kiritish</button>
                                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Qaytish</button>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>
                              </div>
                              <!-- Modal Natijalarni kiritish End -->





                    </section>
                    </div>


                    <?php
                    }
                     ?>

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


               </section>

          </div>

     </main>

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

</body>
<footer class="bg-light text-center text-lg-start fixed-bottom">
<!-- Copyright -->
<div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.025);">
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
