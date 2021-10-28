<?php 

require('app/Classes/Amortizacao.php');

$saldoDevedor = $_POST['saldoDevedor'];
$taxa = $_POST['taxa'];
$parcelas = $_POST['parcelas'];
$tipo = $_POST['tipo'];

switch($tipo){

    case 1: 
        $var = new Amortizacao($saldoDevedor, $parcelas, $taxa);
        $var->modeloPrice();    
        break;
    
    case 2: 
        $var = new Amortizacao($saldoDevedor, $parcelas, $taxa);
        $var->modeloSac(); 
        break;
    
    default: 
        "Valores inválidos!";    

}
