<?php
function longitud($contraseña){
    if (strlen($contraseña) < 8){
        $valida = false;
    }
    else{
        $valida = true;
    }
    return $valida;
}
function mayus($contraseña){
    $longitud = strlen($contraseña);
    $i = 0;
    $valida = false;
    while (!$valida && $longitud > $i){
        if(ctype_upper($contraseña[$i])){
            $valida = true;
        }
        else{
            $i++;
        }
    }
    return $valida;
}
function minus($contraseña){
    $longitud = strlen($contraseña);
    $i = 0;
    $valida = false;
    while (!$valida && $longitud > $i){
        if(ctype_lower($contraseña[$i])){
            $valida = true;
        }
        else{
            $i++;
        }
    }
    return $valida;
}

function nums($contraseña){
    $longitud = strlen($contraseña);
    $i = 0;
    $valida = false;
    while (!$valida && $longitud > $i){
        if(ctype_digit($contraseña[$i])){
            $valida = true;
        }
        else{
            $i++;
        }
    }
    return $valida;
}

function simb($contraseña) {
    $longitud = strlen($contraseña);
    $i = 0;
    $valida = false;

    while (!$valida && $longitud > $i) {
        // Verificar si el carácter no es alfanumérico (es decir, es especial)
        if (!ctype_alnum($contraseña[$i])) {
            $valida = true; 
        } else {
            $i++;
        }
    }
    return $valida;
}


function validaContraseña($contraseña) {//Funcion central donde combinamos todas las funciones anteriores. Si la contraseña es valida nos devolvería el valor true

if (longitud($contraseña) && mayus($contraseña) && minus($contraseña) && nums($contraseña) && simb($contraseña)){

    $valida = true;
    }
else{
    $valida = false;

}

return $valida;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contraseña = $_POST['password'];  // Obtener la contraseña ingresada
    $esSegura = validaContraseña($contraseña);  // Llamar a tu función de validación

    // Mostrar un mensaje basado en el resultado
    if ($esSegura) {
        echo "<p style='color: green;'>¡Contraseña segura!</p>";
    } else {
        echo "<p style='color: red;'>Contraseña insegura, intenta mejorarla.</p>";
    }
}
