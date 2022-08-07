<!-- add Modal -->
<div class="modal fade" id="myAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">ENROLL STUDENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../../includes/logic/add.php" method="post">
          <div class="mb-3">
            <input type="text" class="form-control" name="fname" placeholder="Full Name" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="course" placeholder="Course" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="regno" placeholder="Registration Number" required>
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" name="fees" placeholder="Fees Amount" required>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cancel</button>
            <button type="submit" name="add" class="btn btn-primary"><i class="bi bi-save2"></i> Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- //////////////////////////////////////////////////////////// -->


<!-- edit student Modal -->
<div class="modal fade" id="myEditStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


<div class="modal fade" id="myEditPayment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">MODIFY PAYMENT</h5>
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

<!-- ///////////////////////////////////////////////////// -->


<!-- delete modal  -->
<!-- Modal for deleting student -->
<div class="modal fade" id="myDelete_student" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">DELETE STUDENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../../includes/logic/delete.php" method="post">
          <p class="text-center">Are you sure you want to Delete?</p>
          <h2 class="text-center"> $name </h2>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <a href="delete.php?id=<?php echo $row['id']; ?>" type="submit" name="delete" class="btn btn-primary"><i class="bi bi-trash"></i> Delete</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal for deleting payment -->
<div class="modal fade" id="myDeletePayment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">DELETE PAYMENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../../includes/logic/delete.php" method="post">
          <h4>Are you sure?</h4>
          <?php echo ("
            <p>'You want to delete ' . name . ' !!'</p>
          ");
          ?>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" name="delete" class="btn btn-primary"><i class="bi bi-trash"></i> Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- //////////////////////////////////////////////////////////// -->

<!--chat Modal -->
<div class="modal fade" id="chat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">ANNOUNCEMENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../../includes/logic/chat.php" method="post">
          <div class="mb-3">
            <label class="col-form-label">Subject:</label>
            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
          </div>
          <div class="mb-3">
            <label class="col-form-label">Receipt:</label>
            <input type="text" class="form-control" name="receipt" placeholder="To: " required>
          </div>
          <div class="mb-3">
            <textarea name="message" class="form-control" id="" cols="60" rows="6" placeholder="Message"></textarea>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cancel</button>
            <button type="submit" name="send" class="btn btn-primary"><i class="bi bi-send"></i> Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- //////////////////////////////////////////////////////////// -->