<?php
session_start();
$palabra = isset($_SESSION['palabra']) ? $_SESSION['palabra'] : '';
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Has Ganado!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sixtyfour&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="sixtyfour-uniquifier">🎉 ¡Felicidades!</h1>
        <p>Has adivinado la palabra correctamente.</p>
        <p><strong>Palabra:</strong> <?php echo htmlspecialchars($palabra); ?></p>
        <a href="index.php" class="button">intentar de nuevo</a>
    </div>
</body>
</html>
