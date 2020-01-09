 <div class="row">
   <div class="col-md-6 offset-0">
     <div class="input-group">
      <input type="text" name="search_item" class="form-control" placeholder="Search for documents">
      <div class="input-group-append">
        <button class="btn btn-dark" type="button">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
   </div>
   <div class="col-md-2 offset-md-4">
    <?php user_add_link('citizens', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Contact No.</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($citizens as $citizen): ?>
      <tr id="<?php echo $citizen['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($citizen['lastname'] . ', ' . $citizen['firstname'] . ' ' . $citizen['middlename']) ?></td>
        <td><?= ucwords($citizen['address']) ?></td>
        <td><?= ucwords($citizen['gender']) ?></td>
        <td><?= ucwords($citizen['contact_no']) ?></td>
        <td class="text-center">
          <?php
            users_action('citizens', $_SESSION['userPermmissions'], $citizen['id']);
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
 </div>
<hr>

<div class="row">
  <div class="col-md-6 offset-md-6">
    <?php paginater('citizens', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
