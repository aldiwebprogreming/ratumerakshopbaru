
<div class="content-wrapper mt-3">

  <div class="container">

    <div class="card">
      <div class="card-body">
        <h3 style="font-weight: bold;">Stok Beras <i class="fas fa-shopping-basket"></i></h3>
        <hr>

        <div class="alert alert-primary" role="alert">
          Tentukan Stok Beras anda sesuai jumlah Deposit Anda 
        </div>
        <div class="row">
          <div class="col-sm-8">
           <div class="row">

            <?php foreach ($produk as $data) {  ?>
              <div class="col-sm-4">
                <div class="card shadow">
                  <img class="card-img-top" src="<?= base_url('assets/img/products/produkratumerak.png') ?>" alt="Card image cap">
                  <div class="card-body">

                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <div style="text-align: center; font-size: 30px;">
                      <h4 class=""><?= $data['nama'] ?></h4>
                      <a href="#" id="kurang<?= $data['id'] ?>"  class="btn btn-primary disabled" style="width: 20%;">-</a> 
                      <input type="text" name="" value="0" id="qty<?= $data['id'] ?>" style="width: 50px; text-align: center;">
                      <a href="#" id="tambah<?= $data['id'] ?>" class="btn btn-primary" style="width: 20%;">+</a>
                    </div>
                  </div>
                </div>
              </div>


              <script>
                $("#tambah<?= $data['id'] ?>").click(function(event){
                  event.preventDefault()
                  var a = $("#qty<?= $data['id'] ?>").val();
                  var deposit = "<?= $seller['jml_kg'] ?>";
                  var jmlkg = $("#jmlqty").val();
                  var beratberas = <?= $data['berat'] ?>;
                  var rel = Number(jmlkg) + Number(beratberas);


                  if ( Number(rel) > Number(deposit)) {
                    alert('Maaf..! Jumlah stok tidak dapat melebih jumlah deposit')
                  }else{
                    var add = 1 + Number(a);
                    var hasil = $("#qty<?= $data['id'] ?>").val(add);
                    if(Number(a) >= 0){
                      $("#kurang<?= $data['id'] ?>").removeClass('disabled');
                    }
                    const url = "<?= base_url('admin/addkeranjang?id=') ?><?= $data['id'] ?>"+"&idseller=<?= $id_seller ?>";
                    $("#listKeranjang").load(url);

                  }
                });

                $("#kurang<?= $data['id'] ?>").click(function(event){
                  event.preventDefault();
                  var b = $("#qty<?= $data['id'] ?>").val();
                  var min = Number(b) - 1;
                  var hasilKurang = $("#qty<?= $data['id'] ?>").val(min);
                  if(Number(b) == 1){
                    $("#kurang<?= $data['id'] ?>").addClass('disabled');
                  }
                  const url2 = "<?= base_url('admin/minkeranjang?id=') ?><?= $data['id'] ?>";
                  $("#listKeranjang").load(url2);
                })
              </script>

            <?php } ?>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card shadow">
            <div class="card-body">
              <p class="mb-3 text-bold">List Order</p>
              <hr>
              <div class="row" id="listKeranjang">

              </div>

              <hr>
              <div class="text-center">
                <h5>Maks <?= $seller['jml_kg'] ?> Kg</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
</div>










</div>
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->




<!-- Main Footer -->
<script src="http://momentjs.com/downloads/moment.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<!-- kalender -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script>
  $(document).ready(function(){

    $("#uang").keyup(function(){
      var uang_anda = $(this).val();
      var totalbayar = $(".totalbayar2").val();
      var hasil = uang_anda - totalbayar;
      $("#hasilkembalian").val(hasil);
    })    

  })
</script>

