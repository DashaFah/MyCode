<?php
include_once "Connect.php";

/*if($db)
echo 'Соединение установлено.';
else
die('Ошибка подключения к серверу баз данных.');

if($selected)
echo ' Подключение к базе данных прошло успешно.';
else
die(' База данных не найдена или отсутствует доступ.');*/
?>

<?php
mysql_query("TRUNCATE TABLE article");
require_once 'simple_html_dom.php';
require_once 'curl_query.php';


$website = 'http://www.newsru.com/';
$allsite = file_get_html($website);
$themas[] = $allsite->find('#cinema', 0)->href;
//if (!$culture) echo 'null';
//echo $culture;
$themas[] = $allsite->find('#sport', 0)->href;
//var_dump ($themas);

$site = 'newsru.com';

foreach ($themas as $thema)
    //$html = curl_get('http://www.newsru.com/cinema/');
    //$html = 'http://www.newsru.com/cinema/';
{
    $html = 'http:'.$thema;
    //echo $html;
    $section = file_get_html($html);
    $news = $section->find('a.index-news-title');
    foreach ($news as $i)
    {  
        //$html_art = curl_get('http://www.newsru.com'.$i->href);
        $article = file_get_html('http://www.newsru.com'.$i->href);
        $title = $article->find('h1.article-title',0)->plaintext;
        //if ($title==0) echo 'null';
        $date = $article->find('div.article-date',0)->plaintext;
        $description = '';
        foreach ($article->find('div.article-text p') as $b) 
        {
            $string = '<p>'.$b->plaintext.'</p>';
            $string2 = str_replace ("'", "`", $string);        
            $description = $description.$string2;
        }

        $referid = $article->find('div.main-caption a',0)->plaintext;
        //echo $referid;
        //echo $title;    
        //echo $date;
        //echo $description;

        $err = mysql_query("INSERT INTO `News`.`article` (`id`, `referid`, `site`, `title`, `description`, `data`) VALUES (null, '$referid', '$site', '$title', '$description', '$date')");

        if (!$err) 
        //echo 'Я засунуль';
        //else 
        die (mysql_error($db));
        unset($description);
        unset($title);
        unset($article);
        unset($referid);
        unset($date);  
    }

}
/*$temp = mysql_query("SELECT * FROM `article`"); 
$arr = mysql_fetch_array($temp);
echo $arr[4];*/

/*$title->clear(); // подчищаем за собой
$date->clear();
$description->clear();
/*unset($date);
unset($description);
unset($title);*/

?>
