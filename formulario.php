<?php

//Obtener los datos enviados al formulario
if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellidoUno = $_POST['apellidoUno'];
    $apellidoDos = $_POST['apellidoDos'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "LABORATORIO";

    $connection = new mysqli($servername, $username, $dbpassword, $dbname);
   
    //Comprobación de la conexión
    if ($connection->connect_error) {
        die("Conexión fallida: " . $connection->connect_error);
    }

    //Comprobación de si el usuario está registrado
    $sql = "SELECT * FROM usuario WHERE Email = '$email'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        
        header("Location: formulario.html?correoExiste=true");
        exit();
    }

    //
    $password_cifrada = password_hash($password, PASSWORD_DEFAULT);

    //Insertar al nuevo usuario
    $sql = "INSERT INTO usuario (Nombre, `Primer apellido`, `Segundo apellido`, Email, `Login o Usuario`, `Password`)
    VALUES ('$nombre', '$apellidoUno', '$apellidoDos', '$email', '$usuario', '$password_cifrada')";

    if ($connection->query($sql) === TRUE) {
        echo "Registro completado con éxito";
        echo "<a href='registro.php'>Consulta</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}
?>