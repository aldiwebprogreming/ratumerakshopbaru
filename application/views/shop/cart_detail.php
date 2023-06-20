

<!-- Services -->

<section class="products-grids trending pb-4 mt-5 mb-5">
    <div class="container">
     <?php if($cart == false){ ?>
        <h4 class="text-center mb-2 text-primary" style="font-weight: bold;">Tidak ada item pada keranjang <br>( 404 ) </h4><br>
        <center>
            <a href="<?= base_url('shop/') ?>" class="btn btn-primary">Mulai Berbelanja <i class="fa fa-shopping-bag"></i> </a>
        </center>
        <!--  <img src="<?= base_url('assets/img/brand/logo.png') ?>" class="img-fluid" alt="Responsive image"> -->
        <br>
    <?php }else{ ?>
<!-- 
        <div class="alert alert-dark" role="alert">
          Silahkan isi form data diri dengan data yang sebenar-benarnya, karena alamat pengiriman akan di kirimkan berdasarkan data yang anda isikan.

          Batas akhir pembayaran pesanan adalah 1 x 24 jam dari waktu pesan. Jika tidak dilakukan pembayaran dengan batas waktu tersebut maka pesanan akan digagalkan secara otomatis.

          Pembayaran hanya dilakukan melalui rekening
          ini : <label style="color: orange; font-weight: bold;">BCA 647577111
          a/n PT SINAR ANEKA NIAGA.</label>
      </div> -->
      <form method="post" action="<?= base_url('shop/checkout') ?>" enctype="multipart/form-data">
          <div class="row">


            <div class="col-sm-6">
                <div class="form-group" style="display: none;">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" value="<?= $this->session->email ?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Example@mail.com" required>
                    
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">No Whatsapp</label>
                    <input type="number" name="wa" class="form-control"  placeholder="0811" required="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Sistem Pengambilan Barang</label>
                    <select class="form-control" name="sistem_pengambilan" id="selectpengantaran" required>
                        <option value="">-- Pilih Sistem Pengambilan Barang -- </option>
                        <option>Sistem Jemput</option>
                        <option>Sistem Antar</option>
                    </select>

                    <a href="#" id="readjemput"  data-toggle="modal" data-target="#exampleModaljemput" style="display: none;">
                      Baca aturan untuk sistem penjemputan
                  </a>

                  <a href="#" id="readantar"  data-toggle="modal" data-target="#exampleModalantar" style="display: none;">
                      Baca aturan untuk sistem antar
                  </a>

                 <!--  <a href="#" id="readjemput" class="mt-5" style="display: none;">Baca aturan untuk sistem penjemputan</a>
                  <a href="#" id="readantar" class="mt-5" style="display: none;">Baca aturan untuk sistem pengataran</a> -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModaljemput" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Aturan sistem jemput</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                       Untuk sistem jemput anda diharuskan untuk mengambil pesanan anda di alamat kantor ratumerakshop yang telah tertera di form alamat penjemputan, untuk sistem jemput ada dua metode pembarayan yaitu sistem via bank transper dan sistem cod, untuk via bank transper pesanan dapat diambil jika anda sudah melampirkan/upload bukti pembayaran di website kami sesuai dengan jumlah yang telah di tentukan.
                   </div>
                   <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModalantar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Aturan sistem antar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                 Untuk sistem antar kurir kami yang akan mengantar pesanan anda sesuai orderan anda dan sesuai alamat pengantaran yang telah anda masukan, untuk sistem antar ada dua metode pembarayan yaitu sistem via bank transper dan sistem cod, untuk via bank transper pesanan akan di antar jika anda sudah melampirkan/upload bukti pembayaran di website kami sesuai dengan jumlah yang telah di tentukan.
             </div>
             <div class="modal-footer">
           <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
    </div>
</div>
</div>




</div>



<!-- <div class="form-group" id="filtertgl" style="display: none;">
    <label for="exampleInputEmail1" id="jemput">Tgl Penjemputan</label>
    <input type="date" name="tgl_pengantaran" class="form-control" required="">
</div>
-->


<div class="form-group" id="alamat" style="display: none;">
    <label for="exampleInputEmail1">Alamat Pengantaran</label>
    <textarea class="form-control" placeholder="Kota medan kecamatan medan" name="alamat"></textarea>
    <small id="emailHelp" class="form-text text-muted">Masukan alamat lengkap pengataran anda.</small>
</div>

<div class="form-group" id="alamat_jemput" style="display: none;">
    <label for="exampleInputEmail1">Alamat Penjemputan</label>
    <textarea class="form-control" placeholder="Kota medan kecamatan medan" name="alamat_jemput" readonly>Jl. Setia Ujung No.38, Puji Mulyo, Kec. Sunggal, Kabupaten Deli Serdang, Sumatera Utara 20351</textarea>
    <small id="emailHelp" class="form-text text-muted">Alamat penjemputan sudah tertera di google maps dengan kata kunci PT.sinar aneka niaga.</small>
</div>


<div class="form-group">
    <label class="label">Upload Foto KTP</label>
    <div>
        <input type="file" name="ktp" class="" id="photo" required>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfA4HU79bnFZF2GXuPt-G-8aW-lA7HtIvWKlrbPdvRqZUsoQSzn_K9II6tX1Xff_5A_Bo&usqp=CAU" alt="..." class="img-thumbnail" id="imgPreview" style="height: 200px; width: 300px;">
    </div>
</div>

<label class="label">Sistem Pembayaran</label><br>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" required="" id="inlineRadio2" value="cod">
  <label class="form-check-label" for="inlineRadio2">Via Cash On Delivery (COD)</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" required="" id="inlineRadio1" value="transper">
  <label class="form-check-label" for="inlineRadio1">Via Bank Transfer</label>
</div>


<!-- <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="pembayaran1" id="inlineRadio1" value="transper">
    <label class="form-check-label" for="inlineRadio1">Via Bank Transper</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="pembayaran2" id="inlineRadio2" value="cod">
  <label class="form-check-label" for="inlineRadio2">Via Cash On Delivery (COD)</label>
</div> -->


</div>
<div class="col-sm-6">
    <br>
    <div class="row">

        <?php foreach($cart as $data){ ?>
            <div class="col-sm-3 col-3">
                <img src="<?= base_url('') ?>/assets/img/products/<?= $data['gambar'] ?>" class="img-fluid" style="height: 100px;">
            </div>
            <div class="col-sm-9 col-9">
                <p  style="font-weight: bold;"><?= $data['name'] ?></p>
                <?php 
                $kategori = $this->db->get_where('tbl_kategori',['kode_kategori' => $data['kategori']])->row_array();
                ?>
                <p style="font-style: italic;"><?= $kategori['nama_kategori'] ?></p>
                <p>Harga / Item : <?= "Rp " . number_format($data['price'],0,',','.') ?></p>
                <p>Qty : 
                    <select id="qty<?= $data['id'] ?>" name="qty[]">
                        <option><?= $data['qty'] ?></option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </p>
                <p>Total Harga : <label style="font-weight: bold;" id="total<?= $data['id'] ?>"><?= "Rp " . number_format($data['price'] * $data['qty'],0,',','.'); ?></label></p>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <script>
                var total_harga = 0;
            </script>
            <script>
                $(document).ready(function(){


                    $("#qty<?= $data['id'] ?>").change(function(){
                        var qty = $(this).val();
                        var harga = "<?= $data['price'] ?>";
                        var total = harga * qty;
                        const numb = total;
                        const format = numb.toString().split('').reverse().join('');
                        const convert = format.match(/\d{1,3}/g);
                        const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('');

                        $("#total<?= $data['id'] ?>").html(rupiah);
                        var rowid = "<?= $data['rowid'] ?>";
                        var url = "<?= base_url('shop/totalpembayaran?id=') ?>"+rowid+"&totalharga="+total;
                        $("#totalpembayaran").load(url);
                    })

                })
            </script>
            <input type="hidden" name="produk[]" value="<?= $data['name'] ?>">
            <input type="hidden" name="kode_produk[]" value="<?= $data['id'] ?>">
            <input type="hidden" name="kategori[]" value="<?= $data['kategori'] ?>">
            <input type="hidden" name="harga[]" value="<?= $data['price'] ?>">
            <!--  <input type="hidden" name="qty[]" value="<?= $data['qty'] ?>"> -->
        <?php } ?>
    </div>

    <?php 
    $totalharga = 0;
    foreach ($cart as $total) {
        $harga = $total['price'] * $total['qty'];
        $totalharga += $harga;
    }
    ?>



    <p  style="font-weight: bold;">Total pembayaran : <label id="totalpembayaran"><?= "Rp " . number_format($totalharga,0,',','.'); ?></label> </p>



    <?php if ($this->session->email == null) { ?>

      <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModallogin">
        Checkout <i class="fa fa-credit-card"></i>
    </button>
    <a href="<?= base_url('shop/') ?>" class="btn btn-success btn-block mb-4">Belanja Lagi <i class="fa fa-shopping-cart"></i> </a>
<?php } else{ ?>
    <button type="submit" class="btn btn-primary btn-block" id="check">Checkout <i class="fa fa-credit-card" id="kredit"></i><!-- <i class="fas fa-spinner fa-pulse" id="loading" style="display: none;"> --></i></button>
    <a href="<?= base_url('shop/') ?>" class="btn btn-success btn-block mb-4">Belanja Lagi <i class="fa fa-shopping-cart"></i> </a>
<?php } ?>

</div>

<?php } ?>
</div>

