

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
                                <center>
                                    <img src="<?= base_url('') ?>/assets/img/products/<?= $produk['gambar'] ?>" class="img-fluid" style="height: 100px;">
                                    <br>

                                    <button class="btn btn-danger btn-sm mt-2" data-toggle="modal" data-target="#cancel<?= $data['id'] ?>"><i class="fas fa-trash"></i></button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="cancel<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Cancel Order</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                        <h5>Apakah anda inign mengcancel orderan anda ?</h5>
                                    </div>
                                    <div class=" my-3">
                                        <form method="post" action="<?= base_url('shop/cancel_order/') ?><?= $data['kode_order'] ?>">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                                            <!-- <input type="text" name="koder"> -->
                                            <button type="submit" class="btn btn-primary">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </center>
                </div>

                <div class="col-sm-9 col-9">
                    <p class="float-right" style="font-weight: bold;">#<?= $data['kode_order'] ?></p>

                    <p style="font-weight:bold;"><?= $produk['nama_produk'] ?></p>

                    <p>Harga/item : <?= $produk['harga'] ?></p>
                    <p>Qty : <?= $val['qty'] ?></p>
                    <p>Total Harga : <?= $val['total_harga'] ?></p>
                    <p>Date Order : <?= $val['date'] ?></p>
                    <p>Pembayaran : <?= $data['sistem_pembayaran'] ?></p>

                    <p>Status Pembayaran : 
                        <?php 
                        if($data['status_pembayaran'] == 0){
                            echo "<small class='text-danger' style='font-weight: bold;'>". "Pendding". "</small>";
                        }elseif($data['status_pembayaran'] == 1){

                            echo "<small class='text-success' style='font-weight: bold;'>". "Success". "</small>";
                        }

                        ?>
                    </p>


                    <p>Status Order : 

                       <?php 
                       if ($data['status_order'] == 1) {
                        echo "<small class='text-success' style='font-weight: bold;'>". "Proses Packing". "</small>";
                    }elseif($data['status_order'] == 2){
                        echo "<small class=' text-success' style='font-weight: bold;'>". "Proses Pengantaran". "</small>";
                    }elseif ($data['status_order'] == 3) {

                        echo "<small class='text-success' style='font-weight: bold;'>". "Selesai". "</small>";
                    }elseif($data['status_order'] == 4){
                        echo "<small class='text-success' style='font-weight: bold;'>". "Cancel". "</small>";
                    }else{
                        echo "<small class='text-warning' style='font-weight: bold;'>". "Menunggu". "</small>"; 
                    }
                    ?>

                </p>



                <?php
                if ($data['status_pembayaran'] == 0 && $data['sistem_pembayaran'] == 'transper') {
                    ?>

                    <a href="<?= base_url('shop/pembayaran/') ?><?= $data['kode_order'] ?>" class="btn btn-success btn-sm mb-2">Lakukan pembayaran <i class="fa fa-handshake-o" aria-hidden="true"></i></a>

                <?php } ?>

                <button type="button" class="btn btn-primary btn-success btn-sm mb-2" data-toggle="modal" data-target="#exampleModal<?= $val['kode_order'] ?>">
                  Detail order <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              </button>


              <!-- Modal detail order -->
              <div class="modal fade" id="exampleModal<?= $val['kode_order'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                   <?php 
                   $detail = $this->db->get_where('tbl_checkout',['kode_order' => $val['kode_order']])->row_array();
                   ?>
                   <div class="form-group">
                    <label for="exampleFormControlFile1">Whatsapp : </label>
                    <p><?= $detail['wa'] ?></p>
                </div>
                <hr>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Sistem Pengambilan Barang : </label>
                    <p><?= $detail['sistem_pengambilan'] ?></p>
                </div>
                <hr>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Tgl Pengantaran / Penjemputan : </label>
                    <p><?= $detail['tgl_pengantaran'] ?></p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Jumlah Pembayaran : </label>
                    <p><?= "Rp " . number_format($detail['jumlah_pembayaran'],0,',','.')  ?></p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Status Pembayaran : </label>
                    <?php 
                    if($data['status_pembayaran'] == 0){
                        echo "<p class='text-danger' style='font-weight: bold;'>". "Pandding". "</p>";
                    }elseif($data['status_pembayaran'] == 1){

                        echo "<p class='text-success' style='font-weight: bold;'>". "Success". "</p>";
                    }

                    ?>
                </div>
            </div>
            <div class="modal-footer">
               <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
               <?php if ($data['status_order'] == 0 && $data['sistem_pembayaran'] == 'transfer') {
                ?> 
                <a href="<?= base_url('shop/pembayaran/') ?><?= $data['kode_order'] ?>" class="btn btn-primary btn-block">Lakukan pembayaran</a>

            <?php } ?>
        </div>
    </div>
</div>
</div>


<!-- <a href="" class="btn btn-success btn-sm mb-2">Detail order <i class="fa fa-shopping-cart" aria-hidden="true"></i></a> -->
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



