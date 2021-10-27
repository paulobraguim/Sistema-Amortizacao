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
            echo "<pre>";       
            echo $i . " de " . $this->parcelas . "&nbsp;&nbsp;&nbsp;" .  " $this->juros " . "&nbsp;&nbsp;&nbsp;" . " $this->amortizacao". "&nbsp;&nbsp;&nbsp;" . 
            " $this->prestacao " . "&nbsp;&nbsp;&nbsp;" . " $this->saldoDevedor " . "<br/>";
            echo "</pre>";

            $this->juros = ($this->saldoDevedor * $this->taxa) / 100;            
            $this->prestacao = $this->juros + $this->amortizacao;
            $this->saldoDevedor -= $this->amortizacao;

        }

    }

}