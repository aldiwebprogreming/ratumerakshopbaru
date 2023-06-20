<option>-- Pilih Kecamatan --</option>
<?php 
foreach ($kec as $kec2) {
	?>
	<option value="<?= $kec2['id'] ?>"><?= $kec2['name'] ?></option>
	<?php } ?>