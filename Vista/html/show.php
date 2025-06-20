<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nintengames - Show</title>
    <link rel="stylesheet" href="Vista/html/css/master.css">
    <script src="Vista/jquery/jquery.js"></script>
    <script src="Vista/js/script.js"></script>
</head>
<body>
    <main class="show">
        <header>
            <h2>Consultar VideoJuego</h2>
            <a href="index.php?accion=dashboard" class="back"></a>
            <a href="index.php?accion=logout" class="close"></a>
        </header>
        <?php
		$fila2 = $result->fetch_assoc();
		?>
        <figure class="photo-preview">
            <img id="imgshow" src="uploads/<?php echo  $fila2['cover']?>" alt="">
        </figure>
        <div>
            <article class="info-title"><p><?php echo  $fila2['tittle']?></p></article>
            <article class="info-platform"><p><?php echo  $fila2['name_platform']?></p></article>
            <article class="info-category"><p><?php echo  $fila2['name_categories']?></p></article>
            <article class="info-year"><p><?php echo  $fila2['year']?></p></article>
        </div>
    </main>
</body>
</html>