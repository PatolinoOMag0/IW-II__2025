<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="exe1.php" method="GET">
        <P>Digite seu nome e suas ultimas 3 notas para descobrir sua média</P>
        <input type="text" name="cxnome" id="" required>

        <input type="number" id="" name="cxnota1" min="0" max="10" required>

        <input type="number" id="" name="cxnota2" min="0" max="10" required>

        <input type="number" id="" name="cxnota3" min="0" max="10" required>

        <input type="submit" value="Calcular Média">
    </form>
</body>
</html>