<?php 
    interface School{
        public function mySchool();
    }
    interface College{
        public function myCollege();
    }
    interface University{
        public function myVarsity();
    }
    class Teacher implements School,College,University{
        public function mySchool()
        {
            echo "I am a School Teacher";
        }
        public function myCollege()
        {
            
            echo "I am a College Teacher";
        }
        public function myVarsity(){
            echo "I am a Varsity Teacher";
        }
    }
    $teacher = new Teacher();
    $teacher->mySchool();
    echo "<br>";
    $teacher->myCollege();
    echo "<br>";
    $teacher->myVarsity();
    echo "<br>";
    class Student implements School,College,University{
        public function mySchool()
        {
            echo "I am a School Student";
        }
        public function myCollege()
        {
            echo "I am a College Studet";
        }
        public function myVarsity()
        {
            echo "I am a University Student";
        }
    }
    $student = new Student();
    $student->mySchool();
    echo "<br>";
    $student->myCollege();
    echo "<br>";
    $student->myVarsity();
?>