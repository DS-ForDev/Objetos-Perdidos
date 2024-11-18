<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesando Login</title>
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* Personalización adicional para SweetAlert */
        .swal2-popup {
            border-radius: 15px !important;
            font-family: Arial, sans-serif !important;
        }
        .swal2-title {
            font-size: 1.8em !important;
            font-weight: 600 !important;
        }
        .swal2-confirm {
            padding: 12px 25px !important;
            font-size: 1.1em !important;
            border-radius: 8px !important;
        }
    </style>
</head>
<body>
    <?php
    include 'BD.php';
    $conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $Correo = $_POST['correo'];
    $Contrasena = $_POST['contraseña'];

    $sql = "SELECT * FROM usuario WHERE correo = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $Correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if ($Contrasena == $user['Contraseña']) {
            $_SESSION['nombre'] = $user['Nombre_de_Usuario'];
            $_SESSION['correo'] = $user['Correo'];
            ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: '¡Bienvenido!',
                    html: `<div style="font-size: 1.2em; margin-top: 10px;">
                            Hola <b><?php echo $user['Nombre_de_Usuario']; ?></b><br>
                            Has iniciado sesión correctamente
                          </div>`,
                    iconColor: '#4CAF50',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    background: '#fff',
                    backdrop: `
                        rgba(0,123,255,0.1)
                        left top
                        no-repeat
                    `,
                    customClass: {
                        popup: 'animated zoomIn'
                    },
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                }).then(() => {
                    window.location.href = '../carousel/Bienvenida.php';
                });
            </script>
            <?php
        } else {
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Acceso Denegado',
                    html: '<div style="font-size: 1.1em;">La contraseña ingresada es incorrecta</div>',
                    confirmButtonText: 'Intentar nuevamente',
                    confirmButtonColor: '#3085d6',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    },
                    background: '#fff',
                    backdrop: `
                        rgba(220,53,69,0.1)
                        left top
                        no-repeat
                    `,
                    showCloseButton: true,
                    focusConfirm: false,
                    allowOutsideClick: false
                }).then(() => {
                    window.location.href = 'login.php';
                });
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Usuario no encontrado',
                html: `<div style="font-size: 1.1em;">
                        El correo <b><?php echo htmlspecialchars($Correo); ?></b><br>
                        no está registrado en nuestro sistema
                       </div>`,
                confirmButtonText: 'Intentar nuevamente',
                confirmButtonColor: '#ffc107',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                },
                background: '#fff',
                backdrop: `
                    rgba(255,193,7,0.1)
                    left top
                    no-repeat
                `,
                showCloseButton: true,
                focusConfirm: false,
                allowOutsideClick: false
            }).then(() => {
                window.location.href = 'login.php';
            });
        </script>
        <?php
    }

    $stmt->close();
    $conexion->close();
    ?>
</body>
</html>