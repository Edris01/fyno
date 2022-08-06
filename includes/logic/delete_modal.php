<!-- Modal -->
<div class="modal fade" id="myDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">DELETE STUDENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="../../includes/logic/delete.php" method="post">
          <h4>Are you sure?</h4>
          <?php echo("
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