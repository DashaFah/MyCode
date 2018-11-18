<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="styles.css" rel="stylesheet">                  
    </head>
    
    <body>
    <?php include_once "Connect.php"; ?>

        <header>
            <div>
            <img src="news.png">
            </div>

            <nav>
                <ul>
                    <li>
                    Культура
                    </li>
                    <li>
                    Спорт
                    </li>
                </ul>
            </nav>
        </header>

        <div>
        <?php 
        $getkey = $key + 1;
        $titles = mysql_query("SELECT `title` FROM `article` WHERE `id` = $getkey");
        $descriptions = mysql_query("SELECT `description` FROM `article` WHERE `id` = $getkey");
        while($titles_arr = mysql_fetch_array($titles))
        {
        $one_title[] = $titles_arr['title'];
        }
        while($description_arr = mysql_fetch_array($descriptions))
        {
        $one_description[] = $description_arr['description'];
        }

        foreach ($one_title as $a)
        {
        echo '<h1>'.$a.'</h1>';
        echo $one_description[0];
        }

        ?>
        </div>
    </body>
</html>