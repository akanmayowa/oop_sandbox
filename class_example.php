<?php 

class Student{


}

$classes =  get_declared_classes();

echo  "Classes: " . implode(', ', $classes) . "<br />>";

$class_names = ['student', 'Student', 'person'];
 
foreach($class_names as $class_name)
{
    if(class_exists($class_name))
    {
   
        echo "{$class_name} is a created and declared class. <br />" ;
    }
    else{
   
         echo "{$class_name} not declared.........<br />";
    }
}



?>