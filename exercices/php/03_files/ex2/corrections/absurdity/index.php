<?php


function logError($error)
{
    // Dans notre cas, on fait simple: juste un "echo". 
    // En vrai, "logguer une erreur" signifie qu'on ajoute un message d'erreur dans un journal (un fichier).
    echo $error; 
}

function readCsvExceptFirstLine($fileName)
{
    $result = [];
    
    $fp = fopen($fileName, 'r');
    if (!$fp) {
        logError('erreur d\'ouverture du fichier.');
        return $result;
    }
   
    fgets($fp); // la première ligne correspond aux titres et ne nous intéresse pas.
    while (feof($fp) == false) {
        $result[] = explode(';', fgets($fp));
    }
    
    if (!fclose($fp))  {
        logError('erreur de femeture du fichier.');
    }
      
    return $result;
}

// $matrix correspond à un tableau à deux dimensions: lignes puis cellules.
$matrix = readCsvExceptFirstLine('sentences.csv');

// on réorganise les données pour que les mêmes types de parties se trouvent dans un même array.
// $parts correspond à un tableau à deux dimensions: colonnes puis cellules.
$parts = [];
foreach ($matrix as $row) {
    foreach ($row as $index => $part) {
        if (!isset($parts[$index])) { // si la deuxième dimension n'existe pas encore, il faut l'initialiser.
            $parts[$index] = [];
        }
        $parts[$index][] = $part;
    }
}

// on extrait une entrée aléatoire depuis chaque liste de partie de phrase.
foreach ($parts as $partList) {
    $length = count($partList);
    echo $partList[rand(0, $length-1)] . ' ';
}
