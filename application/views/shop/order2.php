

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
                        <?php foreach ($order as $data) {
                            ?>
                            <div class="col-sm-3 col-3 mt-3">
                                <?php 
                                $produk = $this->db->get_where('tbl_produk',['kode_produk' => $data['kode_produk']])->row_array();
                                ?>
                                <img src="<?= base_url('') ?>/assets/img/products/<?= $produk['gambar'] ?>" class="img-fluid">
                            </div>

                            <div class="col-sm-9 col-9 mt-3">
                              <?php $kategori = $this->db->get_where('tbl_kategori',['kode_kategori' => $data['kategori']])->row_array(); ?>
                              <p style="font-weight: bold;"><?= $data['nama_produk'] ?>  /  <label style="font-style: italic;"><?= $kategori['nama_kategori'] ?></label></p>
                              <p>Harga / Item : <?= $data['harga'] ?></p>
                              <p>QTY : <?= $data['qty'] ?></p>
                              <p>Total Harga : <?= $data['total_harga'] ?></p>
                              <p>Date : <?= $data['date'] ?></p>


                              <button class="btn btn-success btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample<?= $data['id'] ?>" aria-expanded="false" aria-controls="collapseExample">
                               Lihat Detail Order
                           </button>

                           <div class="collapse" id="collapseExample<?= $data['id'] ?>">
                              <div class="card card-body">
                                <?php 
                                $chek = $this->db->get_where('tbl_checkout',['kode_order' => $data['kode_order']])->row_array();
                                ?>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Whatsapp</label>
                                    <input type="number" class="form-control" name="wa" value="<?= $chek['wa'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Pengantaran</label>
                                    <input type="date" class="form-control" name="tgl_pengantaran" value="<?= $chek['tgl_pengantaran'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat Pengantaran</label>
                                    <textarea class="form-control" placeholder="Kota medan kecamatan medan" name="alamat" required=""><?= $chek['alamat_pengantaran'] ?></textarea>

                                </div>
                            </div>

                        </div>


                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-2">
</div>
</div>
</div>
</section>



