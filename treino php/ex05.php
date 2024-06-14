<?php
require_once("variaveis.php");
//declarando valores
$valor1 = 10;
$valor2 = 3;
$total = 0;
print("\n iniciando \n");
//somando
print("Soma valores " .$valor1." e ".$valor2. "...\n");
$total = $valor1 + $valor2;
print ("Total: $total\n");

//subtraindo
print("Subtraindo valores " .$valor1." e ".$valor2. "...\n");
$total = $valor1 - $valor2;
print ("Total: $total\n");

//multiplicando
print("Multiplicando valores " .$valor1." e ".$valor2. "...\n");
$total = $valor1 * $valor2;
print ("Total: $total\n");

//dividindo - quociente
print("Dividindo valores " .$valor1." e ".$valor2. " c/ quociente...\n");
$total = $valor1 / $valor2;
print ("Total: $total\n");

//dividindo - resto
print("Dividindo valores " .$valor1." e ".$valor2. " c/ resto...\n");
$total = $valor1 % $valor2;
print ("Total: $total\n");

//prioridade de calculo
print("Totalizando e Dividindo valores " .$valor1." e ".$valor2. " c/ resto...\n");
$total = $total + ($valor1 % $valor2);
print ("Total: $total\n");
?>

