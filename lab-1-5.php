<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кадалова Елена Вадимовна</title>
</head>
<body>
<p> СР№1 Кадалова Е. В. Вариант 8
<p>
    <?php
    echo('Выражение: (b * (2 * c) + d - 52) / (a / 3 + 1) <br>');
    $a = rand(-20, 20);
    if ($a = -3)
        $a = rand(-20, 20);
    $b = rand(-20, 20);
    $c = rand(-20, 20);
    $d = rand(-20, 20);
    print "a = $a <br>";
    print "b = $b <br>";
    print "c = $c <br>";
    print "d = $d <br>";
    echo("Выражение: ($b * (2 * $c) + $d - 52) / ($a / 3 + 1) <br>");
    $result = ($b * (2 * $c) + $d - 52) / ($a / 3 + 1);
    echo('Результат:  ' . $result . ' - тип -' . gettype($result));
    ?>
<p> СР№1 Кадалова Е. В. Вариант 13
<p>
    <?php
    echo('Выражение: ((c * (b + 23)) / (a / 2 - 4 * d - 1) <br>');
    $a = rand(-20, 20);
    $b = rand(-20, 20);
    $c = rand(-20, 20);
    $d = rand(-20, 20);
    print "a = $a <br>";
    print "c = $c <br>";
    print "d = $d <br>";
    echo("Выражение: (($c * ($b + 23)) / ($a / 2 - 4 * $d - 1)) <br>");
    $result = ($c * ($b + 23)) / ($a / 2 - 4 * $d - 1);
    echo('Результат:  ' . $result . ' - тип -' . gettype($result));
    ?>
</body>
</html>