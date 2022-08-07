<div class="col-sm-12 col-sm-offset-2">
    <div class="row">
        <?php
        if (isset($_SESSION['error'])) {
            echo
            "
			<div class='alert alert-warning alert-dismissible fade show text-center' role='alert'>
			    <button type='button'  class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
				" . $_SESSION['error'] . "
			</div>
		";
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
            echo
            "
			<div class='alert alert-success alert-dismissible fade show text-center' role='alert'>
				<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
				" . $_SESSION['success'] . "
			</div>
		";
            unset($_SESSION['success']);
        }
        ?>
    </div>
</div>