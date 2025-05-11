<?php
class Comida {
    public $platoPrincipal;
    public $acompañamiento;
    public $bebida;

    public function __construct($platoPrincipal, $acompañamiento, $bebida) {
        $this->platoPrincipal = $platoPrincipal;
        $this->acompañamiento = $acompañamiento;
        $this->bebida = $bebida;
    }

    public function describir() {
        echo "Comida preparada: $this->platoPrincipal con $this->acompañamiento y $this->bebida.\n";
    }
}

class ConstructorComida {
    private $platoPrincipal;
    private $acompañamiento;
    private $bebida;

    public function establecerPlatoPrincipal($platoPrincipal) {
        $this->platoPrincipal = $platoPrincipal;
        return $this;
    }

    public function establecerAcompañamiento($acompañamiento) {
        $this->acompañamiento = $acompañamiento;
        return $this;
    }

    public function establecerBebida($bebida) {
        $this->bebida = $bebida;
        return $this;
    }

    public function construir() {
        return new Comida($this->platoPrincipal, $this->acompañamiento, $this->bebida);
    }
}
