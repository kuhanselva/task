<?php
/*
* Person Class 
*/
  class Person{
      // Protected Attributes 
   protected $_name, $_age, $_address;
   // Default Constructor To Initilize    
   public function __construct($name,$age,$address){
        $this->_name=$name;
        $this->_age=$age;
        $this->_address=$address;
        } 
   // Public Function to  Display the Person Data 
   public function get_person(){
       $output="Name   =".$this->_name;
       $output .="<br />";
       $output .="Age  =".$this->_age;
       $output .="<br />";
       $output .="Address  =".$this->_address;
       return $output;
   } 
         
  }
?>
