
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

// جلب البيانات من قاعدة البيانات
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

echo "<h1>All Feedback</h1>";

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Student Name</th>
                <th>Course</th>
                <th>Feedback</th>
                <th>Rating</th>
                <th>Date</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["student_name"] . "</td>
                <td>" . $row["course"] . "</td>
                <td>" . $row["feedback"] . "</td>
                <td>" . $row["rating"] . "</td>
                <td>" . $row["created_at"] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No feedback found";
}

$conn->close();
?>
    