<?php 

require('app/Classes/Amortizacao.php');

$saldoDevedor = $_POST['saldoDevedor'];
$taxa = $_POST['taxa'];
$parcelas = $_POST['parcelas'];
$tipo = $_POST['tipo'];

$var = new Amortizacao($saldoDevedor, $parcelas, $taxa);

switch($tipo){    

    case 1:        
        $var->modeloPrice();    
        break;
    
    case 2: 
        $var->modeloSac(); 
        break;
    
    default: 
        "Valores inválidos!";    

}
