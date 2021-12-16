<?php
$content=\file_get_contents('data/nav.yaml');
$page=yaml_parse($content);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Page</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <?php
                foreach ($page as $nav=>$ancre){
                    echo "<a class='liennav' href='#$ancre'>$nav</a>";
                }
                ?>
            </nav>
        </header>
        <main>
            <?php
            foreach ($page as $nav=>$ancre){
                echo"<section id='$ancre'>";
                include("php/$ancre.php");
                echo"</section>";
            }
            ?>
        </main>
        <footer>
            <p>Page de Geoffrey</p>
            <a href="divers/CV.pdf" download>Telechargez mon curriculum vitae</a>
        </footer>
    </body>
</html>