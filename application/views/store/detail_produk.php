

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
                    <h2>Detail Produk</h2>
                </div>

                <div class="section-title float-right">
                    <a href="" class="btn btn-primary btn-sm">See all products <i class="fa fa-list"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-5" id="loadproduk">

            <div class="col-xl-4 shadow" style="border-radius: 20px;">
               <div style="height: 30px; width: 85px; background-color: orange;  color: black; position: absolute; top:0px; border-radius: 14px;">
                <p class="mx-2" style="font-weight: bold;">Tersedia</p>
            </div>
            <img src="<?= base_url('') ?>/assets/img/products/produkratumerak.png" class="img-fluid" alt="Responsive image">
        </div>

        <div class="col-xl-4">

            <div class="card">
              <div class="card-header">
                <i class="fas fa-bowl-rice"></i> <?= $produk['nama'] ?>
            </div>
            <div class="card-body">
                <h5 class="text-warning">BERAS PREMIUM</h5>
                <p class="card-text">Beras Premium yang yang berkualitas Pulen, Wangi, dan tidak Bau, di produksi tanpa zat pemutih dan pewangi</p>
                <p class="text-center" style="font-weight: bold;"><?= $produk['berat'] ?>Kg (1 SAK) | Rp 130.000 <br> <small class="text-success"><a href="" class="text-success"><i class="fas fa-store"></i> <?= ucwords($seller['nama_toko']) ?> Store </a></small></p>
                <center>
                    <button class="btn btn-success mr-3" id="min">-</button> <input type="text" name="" id="qty" class="text-center" value="0" style="width: 80px;"> 
                    <?php if ($this->session->name == true) {
                       ?>
                       <button class="btn btn-success ml-3" id="plus">+</button>
                   <?php }else{ ?>
                    <button type="button" class="btn btn-success ml-3" data-toggle="modal" data-target="#exampleModalCenter">
                     +
                 </button>

             <?php } ?>
         </center>
     </div>

 </div>
</div>





<div class="col-xl-4">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-cart-shopping"></i> Cart Customer
    </div>
    <div class="card-body" id="cartorder">

        <?php 
        if ($listcart == false) {
         ?>
         <h4 class="text-center text-success">{ NO ORDER } </h4>
         <center>
            <a href="<?= base_url('store/') ?>">Back Home To Order ></a>
        </center>

    <?php }else{ ?>
     <form method="post" action="<?= base_url('store/add_order') ?>">

        <div class="row">
            <?php foreach ($listcart as $data) { ?>
                <div class="col-xl-6">
                    <label><?= $data['nama_produk'] ?></label>
                </div>

                <div class="col-xl-3">
                    <label><?= $data['qty'] ?> QTY</label>
                </div>

                <div class="col-xl-3">
                    <a class="btn btn-success btn-sm" id="hapus<?= $data['id'] ?>" style="cursor: pointer;"><i class="fas fa-trash" style="color: white;"></i></a>
                </div>


                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script>

                    $("#hapus<?= $data['id'] ?>").click(function(){
                       const url = "<?= base_url('store/hapuscart?id=') ?>"+<?= $data['id'] ?>;
                       $("#cartorder").load(url);
                   })
               </script>


               <input type="hidden" name="kode_order[]" value="<?= $data['kode_order'] ?>">
               <input type="hidden" name="id_produk[]" value="<?= $data['id_produk'] ?>">
               <input type="hidden" name="berat[]" value="<?= $data['berat'] ?>">
               <input type="hidden" name="qty[]" value="<?= $data['qty'] ?>">
               <input type="hidden" name="harga[]" value="<?= $data['harga'] ?>">
               <input type="hidden" name="total_harga[]" value="<?= $data['total_harga'] ?>">
               <input type="hidden" name="id_seller[]" value="<?= $data['id_seller'] ?>">



           <?php } ?>

       </div>
       <div class="row">
        <div class="col-xl-6">
            <h5>Total harga </h5>
        </div>
        <div class="col-xl-6">
            <h5><?= $totalharga['total_harga'] ?> </h5>
        </div>
    </div>


<?php } ?>
<!-- 
    <a href="" class="btn btn-success btn-block">Back to product</a> -->
    <button type="submit" class="btn btn-success btn-block">Add to cart</button>
</form>
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
        $("#plus").click(function(){
            const qty = $("#qty").val();
            if (qty >= 0) {

                $("#min").removeClass('disabled');
                const tambah =  Number(qty) + 1;
                $("#qty").val(tambah);
                
                const url = "<?= base_url('store/cart?id=') ?>"+<?= $produk['id'] ?>+"&idseller="+<?= $seller['id'] ?>+"&qty="+tambah+"&kode="+"<?= $kode ?>";
                $("#cartorder").load(url);

            }

        });


        $("#min").click(function(){
            const qty = $("#qty").val();
            if (qty <= 0) {
                $("#min").addClass('disabled');
            }else{

                const kurang = Number(qty) - 1;
                $("#qty").val(kurang);

                const kodeorder = "<?= $kode ?>";
                const url = "<?= base_url('store/cartmin?kode=') ?>"+"<?= $kode ?>"+"&qty="+kurang; 
                $("#cartorder").load(url)

            }
        });


    })
</script>




