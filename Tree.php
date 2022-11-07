<?php
class Tree{

    public $name;
    public $evergreen;
    public $height;
    public $edible;

    function __construct($name = null, $evergreen = null, $height = null, $edible = null){
        $this->name = $name;
        $this->evergreen = $evergreen;
        $this->height = $height;
        $this->edible = $edible;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public static function classDescription()
    {
       echo "Si klase skirta kurti medziams ir juos aprasyti.";
    }








}

?>