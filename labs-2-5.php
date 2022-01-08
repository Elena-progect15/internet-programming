<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кадалова Е. В.</title>
</head>
<body>
<p> СР№1 Кадалова Е. В. Вариант 8
<p>
    <?php
    $a = rand(-10, 10);
    $b = rand(-10, 10);
    print "a = $a <br>";
    print "b= $b <br>";
    if (($b == 0) or (pow($a, 6)) == 0) {
        echo "Нельзя делить на 0";
    } else {
        $z = fun($a + (1 / $b), pow($b, 8) / pow($a, 6)) + fun(pow($a, 3 / 4) - pow($b, 5 / 6), $b - $a);
        echo("Значение z = " . $z . "<br>");
    }

    function fun($u, $t)
    {

        if ($u >= 0 and $t >= 0) {
            $r = $u + 2 * $t;
        } elseif ($u < 0 and $t >= 0) {
            $r = $u + $t;
        } elseif ($u >= 0 and $t < 0) {
            $r = $u * $u - 2 * $t;
        } elseif ($u < 0 and $t < 0) {
            $r = $u * 3 + $t;
        }
        return $r;
    }

    ?>

<p> СР№1 Кадалова Е. В. Вариант 13
<p>
    <?php
    $a = rand(-10, 10);
    $b = rand(-10, 10);
    print "a = $a <br>";
    print "b= $b <br>";
    if ($b == 0 or ($a / $b + pow($b, 2)) == 0 or ($a / $b) == 0 or $a - $b == 0) {
        echo "Нельзя делить на 0";
    } else {
        $z = pow(cos(func($a, $b)), 3) + func($a + $b, $a - $b);
        echo("Значение z = " . $z . "<br>");
    }

    function func($u,$t) {
        if ($u * $t < 1 / 2 ) {
            $z = (1 + cos($t - $u)) / ($u / $t + pow($t, 2));
        } elseif ($u * $t >= 1 / 2 ) {
            $z = sin(log(abs($u / $t), 10));
        }
        return $z;
    }

    ?>

</body>
</html>