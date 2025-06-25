<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nintengames - Edit</title>
    <link rel="stylesheet" href="Vista/html/css/master.css">
    <script src="Vista/jquery/jquery.js"></script>
    <script src="Vista/js/script.js"></script>
</head>

<body>
    <main class="edit">
        <header>
            <h2>Modificar VideoJuego</h2>
            <a href="index.php?accion=dashboard" class="back"></a>
            <a href="index.php?accion=logout" class="close"></a>
        </header>
        <?php
        $fila2 = $result->fetch_assoc();
        ?>
        <figure class="photo-preview">
            <img id="imgshow" src="uploads/<?php echo  $fila2['cover'] ?>">
            <img id="editt" src="Vista/html/images/btn-edit.svg" width="13%">
        </figure>
        <form action="" method="post">
            <input type="hidden" value="<?php echo  $fila2['cod'] ?>" id="id">
            <input type="text" name="title" id="title" placeholder="Title" value="<?php echo  $fila2['tittle'] ?>">

            <div class="select">
                <select name="platform" id="platform">
                    <option value="<?php echo  $fila2['platform_id'] ?>"><?php echo  $fila2['name_platform'] ?></option>
                    <option value="1">Nintendo Switch</option>
                    <option value="2">Xbox Series X</option>
                    <option value="3">Play Station 5</option>
                </select>
            </div>
            <div class="select">
                <select name="category" id="category">
                    <option value="<?php echo  $fila2['category_id'] ?>"><?php echo  $fila2['name_categories'] ?></option>
                    <option value="1">Aventura</option>
                    <option value="2">Metroidvania</option>
                    <option value="3">RPG</option>
                </select>
            </div>
            <input type="text" name="year" id="year" placeholder="Year" value="<?php echo  $fila2['year'] ?>">
            <button onclick="actualizarJuegos();" class="update">Modificar</button>
            <div id="mensaje"></div>
        </form>
    </main>
</body>

</html>