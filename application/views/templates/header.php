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

<body>

	<nav class="navbar fixed-top navbar-expand-lg navbar-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?= base_url(); ?>#home">Kamus Sunda</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="<?= base_url(); ?>#trans">Terjemah Kata<span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>tabel">Tabel Kata</a>
				</div>
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link" href="<?= base_url('home/help'); ?>">Help<span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="<?= base_url('home/about'); ?>">About</a>
					<a class="nav-item btn btn-primary tombol" href="<?= base_url('login'); ?>">Login Admin</a>
				</div>
			</div>
		</div>
	</nav>