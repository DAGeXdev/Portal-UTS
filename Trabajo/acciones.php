<?php
// Incluir el archivo de conexión
include('db.php');

// Crear una instancia de la clase de conexión
$miconexion = new ConexionMysql();

// Crear la conexión a la base de datos
$miconexion->CrearConexion();

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $params = ['ss', $username, $password]; // 'ss' significa que ambos parámetros son cadenas (strings)
    $result = $miconexion->EjecutarSQL($sql, $params);
    
    // Verificar si se encontró un usuario
    if ($result->num_rows > 0) {
        $row = $miconexion->ObtenerFilas($result);
        echo "<script>
                // Cerrar el modal
                var modal = document.getElementById('loginModal');
                modal.style.display = 'none';

                // Esperar un poco para dar tiempo a que el modal se cierre
                setTimeout(function() {
                    // Redirigir al usuario
                    window.location.href = 'index.php';
                }, 500);  // 500 milisegundos de espera
              </script>";
        exit(); // Detener la ejecución aquí
                
    } else {
        echo "<h2>Usuario o contraseña incorrectos.</h2>";
    }



// Ejecutar la consulta SQL para verificar el usuario y la contraseña


// Cerrar la conexión
$miconexion->CerrarConexion();
?>
