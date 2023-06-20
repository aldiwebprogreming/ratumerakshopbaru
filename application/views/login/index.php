<!doctype html>
  <html lang="en">
  <head>
    <title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url('assets_login/') ?>css/style.css">

  </head>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
        <!-- <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Login</h2>
        </div> -->
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="login-wrap p-4 p-md-5">

           <h3 class="text-center mb-4">LOGIN ADMIN <br><label style="font-weight:bold">RATUMERAKSHOP</label></h3>

           <form method="post" action="<?= base_url('login/act_login') ?>">
            <div class="form-group">
              <input type="text" class="form-control rounded-left" placeholder="Username" name="username" required>
            </div>
            <div class="form-group d-flex">
              <input type="password" class="form-control rounded-left" placeholder="Password" name="pass" required>
            </div>
            <div class="form-group">
              <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
            </div>
            <div class="form-group d-md-flex">
                <!-- <div class="w-50">
                  <label class="checkbox-wrap checkbox-primary">Remember Me
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                </div> -->
               <!--  <div class="w-50 text-md-right">
                  <a href="#">Forgot Password</a>
                </div> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?= base_url('assets_login/') ?>js/jquery.min.js"></script>
  <script src="<?= base_url('assets_login/') ?>js/popper.js"></script>
  <script src="<?= base_url('assets_login/') ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets_login/') ?>js/main.js"></script>
  <script src="<?= base_url()  ?>assets_admin/alert.js"></script>
  <?php echo "<script>".$this->session->flashdata('message')."</script>"?>

</body>
</html>

