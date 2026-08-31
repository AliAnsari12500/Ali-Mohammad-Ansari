<?php
//Name: Ali Mohammad Ansari
//Father Name: Mohammad Aman
//Semester: 7
//Department: Information Technology
//task_1
class IT{
    const MAX_STUDENTS = 50;
}

echo "IT Max number of students: ".IT::MAX_STUDENTS."<br>";
// the max number of the IT class is constant because it is the number of max students allowed to be in the class

//task2
class StudentCounter{
    public static $count = 0;
    public static function addStudent(){
        self::$count++;
    }
}

StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();
echo "Total students: ".StudentCounter::$count."<br>";

//task3
abstract class Vehicle{
    abstract public function start();
}

class Car extends Vehicle{
    public function start(){
        echo "Car engine started"."<br>";
    }
}

class Bike extends Vehicle{
    public function start(){
        echo "Bike started"."<br>";    
    }
}

$car1 = new Car();
$bike1 = new Bike();

$car1->start();
$bike1->start();
?>