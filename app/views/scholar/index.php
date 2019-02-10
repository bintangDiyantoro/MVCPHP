<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>
<div class="row mb-3">
  <div class="col-lg-6">
    <button type="button" class="btn btn-primary showAddModal" data-toggle="modal" data-target="#formModal">
        Add Scholar
    </button>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <form action="<?= BASEURL; ?>/scholar/search" method="post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search scholar name" name="keyword" id="keyword" autofocus autocomplete="off">
        <div class="input-group-append">
          <button class="btn btn-outline-primary" type="submit" id="search-button">Search</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <h3>Scholar list</h3>
        <ul class="list-group">
            <?php foreach($data['scholar'] as $sch): ?>
            <li class="list-group-item list-group-item-action">                
                <?= $sch['name']; ?>
                <a href="<?= BASEURL; ?>/scholar/delete/<?= $sch['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('Are you sure want to delete '+'<?= $sch['name']; ?>'+'?')">delete</a>
                <a href="<?= BASEURL; ?>/scholar/edit/<?= $sch['id']; ?>" class="badge badge-success float-right ml-2 showEditModal" data-toggle="modal" data-target="#formModal" data-id="<?= $sch['id']; ?>">edit</a>
                <a href="<?= BASEURL; ?>/scholar/detail/<?= $sch['id']; ?>" class="badge badge-info float-right ml-2">detail</a>
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
            <input type="hidden" name="id" id="id">
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