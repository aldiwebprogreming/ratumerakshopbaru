

<!-- Services -->
<section class="pt-5 pb-5" id="detket">
    <div class="container">

    </div>
</section>
<!-- End Services -->

<!-- Menu mobile -->
<section class="pt-5 pb-5" id="menumobile">
    <div class="container">
        <div class="row">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <strong>Hello, </strong>Pesan beras tanpa keluar rumah dengan ratumerakshop.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="col-4">
            <center>
                <a href="<?= base_url('shop/produk/premium-rice') ?>">
                    <img src="<?= base_url('assets/img/brand/rice.png') ?>" class="img-fluid" alt="Responsive image" style="height: 50px;">
                    <small>Premium</small>
                </a>
            </center>
        </div>
        <!-- <div class="col-3">
            <center>
               <a href="<?= base_url('shop/produk/medium-rice') ?>">
                <img src="<?= base_url('assets/img/brand/rice2.png') ?>" class="img-fluid" alt="Responsive image" style="height: 50px;">
                <small>Medium</small>
            </a>
        </center>
    </div> -->
   <!--  <div class="col-3">
        <center>
         <a href="<?= base_url('shop/produk/healthy-rice') ?>">
            <img src="<?= base_url('assets/img/brand/rice3.png') ?>" class="img-fluid" alt="Responsive image" style="height: 50px;">
            <small>Healthy</small>
        </a>
    </center>
</div>
<div class="col-3">
    <center>
     <a href="<?= base_url('shop/produk/glutinous-rice') ?>">
        <img src="<?= base_url('assets/img/brand/rice4.png') ?>" class="img-fluid" alt="Responsive image" style="height: 50px;">
        <small>Glutinous</small>
    </a>
</center>
</div> -->
<div class="col-4 mt-1">
    <center>
     <a href="<?= base_url('shop/produk/spesial-promo-product') ?>">
        <img src="<?= base_url('assets/img/brand/promo.png') ?>" class="img-fluid" alt="Responsive image" style="height: 50px;"><br>
        <small>Promo</small>
    </a>
</center>
</div>

<div class="col-4 mt-1">
    <center>
     <a target="_blank" href="https://ratumerak.id/reffral/member-69887">
        <img src="<?= base_url('assets/img/brand/aff.png') ?>" class="img-fluid" alt="Responsive image" style="height: 50px;"><br>
        <small>Afiliasi</small>
    </a>
</center>
</div>

            <!-- <div class="col-md-4">
                <div class="media">
                    <div class="iconbox iconmedium rounded-circle text-info mr-4">
                        <i class="fa fa-truck"></i>
                    </div>
                    <div class="media-body">
                        <h5>Fast Shipping</h5>
                        <p class="text-muted">
                            All you have to do is to bring your passion. We take care of the rest.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="iconbox iconmedium rounded-circle text-purple mr-4">
                        <i class="fa fa-credit-card-alt"></i>
                    </div>
                    <div class="media-body">
                        <h5>Online Payment</h5>
                        <p class="text-muted">
                            All you have to do is to bring your passion. We take care of the rest.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="iconbox iconmedium rounded-circle text-warning mr-4">
                        <i class="fa fa-refresh"></i>
                    </div>
                    <div class="media-body">
                        <h5>Free Return</h5>
                        <p class="text-muted">
                            All you have to do is to bring your passion. We take care of the rest.
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>



