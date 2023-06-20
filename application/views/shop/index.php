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
        <div class="row mt-4">
            <?php foreach ($produk as $data) { ?>
                <div class="col-xl-3 col-lg-4 col-md-4 col-12 mb-2">
                    <div class="single-product">
                        <div class="product-img">
                            <center>
                                <a href="<?= base_url('shop/detail/') ?><?= $data['kode_produk'] ?>">
                                    <img src="<?= base_url('') ?>/assets/img/products/<?= $data['gambar'] ?>" class="img-fluid" />
                                </a>
                            </center>
                        </div>
                        <div class="product-content">
                         <p class="text-center"><?= $data['nama_produk'] ?></p>
                         <center>
                            <small><i><?= $data['nama_kategori'] ?></i></small>
                        </center>
                        <div class="product-price">
                            <center>
                                <form method="post" class="form-user">
                                   <!--      <p class="text-danger" style="font-weight:bold"><strike>Rp.133.000</strike></p> -->
                                   <span><?= "Rp " . number_format($data['harga'],0,',','.'); ?></span><br>
                                   <p>Qty : <select id="qty<?= $data['kode_produk'] ?>">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select></p>

                                <input type="hidden" name="nama_produk" id="nama_produk<?= $data['kode_produk'] ?>" value="<?= $data['nama_produk'] ?>">
                                <input type="hidden" name="nama_kategori" id="nama_kategori<?= $data['kode_produk'] ?>" value="<?= $data['nama_kategori'] ?>">
                                <input type="hidden" name="harga" id="harga<?= $data['kode_produk'] ?>" value="<?= $data['harga'] ?>">
                            </form>
                            <button type="button" id="addcart<?= $data['kode_produk'] ?>" class="btn btn-primary btn-sm btn-block addcart" data-toggle="modal" data-target="#exampleModal<?= $data['kode_produk'] ?>">
                               Pesan Via Website
                           </button>
                           <button type="button" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#exampleModalpesan" >
                              Pesan Via Whatsapp
                          </button>
                      </center>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalpesan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Order Via Whatsapp</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?= base_url('shop/order_wa2') ?>" enctype="multipart/form-data">
                                <input type="hidden" name="order" value="order-whatsapp">
                                <input type="hidden" name="kode_produk" value="<?= $data['kode_produk'] ?>">
                                <input type="hidden" name="kategori" value="<?= $data['kategori'] ?>">
                                <input type="hidden" name="harga" value="<?= $data['harga'] ?>">
                                <input type="hidden" name="nama_produk" value="<?= $data['nama_produk'] ?>">
                                <div class="form-group">
                                    <label>Nama lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required="" id="nama">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Whatsapp</label>
                                    <input type="number" name="wa" class="form-control" placeholder="Nomor whatsapp" required="" maxlength="13" id="wa">
                                </div>
                                    <!-- <div class="form-group">
                                        <label>Tanggal pengantaran</label>
                                        <input type="date" name="tgl_pengantaran" class="form-control" placeholder="Nomor whatsapp">
                                    </div> -->
                                    <div class="form-group">
                                        <label>Alamat pengantaran</label>
                                        <textarea class="form-control" name="alamat_pengantaran" placeholder="Masukan alamat anda dengan lengkap" required="" id="alamat"></textarea>
                                    </div>
                                    <!--<div class="form-group">-->
                                        <!--    <label class="label">Upload Foto KTP</label>-->
                                        <!--    <div>-->
                                            <!--        <input type="file" name="ktp" class="" id="photo" required>-->
                                            <!--        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfA4HU79bnFZF2GXuPt-G-8aW-lA7HtIvWKlrbPdvRqZUsoQSzn_K9II6tX1Xff_5A_Bo&usqp=CAU" alt="..." class="img-thumbnail" style="height: 200px; width: 300px;" id="imgPreview">-->
                                            <!--    </div>-->
                                            <!--    <small></small>-->
                                            <!--</div>-->

                                            <div class="form-row">
                                                <div class="col">
                                                    <label class="label">Qty</label>
                                                    <select class="form-control" name="qtywa" id="qtywa<?= $data['kode_produk'] ?>">
                                                     <option>1</option>
                                                     <option>2</option>
                                                     <option>3</option>
                                                     <option>4</option>
                                                     <option>5</option>
                                                     <option>6</option>
                                                     <option>7</option>
                                                     <option>8</option>
                                                     <option>9</option>
                                                     <option>10</option>
                                                 </select>
                                             </div>
                                             <div class="col">
                                                <label>Total Harga</label>
                                                <input type="text" class="form-control" name="total_harga" readonly id="totalhargawa<?= $data['kode_produk'] ?>" value="<?= $data['harga'] ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <label class="label mt-3">Sistem Pembayaran</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" required="" name="inlineRadioOptions" id="inlineRadio1" value="transper" id="bank">
                                            <label class="form-check-label" for="inlineRadio1">Via Bank Transfer</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" required="" name="inlineRadioOptions" id="inlineRadio2" value="cod" id="cod">
                                          <label class="form-check-label" for="inlineRadio2">Via Cash On Delivery (COD)</label>
                                      </div>


                                  </div>
                                  <div class="modal-footer">
                                      <!--   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                      <button type="submit" class="btn btn-success btn-block" id="orderwa">Order <i class="fa-solid fa-spinner fa-spin-pulse" id="loadingwa" style="display: none;"></i></button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>



              </div>
          </div>
      </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


  <script>
    $(document).ready(function(){
        $("#addcart<?= $data['kode_produk'] ?>").click(function(){

            var qty1 = $("#qty<?= $data['kode_produk'] ?>").val();
            var kode_produk1 = "<?= $data['kode_produk'] ?>";
            var nama_produk1 = $("#nama_produk<?= $data['kode_produk'] ?>").val();
            var nama_kategori1 = $("#nama_kategori<?= $data['kode_produk'] ?>").val();
            var harga1 = $("#harga<?= $data['kode_produk'] ?>").val();

            var url = "<?= base_url('shop/cart?kode_produk=') ?>"+kode_produk1+"&harga="+harga1+"&qty="+qty1;
            var url2 = "<?= base_url('shop/cart2') ?>";
            $("#tampil_data").load(url);
            $("#tampil_data_footer").load(url2);
        })


    })
</script>

<script>
    $(document).ready(function(){

        $("#qtywa<?= $data['kode_produk'] ?>").change(function(){
            var qtywa =  $(this).val();
            var hargawa = <?= $data['harga'] ?>;
            var total_hargawa = hargawa * qtywa;
            // alert(total_hargawa);
            $("#totalhargawa<?= $data['kode_produk'] ?>").val(total_hargawa);
        });




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


<?php } ?>



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





