<?php

// CLASE FIGURAGEOMETRICA

// Genera la clase FiguraGeometrica con dos atributos llamados tipoFigura y lado1.

// · Genera los métodos getters y setters.

// · Genera el constructor con todos sus atributos y el destructor.

// · Esta clase incluirá un método calcularArea() que inicialmente no tendrá funcionalidad concretaç

class FiguraGeometrica {
    // Atributos
    private $tipoFigura;
    private $lado1;

    // Constructor
    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    // Getters
    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    public function getLado1() {
        return $this->lado1;
    }

    // Setters
    public function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }

    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    // Método para calcular el área (sin funcionalidad concreta)
    public function calcularArea() {
        // Funcionalidad concreta en las clases hijas
    }

    // Destructor
    public function __destruct() {
        // Código de limpieza si es necesario
    }
}