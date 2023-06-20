

<!-- Services -->

<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('store/') ?>">Home</a></li>
            <!--   <li class="breadcrumb-item"><a href="<?= base_url('shop/cart_detail') ?>">Keranjang</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
    </div>
</section>
<section class="products-grids trending pb-4 mt-5 mb-5">
    <div class="container">

        <div class="row">
            <div class="col-sm-6">
                <img src="<?= base_url('assets/img/brand/register.jpg') ?>" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-sm-6">

                <div class="card shadow p-3 mb-5 bg-white rounded">
                  <div class="card-body">
                    <h5 style="font-weight: bold;" class="text-success">Registrasi akun</h5>
                    <form method="post" action="">
                        <div class="form-group">  
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" value="<?php echo set_value('name'); ?>">
                            <small class="text-danger"><?php echo form_error('name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor whatsapp</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0811XXXX" name="no_wa"  value="<?php echo set_value('no_wa'); ?>">
                            <small class="text-danger"><?php echo form_error('no_wa'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email"  value="<?php echo set_value('email'); ?>">
                            <small id="emailHelp" class="form-text text-muted">Masukan email yang aktif</small>
                            <small class="text-danger"><?php echo form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                            <small class="text-danger"><?php echo form_error('pass'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Ulangi password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm password" name="pass1">
                            <small class="text-danger"><?php echo form_error('pass1'); ?></small>
                        </div>
                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <button type="submit" class="btn btn-success btn-block mt-2" id="register">Register <i class="fa fa-user"></i>  <i class="fas fa-spinner fa-spin" id="load" style="display:none;"></i></button>
                        <small class="mt-2 float-left">Sudah punya akun ? silahkan <a href="<?= base_url('auth/login') ?>">login</a></small> 
                    </form>
                </div>

            </div>
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





