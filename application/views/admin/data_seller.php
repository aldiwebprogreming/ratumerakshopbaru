
<div class="content-wrapper mt-3">

  <div class="container">

    <div class="card">
      <div class="card-body">
        <h3 style="font-weight: bold;">Data Seller <i class="fas fa-user"></i></h3>
        <hr>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
          Tambah Sellere <i class="fas fa-plus"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Seller</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?= base_url('admin/add_seller') ?>" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" required placeholder="" name="nama" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <select class="form-control" name="jk" required>
                      <option value="">-- Pilih Jenis Kelamin</option>
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>




                  <div class="form-group">
                    <label for="exampleInputEmail1">Kabupaten</label>
                    <select class="form-control" name="kab" id="kabseller" required>
                      <option value="">-- Pilih Kabupaten --</option>
                      <?php 
                      foreach ($kab as $kab2) {
                       ?>   
                       <option value="<?= $kab2['id'] ?>"><?= $kab2['name'] ?></option>
                     <?php } ?>                 
                   </select>
                 </div>

                 <div class="form-group">
                  <label for="exampleInputEmail1">Kecamatan</label>
                  <select class="form-control" name="kec" id="kecseller" required>
                    <option value="">-- Pilih Kecamatan --</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Kelurahan</label>
                  <select class="form-control" name="kel" id="kelseller" required>
                    <option value="">-- Pilih Kelurahan --</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Lengkap</label>
                  <textarea class="form-control" name="alamat" required></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Toko</label>
                  <input type="text" name="nama_toko" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Toko</label>
                  <textarea class="form-control" name="alamat_toko" required></textarea>
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Whatsapp</label>
                  <input type="text" name="no_wa" class="form-control" required>
                </div>

                <div class="form-group">  
                  <label for="exampleInputEmail1">Nomor KTP</label>
                  <input type="number" maxlength="16" name="no_ktp" class="form-control" required>
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Deposit</label>
                  <select class="form-control" name="deposit">
                    <option>-- Pilih Jumlah Deposit --</option>
                    <?php 
                    for ($i=3; $i <= 10 ; $i++) { 
                     ?>
                     <option><?= $i ?> JTA</option>
                   <?php } ?>
                 </select>
               </div>

             </div>

             <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>



    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jenis kelamin</th>
          <th>Alamat lengkap</th>
          <th>Alamat toko</th>
          <th>Nama toko</th>
          <th>No wa</th>
          <th>No ktp</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1;
        ?>
        <?php foreach($seller as $data){ ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['jk'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['alamat_toko'] ?></td>
            <td><?= $data['nama_toko'] ?></td>
            <td><?= $data['no_wa'] ?></td>
            <td><?= $data['no_ktp'] ?></td>


            <td>

              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?= $data['id'] ?>">
                Hapus
              </button>

              <button type="button" class="btn btn-info btn-sm mt-1" data-toggle="modal" data-target="#myModalEdit<?= $data['id'] ?>">
                Edit
              </button>

              <a href="<?= base_url('admin/stok_beras/') ?><?= $data['id'] ?>" class="btn btn-success mt-1">Stok</a>


              <div class="modal fade" id="myModal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Apakah anda ingin menghapus data ini?
                      <form method="post" action="<?= base_url('admin/hapus_seller') ?>">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="hapus" class="btn btn-danger" value="Hapus">
                      </form>
                    </div>
                  </div>
                </div>
              </div>



              <!-- Modal -->
              <div class="modal fade" id="myModalEdit<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Seller</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="<?= base_url('admin/act_edit_seller') ?>" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Lengkap</label>
                          <input type="text" required class="form-control" placeholder="" name="nama" value="<?= $data['nama'] ?>">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Jenis Kelamin</label>
                          <select class="form-control" required name="jk">
                            <option><?= $data['jk'] ?></option>
                            <option value="">-- Pilih Jenis Kelamin</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                          </select>
                        </div>


                        <div class="form-group">
                          <label for="exampleInputEmail1">Alamat Lengkap</label>
                          <textarea class="form-control" required name="alamat"><?= $data['alamat'] ?></textarea>
                        </div>


                        <div class="form-group">
                          <label for="exampleInputEmail1">Kabupaten</label>
                          <select class="form-control" required name="kab" id="editkabseller<?= $data['id'] ?>">
                            <?php 
                            $idkab = $data['kab'];
                            $lt = $this->db->get_where('tbl_kabupaten', ['id' => $idkab])->row_array();
                            ?>
                            <option value="<?= $lt['id'] ?>" >
                              <?php  echo $lt['name']; ?>
                            </option>
                            <?php 
                            foreach ($kab as $kab2) {
                             ?>   
                             <option value="<?= $kab2['id'] ?>"><?= $kab2['name'] ?></option>
                           <?php } ?>                 
                         </select>
                       </div>

                       <div class="form-group">
                        <label for="exampleInputEmail1">Kecamatan</label>
                        <select class="form-control" required name="kec" id="editkecseller<?= $data['id'] ?>">
                          <?php 
                          $idkec = $data['kec'];
                          $kec2 = $this->db->get_where('tbl_kecamatan', ['id' => $idkec])->row_array();
                          ?>
                          <option value="<?= $kec2['id'] ?>"><?= $kec2['name'] ?></option>
                          <option value="">-- Pilih Kecamatan --</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Kelurahan</label>
                        <select class="form-control" name="kel" required> id="editkelseller<?= $data['id'] ?>">
                         <?php 
                         $idkel = $data['kel'];
                         $kel2 = $this->db->get_where('tbl_kelurahan', ['id' => $idkel])->row_array();
                         ?>
                         <option value="<?= $kel2['id'] ?>"><?= $kel2['name'] ?></option>
                         <option>-- Pilih Kelurahan --</option>
                       </select>
                     </div>

                     <div class="form-group">
                      <label for="exampleInputEmail1">Alamat Toko</label>
                      <textarea class="form-control" required name="alamat_toko"><?= $data['alamat_toko'] ?></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Toko</label>
                      <input type="text" name="nama_toko" required> class="form-control" value="<?= $data['nama_toko'] ?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Whatsapp</label>
                      <input type="text" name="no_wa" required> class="form-control" value="<?= $data['no_wa'] ?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor KTP</label>
                      <input type="number" maxlength="16" required> name="no_ktp" class="form-control" value="<?= $data['no_ktp'] ?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Jumlah Deposit</label>
                      <select class="form-control" name="deposit" required>

                        <option><?= $data['deposit'] ?></option>
                        <option value="">-- Pilih Jumlah Deposit --</option>
                        <?php 
                        for ($i=3; $i <= 10 ; $i++) { 
                         ?>
                         <option><?= $i ?> JTA</option>
                       <?php } ?>
                     </select>
                   </div>
                 </div>
                 <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>





      </td>
    </tr>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
      $("#editkabseller<?= $data['id'] ?>").change(function(){
        var idkab = $(this).val();
        const url = "<?= base_url('admin/get_kecseller?id=') ?>"+idkab;

        $("#editkecseller<?= $data['id'] ?>").load(url);
      });

    </script>

    <script>
     $("#editkecseller<?= $data['id'] ?>").change(function(){
      var idkec = $(this).val();
      const url2 = "<?= base_url('admin/get_kelseller?id=') ?>"+idkec;
      $("#editkelseller<?= $data['id'] ?>").load(url2);
    })
  </script>

<?php } ?>


</tbody>
<tfoot>
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis kelamin</th>
    <th>Alamat lengkap</th>
    <th>Alamat toko</th>
    <th>Nama toko</th>
    <th>No wa</th>
    <th>No ktp</th>
    <th>Opsi</th>
  </tr>
</tfoot>
</table>


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

<script>
  $("#kabseller").change(function(){
    var idkab = $(this).val();
    const url = "<?= base_url('admin/get_kecseller?id=') ?>"+idkab;
    $("#kecseller").load(url);
  });

</script>

<script>
 $("#kecseller").change(function(){
  var idkec = $(this).val();
  const url2 = "<?= base_url('admin/get_kelseller?id=') ?>"+idkec;
  $("#kelseller").load(url2);
});
</script>

