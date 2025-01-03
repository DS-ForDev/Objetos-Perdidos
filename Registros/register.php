<?php
try {
    // Conexión a la base de datos
    $pdo = new PDO('mysql:host=localhost;dbname=ObjetosPerdidos', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Inicializa variables para evitar errores de "undefined array key"
    $Nombre_de_Usuario = $Correo = $Contraseña = $Direccion = $Fecha_de_Nacimiento = $Telefono = null;

    // Solo procesa los datos si el formulario fue enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Datos recibidos desde el formulario
        $Nombre_de_Usuario = $_POST['nombre'] ?? null;
        $Correo = $_POST['correo'] ?? null;
        $Contraseña = $_POST['contraseña'] ?? null;
        $Direccion = $_POST['direccion'] ?? null;
        $Fecha_de_Nacimiento = $_POST['fechanacimiento'] ?? null;
        $Telefono = $_POST['telefono'] ?? null;

        // Validación de campos obligatorios
        if (empty($Nombre_de_Usuario) || empty($Correo) || empty($Contraseña)) {
            throw new Exception("Por favor, llena todos los campos obligatorios (Nombre, Email, Contraseña).");
        }

        // Verifica que el rol 'Usuario' exista en la base de datos
        $stmtRol = $pdo->prepare("SELECT ID_rol FROM roles WHERE Nombre_rol = :nombreRol");
        $stmtRol->execute(['nombreRol' => 'Usuario']); // Rol predeterminado para nuevos usuarios
        $idRol = $stmtRol->fetchColumn();

        if (!$idRol) {
            throw new Exception("No se encontró el rol 'Usuario'. Asegúrate de que exista en la tabla roles.");
        }

        // Encriptar la contraseña
        $passwordHash = password_hash($Contraseña, PASSWORD_DEFAULT);

        // Preparar la consulta de inserción
        $stmt = $pdo->prepare(
            "INSERT INTO Usuario 
            (ID_rol, Nombre_de_Usuario, Correo, Contraseña, Direccion, Fecha_de_Nacimiento, Telefono) 
            VALUES 
            (:idRol, :nombre, :email, :password, :direccion, :fechaNacimiento, :telefono)"
        );

        // Ejecutar la consulta
        $stmt->execute([
            'idRol' => $idRol, // ID del rol (en este caso, 'Usuario')
            'nombre' => $Nombre_de_Usuario,
            'email' => $Correo,
            'password' => $passwordHash,
            'direccion' => $Direccion,
            'fechaNacimiento' => $Fecha_de_Nacimiento,
            'telefono' => $Telefono,
        ]);

        echo "Usuario registrado exitosamente.";
    }
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Objetos Perdidos</title>
    <link rel="icon" href="../assets/img/logoOP.png" type="image/x-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="icon" href="../assets/img/logoOP.png" type="image/x-icon">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

  /*style de registros*/

  :root {
            --primary-color: #2f4f7f;
            --secondary-color: #f7f7f7;
            --terciary-color: #45a0e6;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--secondary-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }

        .header {
            width: 100%;
            background-color: var(--primary-color);
            padding: 10px 0;
            color: var(--secondary-color);
            text-align: center;
        }

        .header img {
            width: 40px;
            vertical-align: middle;
            margin-right: 10px;
        }

        .header a {
            color: var(--secondary-color);
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }

        .container {
            width: 550px;
            background-color: var(--terciary-color);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-top: 20px;
        }

        .form-container {
            background-color: var(--secondary-color);
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            color: var(--secondary-color);
            background-color: var(--primary-color);
            padding: 10px;
            border-radius: 25px;
            margin: -40px auto 20px;
            width: 70%;
            font-size: 18px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: var(--primary-color);
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid var(--primary-color);
            border-radius: 5px;
            font-size: 14px;
        }

        .terms {
            display: flex;
            align-items: center;
            justify-content: left;
            font-size: 14px;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .terms input {
            margin-right: 5px;
        }

        .submit-btn {
            background-color: var(--terciary-color);
            color: var(--secondary-color);
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: var(--primary-color);
        }

        .footer {
            margin-top: 20px;
            color: var(--primary-color);
            font-size: 14px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .footer a {
            color: var(--primary-color);
            text-decoration: none;
        }
</style>


    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    

    
    <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="../assets/img/logoOP.png" alt="" style="width: 30px; height: 30px; margin-right: 10px;">
          <span class="font-weight-bold">Objetos Perdidos</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../carousel/index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../carousel/Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../carousel/Contacto.php">Contacto</a>
            </li>
            
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
               <li class="nav-item">
              <a class="nav-link " href="../Registros/login.php">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Registros/register.php">Registrate</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<hr class="featurette-divider">
<hr class="featurette-divider">
<hr class="featurette-divider">

<body>
    <div class="container">
        <h2>Regístrate</h2>
        <p style="color: var(--secondary-color);">Ingresa tu información para poder ingresar</p>
        <div class="form-container">
            <form method="POST" action="procesarRegistro.php">
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre de usuario..." required>

                <label for="email">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo electrónico..." required>

                <label for="birthdate">Fecha de nacimiento:</label>
                <input type="date" id="fechanacimiento" name="fechanacimiento" required>

                <label for="phone">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" placeholder="Ingresa tu número de teléfono..." required>

                <label for="address">Dirección:</label>
                <input type="text" id="direccion" name="direccion" placeholder="Ingresa tu dirección..." required>

                <label for="password">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" placeholder="Escribe una contraseña segura..." required>

                <label for="confirm-password">Confirma la contraseña:</label>
                <input type="password" id="confirmarcontraseña" name="confirm-password" placeholder="Vuelve a escribir la contraseña..." required>

                <div class="terms">
        <input type="checkbox" id="terms" name="terms">
        <label for="terms">Acepto los Términos y Condiciones</label>
    </div>

                <button type="submit" class="submit-btn">Registrarse</button>
            </form>
        </div>
    </div>
  </div>
</body>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="text-center text-white py-4" style="background-color: #333;">
    <div class="container">
      <p class="mb-0">&copy; 2024 Desarrollado Por Dolphin Telecommunication. Todos los derechos reservados.</p>
      <p class="mb-0">Síguenos en:</p>
      <div>
        <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
        <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </footer>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
