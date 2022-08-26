<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

echo "Task with strings<br><br>";


$inpustring = 'dsfsdf sdftd www sdfdsfd ddfdfwwwwww ww';

echo str_shuffle($inpustring). "<br><br>";

echo strlen($inpustring). " -количество символов в строке <br><br>";
$nubwords = str_word_count($inpustring);
echo str_word_count( $inpustring ). " -количество слов в строке <br><br>";

$arrayall = [];
$arrayall2 = [];
$str = explode(" ", $inpustring);
for ($i = 0; $i < $nubwords; $i++) { 
	echo strlen($str[$i]). "<br>";
	array_push($arrayall, strlen($str[$i]));
	array_push($arrayall2, $str[$i]);
} 
echo "<br><br>";
// print_r($arrayall);
sort($arrayall);

// echo "самое короткое слово - \n". $arrayall[0]. "<br><br>";

foreach ($arrayall2 as $value) {
	if (strlen($value) == $arrayall[0]) {
		echo "самое короткое слово - ". $value;
		break;
	}
 } 
echo "<br><br>";

rsort($arrayall);

// echo "самое длинное слово - ". $arrayall[0]. "<br><br>";
foreach ($arrayall2 as $value) {
	if (strlen($value) == $arrayall[0]) {
		
		echo "самое длинное слово  - ". $value."<br><br>";
		
		echo "в обратном порядке - ". strrev($value);
		break;
	}
 } 
echo "<br><br>";

$strbreak = "asdfhrt";
// echo "Длина строки  ". strlen($strbreak);
$arr_break = str_split($strbreak);
$arrcount = count($arr_break);


// echo "<br><br>";

$q2 = round((((strlen($strbreak))) / 2), 0 ,PHP_ROUND_HALF_EVEN);

// echo "Половина округляется в большую четную сторону ". $q2;  

$arrstring = str_split($strbreak, $q2);

// print_r($arrstring);

echo "<br><br> вернуть отзеркаленную строку от центра - "; 

echo ($arrstring[0]). strrev($arrstring[1]);

echo "<br><br>";  
$serch = "d";
echo "количество вхождений произвольного слова $serch - ". substr_count($inpustring, $serch);

echo "<br><br>";     

// $serch = "ds";
// preg_match($serch , $inpustring, $matches);
// print_r($matches);



// for ($c = strlen($strbreak); $c < strlen($strbreak); $c++) { 
// 		echo $c. "<br>";
// }
// echo revers();
// substr($strbreak , start)



// echo "<br><br>";
// print(min($arrayall));
// echo "<br><br>";
// print(max($arrayall));



// echo strlen($str[0]). "<br>";
// echo $str[1]. "<br>";
// echo $str[2]. "<br>";
// echo $str[3];



echo "<br><br>";


// print_r(str_word_count($inpustring, 1)). "<br>";




echo "<br>";



echo "<br>";

// $str2 = "Hello fri3nd, you're
//        looking          good today!";

// print_r(str_word_count($str2, 1)). "<br>";
// print_r(str_word_count($str2, 2)). "<br>";
// print_r(str_word_count($str2, 1, 'àáãç3!'));

// echo str_word_count($str);
?>
