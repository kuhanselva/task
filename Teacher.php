<?php
 /*
 *  Inheritence , extending Teacher Class 
 */
  class Teacher extends Person{
  protected $_department;
  public function set_dept($dept){
      $this->_department=$dept;
  }
  public function get_dept(){
      return $this->_department;
  }    
  }
?>
