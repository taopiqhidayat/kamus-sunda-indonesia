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
  <div class="container">
    <div class="row">
      <div class="col-md-12 mx-auto">
        <div class="card mb-5">
          <div class="container p-3">
            <a href="<?= base_url(); ?>" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>
            <div class="row">
              <div class="col-md-10 mx-auto">
                <h1 class="mt-5 text-center">Bantuan</h1>
                <h5 class="text-center">Kamus Sunda</h5>
                <div class="card mt-2">
                  <img src="<?= base_url('assets/img/') ?>help1.jpg" alt="help1">
                </div>
                <p class="text-center"><strong>Penggunaan Navbar</strong></p>
                <p><strong>Terjemah Kata</strong> berisi fitur untuk mencari arti kata dari bahasa Indonesia ke bahasa Sunda ataupun sebaliknya.</p>
                <p><strong>Tabel Kata</strong> berisi daftar kumpulan kata bahasa Sunda dengan artinya dengan bahasa Indonesia</p>
                <p><strong>Help</strong> digunakan untuk menampilkan bantuan penggunaan</p>
                <p><strong>About</strong> menampilkan tentang kamus Sunda Indonesia</p>
                <div class="card mt-3">
                  <img src="<?= base_url('assets/img/') ?>help2.jpg" alt="help2">
                  <img src="<?= base_url('assets/img/') ?>help3.jpg" alt="help3">
                </div>
                <p class="text-center"><strong>Penggunaan Terjemah Kata</strong></p>
                <p><strong>1.</strong> Masukkan kata pada kolom input</p>
                <p><strong>2.</strong> Klik tombol terjemahkan</p>
                <p><strong>3.</strong> Hasil translatenya akan muncul pada kolom di samping kanan kolom input dan tombol</p>
                <div class="card mt-3">
                  <img src="<?= base_url('assets/img/') ?>help4.jpg" alt="help4">
                  <img src="<?= base_url('assets/img/') ?>help5.jpg" alt="help5">
                </div>
                <p class="text-center"><strong>Penggunaan Tabel</strong></p>
                <p><strong>Pencarian</strong> fitur ini digunakan untuk mencari kata dan arti kata berdasarkan kata kunci yang dimasukkan di dalam kolom inputan pencarian</p>
                <p><strong>Pagination</strong> fitur ini digunakan untuk paging pembagian baris pada tabel yang akan ditampilkan agar tabel tidak terlalu panjang, dan bisa melompat ke urutan pembagian sesuai dengan yang dipilih user</p>
              </div>
            </div>
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