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
    for ($i = 0; $i <= 20; $i++) {
        $arr[$i] = rand(-10, 10);
    }
    echo "<pre> Начальный массив: </pre>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $k = array_count_values($arr);
    $ll = max($k);
    $pp = array_keys($k, $ll);
    echo "<pre> Наибольшее вхождение элемента $pp[0]: $ll </pre>";
    ?>
<p> СР№1 Кадалова Е. В. Вариант 13
<p>
    <?php
    for ($i = 0; $i <= 19; $i++) {
        $arr[$i] = rand(-10, 10);
    }
    echo "<pre> Начальный массив: </pre>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $k = 0;
    for ($l = 0; $l <= 20; $l++) {
        if ($arr[$l] % 2 != 0 && $arr[$l] < 0) {
            $k += $arr[$l];
        }
    }
    echo "<pre> Сумма элементов: $k </pre>";
    ?>
</body>
</html>