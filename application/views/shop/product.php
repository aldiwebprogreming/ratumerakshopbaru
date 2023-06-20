

<!-- Services -->

<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('shop/') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('shop/cart_detail') ?>">Keranjang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produk</li>
        </ol>
    </div>
</section>
<section class="products-grids trending pb-4">
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <div class="section-title float-left">
                    <h2>Product <?= $kategori ?></h2>
                </div>

                <!-- <div class="section-title float-right">
                    <a href="" class="btn btn-primary btn-sm">See all products <i class="fa fa-list"></i></a>
                </div> -->
            </div>
        </div>
        <?php if ($produk == false) { ?>
         <center>
            <img src="<?= base_url('assets/img/brand/not2.png') ?>" class="img-fluid" alt="Responsive image" style="height: 200px;">
            <h4 class="text-center">Produk <?= $kategori ?> belum tersdia ...</h4>
        </center>
    <?php }else{ ?>
       <div class="row mt-4">


        <?php foreach ($produk as $data) { ?>
            <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-2">
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
                                <span><?= "Rp " . number_format($data['harga'],0,',','.'); ?></span><br>
                                <p>Qty : <select id="qty<?= $data['kode_produk'] ?>">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select></p>
                                <input type="hidden" name="nama_produk" id="nama_produk<?= $data['kode_produk'] ?>" value="<?= $data['nama_produk'] ?>">
                                <input type="hidden" name="nama_kategori" id="nama_kategori<?= $data['kode_produk'] ?>" value="<?= $data['nama_kategori'] ?>">
                                <input type="hidden" name="harga" id="harga<?= $data['kode_produk'] ?>" value="<?= $data['harga'] ?>">
                            </form>
                            <button type="button" id="addcart<?= $data['kode_produk'] ?>" class="btn btn-primary btn-sm btn-block addcart">
                                Add to cart
                            </button>
                        </center>



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

    <?php } ?>





<?php } ?>



</div>
</div>

<!-- <div class="tampil_data">

    ere

</div>
-->


</section>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

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




