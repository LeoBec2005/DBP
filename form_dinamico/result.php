<?php
$host = 'localhost';
$dbname = 'cv_database';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

$sql = "SELECT * FROM cv_data ORDER BY id DESC LIMIT 1";
$stmt = $pdo->query($sql);
$cvData = $stmt->fetch(PDO::FETCH_ASSOC);

if ($cvData) {
    $programming_lng = json_decode($cvData['programming_lng'], true) ?? [];
    $skills = json_decode($cvData['skills'], true) ?? [];
    $abilities = json_decode($cvData['abilities'], true) ?? [];
    ?>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currículum Vitae</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                padding: 20px;
            }
            .cv-container {
                max-width: 800px;
                margin: 0 auto;
                background: #fff;
                padding: 20px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }
            h1, h2, h3 {
                color: #333;
            }
            ul {
                list-style-type: square;
                padding-left: 20px;
            }
            .section {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="cv-container">
            <h1><?php echo htmlspecialchars($cvData['name']); ?></h1>
            <p><strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($cvData['birthdate']); ?></p>
            <p><strong>Ocupación:</strong> <?php echo htmlspecialchars($cvData['occupation']); ?></p>
            <p><strong>Contacto:</strong> <?php echo htmlspecialchars($cvData['contact']); ?></p>
            <p><strong>Nacionalidad:</strong> <?php echo htmlspecialchars($cvData['nacionality']); ?></p>

            <div class="section">
                <h2>Perfil Profesional</h2>
                <p><?php echo nl2br(htmlspecialchars($cvData['profile'])); ?></p>
            </div>

            <?php if (!empty($programming_lng)): ?>
                <div class="section">
                    <h2>Lenguajes de Programación</h2>
                    <ul>
                        <?php foreach ($programming_lng as $language): ?>
                            <li><?php echo htmlspecialchars($language); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (!empty($skills)): ?>
                <div class="section">
                    <h2>Aptitudes</h2>
                    <ul>
                        <?php foreach ($skills as $skill): ?>
                            <li><?php echo htmlspecialchars($skill); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (!empty($abilities)): ?>
                <div class="section">
                    <h2>Habilidades</h2>
                    <ul>
                        <?php foreach ($abilities as $ability): ?>
                            <li><?php echo htmlspecialchars($ability); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </body>
    </html>

    <?php
} else {
    echo "No se encontraron datos de currículum.";
}
?>
