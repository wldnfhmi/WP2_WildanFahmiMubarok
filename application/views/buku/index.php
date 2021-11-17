<!-- Begin Page Content -->
<div class="container-fluid">

  <?= $this->session->flashdata('pesan'); ?>
  <div class="row">
    <div class="col-lg-12">
      <?php if(validation_errors()) { ?>
      <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
      </div>
      <?php } ?>
      <?= $this->session->flashdata('pesan'); ?>
      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#bukuBaruModal">
        <i class="fas fa-file-alt"></i> Buku Baru
      </a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">ISBN</th>
            <th scope="col">Stok</th>
            <th scope="col">DiPinjam</th>
            <th scope="col">DiBooking</th>
            <th scope="col">Gambar</th>
            <th scope="col">Pilihan</th>
          </tr>
        </thead>
        <tbody>

          <?php $a = 1;
          foreach($buku as $b) { ?>
          <tr>
            <th scope="row"><?= $a++; ?></th>
            <td><?= $b['judul_buku']; ?></td>
            <td><?= $b['pengarang']; ?></td>
            <td><?= $b['penerbit']; ?></td>
            <td><?= $b['tahun_terbit']; ?></td>
            <td><?= $b['isbn']; ?></td>
            <td><?= $b['stok']; ?></td>
            <td><?= $b['dipinjam']; ?></td>
            <td><?= $b['dibooking']; ?></td>
            <td>
              <picture>
                <source srcset="" type="image/svg+xml">
                <img src="<?= base_url('assets/img/upload/') . $b['image']; ?>" class="img-fluid img-thumbnail" alt="">
              </picture>
            </td>
            <td>
              <a href="<?= base_url('buku/ubahBuku/') . $b['id']; ?>" class="badge badge-info">
                <i class="fas fa-edit"></i> Ubah
              </a>
              <a href="<?= base_url('buku/hapusBuku/') . $b['id']; ?>"
                onclick="return confirm('Kamu yakin akan menghapus <?= $judul .' '. $b['judul_buku'];?> ?');"
                class="badge badge-danger">
                <i class="fas fa-trash"></i> Hapus
              </a>
            </td>
          </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- ./container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Tambah buku baru -->
<div class="modal fade" id="bukuBaruModal" tabindex="-1" role="dialog" aria-labelledby="bukuBaruModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bukuBaruModalLabel">
          Tambah Buku
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('buku'); ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="judul_buku" id="judul_buku" class="form-control form-control-user"
              placeholder="Masukkan Judul Buku">
          </div>
          <div class="form-group">
            <select name="id_kategori" class="form-control form-control-user">
              <option value="">Pilih Kategori</option>
              <?php foreach($kategori as $k) { ?>
              <option value="<?= $k['id']; ?>"><?= $k['kategori']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" name="pengarang" id="pengarang" class="form-control form-control-user"
              placeholder="Masukkan nama pengarang">
          </div>
          <div class="form-group">
            <input type="text" name="penerbit" id="penerbit" class="form-control form-control-user"
              placeholder="Masukkan nama penerbit">
          </div>
          <div class="form-group">
            <select name="tahun" class="form-control form-control-user">
              <option value="">Pilih Tahun</option>
              <?php for($i=date('Y'); $i > 1000; $i--) { ?>
              <option value="<?= $i; ?>"><?= $i; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" name="isbn" id="isbn" class="form-control form-control-user" placeholder="Masukkan ISBN">
          </div>
          <div class="form-group">
            <input type="text" name="stok" id="stok" class="form-control form-control-user"
              placeholder="Masukkan nominal stok">
          </div>
          <div class="form-group">
            <input type="file" name="image" id="image" class="form-control form-control-user">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-ban"></i> Close
          </button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End of Modal Tambah Menu -->