<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кадалова Е. В.</title>
</head>
<body>
<p> СР№2 Кадалова Е. В. Вариант 8/16
<p>
    <?php
    echo "8. В матрице К(n,n) присвоить каждому диагональному элементу разность между суммами элементов соответствующих строки и столбца.";
    echo "<br>";

    for ($y = 0; $y <= 3; $y++) {
        echo('<br>');
        for ($yx = 0; $yx <= 3; $yx++) {
            $tab[$y][$yx] = rand(-10, 10);
            echo($tab[$y][$yx] . ' ');
        }
    }

    for ($i = 0; $i < 4; $i++) {
        for ($l = 0; $l < 4; $l++) {
            if ($i == $l) {
                $stlb = array_sum(array_column($tab, $l));
                $str = array_sum($tab[$l]);
                $tab[$i][$l] = $str - $stlb;
            }
        }
    }

    echo "<br>";

    for ($y = 0; $y <= 3; $y++) {
        echo('<br>');
        for ($yx = 0; $yx <= 3; $yx++) {
            echo($tab[$y][$yx] . ' ');
        }
    }
    echo "<br>";
    echo "<br>";
    echo "13. Найти сумму элементов A(i,j) массива A(m,n), имеющих заданную разность индексов i-j=k. Число k целое, но не обязательно положительное.";
    echo "<br>";
    $m = rand(-3, 3);
    $sum = 0;
    for ($i = 0; $i < count($tab); $i++) {
        for ($j = 0; $j < count($tab[1]); $j++) {
            if ($i - $j == $m) {
                $sum += $tab[$i][$j];
            }
        }
    }
    echo "<br>";
    echo('Число k = ' . $m . '<br>' . ' Сумма = ' . $sum);
    ?>
</body>
</html>