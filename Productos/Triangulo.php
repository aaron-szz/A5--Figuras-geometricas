<?php
require_once 'FiguraGeometrica.php';

class Triangulo extends FiguraGeometrica {
    private $altura;

    public function __construct($tipoFigura, $base, $altura) {
        parent::__construct($tipoFigura, $base);
        $this->setAltura($altura);
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function calcularArea() {
        return ($this->getBase() * $this->getAltura()) / 2;
    }

    public function calcularPerimetro() {
        return $this->getBase() * 3; // Triángulo equilátero
    }

   public function __toString() {
        return "Figura: " . $this->getTipoFigura() . "<br>" .
               "Base: " . $this->getBase() . "<br>" .
               "Altura: " . $this->getAltura() . "<br>" .
               "Área: " . $this->calcularArea() . "<br>" .
               "Perímetro: " . $this->calcularPerimetro() . "<br>";

}
}
?>
