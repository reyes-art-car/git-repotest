<?php
include __DIR__ . '/app/views/header.php';?>

<h2>Tareas Pendientes</h2>
<style src="css/style.css""></style>
<ul>
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


    foreach ($tasks as $tarea) {
      echo renderizarTarea($tarea);
  }
  ?>
</ul>
<?php include __DIR__ . '/app/views/footer.php'; ?>
