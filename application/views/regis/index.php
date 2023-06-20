<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registrasi</title>
  </head>
  <body>


    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3">
              <img src="<?= base_url('assets/img/benner.png') ?>"
              class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
              alt="Sample photo">
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-5 text-center text-success">REGISTRASI SEKARANG</h3>

                <form class="px-md-2" method="post" action="<?= base_url('Registrasi/add_regis') ?>">

                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" id="form3Example1q" name="nama" class="form-control" required />
                  </div>


                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jk" required>
                      <option value="">-- Pilih Jenis Kelamin --</option>
                      <option>Laki - Laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kabupaten</label>
                    <select class="form-control" name="kab" id="kabseller" required>
                      <option value="">-- Pilih Kabupaten --</option>
                      <?php 
                        foreach ($kab as $kab2) {
                        ?>   
                        <option value="<?= $kab2['id'] ?>"><?= $kab2['name'] ?></option>
                        <?php } ?>                 
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Kecamatan</label>
                      <select class="form-control" name="kec" id="kecseller" required>
                        <option value="">-- Pilih Kecamatan --</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Kelurahan</label>
                      <select class="form-control" name="kel" id="kelseller" required>
                        <option value="">-- Pilih Kelurahan --</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Alamat Lengkap</label>
                      <textarea class="form-control" name="alamat" required></textarea>
                    </div>



                    <div class="form-group">
                      <label>Alamat Toko</label>
                      <textarea class="form-control" name="alamat_toko" required></textarea>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Toko</label>
                      <input type="text" name="nama_toko" required class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Whatsapp</label>
                      <input type="text" name="no_wa" required class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Nomor KTP</label>
                      <input type="number" name="nik" class="form-control" required minlength="16">
                    </div>



                    <div class="form-group">
                      <label>Jumlah Deposit</label>
                      <select class="form-control" name="deposit" required>
                        <option value="">-- Pilih Jumlah Deposit --</option>
                        <option>3.000.000</option>
                        <option>4.000.000</option>
                        <option>5.000.000</option>
                        <option>6.000.000</option>
                        <option>7.000.000</option>
                        <option>8.000.000</option>
                        <option>9.000.000</option>
                        <option>10.000.000</option>
                      </select>
                    </div>



                    <button type="submit" class="btn btn-success btn-lg btn-block mb-1">Registrasi</button>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="<?php echo base_url() ?>assets/alert.js"></script>
      <?php echo "<script>".$this->session->flashdata('message')."</script>"?> 

      <script src="http://momentjs.com/downloads/moment.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.js'></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 

      <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

      <!-- kalender -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

      <script src="<?= base_url() ?>assets_admin/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="<?= base_url() ?>assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE -->
      <script src="<?= base_url() ?>assets_admin/dist/js/adminlte.js"></script>

      <!-- OPTIONAL SCRIPTS -->
      <script src="<?= base_url() ?>assets_admin/plugins/chart.js/Chart.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?= base_url() ?>assets_admin/dist/js/demo.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="<?= base_url() ?>assets_admin/dist/js/pages/dashboard3.js"></script>

      <script src="<?= base_url() ?>assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="<?= base_url() ?>assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="<?= base_url() ?>assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="<?php echo base_url() ?>assets_admin/alert.js"></script>
      <script src="<?php echo base_url() ?>assets_admin/plugins/jquery-knob/jquery.knob.min.js"></script>
      <script src="<?php echo base_url() ?>assets_admin/plugins/moment/moment.min.js"></script>
      <script src="<?php echo base_url() ?>assets_admin/plugins/daterangepicker/daterangepicker.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="<?php echo base_url() ?>assets_admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>




      <script>
        $("#kabseller").change(function(){
          var idkab = $(this).val();
          const url = "<?= base_url('admin/get_kecseller?id=') ?>"+idkab;
          $("#kecseller").load(url);
        });

      </script>

      <script>
       $("#kecseller").change(function(){
        var idkec = $(this).val();
        const url2 = "<?= base_url('admin/get_kelseller?id=') ?>"+idkec;
        $("#kelseller").load(url2);
      });
    </script>

  </body>
  </html>