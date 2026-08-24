<?php

class StudentAccount{
    public $name;               //public property is accessable inside and outside of class.
    private $studentId;         //pirvate property is only accessable inside the class it is defined.
    protected $department;      //protected property is accessable within the class it is defined and its subclasses.

    function __construct($name, $studentId, $department){
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function showInfo(){
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }

    function getStudentId(){
        return $this->studentId;
    }
}

$student1 = new StudentAccount("Ahmad", 1001, "Computer Science");
$student1->showInfo();
echo "Student ID from method: " . $student1->getStudentId() . "<br>"."<br>";


class Person{
    protected $name;

    function __construct($name){
        $this->name = $name;
    }

    function introduce(){
        echo "My name is " . $this->name . "<br>";
    }
}

class Student extends Person{       //here the Student class has inherited the class Person.
    function study(){
        echo $this->name . " is studying"."<br>"."<br>";
    }
}

$student2 = new Student("Sara");
$student2->introduce();             //we can see here that the introduce function is not inside the subclass Student it is inside the superclass Person, but we have called it using the object of class Student.
$student2->study();


class Employee{
    public $company;
    protected $name;
    private $salary;

    function __construct($name, $company, $salary){
        $this->name = $name;
        $this->company = $company;
        $this->salary = $salary;
    }

    function showEmployee(){
        echo "Name: " . $this->name . "<br>";
        echo "Company: " . $this->company . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }

    function getSalary(){
        return $this->salary;
    }
}

class Manager extends Employee{         //here the Manager class has inherited the class Employee.
    function manageTeam(){
        echo $this->name . " is managing the team." . "<br>";
    }
}

$manager1 = new Manager("Ali", "Kabul Tech", 30000);
$manager1->showEmployee();              //we can see here that the showEmployee function is not inside the subclass Manager it is inside the superclass Employee, but we have called it using the object of class Manager.
echo "Salary from method: " . $manager1->getSalary() . "<br>";
$manager1->manageTeam();

//1. what does public mean?                     public property or funciton is accessable inside and outside of the class it is defined.
//2. what does private mean?                    private propery or function is accessable just inside of the class it is defined.
//3. what does protected mean?                  protected property or function is accessable inside of the class it is defined and its subclasses.
//4. what is the purpose of extends?            extends are used when we want to use same funtions and properties in more than one class or when many classes has common things in between we use extends.
//5. which class is called the parent class?    the class which other classes inherit from is called the parent class.
//6. which class is called the child class?     the class or classes that inherit from the parent class is called the child class.
//7. why is protected usefull in inheritance?   protected is usefull because the functions and properties are only accessable within the class and its subclasses.

?>


