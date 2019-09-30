<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Example</title>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Pemrograman Web</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <img src="aliev.png" style="width:90%; padding-left:10%; padding-top:10%" class="center">
        <p style="text-align: center; font-size: 35px">ALIEV WISNU PRASETYO</p>
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
               <li class="nav-item">
                <a class="nav-link active" href="<?php echo "index.php"; ?>">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "form.php"; ?>">Tambah Data</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php 
            //mengecek apakah proses update dan delete sukses/gagal
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil di-update</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal di-update</div>';
              }

            }
           ?>
          <h2 style="margin: 30px 0 30px 0;">Mahasiswa</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Fullname</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>NPM</th>
                  <th>Address</th>
                  <th>Age</th>
                  <th>TTL</th>
                  <th>Number</th>
                  <th>Email</th>
                  <th>Dream</th>
                  <th>Motto</th>
                  <th>SD</th>
                  <th>SMP</th>
                  <th>SMA</th>
                  <th>UNIV</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM register";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['fullname'];  ?></td>
                    <td><?php echo $data['nama'];  ?></td>
                    <td><?php echo $data['gender'];  ?></td>
                    <td><?php echo $data['npm'];  ?></td>
                    <td><?php echo $data['addres'];  ?></td>
                    <td><?php echo $data['age'];  ?></td>
                    <td><?php echo $data['ttl'];  ?></td>
                    <td><?php echo $data['nomor'];  ?></td>
                    <td><?php echo $data['email'];  ?></td>
                    <td><?php echo $data['dream'];  ?></td>
                    <td><?php echo $data['motto'];  ?></td>
                    <td><?php echo $data['sd'];  ?></td>
                    <td><?php echo $data['smp'];  ?></td>
                    <td><?php echo $data['sma'];  ?></td>
                    <td><?php echo $data['univ'];  ?></td>
                    <!-- <td>
                      <a href="<?php echo "update.php?nrp=".$data['nrp']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "delete.php?nrp=".$data['nrp']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td> -->
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>

