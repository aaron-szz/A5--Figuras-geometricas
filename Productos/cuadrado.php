<?php
require_once 'FiguraGeometrica.php';

class Cuadrado extends FiguraGeometrica {
    private $lado;

    public function __construct($tipofigura, $lado) {
        parent::__construct($tipofigura);
        $this->setLado($lado);
    }

    public function __destruct() {
        // Destructor opcional
    }

    public function getLado() {
        return $this->lado;
    }

    public function setLado($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return pow($this->getLado(), 2);
    }

    public function calcularPerimetro() {
        return $this->getLado() * 4;
    }

    public function __toString() {
        return "Figura: " . $this->getTipoFigura() . "<br>" .
               "Lado: " . $this->getLado() . "<br>" .
               "Área: " . $this->calcularArea() . "<br>" .
               "Perímetro: " . $this->calcularPerimetro() . "<br>";
    }
}
?>
