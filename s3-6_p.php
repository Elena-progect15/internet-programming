<?php
//Вывод текста без повтора букв
if (isset($_POST["obr"])) {
    echo join(array_unique(preg_split("//u", $_POST["prhase"])));
}

//Подсчет указанных букв
if (isset($_POST["secondButton"])) {
    echo "Количество символа " . "\"" . $_POST["firstSymbol"] . "\"" . " = " . substr_count($_POST["prhase2"], $_POST["firstSymbol"]);
    echo "<br> Количество символа " . "\"" . $_POST["secondSymbol"] . "\"" . " = " . substr_count($_POST["prhase2"], $_POST["secondSymbol"]);
}

//Изменение на прописные или строчные буквы в зависимости от количества
if (isset($_POST["thirdButton"])) {
    $mass = str_split($_POST["prhase3"]);
    $lol = iconv_strlen($_POST["prhase3"], 'UTF-8');
    $CountUpp = 0;
    $CountDown = 0;
    for ($i = 0; $i < $lol; $i++) {
        $mass[$i] = iconv("windows-1251","UTF-8", $mass[$i]);
        if ($mass[$i] === strtoupper($mass[$i])) {
            $CountUpp++;
        } else {
            $CountDown++;
        }
    }
    if ($CountUpp > $CountDown) {
        echo mb_strtoupper($_POST["prhase3"]);
    } elseif ($CountUpp < $CountDown) {
        echo mb_strtolower($_POST["prhase3"]);
    } else {
        echo $_POST["prhase3"];
    }
}
?>