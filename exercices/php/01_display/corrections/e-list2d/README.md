<?php 

$barbapapas = [
    'Barbapapa',
    'Barbamama',
    'Barbidou',
    'Barbibul',
    'Barbidur',
    'Barbouille',
    'Barbabelle',
    'Barbotine',
    'Barbalala',
];

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Liste des Barbapapas</title>
    </head>
    <body>
        <h1>Liste des Barbapapas</h1>
        <ul>
            <?php foreach ($barbapapas as $barbapapa) {?>
                <li>
                    <?php echo $barbapapa; ?>
                </li>
            <?php } ?>
        </ul>
    </body>
</html>
