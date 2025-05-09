<?php
    class lampada{

        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status = True;
        }
        public function Desligar(){
            $this->Status = False;
        }
        public function MostrarDados(){
            echo "FABRICANTE: ".$this->Fabricante."<br>";
            echo "TENSÃO: ".$this->Tensao."<br>";
            echo "POTÊNCIA: ".$this->Potencia."<br>";
            echo "COR: ".$this->Cor."<br>";
            if($this->Status == 1){
                echo "Status da Lâmpada: Ligada<br>";
            }else{
                echo "Status da Lâmpada: Desligada<br>";
            }
    
        }

    }
?>