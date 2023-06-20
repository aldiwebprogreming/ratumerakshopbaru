<option>-- Pilih Kelurahan --</option>
<?php 
foreach ($kel as $kel2) {
	?>
	<option value="<?= $kel2['id'] ?>"><?= $kel2['name'] ?></option>
	<?php } ?>