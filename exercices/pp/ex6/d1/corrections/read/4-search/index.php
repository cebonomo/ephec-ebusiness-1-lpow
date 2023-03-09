<?php

$dwarves = [
    'Prof',
    'Joyeux',
    'Dormeur',
    'Grincheux',
    'Timide', // attention: entrée double!
    'Timide', // attention: entrée double!
    'Simplet',
    'Atchoum',
];

$search = 'Timide';

$result = null; // pas 0 par défaut, car 0 est un index!
foreach ($dwarves as $index => $value) {
    if ($search == $value) {
        $result = $index;
        break; // évite de trouver le second!
    }
}

var_dump($result);
