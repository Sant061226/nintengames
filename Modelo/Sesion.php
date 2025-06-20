<?php
class Sesion
{
    private $email;
    private $contrasena;
    public function __construct($email, $contr)
    {
        $this->email = $email;
        $this->contrasena = $contr;
    }
    public function obtenerEmail()
    {
        return $this->email;
    }
    public function obtenerContrasena()
    {
        return $this->contrasena;
    }

}