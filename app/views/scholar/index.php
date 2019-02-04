<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
            Add Scholar
        </button><br><br>
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

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Add scholar data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/scholar/insert" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="number" class="form-control" id="nis" name="nis" placeholder="0000000">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <select class="form-control" id="department" name="department">
                <option>Technique of Informatique</option>
                <option>Technique of Accounting</option>
                <option>Art of Cooking</option>
                <option>Art of Music</option>
                <option>Technique of Driving</option>
                </select>
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Insert data</button>
      </div>
        </form>
    </div>
  </div>
</div>
