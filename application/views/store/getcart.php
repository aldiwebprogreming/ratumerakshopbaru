<?php if($cart == true){ ?>

	<form method="post" action="<?= base_url('store/add_order') ?>">

		<div class="row">
			<?php foreach ($cart as $data) { ?>
				<div class="col-xl-6">
					<label><?= $data['nama_produk'] ?></label>
				</div>

				<div class="col-xl-3">
					<label><?= $data['qty'] ?> QTY</label>
				</div>

				<div class="col-xl-3">
					<a class="btn btn-success btn-sm" id="hapus<?= $data['id'] ?>" style="cursor: pointer;"><i class="fas fa-trash" style="color: white;"></i></a>
				</div>

				<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				<script>

					$("#hapus<?= $data['id'] ?>").click(function(){
						const url = "<?= base_url('store/hapuscart?id=') ?>"+<?= $data['id'] ?>;
						$("#cartorder").load(url);
					})
				</script>


				<input type="hidden" name="kode_order[]" value="<?= $data['kode_order'] ?>">
				<input type="hidden" name="id_produk[]" value="<?= $data['id_produk'] ?>">
				<input type="hidden" name="berat[]" value="<?= $data['berat'] ?>">
				<input type="hidden" name="qty[]" value="<?= $data['qty'] ?>">
				<input type="hidden" name="harga[]" value="<?= $data['harga'] ?>">
				<input type="hidden" name="total_harga[]" value="<?= $data['total_harga'] ?>">
				<input type="hidden" name="id_seller[]" value="<?= $data['id_seller'] ?>">



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

		<button type="submit" class="btn btn-success btn-block">Add to cart</button>
	</form>

<?php }else{ ?>
	<h4 class="text-center text-success">{ NO ORDER } </h4>
	<center>
		<a href="<?= base_url('store/') ?>">Back Home To Order ></a>
	</center>

	<?php } ?>