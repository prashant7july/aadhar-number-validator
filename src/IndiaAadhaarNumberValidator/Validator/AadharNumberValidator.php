<?php

namespace IndiaAadhaarNumberValidator\Validator;
 
use Zend\Validator\AbstractValidator;

class AadharNumber extends AbstractValidator
{
    const AADHARINVALID = 'AADHARINVALID';
 
    public function __construct(array $options = array())
    {
       parent::__construct($options);
    }
 
    public function isValid($value)
    {
        $this->setValue($value);
        
        if(strlen($value)!=12) { 
          $this->error(self::AADHARINVALID);
          return false;
        }

        settype($value, "string");
        $expectedDigit = substr($value, -1);
        $actualDigit = $this->ValidateAadharDigit(substr($value, 0, -1));
        if($expectedDigit != $actualDigit){
            $this->error(self::AADHARINVALID);
            return false;
        }
        return true;       
    }

    private function ValidateAadharDigit($aadhar) {
      $k = array(
        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9), 
        array(1, 2, 3, 4, 0, 6, 7, 8, 9, 5), 
        array(2, 3, 4, 0, 1, 7, 8, 9, 5, 6), 
        array(3, 4, 0, 1, 2, 8, 9, 5, 6, 7), 
        array(4, 0, 1, 2, 3, 9, 5, 6, 7, 8), 
        array(5, 9, 8, 7, 6, 0, 4, 3, 2, 1), 
        array(6, 5, 9, 8, 7, 1, 0, 4, 3, 2), 
        array(7, 6, 5, 9, 8, 2, 1, 0, 4, 3), 
        array(8, 7, 6, 5, 9, 3, 2, 1, 0, 4), 
        array(9, 8, 7, 6, 5, 4, 3, 2, 1, 0)
      ); 

      $perm = array(
          array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9), 
          array(1, 5, 7, 6, 2, 8, 3, 0, 9, 4), 
          array(5, 8, 0, 3, 7, 9, 6, 1, 4, 2), 
          array(8, 9, 1, 6, 0, 4, 3, 5, 2, 7), 
          array(9, 4, 5, 3, 1, 2, 6, 8, 7, 0), 
          array(4, 2, 8, 6, 5, 7, 3, 9, 0, 1), 
          array(2, 7, 9, 3, 8, 0, 6, 4, 1, 5), 
          array(7, 0, 4, 6, 9, 1, 3, 2, 5, 8)
      ); 

      $inverse = array(0, 4, 3, 2, 1, 5, 6, 7, 8, 9); 
      settype($aadhar, "string"); $aadhar = strrev($aadhar); $di = 0;
      for ($i = 0; $i < strlen($aadhar); $i++) { 
        $di = $k[$di][$perm[($i + 1) % 8][$aadhar[$i]]]; 
      }
      return $inverse[$di];
    }
}