SLIDER
------------------------------------------->
<section class="slider-section pt-4 pb-4">
    <div class="container">
        <div class="slider-inner">
            <div class="row">
                <!-- <div class="col-md-3">
                    <nav class="nav-category" id="navkategori">
                        <h2>Categories</h2>
                        <ul class="menu-category">
                            <li><a href="<?= base_url('shop/produk/premium-rice') ?>">Premium Rice</a></li>
                            <li><a href="<?= base_url('shop/produk/medium-rice') ?>">Medium Rice</a></li>
                            <li><a href="<?= base_url('shop/produk/healthy-rice') ?>">Healthy Rice</a></li>
                            <li><a href="<?= base_url('shop/produk/glutinous-rice') ?>">Glutinous Rice</a></li> 
                            <li><a href="<?= base_url('shop/produk/spesial-promo-product') ?>">Spesial Promo Product</a></li>
                            <li><a href="<?= base_url('https://bisnistanpamodal.ratumerak.id/') ?>" target="_blank">Afiliasi</a></li>
                        </ul>
                    </nav>
                </div> -->
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner shadow-sm rounded">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('') ?>/assets/img/slides/slidebaru1.png" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                   <!--  <h5>Mountains, Nature Collection</h5> -->
                               </div>
                           </div>
                           <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url('') ?>/assets/img/slides/slidebaru2.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                               <!--  <h5>Freedom, Sea Collection</h5> -->
                           </div>
                       </div>
                       <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url('') ?>/assets/img/slides/slidebaru3.png" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Living the Dream, Lost Island</h5> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Slider -->
        </div>
    </div>
</div>
</div>
</section>

<!-- Services -->
<section class="pt-5 pb-5" id="detket">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="media">
                    <div class="iconbox iconmedium rounded-circle text-info mr-4">
                        <i class="fa fa-truck"></i>
                    </div>
                    <div class="media-body">
                        <h5>Fast Shipping</h5>
                        <!-- <p class="text-muted">
                            All you have to do is to bring your passion. We take care of the rest.
                        </p> -->
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
                        <!-- <p class="text-muted">
                            All you have to do is to bring your passion. We take care of the rest.
                        </p> -->
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
                       <!--  <p class="text-muted">
                            All you have to do is to bring your passion. We take care of the rest.
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
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
                    <h2>Product</h2>
                </div>

                <div class="section-title float-right">
                    <a href="" class="btn btn-primary btn-sm">See all products <i class="fa fa-list"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt-4" id="loadproduk">

            <?php foreach ($produk2 as $data) { ?>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-2">
                    <div class="single-product shadow" style="border-radius: 20px;">
                        <div style="height: 30px; width: 85px; background-color: orange;  color: black; position: absolute; top:0px; border-radius: 14px;">
                            <p class="mx-2" style="font-weight: bold;">Tersedia</p>
                        </div>
                        <div class="product-img">
                            <center>
                                <a href="<?= base_url('shop/detail/') ?><?= $data['id'] ?>">
                                    <img src="<?= base_url('') ?>/assets/img/products/produkratumerak.png" class="img-fluid" />
                                </a>
                            </center>
                        </div>


                        <div class="product-content">

                            <?php 
                            $nama = $this->db->get_where('tbl_produk_stok', ['id' => $data['id_produk']])->row_array();
                            $seller = $this->db->get_where('tbl_seller', ['id' => $data['id_seller']])->row_array();
                            ?>

                            <p class="text-center">
                                <?= $nama['nama'] ?>
                                <br>
                                <small class="text-primary"><?= $seller['nama_toko'] ?></small>
                            </p>
                            <center>
                                <label class="text-center">Beras Premium</label>
                            </center>
                            <?php 

                            $seller = $this->db->get_where('tbl_seller', ['id' => $data['id_seller']])->row_array();
                            $kab =  $seller['kab'];
                            $kec = $seller['kec'];

                            $kc = $this->db->get_where('tbl_kecamatan', ['id' => $kec])->row_array();
                            $kb = $this->db->get_where('tbl_kabupaten', ['id' => $kab])->row_array();
                            ?>
                            <center>
                                <small class="text-danger"><i class="fa fa-map-marker"></i> <?= $kc['name'] ?> - <?= $kb['name'] ?> </small>
                            </center>
                            <a href="<?= base_url('store/detail-produk/') ?><?= $data['id'] ?>" class="btn btn-success btn-block">Order</a>

                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>
</div>









</div>
</div>

<!-- <div class="tampil_data">

    ere

</div>
-->


</section>
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>

<script>
    $(function() {
        var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
      });

        $('.addcart').click(function() {
          Toast.fire({
            icon: 'success',
            title: 'Produk berhasil masuk kekeranjang'
        })
      });

    });
</script>
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

<script>
    $(document).ready(function(){

        $("#orderwa").click(function(){
            var nama = $("#nama").val();
            var wa = $("#alamat").val();
            var alamat = $("#alamat").val();
            var photo = $("#photo").val();
            var bank = $("#bank").val();
            var cod = $("#cod").val();

            if(nama !== null || wa !== null || alamat !== null || photo !== null || bank !== null || cod !== null){

                $("#loadingwa").show();
            }

        }
    })
</script>





