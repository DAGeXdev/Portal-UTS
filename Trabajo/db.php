<?php
class ConexionMysql{
    // Definir atributos
    private $host;
    private $user;
    private $password;
    private $database;
    private $conn;

    public function __construct() {
        // Incluir archivo de configuración
        require_once "config_db.php";
        $this->host = HOST;
        $this->user = USER;
        $this->password = PASSWORD;
        $this->database = DATABASE;
    }

    // Crear conexión
    public function CrearConexion() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->conn->connect_errno) {
            die("Error al conectarse a MYSQL: (" . $this->conn->connect_errno . ") " . $this->conn->connect_error);
        }
    }

    // Cerrar conexión
    public function CerrarConexion() {
        $this->conn->close();
    }

    // Ejecutar SQL
    public function EjecutarSQL($sql, $params) {
    $stmt = $this->conn->prepare($sql); // Prepara la consulta
    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $this->conn->error);
    }

    // Bind de los parámetros
    $stmt->bind_param(...$params); // Esto pasa los parámetros correctamente

    // Ejecuta la consulta
    $stmt->execute();

    // Devuelve el resultado
    return $stmt->get_result(); // Esto devuelve el objeto de resultados
}


    // Obtener filas
    public function ObtenerFilas($result) {
        return $result->fetch_assoc(); // Usamos fetch_assoc para obtener un array asociativo
    }
}
?>
