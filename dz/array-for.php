<?php
//1
$leng = [
    'html',
    'css',
    'php',
    'js',
    'jq',
];
foreach ($leng as $elem){
    echo $elem. '<br>';
}

//2
$number = [
    1, 20, 15, 17, 24, 35
];
$result = 0;
foreach ($number as $elem) {
    $result += $elem;
}
echo $result, '<br>';

//3
$number1 = [
  26, 17, 136, 12, 79, 15
];
$result1 = 0;
foreach ($number1 as $elem1) {
    $result1 += $elem1 * $elem1;
}
echo $result1, '<br>';

//4
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key=>$colors) {
    echo $key,'-',$elem. '<br>';
}

//5
$arr1 = [
    'Коля' => '200',
    'Вася' => '300',
    'Петя' => '400',
];
foreach ($arr1 as $key1=>$zp) {
    echo $key1,'-зарплата',$zp,'-долларов', '<br>';
}

//6

$arr2 = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr2 as $en=>$ru) {
    echo $en,'-',$ru, '<br>';
}

//7
$arr3 = array(2, 5, 9, 15, 0, 4);
foreach ($arr3 as $key3) {
    if ($key3 > 3 && $key3 < 10) {
        echo "{$key3}<br>";
    }
}

//8
$arr4 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr4 as $key4) {
    echo $key4;
}

//9
$i = 1;
while ($i <= 100) {
    echo $i,'<br>';
    $i++;
}

//10
$i1 = 1;
for ($i1 = 11; $i1 <= 33; $i1++) {
    echo $i1,'<br>';
}

//11
$i2;
for ($i2 = 1; $i2 <101; $i2++) {
    if ($i2 % 2 == 0) {
        echo $i2, '<br>';
    }
}


//12
$n = 1000;
$num =0;
while ($n >= 50) {
    $n /= 2;
    $num ++;
}
echo "{$n}<br>";
echo "{$num}<br>";

//13
for ($col =1; $col <= 10; $col++) {
    for ($row = 1; $row <= 10; $row++) {
        $result = $col * $row;
        echo "{$col} x {$row} = {$result}<br>";
    }
    echo '<br>';
}

//14
$arr5 = array(4, 2, 5, 19, 13, 0, 10);
do {
    foreach ($arr5 as $e) {
        if ($e == 2 || $e == 3 || $e == 4) {
            echo 'Есть';
            break 2;
        }
    }
    echo 'Нет';
} while (0);


//15
$arr6 = array(4, 2, 5, 19, 13, 0, 10);
$count = 0;
foreach ($arr6 as $value2) {
    $count ++;
}
echo $count,'<br>';

//16
$arr7 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr7 as $key7 => $value7) {
    echo $value7;
    if (($key7 + 1) % 3) {
        echo ',';
    }
    else {
        echo "<br>\n";
    }
}

//17
$months = [
    1 =>'Январь',
    2 => 'Февраль',
    3 => 'Март',
    4 => 'Апрель',
    5 => 'Май',
    6 => 'Июнь',
    7 => 'Июль',
    8 => 'Август',
    9 => 'Сентябрь',
    10 => 'Октябрь',
    11 => 'Ноябрь',
    12 => 'Декабрь'
];
$month = $months[date('n')];
foreach ($months as $value) {
    echo $value == $month ? "<b>{$value}</b><br>\n" : "{$value}<br>\n";
}

//18
$days = [
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье',
];
$weekend = [
    'Суббота',
    'Воскресенье',
];
foreach ($days as $day) {
    echo in_array($day, $weekend) ? "<b>{$day}</b><br>\n" : "{$day}<br>\n";
}

//19
$days = [
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье',
];
$day = $days[date('n')];
foreach ($days as $value) {
    echo $value == $day ? "<i>{$value}</i><br>\n" : "{$value}<br>\n";
}

//20
for ($s = 'x'; strlen($s) <= 20; $s .= 'x') {
    echo "{$s}<br>\n";
}

//21
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo "<br>\n";
}

//22
for ($s = 'xx'; strlen($s) <= 10; $s .= 'xx') {
    echo "{$s}<br>\n";
}


//23
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = isset($_POST['number']) ? $_POST['number'] : false;
    if (is_numeric($number)) {
        // String -> array
        $digits = str_split($number);
        $sum = array_sum($digits);
        $result = "<p>Сумма цифр числа {$number} равняется {$sum}</p>\n";
    } else {
        $result = "<p>Неверный ввод</p>\n";
    }
}
?>
<?= isset($result) ? $result : '' ?>
<form action="" method="post">
    <p>
        <label for="number">Введите число</label><br>
        <input type="text" name="number" id="number">
    </p>
    <p>
        <button>Вперед!</button>
    </p>
</form>

//24
