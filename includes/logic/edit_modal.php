<!-- Modal -->
<div class="modal fade" id="myEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">MODIFY STUDENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="edit.php" method="post">
          <div class="input-group d-flex mb-3">
            <label class="col-md-3">Name</label>
            <input type="text" class="form-control col-md-9" name="name" value="">
          </div>
          <div class="input-group d-flex mb-3">
            <label class="col-md-3">Course</label>
            <input type="text" class="form-control col-md-9" name="course" value="">
          </div>
          <div class="input-group d-flex mb-3">
            <label class="col-md-3">Rrg No.</label>
            <input type="text" class="form-control col-md-9" name="regno" value="">
          </div>
          <div class="input-group d-flex mb-3">
            <label class="col-md-3">Fees</label>
            <input type="text" class="form-control col-md-9" name="name" value="">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>