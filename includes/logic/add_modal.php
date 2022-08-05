<!-- Modal -->
<div class="modal fade" id="myAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-success" id="exampleModalLabel">Enroll Student</h5>
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