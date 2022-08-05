<!-- Modal -->
<div class="modal fade" id="chat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLabel">Announcement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="chat.php" method="post">
                    <div class="mb-3">
                        <label class="col-form-label">Subject:</label>
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">To:</label>
                        <input type="text" class="form-control" id="to" placeholder="To: " required>
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" id="" cols="60" rows="6">Message</textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cancel</button>
                        <button type="button" class="btn btn-primary"><i class="bi bi-send"></i> Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>