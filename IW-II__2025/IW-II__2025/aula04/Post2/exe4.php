<?php
    $nome = ($_POST['cxnome']);
    $email = ($_POST['cxemail']);
    $data = ($_POST['cxdata']);
    $cartao = ($_POST['cxcartao']);
    echo "Dados Informados: ";
    echo "Nome: $nome";
    echo "E-mail: $email";
    echo "Data de Nascimento: $data";
    echo "Bandeira do Cartão: $cartao";
?>