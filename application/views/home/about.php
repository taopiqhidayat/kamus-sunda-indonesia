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
      <div class="col-md-10 mx-auto">
        <div class="card">
          <div class="container p-4">
            <a href="<?= base_url(); ?>" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>
            <h1 class="mb-3 mt-4 text-center">Tentang Kami</h1>
            <p class="lead text-justify">Kamus bahasa Sunda - Indonesia online, yang bisa menterjemahkan kata dari bahasa Indonesia ke bahasa Sunda maupun sebaliknya dari bahasa Sunda ke bahasa Indonesia. Menyedikan juga daftar kata bahasa Sunda beserta terjemahan bahan bahasa Indonesianya.</p>
            <h4 class="text-center text-muted my-3">Kamus Sunda - Indonesia ini dibuat oleh :</h4>
            <div class="row">
              <div class="col-md-4  offset-md-1 text-center">
                <h5 class="mt-3">Taopiq Hidayat</h5>
                <h6 class="card-subtitle mb-2 text-muted">Programmer</h6>
                <img src="<?= base_url('assets/img/') ?>opiq.jpg" alt="Taopiq Hidayat" class="img-thumbnail" style="width: 200px; height: 250px;">
                <p class="card-subtitle mb-2 text-muted mt-2">1706064</p>
                <P class="card-subtitle mb-2 text-muted">085353313598</P>
                <p class="card-subtitle mb-2 text-muted">1706064@sttgarut.ac.id</p>
              </div>
              <div class="col-md-4 offset-md-2 text-center">
                <h5 class="mt-3">Nenden Zakiatin Nufus</h5>
                <h6 class="card-subtitle mb-2 text-muted">Analyze</h6>
                <img src="<?= base_url('assets/img/') ?>nenden.jpg" alt="Nenden Zakiatin Nufus" class="img-thumbnail" style="width: 200px; height: 250px;">
                <p class="card-subtitle mb-2 text-muted mt-2">1706026</p>
                <p class="card-subtitle mb-2 text-muted">087809041999</p>
                <p class="card-subtitle mb-2 text-muted">1706026@sttgarut.ac.id</p>
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