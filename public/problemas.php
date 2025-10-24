
<?php
//Problema 1.1 Perfil de usuario
echo "<h2>Problema 1.1. Perfil de usuario</h2>";
$nombre = "Reyes";
$apellidos="Artacho Carrero";
$edad= 29;
$altura= 1.69;
$esEstudiante= true;
echo "Nombre: ".$nombre."<br>", "Apellidos: " .$apellidos."<br>","Edad: " .$edad."<br>","Altura: " .$altura. "<br>","¿Es Estudiante? ".$esEstudiante;
echo "<hr>";
//Problema 1.2. Información de un producto
echo "<h2>Problema 1.2. Información de un producto</h2>";
$nombreProducto="Champú solido";
$precio= 7.5;
$stock=30;
$estaOferta = false;
echo "Nombre producto: ".$nombreProducto."<br>", "Precio: " .$precio."<br>","Stock: " .$stock."<br>","¿Está en oferta? ".$estaOferta;
echo "<hr>";
//Problema 1.3. Constantes de la Aplicación
echo "<h2>Problema 1.3. Constantes de la aplicación</h2>";
const NOMBRE_SITIO= "Mi Tienda Online";
echo "Nombre de Sitio: ".NOMBRE_SITIO."<br>";
const VERSION_APP=1.0;
echo "Versión de la app".VERSION_APP;
echo "<hr>";
//Problema 2.1. Calculadora Básica
echo "<h2>Problema 2.1 Calculadora básica</h2>";
$num1= 7;
$num2= 15;
$suma= 0;
$resta= 0;
$multiplicacion= 0;
$division=0.0;
$suma= $num1+$num2;
$resta= $num1-$num2;
$multiplicacion= $num1*$num2;
$division= $num1/$num2;
echo "Suma: ".$suma."<br>", "Resta: " .$resta."<br>","Multiplicación: " .$multiplicacion."<br>","Division: ".$division;
echo "<hr>";
//Problema 2.2. Actualización de Stock
echo "<h2>Problema 2.2.Actualización de Stock</h2>";
$stock=100;
$resta=$stock-25;
echo "Resta:".$resta. "<br>";
$suma= $stock+50;
echo "Suma:".$suma."<br>";
echo "<hr>";,

//Problema 2.3 Concatenación de Textos
echo "<h2>Problema 2.3. Concatenación de Textos</h2>";
$nombre="Julia";
$apellido= "Artacho";
$curso= "Desarrollo Web en Entorno Servidor";
$fraseCompleta= $nombre." ".$apellido." ".$curso;
echo "Frase completa: ".$fraseCompleta."<br>";
echo "<hr>";
//Problema 2.4. Comparaciones Simples
echo "<h2>Problema 2.4. Comparaciones Simples</h2>";
$edad=20;
$edadMinima=18;
var_dump($edad>=$edadMinima);
$contraseñaGuardada=1234;
$contraseñaUsuario=123;
echo "<br>";
var_dump($contraseñaUsuario===$contraseñaGuardada);
echo "<hr>";
//Problema 2.5 ¿Par o Impar?
echo "<h2>Problema 2.5. ¿Par o Impar?</h2>";
$numero=8;
if ($numero%2==0){
    echo "El número es par";
}
else {
    echo "El número es impar";
}
echo "<hr>";
//Categoria 3: Estructuras Condicionales
echo "<h1>Categoría 3:Estructuras Condicionales</h1>";
echo "<h2>Problema 3.1: Control de Acceso</h2>";
$edad=17;
if ($edad>=18){
    echo "Puedes pasar","<br>";
}
else{
    echo "No puedes pasar";
}
echo "<hr>";
//Calificcion de Examen
echo "<h2>Problema 3.2: Calificación de Examen</h2>";
$nota=7.5;
if ($nota<=5){
    echo "Suspenso";
} else if ($nota=5&&$nota<=6.9){
    echo "Aprobado";
}else if ($nota=7&&$nota<=8.9){
    echo "Notable";
}else {
    echo "Sobresaliente";
}
echo "<hr>";

