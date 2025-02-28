<?php
    $nome = $_POST['cxnome'];

    echo "Bem Vindo, $nome <br>";

    $msg = $_POST['cxmsg'];

    echo "Uma mensagem de $nome: <br>";
    echo "$msg";

?>