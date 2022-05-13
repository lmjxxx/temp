<?php

$Oper = $_POST['operator'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$result = "";


switch($Oper){
    case("Add"):
        $result = $num1 + $num2;
        break;
    case("Sub"):
        $result = $num1 - $num2;
        break;
    case("Multi"):
        $result = $num1 * $num2;
        break;
    case("Div"):
        $result = $num1 / $num2;
        break;
}

?>
