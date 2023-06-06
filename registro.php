<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Registro de usuarios</title>

        <link rel="stylesheet" type="text/css" href="./reset.css" />
        <link rel="stylesheet" type="text/css" href="./registro.css" />
    </head>
    <body>
        <h1>Usuarios registrados:</h1>
        <div class="tabla">
            <table>
                <tr class="fila">
                    <th>Nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Email</th>
                    <th>Login o Usuario</th>
                    <th>Password</th>
                </tr>

                <?php 
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

                    // Realizar la consulta para obtener los usuarios
                    $sql = "SELECT * FROM usuario";
                    $result = $connection->query($sql);

                    // Verificar si hay resultados
                    if ($result->num_rows > 0) {
                        // Imprimir los datos de cada usuario
                        while ($row = $result->fetch_assoc()) {
                            echo <<<_END
                                <tr class="fila">
                                    <td>{$row["Nombre"]}</td>
                                    <td>{$row["Primer apellido"]}</td>
                                    <td>{$row["Segundo apellido"]}</td>
                                    <td>{$row["Email"]}</td>
                                    <td>{$row["Login o Usuario"]}</td>
                                    <td>{$row["Password"]}</td>
                                </tr>
                            _END;
                        }
                    } else {
                        echo "No se encontraron usuarios.";
                    }

                    // Cerrar la conexión
                    $connection->close();
                ?>
            </table>
        </div>
        <a href="formulario.html" class="volver">Volver al formulario</a>
    </body>
</html>
