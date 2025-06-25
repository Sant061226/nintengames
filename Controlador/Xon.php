<?php
// class Conexion
// {
//     private $mySQLI;
//     private $sql;
//     private $result;
//     private $filasAfectadas;

//     public function abrir()
//     {
//         $this->mySQLI = new mySQLI("Localhost", "root", "", "backup");
//         if (mysqli_connect_error()) {
//             return 0;
//         } else {
//             return 1;
//         }
//     }
//     public function cerrar()
//     {
//         $this->mySQLI->close();
//     }
//     public function consulta($sql)
//     {
//         $this->sql = $sql;
//         $this->sql = $this->mySQLI->query($this->sql);
//         $this->result = $this->sql;
//         $this->filasAfectadas = $this->mySQLI->affected_rows;
//     }
//     public function obtenerResult()
//     {
//         $this->result;
//     }
//     public function obtenerfilasAfectadas()
//     {
//         $this->filasAfectadas;
//     }
// }
?>
<?php
class Conexion
{
    private $mySQLI;
    private $sql;
    private $result;
    private $filasAfectadas;

    public function abrir()
    {
        $this->mySQLI = new mySQLI("Localhost", "root", "", "backup");
        if (mysqli_connect_error()) {
            return 0;
        } else {
            return 1;
        }
    }
    public function cerrar()
    {
        $this->mySQLI->close();
    }
    public function consulta($sql)
    {
        $this->sql = $sql;
        $this->sql = $this->mySQLI->query($this->sql);
        $this->result = $this->sql;
        $this->filasAfectadas = $this->mySQLI->affected_rows;
    }
    public function obtenerResult()
    {
        $this->result;
    }
    public function obtenerfilasAfectadas()
    {
        $this->filasAfectadas;
    }
}
?>