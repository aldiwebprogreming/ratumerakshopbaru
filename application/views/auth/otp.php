

<!-- Services -->

<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('shop/') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('shop/cart_detail') ?>">Keranjang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kode otp</li>
        </ol>
    </div>
</section>
<section class="products-grids trending pb-4 mt-5 mb-5">
    <div class="container">

        <div class="row">
            <div class="col-sm-6">
             <img src="<?= base_url('assets/img/brand/otp.jpg') ?>" class="img-fluid" alt="Responsive image">
         </div>
         <div class="col-sm-6">


            <div class="card shadow p-3 mb-5 bg-white rounded">
              <div class="card-body">
                <?php if ($this->session->flashdata('otp') != null) { ?>
                   <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Kode otp yang anda masukan tidak benar
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                <?php } ?>
                <h5 style="font-weight: bold;" class="text-primary">KODE OTP</h5>
                <form method="post" action="<?= base_url('auth/act_otp') ?>">
                  <div class="form-group">
                     <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="- - - -" name="otp" required style="text-align: center; font-size: 25px; font-weight: bold;">
                     <small id="emailHelp" class="form-text text-muted">Enter the OTP code that has been sent to your email</small>
                 </div>

                 <br>
                 <button type="submit" class="btn btn-primary btn-block mt-2">Next<i class="fa fa-cog"></i></button>
                 <small class="mt-2 float-left">Belum punya akun ? silahkan <a href="<?= base_url('auth/register') ?>">register</a></small>
             </form>
         </div>

     </div>
 </div>

</div>






</div>
</section>



