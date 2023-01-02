<?php
use Carbon\Carbon;
require 'vendor/autoload.php';
echo "new line";

class validation{
    public function fatvalidation($fat)
    {
        if(is_numeric($fat)){
            if($fat<130 && $fat > 70){
                return true;
            }
        }
           return false; 
    }
    public function genderValidate($gender){

        if($gender){
        if($gender=="male"||$gender == "femal"){
            return true;
        }
    }
    return false;
}

    public function lengthvalidate($length){

        if($length>=60 && $length<=200 ){
            return true;
        }
        
    }
    public function barthevalidation($DateofBirth ){
       
        $first = Carbon::create("1970-1-1")->format('Y-m-d');
        $second = Carbon::now()->format('Y-m-d');
      return   Carbon::create($DateofBirth )->isBetween($first, $second, false) ? true:  false; 
    }
    public function phonevalidation($phone){
        $output = preg_replace( '/[^0-9]/', '', $phone );
        if($phone==$output){
            return true;
        }
        return false;
        
    }
 
}

?>