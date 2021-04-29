<?php

//require_once 'curl_query.php';

$url = 'https://www.sberbank.ru/portalserver/proxy/?pipe=shortCachePipe&url=http%3A%2F%2Flocalhost%2Frates-web%2FrateService%2Frate%2Fcurrent%3FregionId%3D77%26rateCategory%3Dpremium%26currencyCode%3D840';

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header' => array(
        "accept: */*",
        "accept-encoding: gzip, deflate, br",
        "accept-language: ru,uk-UA;q=0.9,uk;q=0.8,de-DE;q=0.7,de;q=0.6,en;q=0.5,en-US;q=0.4,en-DE;q=0.3,ru-RU;q=0.2",
        "cookie: anonymousUserId=c28cf37f-cbbf-480a-89da-f4ae561e93c9; TS0198113c=013ade28993dd771233137564576632087926072210c422ee399bc781605ddf506f704e3cbc4dcbfa9a0d8857a6ee322ab9b0afdd7ff58dba51f01b5f5bd3fd6b8f5b600ffada957540270b9cf216eb8cf4d971d8ed79071e069fcbc27467efadc92040ef97f9e2064749763639bb98c529757fddcf63b879ffe5ae869178500e62b2712ab0d4210c001107322a1936bb09983517140706a63bee091f099abc7ea10500744; _gcl_au=1.1.1402038769.1619382285; utm_source=google; utm_medium=organic; utm_campaign=; utm_content=; _ga=GA1.2.1360674862.1619382285; _gid=GA1.2.1251500037.1619382285; top100_id=t1.3122244.559469483.1619382288603; tmr_lvid=6743e46b74daca0e094c5448a3b54445; tmr_lvidTS=1614175277555; _ym_uid=1614175278542067023; _ym_d=1619382291; _fbp=fb.1.1619382290643.559524949; abc4e19df5455fc72f51575e0d5bd928=36ede11f777df74209ceb65f909f553f; anonymousUserId=df690bde-0286-418d-8883-35114bc611e2; _gaexp=GAX1.2.HDA48XueTSSN2_O1_euhEA.18830.3; sbrf.pers_notice=1; TS0128b40e=013ade289951bee561f93ee675e5c790e84297bc5e25edcab3faf17aec403afbf2864b9a432aac14748426a8504c9e261d05e3e1ec7f11d20329e8b859d7ebbe07e548bf652d9420e76eb266698a7d09c5c32655482b64b254ef9c2a2b8515c6859cc324df09abde9f0558c87892b3e94c6d947116; __zzat2=MDA0dC0pXB4IH04NIH5rL2R7RSRfHDx1ZS9lPjNCUnokH2xqP0VsHiAuIVQob0dTRi0qdA4RNmg8M1MsZXhZaG1xCVZbKRR8QXIgMSddD24yZHYtIyN4W1dkcEgTO04tGAs0SkEcWz1ULCRDViZAWkgJV2sVbSc9XCY/CEIfT0xxZXI5dF5VISJlaF8ofH0JPiVjWjMqPFcJMi1ZChk5Rlg1Hx1eIkZpcRp4WzBYNjZgdCZKYg15DBM8P2tlfBQKJVYRGyQrKlF6JD1wHzQVQmtoDm97KR19ZRNgC2ZvF1YvNBNtbA0cTHcMdzgVbFEyLhwKEkZVGhgoKj4mHjcsDzEoCUALGCJTOikmfw4fNXR5Uj03VjomDEUYfzFeZ3UreVBlCTkrEV8zVxAVMmkyORdwO2JOU3p8Zis6RQwuIQt9cD1fJB09Vj1EfWxjZApKW04IcENgXwpRHH4nZ0xZYnpNNEg8CCxqPzArflkVOzpIcg9bOW1QNV8ZQ2pODWk3XBQ8dWU+R258LENoI2JQYSJMUT8yVgsbQzVoDFR/TXkILDRnaiVOKn9LKRZHGzJhXkZpdRVPEBIZb0MqLS1DbR4dehIgRl5NCSYaGghuLAkMEV9Ecih6LnFnUhlOSxs1aX5rL11TRCgfQUtEIHIzd3QvPG4gZ0pfIkxdUAohC0IwXS0bSVAYEhY=gQuaMw==; _sa=SA1.b8c3fc33-9d61-4348-875e-b71a77b0745d.1619383647; _ym_isad=1; cf44ad4bdad05ee181f953b4c4e5e921=8980d10434c303fd061b0ecd21a64633; cfids2=quLmlc6ctJDbf/+FNlX2VbbGZkFCihivIOz3q+qYdKAgwz049fuD738zQKjNVHKKxLx0PClW9v2KElgE7y4RhFSE6TEIRxI7aGv5sxVuPi8nMki6XGIFX6vE632sE3jTC5Yey9qCEng6elXGpJiNkaAWf/Mm9fYhvpZpJg==; clsa2=ep9bZtRnx50dfazEPkATwa0k0+yxoeLJ47a1JaCpEA/TrYTooWCv0kcFs760mAWeRSmbpCzLxgAi1AWtli7TxI5uHhwXn3KAI+40ZVrIBX94WhJOChkHKKzAhljHInETboNpEJ+MPnkKhjkMhO16Bk+xig/IOib5tb/axxFlF23+o4JqK4gO1p1pNStWZoMytwq1YhH5Hf0ub7swK9tqGVq1Hw06Rir1DCnXp21y94A9AEs=; BBTracking=MjA=; sbrf.lang=ru; last_visit=1619456610024::1619467410024; tmr_detect=1%7C1619467412051; tmr_reqNum=43; X-Session-ID=2101e64313af8692c91b51fd763bf6d1; JSESSIONID=0000SC6X_t3z-iLOYc2Bo1Ngssx:1967oo6gn; BBXSRF=5b927db9-433d-4ba2-9db1-264e5df0342c; TS011f2bf6=013ade2899eafdb3277612c1f5f38e17e89a084b8ba1197a5775f7a159c9ec70035d4478704d6b477b431c485ebca471f281f598dbed92855c95d180ee3a25f6c92ab0309a2cd3ec10cebc2cf98dc578110005f1b79e1e7063d0e8130fc84f31329adf3815dc900732c2d95fa9f4f031f5645f84bb407c6340962157a31bd20598944f5deaf40bfb291804b0508beaecdb0ccb5c5c1e5a8efbbb2ab9ae37fe06d502d6cc72; _dc_gtm_UA-21169438-1=1",
        "referer: https://www.sberbank.ru/",
        'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
        "sec-ch-ua-mobile: ?0",
        "sec-fetch-dest: empty",
        "sec-fetch-mode: cors",
        "sec-fetch-site: same-origin",
        "user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36",
        "x-request-id: d852f0e0-0c11-43e3-bde6-46ed2a24638a",
        "x-requested-with: XMLHttpRequ"),
        'method' => 'GET'
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

