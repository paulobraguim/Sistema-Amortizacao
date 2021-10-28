<?php 

require('app/Classes/Amortizacao.php');

$saldoDevedor = $_POST['saldoDevedor'];
$taxa = $_POST['taxa'];
$parcelas = $_POST['parcelas'];
$tipo = $_POST['tipo'];

if(!isset($_POST['saldoDevedor']) || !isset($_POST['taxa']) || !isset($_POST['parcelas']) || !isset($_POST['tipo'])){
    
    header('Location: /');
    exit;

}else {

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

}


