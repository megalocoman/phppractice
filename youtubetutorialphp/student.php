<?php 
    class Student{
        private $name;
        private $major;
        private $gpa;

        function _construct($name, $major, $gpa){
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHonors(){
            if($this->gpa >= 3.5){
                return "true";
            }
            return "false";
        }

        function setName($name){
            $this->name = $name;
        }
        function setMajor($major){
            $this-> major = $major;
        }
        function setGpa($gpa){
            $this->gpa = $gpa;
        }
    }

    $student1 = new Student("Jim", "Bussines", 2.8);
    $student2 = new Student("pam", "art", 3.6);
    $student1->setGpa(4);
    echo  $student1->hasHonors()."<br>";
    echo  $student2->hasHonors()."<br>";
?>