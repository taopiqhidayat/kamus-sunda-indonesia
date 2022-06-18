<div class="container mt-3">

  <?php if ($this->session->flashdata('msg')) : ?>
    <div class="row mt-3">
      <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data kata<strong> berhasil </strong> <?= $this->session->flashdata('msg'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <h1>Daftar Kata</h1>

  <div class="row my-3">
    <div class="col-md-4">
      <form action="<?= base_url() ?>admin/tabel" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari kata ..." name="keyword" autocomplete="off" autofocus value="<?= set_value('keyword') ?>">
          <div class="input-group-append">
            <input type="submit" class="btn btn-primary" name="cari" value="Cari">
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-4">
      <a href="<?= base_url() ?>admin/tambah" class="btn btn-primary">Tambah Data Kata</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Daftar Kata</th>
            <th scope="col">Arti Kata</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (empty($tabel)) : ?>
            <tr>
              <td colspan="3">
                <div class="alert alert-danger" role="alert">
                  Data kata tidak dapat ditemukan!
                </div>
              </td>
            </tr>
          <?php endif; ?>
          <?php $i = 1; ?>
          <?php foreach ($tabel as $tbl) : ?>
            <tr>
              <th scope="row"><?= ++$start; ?></th>
              <td><?= $tbl['words']; ?></td>
              <td><?= $tbl['arti_bahasa']; ?></td>
              <td>
                <a href="<?= base_url(); ?>admin/ubah/<?= $tbl['id_vocab']; ?>" class="badge badge-warning">Ubah</a>
                <a href="<?= base_url(); ?>admin/hapus/<?= $tbl['id_vocab']; ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin akan menghapus kata ini?');">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $this->pagination->create_links(); ?>
    </div>
  </div>
</div>