<?php
if (isset($_GET['buscar'])) {
    $termino_busqueda = $_GET['termino_busqueda'];
    echo "Has buscado: " . htmlspecialchars($termino_busqueda);
} else {
    echo "Ningún término introducido para la búsqueda.";
}
?>
