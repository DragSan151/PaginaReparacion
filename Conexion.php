<?php
    // Configuración de la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "58603905";
    $database = "Pagina";

    // Crear una conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar si hay errores en la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    //Obtener el nombre de usuario del formulario
    $username=$_POST['username'];

    //Escribir la consulta SQL
    $sql ="SELECT * FROM pagina.personas WHERE Nombre = '$username'";


    // Consulta a la base de datos
    $result = $conn->query($sql);


    //Verificacion si existe el usuario en la base de datos
    if($result->num_rows > 0)
    {
        //El usuario existe
        echo "El usuario existe en la base de datos.";
    }else{
        //Usuario no existe 
        echo "Usuario no existe en la base de datos";
    }

    
    // Cerrar la conexión
    $conn->close();
    ?>