<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercício: Interação entre ficheiros PHP: preenchimento de formulários e devolução de dados - método POST</title>
</head>
<body>
    <form name="teste1" method="post" action="ficheiro2.php" >
        Nome <input type="text" name="nome"><br>
        Morada <input type="text" name="morada"><br>
        idade <input type="text" name="idade"><br>
        Tem animais de estimação? Se sim, selecione a checkbox.
        <input type="checkbox" name="animais"><br>
        <input type="submit" name="enviar">
    </form>
</body>
</html>