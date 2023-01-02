<?php
class human{
    public $gender;
    public $fat;
    public $length;

    public function __construct($gender,$fat,$length){

        $this->gender=$gender;
        $this->fat=$fat;
        $this->length;
    }
      public function gethuman()
    {
      return $this->gender  ."__". $this->fat ."__".$this->length ;
    }

}
?>