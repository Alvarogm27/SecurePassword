<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación contraseña segura</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="content">
    <h1>¿Es tu contraseña realmente segura?</h1>
    <p>Una contraseña realmente segura es aquella que sigue esta serie de características:
    </p>
    <div class="requirements">
        <ul>
            <li>Contiene al menos 8 caracteres</li>
            <li>Contiene al menos 1 mayúscula</li>
            <li>Contiene al menos 1 minuscula</li>
            <li>Contiene al menos 1 número</li>
            <li>Contiene al menos 1 caracter especial</li>
        </ul>
    </div>
    <form method="post" action="">
        <label for="password">Ingresa tu contraseña:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Verificar</button>
        <?php //Llamamos al archivo php donde tenemos las funciones con la comprobacion de que la contraseña cumpla los parametros que hemos puesto.
        include("functions.php");
        ?>
    </form>
    </div>

</body>
</html>