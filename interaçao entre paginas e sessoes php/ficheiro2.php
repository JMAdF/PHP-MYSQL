<?php
session_start();
if (!empty($_SESSION['cor'])){
    $cor = $_SESSION['cor'];
} else {
    $cor='Vazio';
}
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INTERAÇÃO ENTRE PÁGINAS E SESSÕES</title>
</head>
<body>
   <?php echo $cor ?>
</body>
</html>