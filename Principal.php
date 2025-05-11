<?php
require_once 'ConstructorComida.php';


// Builder
$comida = (new ConstructorComida())
    ->establecerPlatoPrincipal("Pizza")
    ->establecerAcompañamiento("Papas fritas")
    ->establecerBebida("Coca-Cola")
    ->construir();
$comida->describir();

    