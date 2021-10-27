<?php

class Amortizacao{

    private $saldoDevedor;
    private $parcelas;
    private $taxa;
    private $amortizacao;
    private $prestacao;
    private $juros;

    public function __construct($paramSaldoDevedor, $paramParcelas, $paramTaxa){

        $this->saldoDevedor = $paramSaldoDevedor;
        $this->parcelas = $paramParcelas;
        $this->taxa = $paramTaxa;

    }


    public function modeloSac(){

        //Encontra o valor da Amortização
        $this->amortizacao = $this->saldoDevedor / $this->parcelas; 
        for($i = 0;  $i <= $this->parcelas; $i++){ 
            
            if($i == 0){

                echo "<pre>";
                echo "Amortização: R$ $this->amortizacao " . " - Saldo Devedor: R$ $this->saldoDevedor";  
                echo "</pre>";

            }else {

                echo "<pre>";   
                echo "<div style='color:black;padding:15px;margin-right:10px;'>";       
                echo $i . " de " . $this->parcelas . " | $this->juros " . " | $this->amortizacao " . 
                " | $this->prestacao " . " | $this->saldoDevedor " . "<br/>";
                echo "</div>";
                echo "</pre>";

            }            

            $this->juros = ($this->saldoDevedor * $this->taxa) / 100;            
            $this->prestacao = $this->juros + $this->amortizacao;
            $this->saldoDevedor -= $this->amortizacao;

        }
    }

}