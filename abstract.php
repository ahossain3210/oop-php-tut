<!--Abstract Class: Abstract class is defined with the keywords abstract.
Its doesn't create object directly of an abstract class.-->
<?php
abstract class Student{
    public $name="Anwar Hossain";
    public $age="25";
    public function student_info()
    {
        echo "$this->name"." is ". $this->age." years old.";
    }
}
class Teacher extends Student{
    public function student_details()
    {
        return parent::student_info();
    }
}


$student=new Teacher();
$student->student_details();


?>