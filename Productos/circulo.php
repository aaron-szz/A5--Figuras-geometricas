<?php
require_once 'FiguraGeometrica.php';

class Circulo extends FiguraGeometrica {
    private $radio;

    public function __construct($tipo, $radio) {
        parent::__construct($tipo);
        $this->setRadio($radio);
    }

    public function __destruct() {
        // Destructor opcional
    }

    public function getRadio() {
        return $this->radio;
    }

    public function setRadio($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return round(pi() * pow($this->radio, 2), 2);
    }

    public function calcularPerimetro() {
        return round(2 * pi() * $this->radio, 2);
    }

    public function __toString() {
        return "Figura: " . $this->getTipoFigura() . "<br>" .
               "Radio: " . $this->getRadio() . "<br>" .
               "Área: " . $this->calcularArea() . "<br>" .
               "Perímetro: " . $this->calcularPerimetro() . "<br>";
    }
}
?>
