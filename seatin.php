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

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'userform';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $studentid = $_POST['studentid'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $role = $_POST['role'];
    $feedback = $_POST['feedback'];

    // Create a connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO seatin (fullname, studentid, email, contact, role, feedback) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $fullname, $studentid, $email, $contact, $role, $feedback);

    // Execute the statement
    if ($stmt->execute()) {
        // Close the statement
        $stmt->close();

        // Close the database connection
        $conn->close();

        // Redirect the user back to the same page
        header("Location: seatin.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;

        // Close the statement
        $stmt->close();

        // Close the database connection
        $conn->close();
    }
}

// Fetch data from the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM seatin";
$result = $conn->query($sql);
?>

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
       
                <div class="container">
                    <h3 class="text mb-4"></h3>
                </div>
                <div id="seat-map">
                    <h1>Seat History</h1>
                    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Student ID</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Role</th>
                    <th>Feedback</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>
                            <td>' . $row['fullname'] . '</td>
                            <td>' . $row['studentid'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['contact'] . '</td>
                            <td>' . $row['role'] . '</td>
                            <td>' . $row['feedback'] . '</td>
                        </tr>';
                    }
                } else {
                    echo '<tr><td colspan="6">No records found.</td></tr>';
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
                </div>
                 

            
</body>     
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="scripts.js"></script>
</html>
