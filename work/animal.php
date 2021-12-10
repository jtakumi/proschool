<?php

class Animal{
    public $cry ="bowbow!";
    function bow(){
        echo $this->cry . PHP_EOL;
    }
}

class dog extends Animal{
    public $cry="わんわん";
}
class cat extends Animal{
    public $cry="ニャーニャー";
}
$anml=new dog();
$anml2=new cat();
$anml->bow();
$anml2->bow();
?>