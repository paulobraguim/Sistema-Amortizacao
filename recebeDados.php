<?php 

require('app/Classes/Amortizacao.php');

$saldoDevedor = $_POST['saldoDevedor'];
$taxa = $_POST['taxa'];
$parcelas = $_POST['parcelas'];
$tipo = $_POST['tipo'];

if($tipo == 1){
    echo "Em construção....";
}else{
   
    $var = new Amortizacao($saldoDevedor, $parcelas, $taxa);
    $var->modeloSac();
   
}