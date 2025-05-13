<?php
require_once 'ConstructorComida.php';
require_once 'MetodoEntrega.php';
require_once 'CadenaResponsabilidad.php';  


$comida = (new ConstructorComida())
    ->establecerPlatoPrincipal("Pizza")
    ->establecerAcompañamiento("Papas fritas")
    ->establecerBebida("Coca-Cola")
    ->construir();
$comida->describir();



$pedido1 = new Pedido(new ComerEnSitio());
$pedido1->entregarPedido("Pizza Margarita");

$pedido2 = new Pedido(new ParaLlevar());
$pedido2->entregarPedido("Hamburguesa");

$pedido3 = new Pedido(new EntregaDomicilio());
$pedido3->entregarPedido("Sushi");


$chef = new Chef();
$mesero = new Mesero();
$cajero = new Cajero();
$chef->establecerSiguiente($mesero)->establecerSiguiente($cajero);

$chef->manejar("preparar"); 
$chef->manejar("servir");    
$chef->manejar("cobrar");  
?>
