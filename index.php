<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

echo "test massege<br><br>";


$inputnumb = [1, 2, 3, 4, 5, 6, 7, "10","10a", "7b", 16];
$input = [];
$inputlet = [];
foreach ($inputnumb as $value) {
    if(is_numeric($value)) {
    	echo var_export($value) . "<br>";
    	array_push($input, $value);
    } else {
    	array_push($inputlet, $value);
    }
}


echo "<br><br>";

$numbers = range(1, 7);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number". ' ';
}
echo "<br><br>";



rsort($input);
// foreach ($input as $key => $val) {
//     echo "fru[" . $key . "] = " . $val . "\n<br>";
// }
echo "самое больше число - \n". $input[0]. "<br><br>";

$max_value = null;

foreach($input as $value) {
	if ($value > $max_value){
		$max_value = $value;
		
	}
}
echo $max_value;
echo "<br><br>";


sort($input);
// foreach ($input as $key => $val) {
//     echo "fru[" . $key . "] = " . $val . "\n<br>";
// }
echo "самое маленькое число - \n". $input[0]. "<br><br>";

$min_value = null;

foreach($input as $value) {
	if ($value < $min_value or $min_value === null){
		$min_value = $value;
	}
}
echo $min_value;
echo "<br><br>";

echo " - вернуть числа кратные 4 <br>";
$fore = 4;
foreach($input as $value) {
	if ($value % $fore == 0) {
		echo  $value. ",";
	}

}
echo "<br><br>";

echo " - вернуть числа кратные 4 и 6 в виде двух массивов<br>";
$fore = 4;
$array4 = [];
foreach($input as $value) {
	if ($value % $fore == 0) {
		echo  $value. ",";
		array_push($array4, $value);
		
	}

}
print_r($array4);


echo "<br>";
$fore = 6;
$array6 =[];
foreach($input as $value) {
	if ($value % $fore == 0) {
		echo  $value. ",";
		array_push($array6, $value);
	}

}
print_r($array6);

echo "<br><br>";


echo "количество чисел в массиве - \n". count($input). "<br><br>";


echo "массив в обратном порядке - \n";
rsort($input);
foreach ($input as $val) {
    echo  $val . "\n";
}
echo "<br><br>";

// игнорирует нечисловые значения
echo "сумму всех чисел - \n<br>";
echo array_sum($input). "<br>";


echo "массив чисел умноженный на заданное число \n <br>";
$multipl = 2;
foreach($input as $value) {
	echo($value * $multipl). "," ;
}
echo "<br><br>";

echo "массив с добавлением к каждому заданного числа \n <br>";
$add = 2;
foreach($input as $value) {
	echo($value + $add). "," ;
	
}






?>
