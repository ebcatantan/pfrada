 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>

<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>reservations/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="citizen_id">Citizen Name</label>
            <input name="citizen_id" type="text" value="<?= isset($rec['citizen_id']) ? $rec['citizen_id'] : set_value('citizen_id') ?>" class="form-control <?= $errors['citizen_id'] ? 'is-invalid':'is-valid' ?>" id="citizen_id" placeholder="Citizen Name">
              <?php if($errors['citizen_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['citizen_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>


      <!-- <div class="row"> -->
        <div class="col-md-5">
          <div class="form-group">
            <label for="user_id">User ID</label>
            <input name="user_id" type="text" class="form-control <?= $errors['user_id'] ? 'is-invalid':'is-valid'  ?>"value="<?= isset($rec['user_id']) ? $rec['user_id'] : set_value('user_id') ?>" id="user_id" placeholder="User ID" rows="5">
            <?php if($errors['user_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['user_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="form-group">
            <label for="facility_id">Facility Name</label>
            <input name="facility_id" type="text" class="form-control <?= $errors['facility_id'] ? 'is-invalid':'is-valid'  ?>"value="<?= isset($rec['facility_id']) ? $rec['facility_id'] : set_value('facility_id') ?>" id="facility_id" placeholder="Facility Name" rows="5">
            <?php if($errors['facility_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['facility_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="reservation_date_time_start">Reservation Date Time Start</label>
            <input name="reservation_date_time_start" type="text" class="form-control <?= $errors['reservation_date_time_start'] ? 'is-invalid':'is-valid'  ?>" value="<?= isset($rec['reservation_date_time_start']) ? $rec['reservation_date_time_start'] : set_value('reservation_date_time_start') ?>"id="reservation_date_time_start" placeholder="Reservation Date Time Start" rows="5">
            <?php if($errors['reservation_date_time_start']): ?>
                <div class="invalid-feedback">
                  <?= $errors['reservation_date_time_start'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>


      <!-- <div class="row"> -->
        <div class="col-md-5">
          <div class="form-group">
            <label for="reservation_date_time_end">Reservation Date Time End</label>
            <input name="reservation_date_time_end" type="text" class="form-control <?= $errors['reservation_date_time_end'] ? 'is-invalid':'is-valid'  ?>" value="<?= isset($rec['reservation_date_time_end']) ? $rec['reservation_date_time_end'] : set_value('reservation_date_time_end') ?>"id="reservation_date_time_end" placeholder="Reservation Date Time End" rows="5">
            <?php if($errors['reservation_date_time_end']): ?>
                <div class="invalid-feedback">
                  <?= $errors['reservation_date_time_end'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="reservation_payment">Reservation Payment</label>
            <input name="reservation_payment" type="text" class="form-control <?= $errors['reservation_payment'] ? 'is-invalid':'is-valid'  ?>" value="<?= isset($rec['reservation_payment']) ? $rec['reservation_payment'] : set_value('reservation_payment') ?>" id="reservation_payment" placeholder="Reservation Payment" rows="5">
            <?php if($errors['reservation_payment']): ?>
                <div class="invalid-feedback">
                  <?= $errors['reservation_payment'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>


      <!-- <div class="row"> -->
        <div class="col-md-5">
          <div class="form-group">
            <label for="is_approved">Is Approved?</label>
            <select name="is_approved" class="form-control <?= $errors['is_approved'] ? 'is-invalid':'is-valid' ?>">
              <option value="">Approved</option>
              <option value="Y">Yes</option>
              <option value="N">No</option>
            </select>
            <?php if($errors['is_approved']): ?>
                <div class="invalid-feedback">
                  <?= $errors['is_approved'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="is_paid">Is Paid?</label>
            <select name="is_paid" class="form-control <?= $errors['is_paid'] ? 'is-invalid':'is-valid' ?>">
              <option value="">Paid</option>
              <option value="Y">Yes</option>
              <option value="N">No</option>
            </select>
            <?php if($errors['is_paid']): ?>
                <div class="invalid-feedback">
                  <?= $errors['is_paid'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>


      <!-- <div class="row"> -->
        <div class="col-md-5">
          <div class="form-group">
            <label for="processed_by">Processed  by</label>
            <select name="processed_by" class="form-control <?= $errors['processed_by'] ? 'is-invalid':'is-valid' ?>">
              <option value="">Processed By</option>
              <option value="Y">Elvin Catantan</option>
              <option value="N">David Limba</option>
              <option value="N">Pauline Llagas</option>
            </select>
            <?php if($errors['processed_by']): ?>
                <div class="invalid-feedback">
                  <?= $errors['processed_by'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

        <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="date_paid">Date Paid</label>
            <input type="date" name="date_paid" type="text" value="<?= isset($rec['date_paid']) ? $rec['birth_date'] : set_value('date_paid') ?>" class="form-control <?= $errors['date_paid'] ? 'is-invalid':'is-valid' ?>" id="date_paid" placeholder="Date">
              <?php if($errors['date_paid']): ?>
                <div class="invalid-feedback">
                  <?= $errors['date_paid'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-6">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
