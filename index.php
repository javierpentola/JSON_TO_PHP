<?php
// Leer el archivo JSON
$json_data = file_get_contents('data.json');
$data = json_decode($json_data, true);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" href="https://unpkg.com/98.css">
    <style>
        body {
            margin: 32px;
            font-family: sans-serif;
        }
        .window {
            margin: 0 auto;
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="window">
        <div class="title-bar">
            <div class="title-bar-text"><?php echo $data['title']; ?></div>
        </div>
        <div class="window-body">
            <p><?php echo $data['message']; ?></p>
            <ul>
                <?php foreach ($data['items'] as $item): ?>
                    <li><?php echo $item; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>
