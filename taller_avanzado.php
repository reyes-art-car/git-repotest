<?php
echo "<h2> Problema 1. Calculadora de descuentos</h2>";
function calcularDescuento ($precio, $categoria){
    if ($categoria== 'electronica'){
        $precioFinal=$precio-$precio*0.15;
    } else if ($categoria=='ropa'){
        $precioFinal=$precio-$precio*0.10;
    }else if ($categoria=='alimentacion'){
        $precioFinal=$precio-$precio*0.05;
    } else {
        echo 'No tiene descuento';
    }
    echo $precioFinal;
    return $precioFinal;
}
calcularDescuento(750, 'electronica');
echo "<br>";
echo "<h2> Problema 2. El Juego FizzBuzz</h2>";
function fizzBuzz($numero){
    if ($numero%3==0 && $numero%5==0){
        $resultado="FizzBuzz";
    } else if ($numero%3==0) {
        $resultado="Fizz";
    } else if ($numero%5==0){
        $resultado= "Buzz";
    } else {
        $resultado=$numero;
    }
echo $resultado;
    return $resultado;
}
fizzBuzz(15);
echo "<br>";
echo "<h2> Problema 3. Validador de Contraseña</h2>";
function validarContraseña($pass){
    if(strlen($pass)>=8 &&preg_match("/[A-Z]/", $pass)&&preg_match ('/\d/', $pass)){
        $tipo= "FUERTE";
    } else if (strlen($pass)>=8) {
        $tipo="MEDIA";
    } else {
         $tipo="DEBIL";
    }
    echo $tipo;
return $tipo;
}
validarContraseña("nsadfdnfA8");
echo "<br>";
echo "<h2> Problema 4. Encontrar el Valor Máximo</h2>";
function encontrarMaximo($array){
    $max=$array[0];
    foreach ($array as $valor) {
        if ($valor>$max) {
            $max=$valor;
        }
    }
    echo "El número máximo es: ".$max;
    return $max;
}
encontrarMaximo([2,7,8,15,36,23]);
echo "<br>";
echo "<h2> Problema 5. Filtrar usuarios por Criterio</h2>";
$usuarios= [
    ['nombre'=>'Ana','edad'=>25,'activo'=>true],
    ['nombre'=>'Juan','edad'=>17,'activo'=>true],
    ['nombre'=>'Sofía','edad'=>22,'activo'=>true]
];
function usuariosCriterio($cadena){
    $usuarios= [
        ['nombre'=>'Ana','edad'=>25,'activo'=>true],
        ['nombre'=>'Juan','edad'=>17,'activo'=>true],
        ['nombre'=>'Sofía','edad'=>22,'activo'=>true]
    ];
        foreach ($usuarios as $usuario) {
            if ($usuario['nombre'] == $cadena ||
                $usuario['edad'] == $cadena ||
                $usuario['activo'] == $cadena) {
                print_r($usuario);
                return $usuario;

            }
        }
            return null;
        }
usuariosCriterio("Sofía");