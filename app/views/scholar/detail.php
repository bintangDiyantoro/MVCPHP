<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['scholar']['name']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['scholar']['nis']; ?></h6>
    <p class="card-text"><?= $data['scholar']['email']; ?></p>
    <p class="card-text"><?= $data['scholar']['department']; ?></p>
    <a href="<?= BASEURL; ?>/scholar" class="card-link">Go back</a>
  </div>
</div>