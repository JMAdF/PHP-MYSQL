<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            function somarDias($dias){
                $seguinte = time() + ($dias* 24 * 60 * 60);
                echo 'Proxima data' .date('Y.m.d', $seguinte);
            }
            somarDias(4);
        ?>
    </p>
</body>
</html>