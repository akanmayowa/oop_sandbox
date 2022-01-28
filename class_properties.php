<?php

Class Student{
var $first_name;
var $last_name;
var $country = 'None';


public function say_hello(){
  return 'hello_world';
}


public function full_name(){

  return $this->first_name. " " . $$this->last_name;
}

}



$student1 = new Student;
print $student1->first_name = 'lucky'. "<br />";
print $student1->last_name = 'johnex'. "<br />";
echo $student1->full_name() . "<br />";

echo $student1->say_hello();. "<br />";
echo $student2->say_hello();. "<br />";



$student2 = new Student;
$student2->first_name = 'lucky';
$student2 ->last_name = 'johnex';





?>
