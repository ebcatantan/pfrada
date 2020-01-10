<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Business Types Name</span>
        <span class="field-value"><?= ucfirst($businesstype[0]['business_type_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($businesstype[0]['description']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('business-types','edit-businesstypes', $permissions, $businesstype[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
