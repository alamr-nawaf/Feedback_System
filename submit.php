
<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";  // تغيير إلى اسم السيرفر
$username = "root";         // تغيير إلى اسم المستخدم
$password = "";             // تغيير إلى كلمة المرور
$dbname = "feedback_db";    // تغيير إلى اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استلام البيانات المرسلة من النموذج
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
    