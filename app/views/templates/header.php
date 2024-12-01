<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/reddit-sans@5.1.0/index.min.css">

    <!-- Custom CSS link -->
    <?php if(isset($data['css'])): ?>
    <?php foreach($data['css'] as $css_link): ?>
    <link rel="stylesheet" href="<?= $css_link . '.css' ?>">
    <?php endforeach; ?>
    <?php endif; ?>
    
    <style>
        * {
            font-family: 'Reddit Sans';
        }
    </style>
</head>

<body>