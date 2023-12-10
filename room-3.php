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
                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Check room
                            </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="room-1.php">Room 1</a></li>
                                    <li><a class="dropdown-item" href="room-2.php">Room 2</a></li>
                                    <li><a class="dropdown-item" href="room-3.php">Room 3</a></li>
                                </ul>
                </div>
                <div id="seat-map">
                    <div class="table-responsive">
                        <table class="table table-sm table_custom table-condensed  mt-5 border-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>
                                        <div class="teachers-table text-center">
                                                <img onclick="showForm()" src="images/insimage.png" class="img-fluid"> 
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
                                            <img onclick="showForm(1)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC1</h4>
                                        </div>   
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(2)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC2</h4>
                                        </div>                       
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(3)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC3</h4>
                                        </div>   
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(4)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC4</h4>
                                        </div>   
                                    </td>
                                    <td>
                                            
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(5)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC5</h4>
                                        </div>                         
                                    </td>
                                    <td>
                                    <div class="seat-list text text-center ">
                                            <img onclick="showForm(6)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC6</h4>
                                        </div>    
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(7)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC7</h4>
                                        </div>                         
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(8)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC8</h4>
                                        </div>                       
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(9)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC9</h4>
                                        </div>   
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(10)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC10</h4>
                                        </div>                       
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(11)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC11</h4>
                                        </div>   
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(12)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC12</h4>
                                        </div>   
                                    </td>
                                    <td>
                                            
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(13)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC13</h4>
                                        </div>                         
                                    </td>
                                    <td>
                                    <div class="seat-list text text-center ">
                                            <img onclick="showForm(14)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC14</h4>
                                        </div>    
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(15)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC15</h4>
                                        </div>                         
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(16)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC16</h4>
                                        </div>                       
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(17)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC17</h4>
                                        </div>   
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(18)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC18</h4>
                                        </div>                       
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(19)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC19</h4>
                                        </div>   
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(20)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC20</h4>
                                        </div>   
                                    </td>
                                    <td>
                                            
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(21)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC21</h4>
                                        </div>                         
                                    </td>
                                    <td>
                                    <div class="seat-list text text-center ">
                                            <img onclick="showForm(22)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC22</h4>
                                        </div>    
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(23)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC23</h4>
                                        </div>                         
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(24)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC24</h4>
                                        </div>                       
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(25)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC25</h4>
                                        </div>   
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(25)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC25</h4>
                                        </div>                       
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(26)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC26</h4>
                                        </div>   
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(27)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC27</h4>
                                        </div>   
                                    </td>
                                    <td>
                                            
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(28)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC28</h4>
                                        </div>                         
                                    </td>
                                    <td>
                                    <div class="seat-list text text-center ">
                                            <img onclick="showForm(29)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC29</h4>
                                        </div>    
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(30)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC30</h4>
                                        </div>                         
                                    </td>
                                    <td>
                                        <div class="seat-list text text-center ">
                                            <img onclick="showForm(31)" src="images/pc.png" class="img-fluid ">   
                                            <h4>PC31</h4>
                                        </div>                       
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
    </section>
        <!-- Modal -->
        <?php include 'components/modal.php'; ?>
            
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="scripts.js"></script>
</html>
