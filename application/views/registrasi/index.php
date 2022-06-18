<!doctype html>
<html lang="en" id="home">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- Online -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Offline -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

  <!-- My Style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

  <title><?= $judul; ?></title>
</head>

<body style="margin-top: 50px !important;">
  <div class="regist container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="regist card">
          <div class="card-header text-center">
            Form Registrasi
          </div>
          <div class="regist card-body" style="min-height: 500px;">
            <h5 class="card-title">Silahkan isi data berikut</h5>
            <form action="<?= base_url('registrasi') ?>" method="post">
              <?= $this->session->flashdata('msg'); ?>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                <?= form_error('nama', '<small class="form-text text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="form-text text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="nohp">No. HP</label>
                <input type="text" class="form-control" id="nohp" name="nohp" value="<?= set_value('nohp'); ?>">
                <?= form_error('nohp', '<small class="form-text text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>">
                <?= form_error('username', '<small class="form-text text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" class="form-control" id="password1" name="password1">
                    <?= form_error('password1', '<small class="form-text text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="password2">Ulangi Password</label>
                    <input type="password" class="form-control" id="password2" name="password2">
                    <?= form_error('password2', '<small class="form-text text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div>
                <button type="submit" class="btn btn-primary mb-3 float-right">Registrasi</button>
                <a href="<?= base_url() ?>" class="btn btn-secondary mb-3">Kembali</a>
              </div>
            </form>
            <a href="<?= base_url('login') ?>">Sudah punya akun? Login sekarang!</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- Online -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <!-- Offline -->
  <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>

</html>