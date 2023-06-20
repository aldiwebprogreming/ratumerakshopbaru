SLIDER
------------------------------------------->
<section class="slider-section pt-4 pb-4">
    <div class="container">
        <div class="slider-inner">
            <div class="row">
                <div class="col-md-3">
                    <nav class="nav-category">
                        <h2>Categories</h2>
                        <ul class="menu-category">
                            <li><a href="#">Premium Rice</a></li>
                            <li><a href="#">Medium Rice</a></li>
                            <li><a href="#">Healthy Rice</a></li>
                            <li><a href="#">Glutinous Rice</a></li>
                            <li><a href="#">Spesial Promo Product</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
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
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
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
            </div>
        </div>
    </div>
</section>
<!-- End Services -->
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
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-2">
                    <div class="single-product">
                        <div class="product-img">
                            <center>
                                <a href="product-detail.html">
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
                                <span><?= "Rp " . number_format($data['harga'],0,',','.'); ?></span><br>
                                <p>Qty : <select id="qty">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select></p>
                                <button type="button" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#exampleModal<?= $data['kode_produk'] ?>">
                                  Shop Now
                              </button>
                          </center>
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal<?= $data['kode_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Cart</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body" id="ap">
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <img src="<?= base_url('') ?>/assets/img/products/<?= $data['gambar'] ?>" class="img-fluid" style="height: 100px;">
                                    </div>
                                    <div class="col-sm-9 col-9">
                                        <p style="font-weight: bold;"><?= $data['nama_produk'] ?></p>
                                        <p>Harga/Item : <?= "Rp " . number_format($data['harga'],0,',','.'); ?></p>
                                        <p>Harga Total : <span id="total<?= $data['kode_produk'] ?>"> <?= "Rp " . number_format($data['harga'],0,',','.'); ?> </span> </p>
                                        <p>Qty : <select id="qty<?= $data['kode_produk'] ?>">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select></p>
                                    </div>

                                    <?php 

                                    foreach ($cart as $item) {
                                        $produk = $this->db->get_where('tbl_produk',['kode_produk' => $item['id']])->row_array();
                                        ?>

                                        <div class="col-sm-3 col-3">
                                            <img src="<?= base_url('') ?>/assets/img/products/<?= $produk['gambar'] ?>" class="img-fluid" style="height: 100px;">
                                        </div>

                                        <div class="col-sm-9 col-9">
                                            <p style="font-weight: bold;"><?= $item['name'] ?></p>
                                            <p>Harga/Item : <?= "Rp " . number_format($item['price'],0,',','.'); ?></p>
                                            <p>Harga Total : <span id="total"> <?= "Rp " . number_format($item['total_harga'],0,',','.'); ?> </span> </p>
                                            <p>Qty : <select id="qty">
                                                <option><?= $item['qty'] ?></option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select></p>
                                        </div>

                                    <?php } ?>

                                </div>
                                <hr>
                                <p style="font-weight: bold;">TOTAL BELANJA ( 1 Items ) : <?= "Rp " . number_format($data['harga'],0,',','.'); ?></p>
                            </div>
                            <div class="modal-footer">
                                <form method="post" action="<?= base_url('shop/add_cart') ?>">
                                    <input type="hidden" name="kode_produk" value="<?= $data['kode_produk'] ?>">
                                    <input type="hidden" name="nama" value="<?= $data['nama_produk'] ?>">
                                    <input type="hidden" name="harga" value="<?= $data['harga'] ?>">
                                    <input type="hidden" id="formTotalHarga<?= $data['kode_produk'] ?>" name="total_harga" value="<?= $data['harga'] ?>">
                                    <input type="hidden" name="qty" value="1">
                                    <button type="submit" class="btn btn-secondary">Lanjut Belanja</button>
                                </form>
                                <button type="button" class="btn btn-primary">Bayar</button>
                            </div>
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
        $("#qty<?= $data['kode_produk'] ?>").change(function(){

            var qty = $(this).val();
            var harga = <?= $data['harga'] ?>;
            var total = harga * qty;

            const numb = total;
            const format = numb.toString().split('').reverse().join('');
            const convert = format.match(/\d{1,3}/g);
            const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('');
            $("#formTotalHarga<?= $data['kode_produk'] ?>").val(total);
            $("#total<?= $data['kode_produk'] ?>").html(rupiah);

        })
    })
</script>
<?php } ?>



</div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>


<script>
    var app = new Vue({

        el: '#ap',
        data: {

            qty : 1,
            harga : 1000,
            total_harga : 1000
            selected : '',

        },

        methods : {

            baru : function(){

             alert('ebunga')
         }

         total_harga_all : function(){
            return Number(this.qty) * Number(this.harga);
        },
    }

})
</script>



