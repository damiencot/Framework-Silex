<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="m2l.css" rel="stylesheet">
        <title>M2L</title>
    </head>
    <body>
        <header>
            <h1>M2L</h1>
        </header>
        <?php
           
            foreach($villes as $ville){
                echo '<article>'
                . '         <h2>'.$ville['name'].'</h2>'
                . '   </article>';
            }
        ?>
        <footer>
           
        </footer>
    </body>
</html>