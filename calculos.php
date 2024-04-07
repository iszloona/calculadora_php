<?php
include ("./index.php");

if ($_POST) {
    $v1 = $_POST['valor1']
    $v2 = $_POST['valor2']
    $op = $_POST['operacao']

    if ($op == 'soma') {
        $total = $v1 + $v2;
        echo $total;
    } 
    else if ($op == 'subtração') {
        $total = $v1 - $v2;
        echo $total;
    }
    else if ($op == 'multiplicação') {
        $total = $v1 * $v2;
        echo $total;
    }
    else if ($op == 'divisão') {
        $total = $v1 /   $v2;
        echo $total;
    }

}
?>