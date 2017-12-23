<!--Defination: when we start to extends classes and add functionality which wasn't the previously
and override the methods, this called as polymorphism.
Basically, the basis of inheritance and override the methods is called polymorphism.-->

<?php
class Student{
    public $name='Anwar Hossain';
    public $age='25';
    public function student_info(){
        
    }
}
class User extends Student{
    public $level='Admin';
    public function student_info(){
        echo "The student name is : ".$this->name;
    }
}
$user=new User();
$user->student_info();
?>