</form>


</div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form method="post" action="<?= base_url('shop/act_login') ?>">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required>
    </div>
    <!-- <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <p class="float-left">Belum punya akun ? <a href="<?=base_url('auth/register') ?>">Daftar sekarang</a></p>
    

</div>
<div class="modal-footer">

    <button type="submit" class="btn btn-primary btn-block ">Login <i class="fa fa-user"></i></button>
</div>
</form>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){

        $("#selectpengantaran").change(function(){
            var val = $(this).val();
            if (val == 'Sistem Jemput') {

               $("#alamat").hide();
               $("#alamat_jemput").show();

               $("#readjemput").show();
               $("#readantar").hide();

               $("#filtertgl").show();


           }else if(val == 'Sistem Antar'){

            $("#alamat").show();
            $("#alamat_jemput").hide();

            $("#readjemput").hide();
            $("#readantar").show();

            $("#filtertgl").hide();
        }else{


          $("#readjemput").hide();
          $("#readantar").hide();

          $("#filtertgl").hide();


      }
  })

    })
</script>

<script>

    $(document).ready(()=>{
      $('#photo').change(function(){
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgPreview').attr('src', event.target.result);
        }
        reader.readAsDataURL(file);
    }
});
  });

</script>

<!-- <script>
    $(document).ready(function(){
        $("#check").click(function(){

            $("#kredit").hide();
            $("#loading").show();
        })
    })
</script> -->



