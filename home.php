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
</section>
    <!-- Modal -->
    <?php include 'components/modal.php'; ?>
        
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="scripts.js"></script>
</html>
