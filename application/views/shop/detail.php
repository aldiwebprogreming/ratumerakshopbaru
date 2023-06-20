

<!-- Services -->

<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('shop/') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('shop/cart_detail') ?>">Keranjang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail produk</li>
        </ol>
    </div>
</section>
<section class="products-grids trending pb-4 mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <center>
                    <img src="<?= base_url('') ?>/assets/img/products/<?= $det['gambar'] ?>" class="img-fluid" alt="Responsive image">
                </center>
            </div>

            <div class="col-sm-6">
             <h5><?= $det['nama_produk'] ?></h5>
             <p style="font-style: italic;"><?= $det['nama_kategori'] ?></p> 
             <p style="font-weight: bold;"><?= 'Rp '. number_format($det['harga'],0,',','.') ?></p>
             <p><?= $det['ket'] ?></p>
             <p>
                Qty
                <select id="qty<?= $det['kode_produk'] ?>">
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                 <option>5</option>
             </select>
             <input type="hidden" name="nama_produk" id="nama_produk<?= $det['kode_produk'] ?>" value="<?= $det['nama_produk'] ?>">
             <input type="hidden" name="nama_kategori" id="nama_kategori<?= $det['kode_produk'] ?>" value="<?= $det['nama_kategori'] ?>">
             <input type="hidden" name="harga" id="harga<?= $det['kode_produk'] ?>" value="<?= $det['harga'] ?>">
         </p>
         <button id="addcart<?= $det['kode_produk'] ?>" class="btn btn-primary btn-block">Order</button>
         <a href="<?= base_url('shop/') ?>" class="btn btn-success btn-block">Kembali</a>
     </div>
 </div>
</div>
</section>

<section class="mb-3">
    <div class="container">
        <h5 class="text-primary mb-2" style="font-weight: bold;">Produk Lainya</h5>
        <div class="owl-carousel">
            <?php foreach($produk as $data) { ?>
              <div> 
                <div class="card">
                    <a href="<?= base_url('shop/detail/') ?><?= $data['kode_produk'] ?>">
                     <img src="<?= base_url('') ?>/assets/img/products/<?= $data['gambar'] ?>" class="img-fluid" />
                     <div class="card-body">
                        <p class="card-title"><?=  $data['nama_produk'] ?></p>
                        <!--  <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </a>
            </div>
        </div>
    <?php } ?>
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){

        $("#addcart<?= $det['kode_produk'] ?>").click(function(){

            var qty1 = $("#qty<?= $det['kode_produk'] ?>").val();
            var kode_produk1 = "<?= $det['kode_produk'] ?>";
            var nama_produk1 = $("#nama_produk<?= $det['kode_produk'] ?>").val();
            var nama_kategori1 = $("#nama_kategori<?= $det['kode_produk'] ?>").val();
            var harga1 = $("#harga<?= $det['kode_produk'] ?>").val();

            var url = "<?= base_url('shop/cart?kode_produk=') ?>"+kode_produk1+"&harga="+harga1+"&qty="+qty1;
            var url2 = "<?= base_url('shop/cart2') ?>";
            $("#tampil_data").load(url);
            $("#tampil_data_footer").load(url2);

            window.location.assign("<?= base_url('shop/cart_detail') ?>");
        })


    })
</script>



