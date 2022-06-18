<div class="container mt-5">

  <h1>Daftar Kata</h1>

  <div class="row mt-3 mb-3">
    <div class="col-md-4">
      <form action="<?= base_url('tabel') ?>" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari kata ..." name="keyword" autocomplete="off" autofocus value="<?= set_value('keyword'); ?>">
          <div class="input-group-append">
            <input type="submit" class="btn btn-primary" name="cari" value="Cari">
          </div>
        </div>
      </form>
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
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $this->pagination->create_links(); ?>
    </div>
  </div>
</div>