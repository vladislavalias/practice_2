<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

echo "test massege<br><br>";


/**
* Sorts an array according to a specified column
* Params : array  $table
*          string $colname
*          bool   $numeric
**/
// $table = [1, 2, 4, 5, 6, ""]


// function sort_col($table) {
//   $tn = $ts = $temp_num = $temp_str = array();
//   foreach ($table as $vol) {
//     if(is_numeric(substr($vol[$colname], 0, 1))) {
//       $tn[$key] = $vol[$colname];
//       $temp_num[$key] = $vol;
//     }
//     else {
//       $ts[$key] = $row[$colname];
//       $temp_str[$key] = $row;
//     }
//   }
//   unset($table);

//   array_multisort($tn, SORT_ASC, SORT_NUMERIC, $temp_num);
//   array_multisort($ts, SORT_ASC, SORT_STRING, $temp_str);
//   return array_merge($temp_num, $temp_str);
// }



// $ar = array(
//        array("10", 11, 100, 100, "a"),
//        array(   1,  2, "2",   3,   1)
//       );
// array_multisort($ar[0], SORT_ASC, SORT_STRING,
//                 $ar[1], SORT_NUMERIC, SORT_DESC);
// var_dump($ar[1]);

$tests = array(
    "42",
    1337,
    0x539,
    02471,
    0b10100111001,
    1337e0,
    "0x539",
    "02471",
    "0b10100111001",
    "1337e0",
    "not numeric",
    array(),
    9.1,
    null,
    '',
);
$numeric = [];


foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " is numeric<br>", PHP_EOL;
        array_push($numeric, $element);
    } else {
        echo "<br>". var_export($element, true) . " is NOT numeric.<br>", PHP_EOL;
    }
}
echo "<per>";
print_r($numeric);
echo "</per>";




?>




