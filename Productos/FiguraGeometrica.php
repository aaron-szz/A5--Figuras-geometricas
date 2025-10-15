<?php

// CLASE FIGURAGEOMETRICA

// Genera la clase FiguraGeometrica con dos atributos llamados tipoFigura y lado1.

// · Genera los métodos getters y setters.

// · Genera el constructor con todos sus atributos y el destructor.

// · Esta clase incluirá un método calcularArea() que inicialmente no tendrá funcionalidad concretaç

class FiguraGeometrica {
    // Atributos
    private $tipoFigura;
    private $base;

    // Constructor
    public function __construct($tipoFigura, $base = null) {
        $this->tipoFigura = $tipoFigura;
        $this->base = $base;
    }

    // Getters
    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    public function getBase() {
        return $this->base;
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