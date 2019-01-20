<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Scholar list</h3>
            <?php foreach($data['scholar'] as $sch): ?>
            <ul>
                <li><?= $sch['name']; ?></li>
                <li><?= $sch['nis']; ?></li>
                <li><?= $sch['email']; ?></li>
                <li><?= $sch['department']; ?></li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>