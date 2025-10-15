<?php
require_once 'FiguraGeometrica.php';

class Rectangulo extends FiguraGeometrica {
    private $base;
    private $altura;

    public function __construct($tipo, $base, $altura) {
        parent::__construct($tipo);
        $this->setBase($base);
        $this->setAltura($altura);
    }

    public function __destruct() {
        // Destructor opcional
    }

    public function getBase() {
        return $this->base;
    }

    public function setBase($base) {
        $this->base = $base;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->getBase() * $this->getAltura();
    }

    public function calcularPerimetro() {
        return 2 * ($this->getBase() + $this->getAltura());
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
