<?php
$n1 = $_POST["num1"];
$op = $_POST["oper"];
$n2 = $_POST["num2"];


$antwort = "";
if (strlen($n1) == 0)
{
    if (strlen($n2) != 0)
    {
        $antwort = $n2;
        echo $antwort;
    }
    else {
        $antwort = "";
        echo $antwort;
    }
}
else
{
    if (strlen($n2) == 0)
    {
        $antwort = $n1;
        echo $antwort;
    }
    else {
        switch ($op){
        case 'addition':
            $antwort = $n1+$n2;
            break;
        case 'subtraktion':
            $antwort = $n1-$n2;
            break;
        case 'multiplikation':
            $antwort = $n1*$n2;
            break;
        case 'division':
            if ($n2 != 0)
                $antwort = $n1/$n2;
            break;
        case 'potenzierung':
            $antwort = pow($n1, $n2);
            break;
        case 'wurzel':
            if ($n2 != 0)
                $antwort = pow($n1, 1/$n2);
            break;
        case 'sinus':
            $antwort = sin($n1);
            break;
        case 'kosinus':
            $antwort = cos($n1);
            break;
        case 'tangens':
            $antwort = tan($n1);
            break;
        case 'kotangens': 
            $antwort = 1/tan($n1);
            break;
        }
        echo $antwort;
    }
}
?>