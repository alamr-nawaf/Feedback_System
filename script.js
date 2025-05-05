
// التحقق من صحة البيانات قبل إرسال النموذج
document.getElementById('feedbackForm').addEventListener('submit', function(event) {
    let studentName = document.getElementById('student_name').value;
    let course = document.getElementById('course').value;
    let feedback = document.getElementById('feedback').value;
    let rating = document.getElementById('rating').value;

    // التحقق من أن جميع الحقول مملوءة
    if (!studentName || !course || !feedback || !rating) {
        alert('All fields are required.');
        event.preventDefault();  // إيقاف الإرسال إذا كانت الحقول فارغة
    } else if (rating < 1 || rating > 5) {
        alert('Rating must be between 1 and 5.');
        event.preventDefault();  // إيقاف الإرسال إذا كان التقييم غير صحيح
    }
});
    