<?php
class Controlador
{

    public function verPagina($ruta)
    {
        require_once $ruta;
    }
    public function inicioSesion($email, $contrasena)
    {
        $gestionUsuarios = new GestorSesion();
        $sesion = new Sesion($email, $contrasena);
        $usuario = $gestionUsuarios->verificarUsuario($sesion);
        if ($usuario) {
            $_SESSION['email'] = $usuario->email;
            header("Location: index.php?accion=dashboard");
            exit();
        } else {
            echo "<script>alert('Usuario o contraseña incorrectos');window.location='index.php';</script>";
        }
    }
    public function cerrarSesion()
    {
        if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
            unset($_SESSION['email']);
        }
        session_destroy();
        header("Location:index.php");
        exit();
    }
    public function crearJuego($title, $platforms, $category, $cover, $year)
    {
        $games = new Juegos($title, $platforms, $category, $cover, $year);
        $GestorJuegos = new GestorJuegos();
        $result = $GestorJuegos->CrearJuego($games);
        if ($result > 0) {
            header("Location:index.php?accion=dashboard");
        } else {
            header("Location:index.php?accion=dashboard");
        }
    }
    public function show($id)
    {
        $GestorJuegos = new GestorJuegos();
        $result = $GestorJuegos->show($id);
        require_once "Vista/html/show.php";
    }
    public function edit($id)
    {
        $GestorJuegos = new GestorJuegos();
        $result = $GestorJuegos->show($id);
        require_once "Vista/html/edit.php";
    }
    public function editGame($id, $title, $platform, $category, $cover, $year)
    {
        $gestorJuegos = new GestorJuegos();
        $filasAfectadas = $gestorJuegos->editGame($id, $title, $platform, $category, $cover, $year);
    }
    public function editPhoto($id){
        $id=$id;
        require_once "Vista/html/editPhoto.php";
    }
    public function eliminarJuego($id)
    {
        $gestorJuego = new GestorJuegos();
        $gestorJuego->eliminarJuego($id);
    }
}
