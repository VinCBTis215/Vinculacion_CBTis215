
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro de visitas</title>
    <link rel="stylesheet" type="text/css" href="css/EstiloR.css">
    <meta charset="utf-8">
</head>
   <header>
 <nav>
   <ul id="menu">
    <li><a href="index.html">Inicio</a></li>
    <li><a href="SeguimientoDeEgresados.html">Seguimiento de egresados</a></li>
    <li><a href="Emprendedores.html">Emprendedores</a></li>
    <li><a href="Prototipos.html">Prototipos</a></li>
    <li><a>Promocion del plantel</a>
      <ul>
    <li><a href="Administracion de RH.html">Administracion de recursos humanos</a></li>
    <li><a href="Contabilidad.html">Contabilidad</a></li>
    <li><a href="Enfermería.html">Enfermería General</a></li>
    <li><a href="MecanicaInd.html">Mecanica Industrial</a></li>
    <li><a href="Ofimatica.html">Ofimatica</a></li>
    <li><a href="Programacion.html">Programacion</a></li>
    <li><a href="BolsaDeTrabajo.html">Bolsa De Trabajo</a></li>
   </ul>
      <li><a href="registro.html"> Registro de Visitas</a></li>
 </li>
   </ul>
   </nav>
   <br/>
</header>
 
	<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>Registra tu Visita</h3>
                        <p>Registrate en la pagina</p>
                        <button id="btn__iniciar-sesion">Registrarse</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>Registra tu visita</h3>
                        <p>Regístrate en la pagina</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/registro_visitas.php" method="POST" class="formulario__login">
                        <h2>Regístrarse</h2>
                       <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Eres estudiante o visitante" name="estudiante_visitante">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <button>Regístrarse</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_visitas.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                       <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Eres estudiante o visitante" name="estudiante_visitante">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="js/script.js"></script>
</body>
</html>