<!-- Modal -->
<div class="modal fade" id="payNow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLabel">Make Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../../includes/logic/pay.php" method="post">
                    <!-- the way its done with mtn with withdrawals -->
                    <div class="mb-3">
                        <label class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Reg No:</label>
                        <input type="text" class="form-control" id="regno" name="regno" placeholder="Registration Number" required>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Amount</label>
                        <input type="number" class="form-control" id="paid" name="paid" placeholder="Enter Amount " required>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Reason</label>
                        <input type="text" class="form-control" name="reason" placeholder="Enter Reason" required>
                    </div>
                    <div class="mb-3">
                        <!-- i need an automated calculation to deduct amount paid from fees  -->
                        <label class="col-form-label">Balance</label>
                        <input type="number" class="form-control" id="balance" name="balance" placeholder="Balance" required>
                    </div>
                    

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cancel</button>
                        <button type="submit" name="pay" class="btn btn-primary"><i class="bi bi-send"></i> Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>