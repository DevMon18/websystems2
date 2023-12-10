<div class="modal fade" id="seatModal" tabindex="-1" aria-labelledby="seatModalLabel" aria-hidden="true">
    <form method="post" action="process.php">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="seatModalLabel">Seat Check-in & Feedback</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <legend>Seat Check-in</legend>
                        <input type="text" class="form-control mb-2" name="fullname" id="fullname-1" value="<?php echo $fetch_info['name']?>" Disabled>
                        <input type="text" class="form-control mb-2" name="studentid" id="studentid-1" placeholder="Student ID" required>
                        <input type="text" class="form-control mb-2" name="email" id="email" placeholder="Email" required>
                        <input type="text" class="form-control mb-2" name="contact" id="contact" placeholder="Contact Number" required>
                        <select class="form-select mt-2 mb-3" name="role" id="role-1" required>
                            <option value="" disabled selected>Select Role</option>
                            <option value="student">Student</option>
                            <option value="attendee">Attendee</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <legend>Feedback Submission</legend>
                        <textarea class="form-control" name="feedback" id="feedback-message" placeholder="Enter your feedback or report an issue" required></textarea>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Check-in & Submit Feedback</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </form>
 </div>