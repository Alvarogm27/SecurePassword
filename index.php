<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación contraseña segura</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            display: block;
            font-family: monospace;
            white-space: nowrap;
            border-right: 4px solid;
            width: 35ch;

            animation: typing 3s steps(35),
            blink .5s infinite step-end alternate;
            overflow: hidden;
        }
        @keyframes typing {
            from {width: 0}
        }

        @keyframes blink{
            50% {border-color: transparent}
        }
    </style>
</head>
<body>
    <h1>¿Es tu contraseña realmente segura?</h1>
    <p>Una contraseña realmente segura es aquella que sigue esta serie de características:
    </p>
    <ul>
            <li>Contiene al menos 8 caracteres</li>
            <li>Contiene al menos 1 mayúscula</li>
            <li>Contiene al menos 1 minuscula</li>
            <li>Contiene al menos 1 número</li>
            <li>Contiene al menos 1 caracter especial</li>
        </ul>
    <form method="post" action="">
        <label for="password">Ingresa tu contraseña:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Verificar</button>
        <?php
        include("functions.php");
        ?>
    </form>
</body>
</html>