<?php
require 'calc.php';

$calc = new Calculadora();

$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->mult(3);
$calc->divide(2);
$calc->add(0.5);

echo "TOTAL: ".$calc->total();

$calc->clear();

?>