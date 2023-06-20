
<?php foreach ($produk as $data) { ?>
    <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-2">
        <div class="single-product shadow">
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