$json = json_decode($result, true);
//var_dump($json["premium"][840][0]["sellValue"]);
$currency_USD = $json['premium'][840][0]['sellValue'];

echo "Продажа USD Premier: $currency_USD\n";

date_default_timezone_set('Europe/Moscow');
//if ($currency_USD <= 74.5){
//
//    $to = 'fahrutdinovadaria@gmail.com';
//    $subject = 'Dollar';
//    $message = "Покупка доллар ". $currency_USD;
//    $from = "From: Daria Fakhrutdinova <alexiva100@rambler.ru>";
//    $mail = mail($to,$subject,$message,$from, "-f alexiva100@rambler.ru");

    //$mail = mail('fahrutdinovadaria@gmail.com', "Sell USD Premier " , $currency, $headers);
//                    if ($mail) {
                        /*$fp = fopen($filename , "w");
                        fwrite($fp, "Продажа USD Premier: ".$currency);
                        fclose($fp);*/
//                        echo 'Mail send. ' . date("h:i:s") ."\n<br>";
 //                   }
 //               }

$url_EUR = 'https://www.sberbank.ru/portalserver/proxy/?pipe=shortCachePipe&url=http%3A%2F%2Flocalhost%2Frates-web%2FrateService%2Frate%2Fcurrent%3FregionId%3D77%26rateCategory%3Dpremium%26currencyCode%3D978';
$result_EUR = file_get_contents($url_EUR, false, $context);
$json_EUR = json_decode($result_EUR, true);
//var_dump($json["premium"][840][0]["sellValue"]);
$currency_EUR = $json_EUR['premium'][978][0]['sellValue'];
echo "Продажа EUR Premier: $currency_EUR\n";
date_default_timezone_set('Europe/Moscow');

if ($currency_EUR <= 90.0 || $currency_USD <= 74.5){

    $to = 'fahrutdinovadaria@gmail.com';
    $subject = "Sells";
    $message = "Sell Dollar ". $currency_USD. "\nSell Euro $currency_EUR";
    $from = "alexiva100@rambler.ru";
    //$from = "From: Daria Fakhrutdinova <alexiva100@rambler.ru>";
    $mail = mail($to, $subject, $message,"From: Daria Fakhrutdinova <".$from.">" , "-f ". $from);

    //$mail = mail('fahrutdinovadaria@gmail.com', "Sell USD Premier " , $currency, $headers);
                    if ($mail) {
                        /*$fp = fopen($filename , "w");
                        fwrite($fp, "Продажа USD Premier: ".$currency);
                        fclose($fp);*/
                        echo 'Mail sent. ' . date("h:i:s") ."\n<br>";
                    }
}



//$filename = __DIR__ . '/' . 'Currency.txt';
//$currency = 76.6;




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
//$website->clear(); // подчищаем за собой
//unset($website);
?>