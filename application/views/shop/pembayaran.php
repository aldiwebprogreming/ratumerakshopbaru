

<!-- Services -->

<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('shop/') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('shop/cart_detail') ?>">Keranjang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
        </ol>
    </div>
</section>
<section class="products-grids trending pb-4 mt-5 mb-5">

    <div class="container">
        <div class="card">
          <div class="card-body">
            Jumlah pembayaran yang harus anda lakukan adalah sebanyak <label style="font-weight:bold"><?= "Rp " . number_format($bayar['jumlah_pembayaran'],0,',','.'); ?></label> dengan invoice / kode order : <label style="font-weight: bold;"><?= $bayar['kode_order'] ?></label>.   Anda dapat melakukan pembayaran ke nomor rekening ini  : <label style="font-weight: bold;">BCA 647577111 a/n PT SINAR ANEKA NUSANTARA </label> dengan jumlah pembayaran yang sudah di tentukan di atas.<p></p>
            <label style="font-style:italic;">NB : Pembelian akan kami proses jika anda sudah melakukan pembayaran dan mengkonfirmasi pembayaran sesuai dengan nominal diatas.</label>
            <hr>
            Setalah melakukan pembayaran silahkan untuk mengkonfirmasi pembayaran anda dengan melampirkan bukti struk pembayaran.
            <center>
                <a href="<?= base_url('shop/konfirmasi_pembayaran/') ?><?= $bayar['kode_order'] ?>" class="btn btn-success mt-2">Konfirmasi pembayaran</a>
            </center>
        </div>
    </div>
</div>

</section>



