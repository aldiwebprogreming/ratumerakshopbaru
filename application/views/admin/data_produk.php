
<div class="content-wrapper mt-3">

  <div class="container">

    <div class="card">
      <div class="card-body">
        <h3 style="font-weight: bold;">Data Produk <i class="fas fa-shopping-bag"></i></h3>
        <hr>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
          Tambah Produk <i class="fas fa-plus"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?= base_url('admin/tambah_produk') ?>" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="text" class="form-control" placeholder="Nama produk" name="nama_produk">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <select class="form-control" name="kategori">
                      <option value="">-- Pilih Kategori --</option>
                      <?php foreach ($kategori as $data) { ?>
                        <option value="<?= $data['kode_kategori'] ?>"><?= $data['nama_kategori'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="Harga">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea class="form-control" name="ket" placeholder="Keterangan"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gambar Produk</label>
                    <input type="file" name="gambar" class="form-control">
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
              <th>Nama Produk</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Date Create</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            ?>
            <?php foreach($produk as $data){ ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['nama_produk'] ?></td>
                <td><?= $data['nama_kategori'] ?></td>
                <td><?= $data['harga'] ?></td>
                <td><?= $data['date'] ?></td>
                <td>

                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?= $data['kode_produk'] ?>">
                    Hapus
                  </button>

                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModaledit<?= $data['kode_produk'] ?>">
                    Edit
                  </button>


                  <div class="modal fade" id="myModal<?= $data['kode_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <form method="post" action="<?= base_url('admin/hapus_produk') ?>">
                            <input type="hidden" name="id" value="<?= $data['kode_produk'] ?>">

                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" name="hapus" class="btn btn-danger" value="Hapus">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="myModaledit<?= $data['kode_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">


                         <form method="post" action="<?= base_url('admin/edit_produk') ?>" enctype="multipart/form-data">
                          <input type="hidden" name="kode_produk" value="<?= $data['kode_produk'] ?>">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Produk</label>
                            <input type="text" class="form-control" placeholder="Nama produk" name="nama_produk" value="<?= $data['nama_produk'] ?>" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Kategori</label>
                            <select class="form-control" name="kategori" required>
                              <option value="<?= $data['kategori'] ?>"><?= $data['nama_kategori'] ?></option>
                              <option value="">-- Pilih Kategori --</option>
                              <?php foreach ($kategori as $kat) { ?>
                                <option value="<?= $kat['kode_kategori'] ?>"><?= $kat['nama_kategori'] ?></option>
                              <?php } ?>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="Harga" value="<?= $data['harga'] ?>" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Keterangan</label>
                            <textarea class="form-control" name="ket" required="" placeholder="Keterangan"><?= $data['ket'] ?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Gambar Produk</label>
                            <input type="file" name="gambar" class="form-control">
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" name="edit" class="btn btn-primary" value="Edit Barang">
                          </div>
                        </form>

                      </div>

                    </div>
                  </div>
                </div>


              </td>
            </tr>
          <?php } ?>


        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Date Create</th>
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
