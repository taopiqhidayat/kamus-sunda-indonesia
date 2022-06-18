<div class="container">
  <div class="row-my-3">
    <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-header text-center">
          Form Ubah Data Kata
        </div>
        <div class="card-body">
          <form action="<?= base_url(); ?>admin/ubah" method="post">
            <input type="hidden" name="id" value="<?= $kata['id_vocab'] ?>">
            <div class="form-group">
              <label for="kata">Kata (bahasa Sunda)</label>
              <input type="text" class="form-control" name="kata" id="kata" placeholder="Masukkan kata dalam bahasa Sunda" value="<?= $kata['words']; ?>">
            </div>
            <div class="form-group">
              <label for="artikata">Arti Kata (bahasa Indonesia)</label>
              <input type="text" class="form-control" name="artikata" id="artikata" placeholder="Masukkan arti kata dalam bahasa Indonesia" value="<?= $kata['arti_bahasa']; ?>">
            </div>
            <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Kata</button>
            <a href="<?= base_url('admin/tabel'); ?>" class="btn btn-secondary">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>