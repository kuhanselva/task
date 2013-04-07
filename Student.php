<?php
 /*
 *  Inheritence , extending Student Class From Person 
 */
 
  class Student extends Person{
  protected $_major; 
  
  public function set_major($major){
      $this->_major=$major; 
  }  
  public function get_major(){
      return $this->_major;
      
  } 
  }
?>
