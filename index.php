<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
    <title>MicroCMS - Home</title>
</head>
<body>
    <header>
        <h1>MicroCMS</h1>
    </header>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=m2l_v0;charset=utf8', 'root', 'pwsio');
    $reservation = $bdd->query('select * from reservation order by reservation_id desc');
    foreach ($reservation as $reservation): ?>
    <article>
        <h2><?php echo $reservation['art_title'] ?></h2>
        <p><?php echo $reservation['art_content'] ?></p>
    </article>
    <?php endforeach ?>
    <footer class="footer">
      
    </footer>
</body>
</html>