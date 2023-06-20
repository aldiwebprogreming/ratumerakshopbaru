
<div class="content-wrapper mt-3">

  <div class="container">

    <div class="card">
      <div class="card-body">
        <h3 style="font-weight: bold;">Detail Order <i class="fas fa-shopping-basket"></i></h3>
        <hr>

        <div class="row">
          <div class="col-sm-6">

            <div class="card">
              <div class="card-header">
                <?php if($order['status_pembayaran'] == 0){ ?>
                  <h5 class="float-right text-danger" style="font-weight: bold;">
                    Belum lunas
                  </h5>
                <?php }else { ?>
                 <h5 class="float-right text-primary" style="font-weight: bold;">
                  Sudah lunas
                </h5>
              <?php } ?>
              <h5 class="text-primary">Data User <i class="fas fa-user"></i></h5>

            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <label>Nama User</label>
                <?php if ($order['type_order'] == 'website') { ?>
                  <?php $user = $this->db->get_where('tbl_register',['kode_user' => $order['kode_user']])->row_array(); ?>
                  <p><?= $user['name'] ?></p>

                <?php }else{
                  echo "<br>";
                  echo $order['kode_user'] ;

                }
                ?>

              </li>
              <li class="list-group-item">
                <label>No Whatsaap</label>
                <p><?= $order['wa'] ?></p>
              </li>
              <li class="list-group-item">
                <label>Via Order</label>
                <p><?= $order['type_order'] ?></p>
              </li>
              <li class="list-group-item">
                <label>Sistem Pengambilan</label>
                <p><?= $order['sistem_pengambilan'] ?></p>
              </li>
              <li class="list-group-item">
                <label>Tanggal Pengantaran/Pengambilan</label>
                <p><?= $order['tgl_pengantaran'] ?></p>
              </li>
              <li class="list-group-item">
                <label>Alamat Pengantaran</label>
                <p><?= $order['alamat_pengantaran'] ?></p>
              </li>

              <li class="list-group-item">
                <label>KTP</label>
                <p>
                  <?php 
                  if ($order['ktp'] == null) {
                    echo "KTP belum tersedia";
                  }else{ ?>

                    <img src="<?= base_url('assets/ktp/') ?><?= $order['ktp'] ?>" class="img-fluid" alt="Responsive image" style="height: 200px; width: 300px;">

                  <?php } ?>
                </p>
              </li>



              <?php 
              if ($order['sistem_pembayaran'] == 'cod') {

              }else{
               ?>

               <li class="list-group-item">
                <label>Bukti Pembayaran</label>

                <img src="<?= base_url('assets/bukti/') ?><?= $bukti['bukti_pembayaran'] ?>" class="img-fluid" alt="Responsive image">
              </li>

            <?php } ?>
          </ul>
        </div>


      </div>

      <div class="col-sm-6">

        <div class="card">
          <div class="card-body">
           Kode Order : <div class="float-right" style="font-weight:bold;"><?= $order['kode_order'] ?></div>
           <hr>
           <div class="row">
            <?php foreach ($detail_order as $data) { ?>
              <div class="col-sm-3">
                <?php 
                $prd = $this->db->get_where('tbl_produk',['kode_produk' => $data['kode_produk']])->row_array();
                ?>
                <img src="<?= base_url('assets/img/products/') ?><?= $prd['gambar'] ?>" alt="..." class="img-thumbnail" style="height: 100px;">
              </div>

              <div class="col-sm-9 mb-5">
                <?php $kategori = $this->db->get_where('tbl_kategori',['kode_kategori' => $data['kategori']])->row_array() ?>
                <div class="float-right"><?= $kategori['nama_kategori'] ?></div>
                <div style="font-weight: bold;"><?= $data['nama_produk'] ?></div>
                <hr>
                <label>Jumlah</label>
                <div class="float-right"><?= $data['qty'] ?></div>
                <hr>
                <label>Harga</label>
                <div class="float-right"><?=  "Rp " . number_format($data['harga'],0,',','.'); ?></div>
                <hr>
                <label>Total harga</label>
                <div class="float-right"><?=  "Rp " . number_format($data['total_harga'],0,',','.');  ?></div>
              </div>
            <?php } ?>
            <p style="font-weight:bold">Total pembayaran yang harus dilakukan adalah : <?= "Rp " . number_format($data['total_pembayaran'],0,',','.');  ?> </p>
          </div>

          <form method="post" action="<?= base_url('admin/ubah_status') ?>">
            <?php if ($order['status_pembayaran'] == 0) { ?>
              <input type="hidden" name="kode_order" value="<?= $order['kode_order'] ?>">
              <button class="btn btn-primary btn-block">Ubah status pembayaran</button>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
  </div>





</div>
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
