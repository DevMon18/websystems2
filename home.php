<?php require_once "controllerUserData.php"; ?>
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
    
    <link rel="stylesheet" href="style.css">

</head>
<body>
<nav>
        <div class="logo-name">
            <div class="logo-image mt-3">
                <img class="image ml-2" src="images/logo.png" alt="ads">
            </div>

            <span class="logo_name mt-3">AmpingLab</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-calendar-alt"></i>
                    <span class="link-name">Calendar</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout-user.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div><h7 class="text-right">Welcome! <?php echo $fetch_info['name'] ?>
            <img src="" alt="prof.jpg">
            
            </h7></div>
      
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-user-plus"></i>
                        <span class="text">Available</span>
                        <span class="number"></span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-users-alt"></i>
                        <span class="text">Occupied</span>
                        <span class="number"></span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-user-times"></i>
                        <span class="text">Unavailable</span>
                        <span class="number"></span>
                    </div>
                </div>
            </div>

                <div class="container">
                    <h3 class="mb-4">Seat Map</h3>
                    <div id="seat-map">
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped mt-5">
                                <thead>
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                      <th>
                                        <div class="teachers-table text-center">
                                      <img onclick="showForm()" src="\ALab\images\insimage.png" class="img-fluid"> 
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
                                            <div class="seat-list text-center">
                                                <img onclick="showForm(1)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC1</h4>
                                            </div>
                                            
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(2)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC2</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(3)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC3</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(4)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC4</h4>
                                            </div>
                                        </td>
                                        <td>
                                        
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(5)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC5</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(6)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC6</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(7)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC7</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC8</h4>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC9</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC10</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC11</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC12</h4>
                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC13</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC14</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC15</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC16</h4>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC17</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC18</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC19</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC20</h4>
                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC21</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC22</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC23</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC24</h4>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC25</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC26</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC27</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC28</h4>
                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC29</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC30</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC31</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="seat-list text-center">
                                                <img onclick="showForm(8)" src="\ALab\images\pc.png" class="img-fluid">   
                                                <h4>PC32</h4>
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
<script src="script.js"></script>
</html>
