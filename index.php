<?php

$tasks = [
    [
        'title' => 'Estudiar PHP',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Preparar presentación',
        'completed' => true,
        'priority' => 'media'
    ],
    [
        'title' => 'Lavar la ropa',
        'completed' => false,
        'priority' => 'baja'
    ],
    [
        'title' => 'Comprar comida',
        'completed' => true,
        'priority' => 'alta'
    ],
    [
        'title' => 'Hacer ejercicio',
        'completed' => false,
        'priority' => 'media'
    ]
];

?>

<?php
include __DIR__ . '/app/views/header.php';?>

<h2>Tareas Pendientes</h2>
<style></style>
<ul>
    <?php
    foreach ($tasks as $task) {

        // Inicializamos la variable de clases vacía
        $taskClasses = '';

        // 1. IF para la clave 'completed'
        if ($task['completed'] === true) {
            $taskClasses .= ' completed';
        }

        // 2. SWITCH para la clave 'priority'
        switch ($task['priority']) {
            case 'alta':
                $taskClasses .= ' priority-alta';
                break;
            case 'media':
                $taskClasses .= ' priority-media';
                break;
            case 'baja':
                $taskClasses .= ' priority-baja';
                break;
        }


        echo '<li class="' . trim($taskClasses) . '">' . $task['title'] . '</li>';
    }
    ?>
</ul>
<?php include __DIR__ . '/app/views/footer.php'; ?>
