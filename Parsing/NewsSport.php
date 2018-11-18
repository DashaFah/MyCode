<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="styles.css" rel="stylesheet">                  
    </head>
    
    <body>
        <?php include 'Search_news.php'; ?>

        <header>
            <div>
            <img src="news.png">
            </div>

            <nav>
                <ul>
                    <li>
                    <a href="NewsCulture.php">Культура</a>
                    </li>
                    <li>
                    <a href="NewsSport.php"> Спорт </a>
                    </li>
                    <li>
                    <a href=""> Экономика </a>
                    </li>
                    <li>
                    <a href="NewsSport.php"> Религия </a>
                    </li>
                </ul>
            </nav>
        </header>
        
        <h1>
       Новости спорта
        </h1>

        <div>
          <?php $titles = mysql_query("SELECT `title` FROM `article` WHERE `referid`='Спорт'");
            include "translitiration.php";                        
            
            while($titles_arr = mysql_fetch_array($titles))
            {
            $one_title[] = $titles_arr['title'];
            }
            $descriptions = mysql_query("SELECT `description` FROM `article` WHERE `referid`='Спорт'");
            
            foreach ($one_title as $key=>$a)
            {           
            $name = explode(' ', $a);  
            $str = translit($name[1].$name[2]);             
            echo '<a href="http://localhost:8888/Parsing/%09%09%09%09'.$str.'.php">'.$a.'</a></br>';                    
            $fp = fopen($str.'.php', "w");

            $text = "<?php
            \$key = $key;
            include 'NewArticle.php';
            ?>";

            fwrite($fp, $text);
            fclose($fp);
            }
            
            ?>
        </div>
    </body>
</html>