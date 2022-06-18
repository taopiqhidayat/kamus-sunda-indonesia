<!-- Nav Translate -->
<section class="navt" id="trans">
	<div class="container">
		<div class="row">
			<div class="col-md">
				<nav class="indosunda">
					<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-indosunda-tab" data-toggle="tab" href="#nav-indosunda" role="tab" aria-controls="nav-indosunda" aria-selected="false">Indonesia ==>> Sunda</a>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-indosunda" role="tabpanel" aria-labelledby="nav-indosunda-tab">
						<div class="row">
							<div class="col-md-6">
								<form action="<?= base_url('home') ?>" method="post">
									<div class="form-group">
										<input type="text" class="form-control" name="insun" autocomplete="off" autofocus placeholder="Masukkan 1 kata bahasa Indonesia" value="<?= set_value('insun') ?>">
										<input type="submit" class="btn btn-primary tombol mb-3 float-right" name="indosunda" value="Terjemahkan">
									</div>
								</form>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-body overflow-auto">
										<?php if ($this->input->post('indosunda')) : ?>
											<?php foreach ($sunda as $sun) : ?>
												<p><b><?= $sun['words']; ?></b> | <i><?= $sun['arti_bahasa']; ?></i></p><br>
											<?php endforeach; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<nav class="sundaindo mt-4">
					<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-sundaindo-tab" data-toggle="tab" href="#nav-sundaindo" role="tab" aria-controls="nav-sundaindo" aria-selected="true">Sunda ==>> Indonesia</a>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-sundaindo" role="tabpanel" aria-labelledby="nav-sundaindo-tab">
						<div class="row">
							<div class="col-md-6">
								<form action="<?= base_url('home') ?>" method="post">
									<div class="form-group">
										<input type="text" class="form-control" name="sunin" autocomplete="off" autofocus placeholder="Masukkan 1 kata bahasa Sunda" value="<?= set_value('sunin'); ?>">
										<input type="submit" class="btn btn-primary tombol mb-3 float-right" name="sundaindo" value="Terjemahkan">
									</div>
								</form>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-body overflow-auto">
										<?php if ($this->input->post('sundaindo')) : ?>
											<?php foreach ($indo as $ind) : ?>
												<p><b><?= $ind['arti_bahasa']; ?></b> | <i><?= $ind['words']; ?></i></p><br>
											<?php endforeach; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Akhir Nav Translate -->