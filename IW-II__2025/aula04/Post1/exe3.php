<?php

$login = $_POST['cxlog'];
$senha = $_POST['cxsen'];
if ($login == "etec" && $senha == "informática") {
    echo "logado com sucesso";
} else {
    echo "Acesso negado";
}
?>