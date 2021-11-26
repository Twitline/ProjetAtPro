<?php
$content=\file_get_contents('nav.yaml');
$page=yaml_parse($content)
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
                    echo "<div class='contournav'><a class='liennav' href='#$ancre'>$nav</a></div>";
                }
                ?>
            </nav>
        </header>
        <main>
            <section>

            </section>
        </main>
        <footer>

        </footer>
    </body>
</html>