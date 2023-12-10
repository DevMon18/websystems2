<?php
// Replace 'hostname', 'username', 'password', and 'database' with your actual database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'userform';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle the database connection error
    die("Database connection failed: " . $e->getMessage());
}

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $fullname = $_POST['fullname'];
    $studentid = $_POST['studentid'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $role = $_POST['role'];
    $feedback = $_POST['feedback'];

    // Prepare and execute the SQL statement to insert the form data into the database table
    $stmt = $pdo->prepare("INSERT INTO seatinfo (fullname, studentid, email, contact, role, feedback) VALUES (?, ?, ?, ?, ?, ?)");

    try {
        $stmt->execute([$fullname, $studentid, $email, $contact, $role, $feedback]);

        // Update the occupied seat count
        $occupiedSeat = $pdo->query("SELECT COUNT(*) FROM seatinfo")->fetchColumn();

        // Update the occupied seat count in the database
        $updateStmt = $pdo->prepare("UPDATE usertable SET occupied_seat = ? WHERE email = ?");
        $updateStmt->execute([$occupiedSeat, $email]);

        // Redirect the user back to the home page or display a success message
        header('Location: home.php');
        exit();
    } catch (PDOException $e) {
        // Handle the database insert error
        die("Database insert failed: " . $e->getMessage());
    }
}
?>