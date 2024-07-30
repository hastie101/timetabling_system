<?php  

class DatabaseFactory {  
    private $pdo;  

    public function __construct($host, $db, $user, $pass) {  
        $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);  
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    }  

    public function seedClasses() {  
        $classes = [  
            ['ClassName' => 'Mathematics 101'],  
            ['ClassName' => 'Physics 101'],  
            ['ClassName' => 'Chemistry 101'],  
            ['ClassName' => 'Biology 101'],  
            ['ClassName' => 'Computer Science 101'],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO Classes (ClassName) VALUES (:ClassName)");  
        
        foreach ($classes as $class) {  
            $stmt->execute($class);  
        }  
    }  

    public function seedStudents() {  
        $students = [  
            ['StudentName' => 'John Doe', 'Email' => 'john.doe@example.com'],  
            ['StudentName' => 'Jane Smith', 'Email' => 'jane.smith@example.com'],  
            ['StudentName' => 'Alice Johnson', 'Email' => 'alice.johnson@example.com'],  
            ['StudentName' => 'Bob Brown', 'Email' => 'bob.brown@example.com'],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO Students (StudentName, Email) VALUES (:StudentName, :Email)");  
        
        foreach ($students as $student) {  
            $stmt->execute($student);  
        }  
    }  

    public function seedCourses() {  
        $courses = [  
            ['CourseName' => 'Intro to Programming', 'Credits' => 3],  
            ['CourseName' => 'Data Structures', 'Credits' => 4],  
            ['CourseName' => 'Web Development', 'Credits' => 3],  
            ['CourseName' => 'Database Systems', 'Credits' => 3],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO Courses (CourseName, Credits) VALUES (:CourseName, :Credits)");  
        
        foreach ($courses as $course) {  
            $stmt->execute($course);  
        }  
    }  

    public function seedClassSchedule() {  
        $classSchedules = [  
            ['ClassID' => 1, 'CourseID' => 1, 'TimeSlot' => '09:00:00'],  
            ['ClassID' => 1, 'CourseID' => 2, 'TimeSlot' => '11:00:00'],  
            ['ClassID' => 2, 'CourseID' => 3, 'TimeSlot' => '10:00:00'],  
            ['ClassID' => 3, 'CourseID' => 4, 'TimeSlot' => '14:00:00'],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO ClassSchedule (ClassID, CourseID, TimeSlot) VALUES (:ClassID, :CourseID, :TimeSlot)");  
        
        foreach ($classSchedules as $schedule) {  
            $stmt->execute($schedule);  
        }  
    }  

    public function seedEnrollment() {  
        $enrollments = [  
            ['StudentID' => 1, 'ClassID' => 1],  
            ['StudentID' => 1, 'ClassID' => 2],  
            ['StudentID' => 2, 'ClassID' => 1],  
            ['StudentID' => 3, 'ClassID' => 3],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO Enrollment (StudentID, ClassID) VALUES (:StudentID, :ClassID)");  
        
        foreach ($enrollments as $enrollment) {  
            $stmt->execute($enrollment);  
        }  
    }  

    public function seedInstructors() {  
        $instructors = [  
            ['InstructorName' => 'Dr. Alice Walker'],  
            ['InstructorName' => 'Dr. Bob Martin'],  
            ['InstructorName' => 'Dr. Carol White'],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO Instructors (InstructorName) VALUES (:InstructorName)");  
        
        foreach ($instructors as $instructor) {  
            $stmt->execute($instructor);  
        }  
    }  

    public function seedCourseInstructors() {  
        $courseInstructors = [  
            ['CourseID' => 1, 'InstructorID' => 1],  
            ['CourseID' => 2, 'InstructorID' => 2],  
            ['CourseID' => 3, 'InstructorID' => 3],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO CourseInstructors (CourseID, InstructorID) VALUES (:CourseID, :InstructorID)");  
        
        foreach ($courseInstructors as $courseInstructor) {  
            $stmt->execute($courseInstructor);  
        }  
    }  

    public function seedAll() {  
        $this->seedClasses();  
        $this->seedStudents();  
        $this->seedCourses();  
        $this->seedClassSchedule();  
        $this->seedEnrollment();  
        $this->seedInstructors();  
        $this->seedCourseInstructors();  
    }  
}  

// Usage  
$factory = new DatabaseFactory('127.0.0.1', 'Timetable_System', 'root', '');  
$factory->seedAll();  

echo "Database seeded successfully!";  
?>