<?php
define("SITE_NAME", "Dinamizando_Taskflow");
$pageTitle = SITE_NAME . " - Página de Inicio";
$userName = "Reyes Artacho"; // Tipo String
$userAge = 29;             // Tipo Integer
$isEatingKebab = true;     // Tipo Boolean
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TaskFlow</title>
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
    <h1>Bienvenido a nuestra aplicación</h1>
    <header>
        <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>
    </header>
    <main>
        <h2>Perfil del Usuario</h2>
        <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
        <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
        <p><strong>Almuerzo:</strong> Usuario <?php echo $isEatingKebab ? "Kebab" : "No Kebab"; ?></p>
    </main>
</body>
</html>
