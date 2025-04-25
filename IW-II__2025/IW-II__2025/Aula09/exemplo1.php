<?php
    include_once("Pessoa.class.php");

    // Instanciar um objeto (Nova pessoa)
    $Pessoa1 = new Pessoa;
    $Pessoa2 = new Pessoa;

    // Atribuir ALGUNS valores
    $Pessoa1->Nome = "Fulano da Silva";
    $Pessoa1->Peso = 85.3;
    $Pessoa1->Altura = 1.82;

    $Pessoa2->Nome = "Maria";
    $Pessoa2->Peso = 50;
    $Pessoa2->Altura = 1.55;

    // Chamando um método da classe pessoa
    $Pessoa1->MostrarDados();
    $Pessoa2->MostrarDados();

?>