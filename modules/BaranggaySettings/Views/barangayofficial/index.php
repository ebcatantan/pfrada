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
    <?php user_add_link('brgy_officials', $_SESSION['userPermmissions']) ?>
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
        <th>Gender</th>
        <th>Contact No.</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($brgy_officials as $barangayofficial): ?>
      <tr id="<?php echo $barangayofficial['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($barangayofficial['lastname'] . ', ' . $barangayofficial['firstname'] . $barangayofficial['middlename']) ?></td>
        <td><?= ucwords($barangayofficial['gender']) ?></td>
        <td><?= ucwords($barangayofficial['contact_no']) ?></td>
        <td><?= ucwords($barangayofficial['address']) ?></td>
        <td class="text-center">
          <?php
            users_action('brgy_officials', $_SESSION['userPermmissions'], $barangayofficial['id']);
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
    <?php paginater('brgy-officials', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
