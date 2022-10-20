<?php

class Transportation{
    public $acc;
    public $turnsignal;
    public $turn;
    public $stop;
    public $engine;
    
    function rule($sign){
     if($sign=="red"){
        $stop=true;
     }
    }
    protected function direction($turnsignal){
     switch ($turnsignal) {
        case 'right':
            $turn="right";
            break;
        case 'left':
            $turn="left";
            break;
        case '':
            $turn="straight";
            break;
     }
    }
}

class car extends Transportation{
    
    public $door=4;
    public $tire=4;
    public $engine="3000cc";


    function direction($turnsignal){
     parent::direction($turnsignal);
    }
    function rule($sign){
        if($sign=="red"){
           $stop=true;
        }
       }
}
class scooter extends Transportation{
    
    public $door=0;
    public $tire=2;
    public $engine="125cc";

    function direction($turnsignal){
    parent::direction($turnsignal);
    }
    function rule($sign){
        if($sign=="red"){
           $stop=true;
        }
       }
}
