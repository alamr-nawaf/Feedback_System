<?php
$servername = "localhost";
$username = "root"; 
$password = "";        
$dbname = "feedback_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$student_name = $_POST['student_name'];
$course = $_POST['course'];
$feedback = $_POST['feedback'];
$rating = $_POST['rating'];

// إدخال البيانات في قاعدة البيانات
$sql = "INSERT INTO feedback (student_name, course, feedback, rating) VALUES ('$student_name', '$course', '$feedback', '$rating')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Your feedback has been submitted successfully!'); window.location.href = 'index.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
