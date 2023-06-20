
<?php if($cart == true){ ?>
    <div class="row">
        <?php foreach ($cart as $data) { ?>
            <div class="col-xl-6">
                <label><?= $data['nama_produk'] ?></label>
            </div>

            <div class="col-xl-3">
                <label><?= $data['qty'] ?> QTY</label>
            </div>

            <div class="col-xl-3">
                <button class="btn btn-success btn-sm" id="hapus <?= $data['id'] ?>"><i class="fas fa-trash"></i></button>
            </div>


            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script>

                $("#hapus<?= $data['id'] ?>").click(function(){
                    const url = "<?= base_url('store/hapuscart?id=') ?>"+<?= $data['id'] ?>;
                    $("#cartorder").load(url);
                })
            </script>

        <?php } ?>

    </div>
    <div class="row">
        <div class="col-xl-6">
            <h5>Total harga </h5>
        </div>
        <div class="col-xl-6">
            <h5><?= $totalharga['total_harga'] ?> </h5>
        </div>
    </div>

<?php }else{ ?>

    <h4 class="text-center text-success">{ NO ORDER } </h4>
    <center>
        <a href="<?= base_url('store/') ?>">Back Home To Order ></a>
    </center>

    <?php } ?>