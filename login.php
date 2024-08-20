<?php 
        
        include_once "configuraciones/BD.php";
        $conexionBD = BD::crearInstancia();

        $login = isset($_POST['login']) ? $_POST['login'] : '';
        
        if ($login) {
            $username = $_POST['usuario'];
            $password = $_POST['contraseña'];

            $consulta = $conexionBD->prepare("SELECT * FROM user WHERE username = :username AND pass = :pass");
            $consulta->bindParam(':username', $username);
            $consulta->bindParam(':pass', $password);
            $consulta->execute();

            $user = $consulta->fetch();

            if ($consulta->rowCount() > 0) {
                echo "<script>alert('si')</script>";
                http_response_code(302);
                header('Location: secciones/index.php');
                exit;
            } else {
                echo "Error de autenticación";
            }
        }

        ?>