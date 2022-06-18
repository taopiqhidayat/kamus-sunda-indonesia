<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="card mb-3 mx-auto" style="max-height: 250px; max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?= base_url('assets/img/') ?><?= $admin['image'] ?>" class="card-img" alt="admin" style="height: 100%;">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h5 class="card-title mb-3"><?= $admin['nama'] ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?= $admin['email'] ?></h6>
              <h6 class="card-subtitle mb-2"><?= $admin['no_hp'] ?></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>