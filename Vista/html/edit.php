<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nintengames - Edit</title>
    <link rel="stylesheet" type="text/css" href="Vista/html/css/master.css">
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
        <figure class="photo-preview">
            <img src="Vista/html/images/photo-lg-1.svg" alt="">
        </figure>
        <form action="" method="post">
            <input type="text" name="title" placeholder="Title" value="Super Mario Oddysey">
            <div class="select">
                <select name="plarform">
                    <option value="">Seleccione Consola...</option>
                    <option value="1" selected>Nintendo Switch</option>
                    <option value="2">Xbox Series X</option>
                    <option value="3">Play Station 5</option>
                </select>
            </div>
            <div class="select">
                <select name="category">
                    <option value="">Seleccione Categoría...</option>
                    <option value="1" selected>Aventura</option>
                    <option value="2">Metroidvania</option>
                    <option value="3">RPG</option>
                </select>
            </div>
            <button type="button" class="upload">Subir Portada</button>
            <input type="text" name="year" placeholder="Year" value="2017">
            <button class="update">Modificar</button>
        </form>
    </main>
</body>

</html>