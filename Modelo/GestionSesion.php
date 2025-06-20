<?php
class GestorSesion
{
    public function verificarUsuario(Sesion $sesion)
    {
        $conexion = new Conexion();
        $conexion->abrir();
        $email = $sesion->obtenerEmail();
        $contrasena = $sesion->obtenerContrasena();
        $usuario = false;
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $usuario = $result->fetch_object();
        $usuario && password_verify($contrasena, $usuario->password);
        $conexion->cerrar();
        return $usuario;
    }
  

}
