<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

echo "Task with array<br><br>";


$input_array = [
	['name' => 'John', 'position' => 'savior', 'salary' => '100000'],
	['name' => 'T1000', 'position' => 'killer', 'salary' => '500'],
	['name' => 'T2000', 'position' => 'owner', 'salary' => '1000'],
	['name' => 'T0', 'position' => 'o', 'salary' => '0']];

echo " - вернуть сумму зарплат всего отдела <br><br>";
$sum_salary = 0;

foreach($input_array as $value){
	// $sum_salary = $sum_salary + $value['salary'];
	$sum_salary += $value['salary'];
}
var_dump($sum_salary);

echo "<br><br> - вернуть имя работника по заданному месту работы";

echo "<br><br>";
$seach = 'killer';
foreach($input_array as $sub_array){
		if($sub_array['position'] === $seach ){
			echo $sub_array['name'];
			break;
		}
}

echo "<br><br> - вернуть позицию по имени";  
echo "<br><br>";
// $name = 'John';
$name = 'T1000';
foreach($input_array as $sub_array){
	foreach($sub_array as $key => $value){
		if(strcmp($value , $name) == 0){
			echo $sub_array['position'];
			break;
		}
	}
}


echo "<br><br> - вернуть список сотрудников с процентным соотношением";  
echo "<br><br>";
$name1 = 'T0';
$ssalary = 0;
$calcul = 0;

	foreach($input_array as $sub_array){
		if($sub_array['name'] === $name1 ){
			echo 'input: '. $sub_array['name']. ' '. $sub_array['salary']. '<br>';
			$ssalary = $sub_array['salary'];
		}	
	}
// if($ssalary > 0){
	foreach($input_array as $sub_array){
		if($sub_array['name'] !== $name1 ){
			$calcul = ($ssalary * 100 )/$sub_array['salary'];
			echo 'input: '. $sub_array['name'].' '.$calcul. '%<br>';
			$switch = true;
		}

	}
	
// }


echo "<br><br>- вернуть список тех у кого зарплата выше заданной"; 
echo "<br><br>";          
$prise = 1000;
	foreach($input_array as $sub_array){
			if($sub_array['salary'] > $prise ){
			echo 'salary > '. $prise.' = '. $sub_array['salary']. '<br>';
		}	

	}

echo "<br><br>- вернуть список тех у кого зарплата ниже заданной";
echo "<br><br>";
$prise = 1000;
	foreach($input_array as $sub_array){
			if($sub_array['salary'] < $prise ){
			echo 'salary > '. $prise.' = '. $sub_array['salary']. '<br>';
		}	

	}









?>
