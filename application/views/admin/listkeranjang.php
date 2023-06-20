 <?php foreach ($list as $data) { ?>

    <form method="post" action="<?= base_url('admin/add_stokberasseller') ?>">

       <div class="col-sm-7">
        <?php 
        $produk = $this->db->get_where('tbl_produk_stok', ['id' => $data['id_produk']])->row_array();
        ?>
        <small> - <?= $produk['nama'] ?></small>
    </div>
    <div class="col-sm-3">
        <small class=""><?= $data['qty'] ?> qty </small>
    </div>

    <div class="col-sm-2">
        <a class="btn btn-danger btn-sm ml-3" id="hapus<?= $data['id'] ?>"><i class="fas fa-trash"></i></a>
    </div>
    <hr>

    <script>
        $("#hapus<?= $data['id'] ?>").click(function(){
            $("#qty<?= $produk['id'] ?>").val('0');
            const url = "<?= base_url('admin/hapus_listkeranjang?id=') ?><?= $data['id'] ?>";
            $("#listKeranjang").load(url);
            $("#kurang<?= $produk['id'] ?>").addClass('disabled');
        })
    </script>


    <input type="hidden" name="produk[]" value="<?= $produk['id'] ?>">
    <input type="hidden" name="qty[]" value="<?= $data['qty'] ?>">
    <input type="hidden" name="id_seller" value="<?= $data['id_seller'] ?>">
<?php } ?>

<hr>
<input type="text" name="" class="form-control mt-3" id="jmlqty" value="<?= $jml['jml_kg'] ?>" style="font-size: 30px; text-align:center">
<button type="submit" class="btn btn-primary btn-block mt-3">Tambah Stok Seller</button>

</form>

</div>


