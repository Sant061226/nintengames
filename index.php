<?php
session_start();
require_once 'Controlador/controlador.php';
require_once 'Modelo/Conexion.php';
require_once 'Modelo/GestionSesion.php';
require_once 'Modelo/Sesion.php';
require_once 'Modelo/Juegos.php';
require_once 'Modelo/GestionJuegos.php';
$controlador = new Controlador();
if (isset($_GET["accion"])) {
    switch ($_GET["accion"]) {
        case 'login':
            $controlador->inicioSesion(
                $_POST["email"],
                $_POST["clave"],
            );
            break;
    }
    if ($_GET["accion"] == "logout") {
        $controlador->cerrarSesion();
    } elseif ($_GET["accion"] == "dashboard") {
        $controlador->verPagina('Vista/html/dashboard.php');
    } elseif ($_GET["accion"] == "edit") {
       $controlador->edit($_GET['id']);
    } elseif ($_GET['accion'] == 'show') {
        $controlador->show($_GET['id']);
    } elseif ($_GET["accion"] == "add") {
        $controlador->verPagina('Vista/html/add.php');
    } elseif ($_GET['accion'] == 'crearJuego') {
        $ruta_indexphp = "uploads";
        $extensiones = array(0 => 'image/jpg', 1 => 'image/jpeg', 2 => 'image/png');
        $max_tamanyo = 1024 * 1024 * 8;
        $cover = $_FILES['cover']['name'];
        $ruta_fichero_origen = $_FILES['cover']['tmp_name'];
        $ruta_nuevo_destino = $ruta_indexphp . '/' . $_FILES['cover']['name'];
        if (in_array($_FILES['cover']['type'], $extensiones)) {
            echo 'Es una imagen';
            if ($_FILES['cover']['size'] < $max_tamanyo) {
                echo 'Pesa menos de 1 MB';
                if (move_uploaded_file($ruta_fichero_origen, $ruta_nuevo_destino)) {
                    echo 'Fichero guardado con éxito';
                }
            }
        }
        $controlador->crearJuego(
            $_POST["title"],
            $_POST["platforms"],
            $_POST["category"],
            $cover,
            $_POST["year"]

        );
    } elseif ($_GET['accion'] == 'editGame') {
        echo "<script>alert('fff'); </script>";
        $controlador->editGame(
            $_POST['id'],
            $_POST["title"],
            $_POST["platform"],
            $_POST["category"],
            $_POST["cover"],
            $_POST["year"]
        );
    } elseif ($_GET['accion'] == 'eliminarJuego' && isset($_GET['id'])) {
        $controlador->eliminarJuego($_GET["id"]);
        header('Location: index.php?accion=dashboard');
    }
} else {
    $controlador->verPagina('Vista/html/index.php');
}
