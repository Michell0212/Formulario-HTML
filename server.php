<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<h2>Datos recibidos:</h2><br>";

    foreach ($_POST as $campo => $valor) {
        echo "<strong>" . ucfirst($campo) . ":</strong> " . htmlspecialchars($valor) . "<br>";
    }
} else {
    echo "Acceso no válido.";
}
?>
