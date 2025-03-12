<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
</head>
<body>
    <form action="exe4.php" method="POST">
        <input type="text" id="nome" name="cxnome" required>
        <input type="email" id="email" name="cxemail" required>
        <input type="date" id="data" name="cxdata" required>
        <select id="cartao" name="cxcartao" required>
            <option value="Visa">Visa</option>
            <option value="MasterCard">MasterCard</option>
            <option value="Elo">Elo</option>
            <option value="Inter">Inter</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>