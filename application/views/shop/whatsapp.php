
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Whatsapp</title>
</head>
<body>

	<a href="https://api.whatsapp.com/send?phone=6283138184143&text=Nama: <?= $order2['kode_user'] ?>, Alamat pengantaran : <?= $order1['alamat_pengantaran'] ?>, Produk : <?= $order2['nama_produk'] ?>, Qty: <?= $order2['qty'] ?>, Total harga : <?= $order2['total_pembayaran'] ?>, Sistem pengambilan : <?= $order1['sistem_pengambilan'] ?>, Sistem pembayaran : <?= $order1['sistem_pembayaran'] ?>,ktp : <?= $order1['ktp'] ?>" class="btn btn-primary" id="wa">Order Whatsapp</a>

	<button id="klik">KLIK</button>
	

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script>
		var button=document.getElementById('wa');
		setInterval(function(){ 
			button.click();
		}, 0);
	</script>

	<script>
		$(document).ready(function(){
			$("#klik").click(function(){
				alert('ebunga');
			});
		})
	</script>
</body>
</html>