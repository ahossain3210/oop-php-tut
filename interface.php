<!--Interface : Interface doesn't contain code or any business logic.
It defines methods names & arquements but not the contents of methods.-->

<?php

interface School{
    public function my_school();
    public function my_college();
    public function my_versity();
}
class Teacher implements School{
    public function my_school() {
        echo "I am a school teacher.<br>";
    }
    public function my_college() {
        echo "I am a College teacher.<br>";
    }
    public function my_versity() {
        echo "I am a Versity teacher";
    }
}
$teacher=new Teacher();
$teacher->my_school();
$teacher->my_college();
$teacher->my_versity();
?>