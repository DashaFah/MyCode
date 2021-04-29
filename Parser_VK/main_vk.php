<?php

require_once 'simple_html_dom.php';
//require_once 'curl_query.php';

$website = 'https://m.vk.com/friday_ru';
$allsite = file_get_html($website);


if($allsite->innertext!='' 
     //and count($allsite->find('div'))
  ){
    foreach($allsite->find('div') as $div){
        //echo $div->plaintext ;
        if ( strpos($div->plaintext, 'Осталось') ) {
            $number_hash = $div->find('dd') ;
            $trigger_text = $number_hash[1]->plaintext ; 
            echo "\n<br>" . $trigger_text ."\n" ;
            if ( strpos($trigger_text, 'стикерпаков') ) {
                echo "Founded stickerpx!!!\n" ;
                $filename = __DIR__ . '/' . 'founded.php';
                if (file_exists($filename)) {
                    //echo "\007";
                    echo "The file exists\n";
                } else {                
                    // Сообщение
                    $message = "$trigger_text";

                    // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
                    //$message = wordwrap($message, 70, "\r\n");

                    // Отправляем
                    $result = mail('dashafah@yandex.ru', translit($trigger_text), $message);
                    if ($result) {
                        $fp = fopen($filename , "w");
                        fwrite($fp, $trigger_text);
                        fclose($fp);
                        date_default_timezone_set("Europe/Paris");
                        echo 'Mail send.' . date("h:i:s") ."\n<br>";
                    }
                    do_sound();
                
                }
            }
        }
        break;
    }
}

function translit($str) {
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', "'", 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', "'", 'y', "'", 'e', 'yu', 'ya');
    return str_replace($rus, $lat, $str);
}
function do_sound() {
    $a = 0 ;
    while ($a <= 5) {
        echo "\007";
        //messageBeep(1);
        $a = $a + 1;
        //echo $a ."\n" ;
    }
}

//$html->clear(); // подчищаем за собой
//unset($html);
$allsite->clear(); // подчищаем за собой
unset($allsite);
//$website->clear(); // подчищаем за собой
//unset($website);
?>