<div class="row">
    <div class="col-6">
        <h3>Scholar list</h3>
        <ul class="list-group">
            <?php foreach($data['scholar'] as $sch): ?>
            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <?= $sch['name']; ?>
                <a href="<?= BASEURL; ?>/scholar/detail/<?= $sch['id']; ?>" class="badge badge-info">detail</a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>