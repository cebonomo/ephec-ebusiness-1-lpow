# PHP - display - corrections

## for

Pour le code complet, voir le fichier [index.php](./index.php).

### Code principal

```php
<table>
    <?php
    for ($row = 0; $row < 4; $row++) {
        echo '<tr class="' . getRowClass($row) . '">';
        for ($col = 0; $col < 3; $col++) {
            echo '<td>' . getCellId($row, $col) . '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>
```

### Fonction getRowNumber

```php
function getRowNumber($rowIndex)
{
    return $rowIndex + 1;
}
```

### Fonction getRowClass

```php
function getRowClass($rowIndex)
{
    $rowNumber = getRowNumber($rowIndex);
    if ($rowNumber % 2 == 0) {
        return "even"; //pair
    }
    return "odd"; //impair
}
```

### Fonction getCellId

```php
function getCellId($rowIndex, $colIndex)
{
    return 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'[$colIndex] . getRowNumber($rowIndex);
}
```

### Explications

1. La première ligne définit le début du tableau HTML avec `<table>`.

2. Le premier bloc `for` crée les lignes dans le tableau HTML. La variable `$row` est utilisée pour compter le nombre de lignes. Elle est initialisée à 0 et est incrémentée de 1 à chaque tour de boucle jusqu'à ce qu'elle atteigne le nombre voulu de lignes, à savoir, par exemple, 4.

3. La ligne `echo '<tr class="' . getRowClass($row) . '">';` génère une ligne de tableau HTML avec la classe CSS renvoyée par la fonction `getRowClass($row)`. 

    La fonction `getRowClass` prend en entrée la variable `$row`, c'est-à-dire l'index de la ligne en commençant par 0 et retourne une string contenant le nom de la classe de la ligne. Pour déterminer la classe CSS à renvoyer pour la ligne en cours ("even" ou "odd"), la fonction teste si le numéro de la ligne est pair ou impair. Attention toutefois que le numéro de la ligne n'est pas équivalent à son index. En effet, l'index de la ligne débute à 0, tandis que son numéro débute à 1. Il est donc nécessaire d'appeler la fonction `getRowNumber` pour connaître le numéro en fonction de l'index.

4. Le second bloc `for` crée les cellules dans la ligne courante. La variable `$col` est utilisée pour compter le nombre de cellules. Elle est initialisée à 0 et est incrémentée de 1 à chaque tour de boucle jusqu'à ce qu'elle atteigne le nombre voulu de colonnes, à savoir, par exemple, 3.

5. La ligne `echo '<td>' . getCellId($row, $col) . '</td>';` génère une cellule de tableau HTML avec le contenu `getCellId($row, $col)` qui, en l'occurence, indique l'id de la cellule.

    La fonction  `getCellId` génère l'id de la cellule en fonction de la ligne et de la colonne:
    - L'opération `ABCDEFGHIJKLMNOPQRSTUVWXYZ'[$colIndex]` (hors cours) permet de récupérer un charactère de la string en fonction de son index, lequel est déterminé par la valeur `$col` de la boucle #2, qui débute à 0. 
    - A cette lettre est directement concaténé le numéro de la ligne. Pour rappel, `$row` débute à 0 et il est donc nécessaire d'appeler la fonction `getRowNumber`. (On aurait pu réaliser une boucle qui débute à 1. Toutefois, cela aurait impliqué deux logiques d'index différentes, ce qui peut conduire à une mauvaise compréhension du code.)
    - Le retour de la fonction (qui sera donc le contenu de la cellule) sera donc une lettre désignant la colonne suivie d'un nombre désignant la ligne (par exemple, "A1" pour la première cellule de la première ligne).

6. Après l'affichage de toutes les cellules de la ligne courante, on ferme la ligne du tableau HTML en utilisant `echo '</tr>';`.

7. Le bloc `for` externe se répète jusqu'à ce que toutes les lignes soient ainsi générées, puis le code se termine en fermant le tableau HTML avec `</table>`.
