<?php
abstract class ManejadorPedido {
    protected $siguienteManejador;

    public function establecerSiguiente(ManejadorPedido $manejador) {
        $this->siguienteManejador = $manejador;
        return $manejador;
    }

    public function manejar($peticion) {
        if ($this->siguienteManejador !== null) {
            $this->siguienteManejador->manejar($peticion);
        }
    }
}

class Chef extends ManejadorPedido {
    public function manejar($peticion) {
        if ($peticion == "preparar") {
            echo "El chef está preparando la comida.\n";
        } else {
            parent::manejar($peticion);
        }
    }
}

class Mesero extends ManejadorPedido {
    public function manejar($peticion) {
        if ($peticion == "servir") {
            echo "El mesero está sirviendo la comida.\n";
        } else {
            parent::manejar($peticion);
        }
    }
}

class Cajero extends ManejadorPedido {
    public function manejar($peticion) {
        if ($peticion == "cobrar") {
            echo "El cajero está cobrando la cuenta.\n";
        } else {
            parent::manejar($peticion);
        }
    }
}
