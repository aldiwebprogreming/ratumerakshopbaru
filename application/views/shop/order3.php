

<!-- Services -->

<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('shop/') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('shop/cart_detail') ?>">Keranjang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Order</li>

        </ol>

    </div>
</section>
<section class="products-grids trending pb-4 mt-5 mb-5">
    <div class="container">

        <div class="row">
            <div class="col-sm-2">
            </div>

            <div class="col-sm-8">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                  <div class="card-body">
                     <h6 style="font-weight: bold;" class="text-primary">List Order <i class="fa fa-shopping-bag"></i>
                     </h6>
                     <div class="row">
                        <?php foreach ($order as $data) { ?>

                            <?php 
                            $order_list = $this->db->get_where('tbl_order',['kode_order' => $data['kode_order']])->result_array();
                            foreach ($order_list as $val) { ?>

                                <div class="col-sm-3 col-3 mt-2">
                                    <?php
                                    $produk = $this->db->get_where('tbl_produk',['kode_produk' => $val['kode_produk']])->row_array();
                                    ?>
                                    <img src="<?= base_url('') ?>/assets/img/products/<?= $produk['gambar'] ?>" class="img-fluid" style="height: 100px;">
                                </div>

                                <div class="col-sm-9 col-9">
                                    <p class="float-right" style="font-weight: bold;">#<?= $data['kode_order'] ?></p>

                                    <p style="font-weight:bold;"><?= $produk['nama_produk'] ?></p>
                                    <?php 
                                    if ($data['status_pembayaran'] == 0) {
                                        echo "<p class='float-right text-danger' style='font-weight: bold;'>". "Belum Lunas". "</p>";
                                    }else{
                                       echo "<p class='float-right text-success' style='font-weight: bold;'>". "Sudah Lunas". "</p>";
                                   }
                                   ?>
                                   <p>Harga/item : <?= $produk['harga'] ?></p>
                                   <p>Qty : <?= $val['qty'] ?></p>
                                   <p>Total Harga : <?= $val['total_harga'] ?></p>
                                   <p>Date : <?= $val['date'] ?></p>

                                   <a href="<?= base_url('shop/pembayaran/') ?><?= $data['kode_order'] ?>" class="btn btn-success btn-sm mb-2">Lakukan pembayaran <i class="fa fa-handshake-o" aria-hidden="true"></i></a>

                                   <a href="" class="btn btn-success btn-sm mb-2">Detail order <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                               </div>


                           <?php }
                           ?>

                       <?php } ?>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <div class="col-sm-2">
   </div>
</div>
</div>
</section>



