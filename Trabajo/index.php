<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portal Estudiantes UTS</title>
</head>
<body>

    <?php
    // Incluir el archivo de conexión
    include 'db.php';
     
    ?>
    <nav class="PanelSuperior">   
        
        <div class="img_nav">
            <a href="index.html"><img src="img/logouts.png" alt="logo uts"></a>
        </div>
        
        <div class="dropdown-container">
        
            <div class="dropdown">
                <button>Matricula</button>
                <div class="dropdown-content">
                    <a href="matricula.html">Matricula en Linea</a>
                    <a href="cancelar.html">Cancelar Materia</a>
                </div>
            </div>

            <div class="dropdown">
                <button>Consultas</button>
                <div class="dropdown-content">
                    <a href="matricula.httml">Horario</a>
                    <a href="cancelar.html">Notas Actuales</a>
                </div> 
            </div>

            <div class="dropdown">
                <button>Vacacionales</button>
                <div class="dropdown-content">
                    <a href="matricula.httml">Opcion 1</a>
                    <a href="cancelar.html">Opcion 2</a>
                </div>
            </div>
        </div>

        <div class="ingreso"> 
            <button id="loginBtn">Ingreso Estudiante</button>
        </div>
                             
    </nav>

<!-- Modal de Login -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <!-- <span class="close">&times;</span>-->
            <h2>Iniciar sesión</h2>
            <form action="acciones.php" method="POST">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" name="btnIngreso">Ingresar</button>
            </form>
        </div>
    </div>


<!-- PRESENTACION -->
    <div class="Bienvenido"><h1>Bienvenido estudiante a su Campus TI</h1></div>

<!-- NOTICIAS -->
    <div class="noticias">
        <div class="novedad">
            <div class="fecha">Novedades <br>(23/11/2024)</div>
            <div class="descripcion">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        <div class="novedad">
            <div class="fecha">Novedades <br>(22/11/2024)</div>
            <div class="descripcion">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        <div class="novedad">
            <div class="fecha">Novedades <br>(21/11/2024)</div>
            <div class="descripcion">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
    </div>
    
<!-- PIE DE PAGINA -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Todos los derechos reservados.</p>
            <div class="footer-links">
                <a href="#">Contacto</a> | 
                <a href="#">Política de privacidad</a> | 
                <a href="#">Términos y condiciones</a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