echo "<h2>Problema 3.3: Menú del Día con switch</h2>";
$diaSemana="lunes";
switch ($diaSemana) {
    case"lunes":
        echo "lentejas";
    break;
    case"miercoles":
        echo "Paella";
        break;
    case"viernes":
        echo "Pescado al horno";
        break;
        default:
            echo "Hoy no hay menú especial";


}
echo "<hr>";
echo "<h2>Problema 3.4: Verificación de usuario Avanzada</h2>";
$rolUsuario="admin";
$usuarioActivo=true;
if ($rolUsuario=="admin"){
    echo "Acceso concedido";
}else {
    echo "Acceso denegado";
}
echo "<hr>";
echo "<h1>Bucles (Dificultad Media-Alta)</h1>";
echo "<h2>Problema 4.1: Tabla de Multiplicar del 7</h2>";
for ($i=1; $i<=10; $i++){
    $mult=7*$i;
    echo "7X".$i."=".$mult."<br>";
}
echo "<hr>";
echo "<h2>Problema 4.2.Cuenta atrás para Año Nuevo</h2>";

$contador=10;
while ($contador >0){
    echo $contador."<br>";
    $contador--;
    }
    echo "¡Feliz Año Nuevo!";
    echo "<hr>";
echo "<h2>Problema 4.3.Recorrer nombres</h2>";
$alumnos = ["Ana ","Juan ","Pedro ","Sofía "];
foreach ($alumnos as $alumno){
    echo "Hola, ".$alumno."<br>";
}
echo "<hr>";
echo "<h2>Problema 4.4.Listado de Productos</h2>";
$productos = [
 ["nombre"=>"Teclado","precio"=> 50],
 ["nombre"=>"Raton","precio"=> 25],
 ["nombre"=>"Monitor","precio"=> 300],
];
foreach ($productos as $producto){
    echo "Producto: ".$producto["nombre"].", Precio: ".$producto["precio"]."<br>";
}
echo "<hr>";
echo "<h1>Categoria 5: Arrays</h1>";
echo "<h2>Problema 5.1. Ficha de Usuario</h2>";
$usuario= [
    ["nombre"=>"Maria Reyes Artacho Carrero","edad"=>29, "email"=>"mariareyesartcar@gmail.com","esEstudiante"=>true],
];
foreach ($usuario as $usuario){
    echo "Nombre: ".$usuario["nombre"]."<br>". "Edad: ".$usuario["edad"]."<br>"."Email: ".$usuario["email"]."<br>"."¿Soy estudiante?:" .$usuario["esEstudiante"]."<br>";
}
echo "<hr>";
echo "<h2>Problema 5.2. Filtrado de Notas</h2>";
$notas=[8.5,4.2,7.0,9.8,5.5,3.9];
foreach ($notas as $nota){
    if($nota>=5){
        echo "Nota: ".$nota."<br>";
    }
}
echo "<hr>";
echo "<h2>Problema 5.3.Lista de la compra Avanzada</h2>";
$listaCompra=[
    "Frutas"=>["Manzanas","Plátanos","Naranjas","Uvas"],
    "Lácteos"=>["Leche","Queso","Yogures"],
    "Limpieza"=>["Detergente","Lejía","Lavavajillas"]
];
foreach ($listaCompra as $categoria=>$lista) {
    echo "<h3>$categoria</h3>";
    foreach($lista as $elemento){
        echo $elemento."<br>";
    }
    echo "<hr>";

}
echo "<hr>";
echo "<h2>Problema 5.4. Calculando el Total del Carrito</h2>";
$productos;
$total=0;
foreach ($productos as $producto){
   $precio=$producto["precio"];
    $total+=$precio;
}
echo $total."<br>";