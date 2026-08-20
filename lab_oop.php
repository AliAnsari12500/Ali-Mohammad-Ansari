<?php
class Student{
    function sayHello(){                // we have created a function or method named sayHello in the Student class
        echo "Hello! I am a student.". "<br>". "<br>";
    }

    public $name;
    public $studentId;
    public $department;

    function __construct($name, $studentId, $department){   // we have used this function in order to be able to use the values of these variables in more than one functions
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function showInfo(){
        echo "Name: ".$this->name. "<br>";
        echo "Student ID: ".$this->studentId. "<br>";
        echo "Department: ".$this->department. "<br>". "<br>";
    }


}

$student1 = new Student("Ahmad", 1001, "Computer Sience");  // we have created an object from the Student class in order to use the properties or methods of the class
                                                            // we have assigned the values here because we have used the __construct function, so we just assign values here and then in every function where these variables are needed we do not need to assign again

$student1->sayHello();      // here using the created object we have called the function from the class
$student1->showInfo();      // see here we do not assign any value to variables because we just did it while creating the object using constructor

$student2 = new Student("Sara", 1002, "Information System");    // created another object from the same class
$student2->showInfo();

// the questions from the lab:
// how many classes did you create?     I just created one class Student.
// how many objects did you create?     I created two objects $student1 and $student2.
?>