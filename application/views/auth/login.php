

<!-- Services -->

<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('store/') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </div>
</section>
<section class="products-grids trending pb-4 mt-5 mb-5">
    <div class="container">

        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">


                <div class="card shadow p-3 mb-5 bg-white rounded">
                  <div class="card-body">
                    <?php if ($this->session->flashdata('keluar') != null) { ?>
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Hello,</strong> anda sudah berhasil logout, silahkan login kembali untuk berbelanja di ratumerakshop
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>

            <h5 style="font-weight: bold;" class="text-success">Login</h5>
            <form method="post" action="<?= base_url('auth/act_login') ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">No whatsapp</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nomor whatsapp" name="wa" required>
                <small id="emailHelp" class="form-text text-muted">Masukan nomor whasapp yang telah terdaftar</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan password" name="pass" required>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-success btn-block mt-2">Login <i class="fa fa-user"></i></button>
            <small class="mt-2 float-left">Belum punya akun ? silahkan <a href="<?= base_url('auth/register') ?>">register</a></small>
        </form>
    </div>

</div>
</div>
<div class="col-sm-3">
</div>
</div>



       <!--  <div class="alert alert-dark" role="alert">
          Silahkan isi form data diri dengan data yang sebenar-benarnya, karena alamat pengiriman akan di kirimkan berdasarkan data yang anda isikan.

          Batas akhir pembayaran pesanan adalah 1 x 24 jam dari waktu pesan. Jika tidak dilakukan pembayaran dengan batas waktu tersebut maka pesanan akan digagalkan secara otomatis.

          Pembayaran hanya dilakukan melalui rekening
          ini : <label style="color: orange; font-weight: bold;">BCA 647577111
          a/n PT SINAR ANEKA NIAGA.</label>
      </div>
  -->


</div>
</section>



