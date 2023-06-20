 <?php foreach ($cart as $data) { ?>
    <div class="col-sm-3">
        <img src="<?= base_url('') ?>/assets/img/products/<?= $data['gambar'] ?>" class="img-fluid" style="height: 100px;">
        <br>
        <a href="<?= base_url('shop/hapus_cart?id=') ?><?= $data['rowid'] ?>" class="btn btn-danger btn-sm mt-3" id="deletecart">Delete <i class="fa fa-trash"></i></a>

    </div>
    <div class="col-sm-9">
        <p style="font-weight: bold;"><?= $data['name'] ?></p>
        <p>Harga/Item : <?= "Rp " . number_format($data['price'],0,',','.'); ?></p>
        <p>Harga Total : <span id="totals"> <?= "Rp " . number_format($data['price'] * $data['qty'],0,',','.'); ?> </span> </p>
        <p>Qty : <?= $data['qty'] ?> </p>
    </div>



<?php } ?>

<!-- <button id="cart">caret</button>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $("#cart").click(function(){
            alert('ebunga');
        })
    })
</script> -->