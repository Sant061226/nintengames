<?php
require_once 'Conexion.php';
$conexion = new Conexion();
$conexion->abrir();
$sql = "SELECT games.id as cod, games.tittle, platforms.name as Consola, categories.name as Categoria, games.cover, games.year FROM games join platforms on games.platform_id=platforms.id join categories on games.category_id=categories.id;";
$conexion->consulta($sql);
$result = $conexion->obtenerResult();
$filas = $conexion->ObtenerFilasAfectadas();
?>
<table>
    <div id="resultadoJuegos">
        <?php
        if ($filas >= 1) { ?>
            <?php while ($fila = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td>
                        <figure class="cover">
                            <img id="imgnu" src="uploads/<?php echo $fila['cover'] ?>" alt="">
                        </figure>
                        <div class="info">
                            <h3><?php echo $fila['Consola'] ?></h3>
                            <h4><?php echo $fila['tittle'] ?></h4>
                        </div>
                        <div class="controls">
                            <a href="index.php?accion=show&id=<?php echo  $fila['cod'] ?>" class="show"></a>
                            <a href="index.php?accion=edit" class="edit"></a>
                            <a href="index.php?accion=eliminarJuego&id=<?php echo $fila['cod'] ?>" onclick="return confirm('¿Seguro que desea eliminar este juego?');" class="delete"></a>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
    </div>
</table>
<?php
        } else { ?>
    <h1>No Se Encontraron Resultados.</h1>
<?php
        }
?>