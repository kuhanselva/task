<?php
/*
*  includeing Classes  
*/
  require_once('Person.php');
  require_once('Student.php');
  require_once('Teacher.php');
  
  echo "<h2> Student Info </h2>";

  echo"<br /> ";
  // Instantiating the Student  Object 
  $newstudent=new Student('Javed','26','Multan');
  // calling the parent calls function 
  echo $newstudent->get_person();
   //call function to set student Major
  $newstudent->set_major('English');
  echo"<br /> Major = "; 
  echo $newstudent->get_major();
  
    echo "<h2> Teacher Info </h2>";

  echo"<br /> ";
  // Instantiating the Teacher  Object
  $newstudent=new Teacher('Naveed','22','Lahore');
  // calling the parent calls function 
  echo $newstudent->get_person();
  //call function to set department
  $newstudent->set_dept('Computer Science');
  echo"<br /> Department = "; 
  echo $newstudent->get_dept(); 
?>
