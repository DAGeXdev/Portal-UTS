<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portal Estudiantes UTS</title>
</head>
<body>

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

    <main class="matricula-container">
        <!-- Sección del programa -->
        <section class="program-section">
            <h2>Programa:</h2>
            <select id="programa" name="programa">
                <option value="matematicas">Matemáticas</option>
                <option value="ciencias">Ciencias</option>
                <option value="historia">Historia</option>
                <option value="ingles">Inglés</option>
            </select>
        </section>
    
        <!-- Contenedor de columnas -->
        <div class="columns-container">
            <!-- Columna izquierda: Materias -->
            <div class="column left-column">
                <h3>Materias Disponibles</h3>
                <ul id="materias-list">
                    <li>
                        <input type="radio" name="materia" value="Matemáticas - 08:00 - 10:00 - A1">
                        <strong>Materia:</strong> Matemáticas<br>
                        <strong>Horario:</strong> 08:00 - 10:00<br>
                        <strong>Grupo:</strong> A1
                    </li>
                    <li>
                        <input type="radio" name="materia" value="Ciencias - 10:00 - 12:00 - B2">
                        <strong>Materia:</strong> Ciencias<br>
                        <strong>Horario:</strong> 10:00 - 12:00<br>
                        <strong>Grupo:</strong> B2
                    </li>
                    <li>
                        <input type="radio" name="materia" value="Inglés - 02:00 - 04:00 - C3">
                        <strong>Materia:</strong> Inglés<br>
                        <strong>Horario:</strong> 02:00 - 04:00<br>
                        <strong>Grupo:</strong> C3
                    </li>
                </ul>
            </div>
    
            <!-- Botones centrales -->
            <div class="column center-column">
                <button class="add-button">>></button>
                <button class="remove-button"><<</button>
            </div>
    
            <!-- Columna derecha: Horario -->
            <div class="column right-column">
                <h3>Horario Seleccionado</h3>
                <ul id="horario-list"></ul>
            </div>
        </div>
    </main>

    
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
