<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario CV con SQL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        .success-message {
            color: green;
            text-align: center;
            margin-top: 20px;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear tu CV</h1>

        <?php
        // Conectar a la base de datos MySQL
        $servername = "localhost";  // Servidor local
        $username = "root";  // Usuario predeterminado en XAMPP
        $password = "";  // Contraseña predeterminada es vacía
        $dbname = "cv_database";  // Nombre de la base de datos que creaste

        // Crear la conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar si la conexión fue exitosa
        if ($conn->connect_error) {
            die("<div class='error-message'>Conexión fallida: " . $conn->connect_error . "</div>");
        }

        // Verificar si el formulario ha sido enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los datos del formulario
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $email = $_POST['email'];
            $experiencia_laboral = $_POST['experiencia_laboral'];
            $formacion = $_POST['formacion'];
            $idiomas = $_POST['idiomas'];
            $habilidades = $_POST['habilidades'];

            // SQL para insertar los datos en la base de datos
            $sql = "INSERT INTO cv (nombres, apellidos, email, experiencia_laboral, formacion, idiomas, habilidades) 
                    VALUES ('$nombres', '$apellidos', '$email', '$experiencia_laboral', '$formacion', '$idiomas', '$habilidades')";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='success-message'>CV guardado exitosamente en la base de datos.</div>";
            } else {
                echo "<div class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
            }
        }

        // Cerrar la conexión
        $conn->close();
        ?>

        <!-- Formulario para ingresar información -->
        <form method="POST" action="">
            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="experiencia_laboral">Experiencia Laboral:</label>
            <textarea id="experiencia_laboral" name="experiencia_laboral" rows="5" required></textarea>

            <label for="formacion">Formación:</label>
            <textarea id="formacion" name="formacion" rows="5" required></textarea>

            <label for="idiomas">Idiomas:</label>
            <textarea id="idiomas" name="idiomas" rows="5" required></textarea>

            <label for="habilidades">Habilidades:</label>
            <textarea id="habilidades" name="habilidades" rows="5" required></textarea>

            <input type="submit" value="Generar CV">
        </form>
    </div>
</body>
</html>
