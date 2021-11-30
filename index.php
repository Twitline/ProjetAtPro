<?php
$content=\file_get_contents('nav.yaml');
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
                    echo "<div class='contournav'><a class='liennav' href='#$ancre'>$nav</a></div>";
                }
                ?>
            </nav>
        </header>
        <main>
            <section id="accueil">
                <?php include ("accueil.php");?>
            </section>
            <section id="apropos">
                <?php include("apropos.php"); ?>
            </section>
            <section id="competence">
                <?php include("competence.php");?>
            </section>
            <section id="experience">
                <?php include("experience.php");?>
            </section>
            <section id="formation">
                <?php include("formation.php");?>
            </section>
        </main>
        <footer class="footer">
            <p>Page de Geoffrey</p>
        </footer>
    </body>
</html>