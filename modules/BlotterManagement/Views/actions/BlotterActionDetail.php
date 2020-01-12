<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Blotter ID</span>
        <span class="field-value"><?= ucfirst($blotter_actions[0]['blotter_id']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Handled By</span>
        <span class="field-value"><?= ucfirst($blotter_actions[0]['handled_by']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Remarks</span>
        <span class="field-value"><?= ucfirst($blotter_actions[0]['remarks']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Additional Details</span>
        <span class="field-value"><?= ucfirst($blotter_actions[0]['additional_details']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Date Action Taken</span>
        <span class="field-value"><?= ucfirst($blotter_actions[0]['date_action_taken']) ?></span>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('blotter-actions','edit-blotteraction', $permissions, $blotter_actions[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
