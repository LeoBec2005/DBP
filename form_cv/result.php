<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $birthdate = $_POST['bth_date'] ?? '';
    $occupation = $_POST['occupation'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $nacionality = $_POST['nacionality'] ?? '';
    $lvl_english = $_POST['lvl_english'] ?? '';
    $programming_lng = $_POST['programming_lng'] ?? [];
    $skills = $_POST['skill'] ?? [];
    $abilities = $_POST['abilities'] ?? [];
    $profile = $_POST['profile'] ?? '';
    ?>

<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currículum de <?php echo ($name); ?></title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }

            .header {
                background-color: #4a4a4a;
                color: white;
                padding: 20px;
                text-align: center;
                display: flex;
                align-items: center;
                gap: 20px;
                flex-direction: column;
            }

            .header img {
                border-radius: 50%;
                width: 100px;
                height: 100px;
            }

            .container {
                display: grid;
                grid-template-columns: 1fr 2fr;
                gap: 20px;
                padding: 20px;
            }

            .sidebar {
                background-color: white;
                padding: 20px;
                border-right: 1px solid #ddd;
            }

            .main {
                background-color: white;
                padding: 20px;
            }

            h1, h2 {
                margin: 10px 0;
            }

            .section-title {
                border-bottom: 1px solid #ddd;
                padding-bottom: 5px;
                margin-bottom: 10px;
            }

            .contact-info, .section {
                margin-bottom: 20px;
            }

            .contact-info p, .languages p, .skills p {
                margin: 5px 0;
            }

            .job-title {
                font-weight: bold;
            }

            .job-location {
                color: gray;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1><?php echo ($name); ?></h1>
            <p><?php echo ($occupation); ?></p>
        </div>

        <div class="container">
            <div class="sidebar">
                <div class="contact-info">
                    <h2 class="section-title">Contacto</h2>
                    <p>📞 <?php echo ($contact); ?></p>
                    <p>📍 <?php echo ($nacionality); ?></p>
                </div>

                <div class="languages">
                    <h2 class="section-title">Ingles</h2>
                    <?php if ($lvl_english == 5): ?>
                        <p>Inglés: Avanzado</p>
                    <?php elseif ($lvl_english == 4 || $lvl_english == 3): ?>
                        <p>Inglés: Intermedio</p>
                    <?php elseif ($lvl_english < 3): ?>
                        <p>Inglés: Básico</p>
                    <?php endif; ?>
                </div>

                <div class="skills">
                    <h2 class="section-title">Aptitudes</h2>
                    <?php foreach ($skills as $skill): ?>
                        <p><?php echo ($skill); ?></p>
                    <?php endforeach; ?>
                </div>

                <div class="skills">
                    <h2 class="section-title">Habilidades</h2>
                    <?php foreach ($abilities as $ability): ?>
                        <p><?php echo ($ability); ?></p>
                    <?php endforeach; ?>
                </div>

                <div class="skills">
                    <h2 class="section-title">Lenguajes de Programación</h2>
                    <?php foreach ($programming_lng as $lng): ?>
                        <p><?php echo ($lng); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="main">
                <div class="profile">
                    <h2 class="section-title">Perfil</h2>
                    <p><?php echo ($profile); ?></p>
                </div>
            </div>
        </div>
    </body>
    </html>

    <?php
} else {
    echo "No se recibieron datos.";
}