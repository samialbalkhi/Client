<?php
 namespace lo;
use human;
class person extends human{
    public $farstname;
    public $lastname;
    public $phone;
    public $DateofBirth;    
    public $homeadress;
    
    public function __construct($farstname,$lastname,$phone,$DateofBirth,$homeadress) {
        $this->farstname=$farstname;
        $this->lastname=$lastname;
        $this->phone=$phone;
        $this->DateofBirth=$DateofBirth;
        $this->homeadress=$homeadress;
    }
    public function getperson(){

        return $this->farstname.$this->lastname.$this->phone.$this->DateofBirth.$this->homeadress;
        echo "name";
    }
}

?>