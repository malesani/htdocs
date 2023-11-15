<?php

interface FigureGeometriche{
    public function calcolaMisura();
}

////////////////////////////////////////////////////////////////////

class Cerchio implements FigureGeometriche{
    private $raggio;

    public function __construct($raggio){
        $this -> raggio = $raggio;
    }

    public function calcolaMisura(){
        return $this -> raggio * $this -> raggio  * pi();
    }
}

$cerchio1 = new Cerchio(3);

echo "area del cerchio: " . $cerchio1 -> calcolaMisura();

//////////////////////////////////////////////////////////////////

echo '<br> --------------- <br>';

class Quadrato implements FigureGeometriche{
    private $lato;

    public function __construct($lato){
        $this->lato=$lato;
    }
    public function calcolaMisura(){
        return $this->lato * $this->lato;
    }

}

$quadrato1 = new Quadrato(5);
echo "area del quadrato: " . $quadrato1 -> calcolaMisura();



?>