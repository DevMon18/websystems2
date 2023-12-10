<?php require_once "components/controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="stylesheet.css">

</head>
<body>

    <?php include 'components/side-nav.php'; ?>

<section class="dashboard">
    <?php include 'components/top-nav.php'; ?>
    <?php include 'components/dash-content.php'; ?>

                <div class="container">
                    <h3 class="text mb-4">Seat Map</h3>
                    <div id="seat-map">
                        <div class="table-responsive">
                            <table class="table table-sm table_custom table-condensed  mt-5">
                                <thead>
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                      <th>
                                        <div class="teachers-table text-center">
                                      <img onclick="showForm()" src="images\insimage.png" class="img-fluid"> 
                                        <h4 class="">Teachers Table</h4>
                                        </div>
                                      </th>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="seat-list text text-center ">
                                                <img onclick="showForm(1)" src="images\pc.png" class="img-fluid ">   
                                                <h4>PC1</h4>
                                            </div>
                                            
                                        </td>
                                        <td>
                                        <div class="seat-list text text-center">
                                                <img onclick="showForm(2)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC2</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text text-center">
                                                <img onclick="showForm(3)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC3</h4>
                                            </div>
                                        </td>
                                        <td> 
                                        <div class="seat-list text text-center">
                                                <img onclick="showForm(4)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC4</h4>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td>
                                        <div class="seat-list text text-center">
                                                <img onclick="showForm(5)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC5</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text text-center">
                                                <img onclick="showForm(6)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC6</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text text-center ">
                                                <img onclick="showForm(7)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC7</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC8</h4>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

        <!-- Modal -->
            <div class="modal fade" id="seatModal" tabindex="-1" aria-labelledby="seatModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="seatModalLabel">Seat Check-in & Feedback</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <fieldset>
                        <legend>Seat Check-in</legend>
                        <input type="text" class="form-control mb-2" id="fullname-1" placeholder="Full Name" required>
                        <input type="text" class="form-control mb-2" id="studentid-1" placeholder="Student ID" required>
                        <input type="email" class="form-control mb-2" id="email-1" placeholder="Email" required>
                        <select class="form-select mt-2 mb-3" id="role-1" required>
                        <option value="" placeholder="Select Role" disabled>Select Role</option>
                        <option value="student">Student</option>
                        <option value="attendee">Attendee</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <legend>Feedback Submission</legend>
                        <textarea class="form-control" id="feedback-message" placeholder="Enter your feedback or report an issue" required></textarea>
                    </fieldset>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="submitForm()">Check-in & Submit Feedback</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
                </div>
            </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="scripts.js"></script>
</html>
