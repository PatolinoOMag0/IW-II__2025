<?php
    include_once "Conta.clas..php" ;

    //$x = 'Matheus'
    //var_dump($x);

    $conta1 = new Conta();
    //var_dump($conta1);

    $conta1->Nome = 'Matheus';
    $conta1->Cpf = '123.456.789-00';
    $conta1->Saldo = 500;

    echo $conta1->ConsultarSaldo();
    echo '<hr>';

    echo $conta1->Depositar(250);
    echo '<hr>';

    echo $conta1->Sacar(800);
    echo '<hr>';
    

?>
