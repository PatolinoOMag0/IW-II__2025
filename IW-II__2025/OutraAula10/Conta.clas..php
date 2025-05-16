<?php
    class Conta{
        public $Nome;
        public $Cpf;
        public $Saldo;

        public function Sacar($valor){
                if($valor > $this->Saldo){
                    return "Saldo insuficiente!";
                }else{
                    $this->Saldo = $this->Saldo - $valor;
                    $texto = "Operação realizada com sucesso!. Saldo atual é R$ " . $this->Saldo;
                    return $texto;}
                //$this->Saldo -= $valor;
        }

        public function Depositar($valor){
            $this->Saldo = $this->Saldo + $valor;
            $texto = "Operação realizada com sucesso!. Saldo atual é R$ " . $this->Saldo;
            //$this->Saldo += $valor;
            return $texto;
        }

        public function ConsultarSaldo() {
            echo "NOME: " . $this->Nome . "<br>";
            echo "CPF: " . $this->Cpf . "<br>";
            echo "SALDO: " . $this->Saldo . "<br>";
        }





    }
?>