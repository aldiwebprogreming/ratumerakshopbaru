

<!-- Services -->

<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('shop/') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('shop/cart_detail') ?>">Keranjang</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('shop/order') ?>">List order</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
        </ol>

    </div>

</section>
<section class="products-grids trending pb-4 mt-5 mb-5">
    <div class="container">

        <div class="row">

            <div class="col-sm-6">
             <img src="<?= base_url('assets/img/brand/bayar.jpg') ?>" class="img-fluid" alt="Responsive image">
         </div>
         <div class="col-sm-6">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Order / Nomor Invoce</label>
                    <input type="text" class="form-control" readonly id="kodeorder" aria-describedby="emailHelp" placeholder="Enter code order" name="kode_order" value="<?= $kode_order ?>">
                    <div id="alert">
                      <!-- <small id="emailHelp" class="form-text text-muted">Masukan kode order anda untuk melihat jumlah pembayaran yang harus di lakukan </small>
                          <small class="text-danger"><?php echo form_error('kode_order'); ?></small> -->
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Pembayaran </label>
                    <input type="date" class="form-control" name="tgl_pembayaran">
                    <small class="text-danger"><?php echo form_error('tgl_pembayaran'); ?></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Bank Pengirim </label>
                    <input type="text" class="form-control" name="bank_pengirim" placeholder="BCA/BRI/BNI/Mandiri">
                    <small class="text-danger"><?php echo form_error('bank_pengirim'); ?></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Rekening Pengirim </label>
                    <input type="text" class="form-control" name="nama_rekening" placeholder="Jhon Saregar">
                    <small class="text-danger"><?php echo form_error('nama_rekenings'); ?></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pembayaran </label>
                    <input type="text" class="form-control" name="" placeholder="1000000" value="<?= "Rp " . number_format($order['jumlah_pembayaran'],0,',','.'); ?>" readonly style="font-weight: bold;">
                    <input type="hidden" name="jumlah_pembayaran" value="<?= $order['jumlah_pembayaran'] ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Pesan Tambahan</label>
                    <textarea class="form-control" name="pesan_tambahan" placeholder="Opsional"></textarea>

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Pembayaran</label>
                    <input type="file" name="bukti" class="form-control">

                </div>
                <button class="btn btn-primary btn-block">Konfirmasi pembayaran <i class="fa fa-cc-visa" aria-hidden="true"></i></button>

            </div>
        </form>
    </div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){

        $("#kodeorder").keyup(function(){

            var val = $(this).val();
            var url = "<?= base_url('shop/cekorder?kode=') ?>"+val;
            $("#alert").load(url);
        })
    })
</script>



