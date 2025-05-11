<?php
interface MetodoEntrega {
    public function entregar($pedido);
}

class ComerEnSitio implements MetodoEntrega {
    public function entregar($pedido) {
        echo "Pedido servido en mesa: $pedido.\n";
    }
}

class ParaLlevar implements MetodoEntrega {
    public function entregar($pedido) {
        echo "Pedido para llevar listo: $pedido.\n";
    }
}

class EntregaDomicilio implements MetodoEntrega {
    public function entregar($pedido) {
        echo "Pedido entregado a domicilio: $pedido.\n";
    }
}

class Pedido {
    private $metodoEntrega;

    public function __construct(MetodoEntrega $metodoEntrega) {
        $this->metodoEntrega = $metodoEntrega;
    }

    public function entregarPedido($pedido) {
        $this->metodoEntrega->entregar($pedido);
    }
}
