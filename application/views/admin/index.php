


<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.print.css' rel='stylesheet' media='print' />


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-3">
  <!-- Content Header (Page header) -->

  <div class="container">

    <div class="card">
      <div class="card-body">
        <h3 style="font-weight: bold;">Dashboard <i class="fas fa-home"></i></h3>
        <hr>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Hello</strong>, Selamat datang di halaman admin ratumerakshop
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="row">



          <div class="col-sm-4">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="nof"><?= $produk ?></h3>

                <p>Data Produk</p>
              </div>
              <div class="icon">
                <i class="ion ion-user"></i>
              </div>
              <!-- <a href="<?= base_url('utama/item') ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

          <div class="col-sm-4">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3 id="nof"><?= $user ?><h3>

                  <p>Data User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-user"></i>
                </div>
                <!-- <a href="<?= base_url('utama/user') ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a> -->

              </div>
            </div>

            <div class="col-sm-4">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3 id="nof"><?= $order_hari_ini ?></h3>

                  <p>Data Order Hari Ini</p>
                </div>
                <div class="icon">
                  <i class="ion ion-user"></i>
                </div>
                <!-- <a href="<?= base_url('utama/role') ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>

            <div class="col-sm-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3 id="nof"><?= $order ?></h3>

                  <p>Data Order All</p>
                </div>
                <div class="icon">
                  <i class="ion ion-user"></i>
                </div>
                <!-- <a href="<?= base_url('utama/role') ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>


            


            <div class="col-sm-4">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3 id="nof">0</h3>

                  <p>Total Pemasukan Hari Ini</p>
                </div>
                <div class="icon">
                  <i class="ion ion-user"></i>
                </div>
                <!-- <a href="<?= base_url('utama/role') ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>


            <div class="col-sm-4">
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3 id="nof">0</h3>

                  <p>Total Pemasukan All</p>
                </div>
                <div class="icon">
                  <i class="ion ion-user"></i>
                </div>
                <!-- <a href="<?= base_url('utama/role') ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>

            <div class="col-sm-4">
              <div class="small-box bg-secondary">
                <div class="inner">
                  <h3 id="nof">0</h3>

                  <p>Data Admin</p>
                </div>
                <div class="icon">
                  <i class="ion ion-user"></i>
                </div>
                <!-- <a href="<?= base_url('utama/role') ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>

          </div>
        </div>


        <div class="container">


        </div>










        <!-- /.content -->
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->




  <!-- Main Footer -->
  <script src="http://momentjs.com/downloads/moment.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  <!-- kalender -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <script>
    $(document).ready(function(){

      $("#uang").keyup(function(){
        var uang_anda = $(this).val();
        var totalbayar = $(".totalbayar2").val();
        var hasil = uang_anda - totalbayar;
        $("#hasilkembalian").val(hasil);
      })    

    })
  </script>


  s