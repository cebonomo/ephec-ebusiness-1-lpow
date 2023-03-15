# Exercices PHP - files

## Exercices

 1. [Exercice 1 - Ecriture de fichier](./ex1/)
 2. [Exercice 2 - Lecture de fichier](./ex2/)

## Documentation

 1. [PHP doc - Fonctions sur les systèmes de fichiers](https://www.php.net/manual/fr/ref.filesystem.php)

## Fonctions de fichiers

 - `fopen` ([PHP doc - fopen](https://www.php.net/manual/fr/function.fopen.php))
 - `fclose` ([PHP doc - fclose](https://www.php.net/manual/fr/function.fclose.php))
 - `feof` ([PHP doc - feof](https://www.php.net/manual/fr/function.feof.php))
 - `fgetc` ([PHP doc - fgetc](https://www.php.net/manual/fr/function.fgetc.php))
 - `fgets` ([PHP doc - fgets](https://www.php.net/manual/fr/function.fgets.php))
 

## Remarques techniques

### Fin de ligne

A noter que le caractère de fin de ligne (ex: "\n" sous Linux, "\n\r" sous Windows ou "\r" sous MacOS) (voir aussi `PHP_EOL`) est inclu dans la valeur retournée par `fgets`. Si l'on désire nettoyer le texte, on peut utiliser la fonction PHP `rtrim` ([PHP doc - rtrim](https://www.php.net/manual/fr/function.rtrim.php)) (en spécifiant éventuellement la valeur `PHP_EOL` comme second argument, selon les cas) (hors cours).

### Chemin de fichier

Plusieurs types de chemin de fichier peuvent être passés en argument. S'il s'agit d'un chemin relatif vers un fichier présent sur le serveur, ce qui sera souvent le cas, le chemin absolu est établi d'après le "CWD" (current working directory), c'est-à-dire le répertoire contenant le script principal appelé (souvent celui référencé dans l'URL). Le CWD va donc changer en fonction de l'emplacement du script appelé.

```php
<?php
$relativePath = 'file.txt';
$cwd = getcwd();
$absolutePath = realpath($relativePath);
var_dump($relativePath, $cwd, $absolutePath);
```

Pour plus d'information (notions avancées, hors cours), voir l'article de [phpdelusions](https://phpdelusions.net/articles/paths).

### Accessibilité d'un fichier (hors cours)

A noter que la fonction `fopen` peut émettre une erreur si le fichier n'existe pas ou s'il n'est pas accessible en lecture et/ou en écriture. Une bonne pratique consiste donc à tester l'accessibilité du fichier au préalable de toute manipulation.

```php
<?php

$filePath = 'file.txt';

if (!is_readable($filePath)) {
    // traitement en cas d'impossibilité de lecture
} elseif (!is_writable($filePath)) {
    // traitement en cas d'impossibilité d'écriture
} else {
    $fp = fopen($filePath, 'w+');
    if ($fp === false) {
        // traitement en cas d'erreur d'ouverture du fichier
    } else {

        // traitement normal

        if (!fclose($fp)) {
            // traitement en cas d'erreur de fermeture du fichier
        }
    }
}
```
