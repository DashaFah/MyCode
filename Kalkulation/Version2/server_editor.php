<?php
$l = $_POST["line"];

$antwort = "";
$regexp1 = "/^\\d+$/ui";
$regexp2 = "/^\\d+[\\+\\-\\*\\/]{1}$/ui";
$regexp3 = "/^\\d+[\\+\\-\\*\\/]{1}\\d+$/ui";
if (preg_match($regexp1, $l, $match)){
    echo $antwort = $match[0];
}
else if (preg_match($regexp2, $l, $match)){
    preg_match("/\\d+/", $l, $match);
    echo $antwort = $match[0];
}
else if (preg_match($regexp3, $l, $match)){
    preg_match("/[\\+\\-\\*\\/]{1}/", $l, $oper);
    preg_match("/(\\d+)[\\+\\-\\*\\/](\\d+)/", $l, $num);
    switch ($oper[0]){
        case '+': 
            $antwort = $num[1]+$num[2];
            echo $antwort;
            break;
        case '-': 
            $antwort = $num[1]-$num[2];
            echo $antwort;
            break;   
        case '*': 
            $antwort = $num[1]*$num[2];
            echo $antwort;
            break; 
        case '/': 
            if ($num[2]!=0)
                $antwort = $num[1]/$num[2];
            else 
                $antwort = "Error";
            echo $antwort;
            break; 
    }
}
else if (preg_match("/^$/", $l, $match)){
    echo $antwort = "";
}
else {
    $antwort = "Error";
    echo $antwort;
}

?>