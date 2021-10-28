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

    /**
     * Caracterizado pela Amortização Constante
     * Amortização = Saldo Devedor / Parcelas
     * Juros = Saldo Devedor * taxa 
     * Prestação = Juros + Amortização
     * Saldo Devedor -= Amortização 
     */
    public function modeloSac(){

        //Encontra o valor da Amortização
        $this->amortizacao = $this->saldoDevedor / $this->parcelas; 

        //Operação        
        for($i = 0;  $i <= $this->parcelas; $i++){ 
            
            if($i == 0){

                echo "<pre>";
                echo "Amortização: R$ " . number_format($this->amortizacao, 2, ',', '.') . " - Saldo Devedor: R$ " . number_format($this->saldoDevedor, 2, ',', '.');  
                echo "</pre>";

            }else {

                echo "<pre>";   
                echo "<div style='color:black;padding:15px;margin-right:10px;'>";       
                echo $i . " de " . $this->parcelas . " | " . number_format($this->juros, 2,',', '.')  . " | " . number_format($this->amortizacao, 2, ',', '.')  . 
                " | " . number_format($this->prestacao, 2, ',', '.') . " | " . number_format($this->saldoDevedor, 2, ',', '.')  . "<br/>";
                echo "</div>";
                echo "</pre>";

            }            

            $this->juros = ($this->saldoDevedor * $this->taxa) / 100;            
            $this->prestacao = $this->juros + $this->amortizacao;
            $this->saldoDevedor -= $this->amortizacao;

        }
    }

    /**
     * Caracterizado pela Prestação Constante
     */
    public function modeloPrice(){

        //Conversão da taxa
        $calculoTaxa = $this->taxa / 100;

        //Define o valor da prestação
        $this->prestacao = $this->saldoDevedor * $calculoTaxa * (pow($calculoTaxa + 1, $this->parcelas)) / (pow(1 + $calculoTaxa, $this->parcelas) - 1);

        echo number_format($this->prestacao, 2, ',', '.');
        
        //Operação        
        for($i = 0;  $i <= $this->parcelas; $i++){ 
            
            if($i == 0){

                echo "<pre>";
                echo "Prestação: R$ " . number_format($this->prestacao, 2, ',', '.') . " - Saldo Devedor: R$ " . number_format($this->saldoDevedor, 2, ',', '.');  
                echo "</pre>";

            }else {

                echo "<pre>";   
                echo "<div style='color:black;padding:15px;margin-right:10px;'>";       
                echo $i . " de " . $this->parcelas . " | " . number_format($this->juros, 2,',', '.')  . " | " . number_format($this->amortizacao, 2, ',', '.')  . 
                " | " . number_format($this->prestacao, 2, ',', '.') . " | " . number_format($this->saldoDevedor, 2, ',', '.')  . "<br/>";
                echo "</div>";
                echo "</pre>";

            }      
            
            $this->juros = ($this->saldoDevedor * $this->taxa) / 100;
            $this->amortizacao = $this->prestacao - $this->juros; 
            $this->saldoDevedor -= $this->amortizacao;            

        }        
        
    }

}