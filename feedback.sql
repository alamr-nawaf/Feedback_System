
CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,  
    student_name VARCHAR(100) NOT NULL,
    course VARCHAR(100) NOT NULL, 
    feedback TEXT NOT NULL, 
    rating INT NOT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP  -- تاريخ ووقت الإدخال
);
    