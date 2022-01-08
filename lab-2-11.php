<HTML>
<TITLE> Кадалова Е. В. </TITLE>
<BODY>
<p> СР№2 Кадалова Е. В. Вариант 5
</p>
<?php
$ran1 = rand(0, 9999);
$ran2 = rand(0, 9999);
if ($ran2 > $ran1) {
    for ($k = 1; $k < floor(pow($ran2, 1 / 3)); $k++) {
        if (pow($k, 3) > $ran2) {
            break;
        }
        for ($j = 1; $j < floor(pow($ran2, 1 / 3)); $j++) {
            if (pow($j, 3) > $ran2) {
                break;
            }
            for ($d = 1; $d < floor(pow($ran2, 1 / 3)); $d++) {
                if (pow($d, 3) > $ran2) {
                    break;
                }
                $sum = pow($k, 3) + pow($j, 3) + pow($d, 3);
                if ($sum < $ran2 and $sum > $ran1) {
                    echo $sum, ' ';
                }
            }
        }
    }
} else {
    for ($k = 1; $k < floor(pow($ran1, 1 / 3)); $k++) {
        if (pow($k, 3) > $ran1) {
            break;
        }
        for ($j = 1; $j < floor(pow($ran1, 1 / 3)); $j++) {
            if (pow($j, 3) > $ran1) {
                break;
            }
            for ($d = 1; $d < floor(pow($ran1, 1 / 3)); $d++) {
                if (pow($d, 3) > $ran1) {
                    break;
                }
                $sum = pow($k, 3) + pow($j, 3) + pow($d, 3);
                if ($sum > $ran2 and $sum < $ran1) {
                    echo $sum, ' ';;
                }
            }
        }
    }
}
?>
<p> СР№2 Кадалова Е. В. Вариант 5
</p>
<?php
$n = rand(0, 499);
print("Число " . $n . " ");

$i = 1;
while ($i <= round(sqrt($n))) {
    $j = 1;
    while ($j <= round(sqrt($n))) {
        if (pow($i, 2) + pow($j, 2) == $n) {
            print("Можно представить число N в виде суммы квадратов: " . $i . " и " . $j);
            return;
        }
        $j++;
    }
    $i++;
}
print("Число невозможно представить через сумму двух квадратов.");
?>
</TABLE>
</BODY>
</HTML>