<section class="products-grids trending pb-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title float-left">
                    <h2>Keranjang anda</h2>
                </div>

                <div class="section-title float-right">
                    <a href="" class="btn btn-primary btn-sm">See all products <i class="fa fa-list"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-5" id="loadproduk">
            <div class="col-xl-8">
                <div class="card shadow">
                    <div class="card-body">

                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                        <div class="row"> 

                            <?php 
                            foreach ($order as $data) {
                                $produk = $this->db->get_where('tbl_produk_stok', ['id' => $data['id_produk']])->row_array();
                                ?>
                                <div class="col-xl-3 col-3">               

                                    <label><?= $produk['nama'] ?></label>

                                    <?php 
                                    $seller = $this->db->get_where('tbl_seller',['id' => $data['id_seller']])->row_array();
                                    ?>

                                    <img src="https://se-update.com/wp-content/uploads/2017/02/shop-icon.png" class="img-fluid rounded-circle shadow" alt="Responsive image" style="height: 20px;">
                                    <label class="text-success"><?= $seller['nama_toko'] ?></label>

                                </div>
                                <div class="col-xl-3 col-3">               
                                    <p><?= $data['harga'] ?></p>
                                </div>

                                <div class="col-xl-3 col-3">               
                                 <button class="btn btn-sm btn-success mr-0" id="min<?= $data['id'] ?>">-</button> <input type="" name="" id="qty<?= $data['id'] ?>" value="<?= $data['qty'] ?>" style="width: 30px; text-align:center;"> <button class="btn btn-sm btn-success ml-0" id="plus<?= $data['id'] ?>">+</button>
                             </div>

                             <div class="col-xl-3 col-3" id="total_harga<?= $data['id'] ?>">               
                                <p><?= $data['total_harga'] ?>  <label style="cursor: pointer;"><i class="fas fa-trash"></i></label></p>
                            </div>
                            <hr>





                            <script>
                               $(document).ready(function(){
                                $("#plus<?= $data['id'] ?>").click(function(){

                                 const qty = $("#qty<?= $data['id'] ?>").val();
                                 if (qty >= 0) {
                                  $("#min<?= $data['id'] ?>").removeClass('disabled');
                                  const qty = $("#qty<?= $data['id'] ?>").val();
                                  const tambah = Number(qty) + 1;
                                  $("#qty<?= $data['id'] ?>").val(tambah);
                                  const url = "<?= base_url('store/cart_update?id=') ?>"+<?= $data['id'] ?>+"&qty="+tambah;
                                  $("#total_harga<?= $data['id'] ?>").load(url);

                                  const url2 = "<?= base_url('store/total_pembayaran?id=') ?>"+<?= $data['id'] ?>;
                                  $("#total_pembayaran").load(url2);


                              }
                          });

                                $("#min<?= $data['id'] ?>").click(function(){
                                 const qty = $("#qty<?= $data['id'] ?>").val();
                                 if (qty <= 0) {
                                    $("#min<?= $data['id'] ?>").addClass('disabled');
                                }else{

                                    const qty = $("#qty<?= $data['id'] ?>").val();
                                    const kurang = Number(qty) - 1;
                                    $("#qty<?= $data['id'] ?>").val(kurang);
                                    const url = "<?= base_url('store/cart_update2?id=') ?>"+<?= $data['id'] ?>+"&qty="+kurang;
                                    $("#total_harga<?= $data['id'] ?>").load(url);

                            // const url2 = "<?= base_url('store/total_pembayaran?id=') ?>"+<?= $data['id'] ?>;
                            // $("#total_pembayaran").load(url2);


                        }
                    });


                            })
                        </script>


                    <?php } ?>
                </div>

            </div>

        </div>

        <div class="card shadow mt-3">
          <div class="card-body">
            <h5> Informasi pemesanan : </h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <label class="text-success" style="font-size: 20px;"><i class="fa-brands fa-whatsapp"></i></label>
            <label class="text-success" style="font-size: 20px"><i class="fa-brands fa-facebook"></i></label>
            <label class="text-success" style="font-size: 20px"><i class="fa-brands fa-instagram"></i></label>
            <label class="text-success" style="font-size: 20px"><i class="fa-brands fa-google"></i></label>
        </div>
    </div>

</div>

<div class="col-xl-4">
    <div class="card">
      <div class="card-body">
        <label class="text-success">Alamat pengantaran :</label><br>
        <?php if($alamat == false) { ?>
            <a href="#" data-toggle="modal" data-target="#exampleModalalamat">Alamat pengantaran kosong</a>
        <?php }else{ ?>
            <?= $getkab['name']. ', '. $getkec['name']. ', '. $getkel['name'] ?>
            <br><small><?= $alamat['alamat'] ?></small>

            <p class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalalamat">Tambah alamat baru</a></p>
        <?php } ?>
        <hr>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalalamat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah alamat pengantaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?= base_url('store/alamat_pengantaran') ?>">
                <div class="form-group">
                    <label>Kabupaten anda</label>
                    <select class="form-control" name="kab" id="kab" required>
                        <option>-- Pilih Kabupaten --</option>
                        <?php foreach ($kab as $name) { ?>
                            <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kecamatan anda</label>
                    <select class="form-control" name="kec" id="kec" required>
                        <option value="">-- Pilih Kecamatan --</option>

                    </select>
                </div>

                <div class="form-group">
                    <label>Kelurahan anda</label>
                    <select class="form-control" name="kel" id="kel" required>
                        <option value="">-- Pilih Kelurahan --</option>

                    </select>
                </div>

                <div class="form-group">
                    <label>Alamat lengkap</label>
                    <textarea class="form-control" name="alamat_lengkap" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Simpan alamat</button>
            </div>
        </form>
    </div>
</div>
</div>
<!-- End Modal -->

<label class="text-success">Pembayaran :</label><br>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    COD
</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Bank Transper
</label>
</div>
<hr>
<label class="text-success">Penerima</label>
<input type="text" name="penerima" value="<?= $user['name'] ?>" class="form-control" placeholder="Masukan nama penerima barang">
<hr>
<label class="text-success">Total Pembayaran : </label>
<h3 id="total_pembayaran">Rp. 500.000</h3>
<br>
<button class="btn btn-success btn-block">Checkout</button>
</div>
</div>
</div>
</div>


</div>
</div>








</div>
</div>
</div>

</div>
</div>
</div>
</div>  


<!-- Modal Login -->




<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ooop.. Login terlebih dahulu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form method="post" action="<?= base_url('store/act_login') ?>">
      <label for="exampleInputEmail1">Nomor Whatsapp</label>
      <div class="input-group mb-2 mr-sm-2">

        <div class="input-group-prepend">
            <div class="input-group-text">+62</div>
        </div>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nomor whatsapp" name="wa">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Masukan password">
    </div>
    <input type="hidden" name="id_produk" value="<?= $id ?>">
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-success btn-block mt-2">Login </button>

    <p class="text-center mt-3">Tidak punya akun ?<br> <a href="">Daftar sekarang</a></p>
</form>
</div>

</div>
</div>
</div>

<!-- ------------------ -->




</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){

        $("#kab").change(function(){
            const idkab = $(this).val();
            const url = "<?= base_url("store/get_kec?id=") ?>"+idkab;
            $("#kec").load(url);
        });

        $("#kec").change(function(){
            const idkec = $(this).val();
            const url = "<?= base_url("store/get_kel?id=") ?>"+idkec;
            $("#kel").load(url);

        })
    })
</script>



