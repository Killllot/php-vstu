<html>
<body>
<h1>Демонстрация функций Print и Echo</h1>
    <?php
    echo "Task 1<br/>";
    $rand1 = rand(1,3);
    $rand2 = rand(1,1000);
    switch (rand(1,3)){
        case 1:
            echo $rand1;
            echo "<br />";
            echo $rand2;
            echo "<br />";
            echo $rand2*$rand2*$rand2;
            break;
        case 2:
            echo $rand1;
            echo "<br />";
            echo $rand2;
            echo "<br />";
            echo pow($rand2, -2);
            break;
        case 3:
            echo $rand1;
            echo "<br />";
            echo $rand2;
            echo "<br />";
            echo pow($rand2, 0.5);
            break;
    }
    echo "<br/>";
    echo "<br/>Task 2<br/>";
    echo "<br/>";
    $mass_count = rand(7,10);
    echo $mass_count;
    echo "<br/>";
    echo "<br/>";
    $arr[] = 0;
    for ($j = 0; $j <= $mass_count ; $j++) {
        $arr[$j] = $j;
        echo $arr[$j];
        echo "<br/>";
    }
    echo "Сортировка по возрпастанию: <br/>";
    sort($arr);
    for ($j = 0; $j <= $mass_count ; $j++) {
        echo $arr[$j];
    }
    echo "<br/>";
    echo "Сортировка по убыванию:<br />";
    rsort($arr);
    for ($j = 0; $j <= $mass_count ; $j++) {
        echo $arr[$j];
    }
    echo "<br/>";
    echo "Перемешывание: <br />";
    shuffle($arr);
    for ($j = 1; $j <= $mass_count ; $j++) {
        echo $arr[$j];
    }
    echo "<br/>";
    echo "<br/>Task 3<br/>";
    echo "<br/>";
    $two_mass[4][4] = 0;

    $number = getrandmax();
    $numberC = getrandmax();
    $numberR = getrandmax();

    for ($j = 0; $j < 4; $j++) {
        echo sprintf("Строка %d : ", $j);
        for ($i = 0; $i < 4; $i++) {
            $two_mass[$j][$i] = rand(-100, 100);
            echo $two_mass[$j][$i];

            if ($two_mass[$j][$i] > 0 && $two_mass[$j][$i] < $number)  {
                $number = $two_mass[$j][$i];
                $numberC = $j;
                $numberR = $i;
            }
            echo "&nbsp&nbsp&nbsp";
        }
        echo "<br/>";
    }
    echo "<br/>";
    echo sprintf("Минимальное положительное число %d : , его строка: %d его столбец: %d", $number, $numberC, $numberR);

    ?>
</body>
</html>
