<?php
class GestorJuegos
{
    public function CrearJuego(Juegos $games)
    {
        $Conexion = new Conexion();
        $Conexion->abrir();
        $title = $games->obtenertitle();
        $platforms = $games->obtenerplatform();
        $category = $games->obtenercategory();
        $cover = $games->obtenercover();
        $year = $games->obteneryear();
        $sql = "INSERT INTO games VALUES (null, '$title','$platforms','$category','$cover','$year')";
        $Conexion->consulta($sql);
        $result = $Conexion->obtenerFilasAfectadas();
        $Conexion->cerrar();
        return $result;
    }

    public function show($id)
    {
        $Conexion = new Conexion();
        $Conexion->abrir();
        $sql = "SELECT *, platforms.name AS name_platform, categories.name AS name_categories  FROM games
            JOIN platforms ON games.platform_id = platforms.id
            JOIN categories ON games.category_id = categories.id WHERE games.id = $id ";
        $Conexion->consulta($sql);
        $result = $Conexion->obtenerResult();
        $Conexion->cerrar();
        return $result;
    }
    public function edit($id)
    {
        //echo "<script>alert('LLegó');</script>";
        $Conexion = new Conexion();
        $Conexion->abrir();
        $sql = "SELECT *, games.id as cod, platforms.name AS name_platform, categories.name AS name_categories  FROM games
            JOIN platforms ON games.platform_id = platforms.id
            JOIN categories ON games.category_id = categories.id WHERE games.id = $id ";
        $Conexion->consulta($sql);
        $result = $Conexion->obtenerResult();
        $Conexion->cerrar();
        return $result;
    }
    public function editGame($id, $title, $platform, $category, $cover, $year)
    {
        $Conexion = new Conexion();
        $Conexion->abrir();
        $sql = "UPDATE games SET tittle='$title',platform_id='$platform',category_id='$category',cover='$cover', year='$year' 
            WHERE games.id = $id ";
        $Conexion->consulta($sql);
        $filasAfectadas = $Conexion->obtenerFilasAfectadas();
        $Conexion->cerrar();
        return $filasAfectadas;
    }
    public function eliminarJuego($id)
    {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "DELETE FROM games WHERE id = $id";
        $conexion->consulta($sql);
        $conexion->cerrar();
    }
}
