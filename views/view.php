<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>M2L</title>
    </head>
    <body>
        <header>
            <h1>M2L</h1>
        </header>
        <?php
            foreach($citys as $city){
                echo '<article>'
                . '         <p>'.$city->getId().'<p>'
                . '         <p>'.$city->getLat().'</p>'
                . '         <p>'.$city->getLong().'</p>'
                . '         <p>'.$city->getName().'</p>'
                . '   </article>';
            }
        ?>
        <footer>
        </footer>
    </body>
</html>