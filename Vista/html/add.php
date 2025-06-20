<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nintengames - Add</title>
    <link rel="stylesheet" type="text/css" href="Vista/html/css/master.css">
</head>
<body>
    <main class="add">
        <header>
            <h2>Adicionar VideoJuego</h2>
            <a href="index.php?accion=dashboard" class="back"></a>
            <a href="index.php?accion=logout" class="close"></a>
        </header>
        <figure class="photo-preview">
            <img src="Vista/html/images/photo-lg-0.svg" alt="">
        </figure>
        <form action="index.php?accion=crearJuego" method="post" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Title">
            <div class="select">
                <select name="platforms">
                    <option value="">Seleccione Consola...</option>
                    <option value="1">Nintendo Switch</option>
                    <option value="2">Xbox Series X</option>
                    <option value="3">Play Station 5</option>
                </select>
            </div>
            <div class="select">
                <select name="category">
                    <option value="">Seleccione Categoría...</option>
                    <option value="1">Aventura</option>
                    <option value="2">Metroidvania</option>
                    <option value="3">RPG</option>
                </select>
            </div>
            <input type="file" class="upload" name="cover" placeholder="Subir portada">
            <input type="text" name="year" placeholder="Year">
            <button class="save">Guardar</button>
        </form>
    </main>
</body>
</html>