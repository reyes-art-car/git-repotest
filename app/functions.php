<?php
require_once __DIR__.'/../app/functions.php';
function obtenerClasePrioridad($prioridad) {

    switch ($prioridad) {
        case 'alta':
            return ' priority-alta';
        case 'media':
            return ' priority-media';
        case 'baja':
            return ' priority-baja';
    }
}
        function renderizarTarea($tarea)
        {
            $taskClasses = '';

            // Agregamos clase si la tarea está completada
            if ($tarea['completado'] === true) {
                $taskClasses .= ' completed';
            }

            // Concatenamos la clase según la prioridad
            $taskClasses .= obtenerClasePrioridad($tarea['prioridad']);
            //Hacemos el li y devolvemos
            return '<li class="' . trim(obtenerClasePrioridad($tarea['prioridad'])) . '">' . $tarea['titulo'] . '</li>';

    }


