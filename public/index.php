<?php
// Datos de las tareas (simulando una base de datos)
$tareas = [
    ['titulo' => 'Configurar el entorno de desarrollo', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la estructura de carpetas', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Diseñar la base de datos', 'completado' => false, 'prioridad' => 'media'],
    ['titulo' => 'Implementar el sistema de login', 'completado' => false, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la vista de tareas', 'completado' => false, 'prioridad' => 'baja']
];

include '../app/views/header.php';
require_once __DIR__ . '/../app/functions.php';
?>

<h2>Tareas Pendientes</h2>
<ul>
    <?php foreach ($tareas as $tarea) : ?>
        <?php echo renderizarTarea($tarea); ?>
    <?php endforeach; ?>
</ul>

<?php include '../app/views/footer.php'; ?>