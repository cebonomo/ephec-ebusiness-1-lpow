# PHP - display - corrections

## for

Pour le code complet, voir le fichier [for-table.php](./for-table.php).

### Code principal

```php
<table>
    <?php
    for ($row = 1; $row <= 4; $row++) {
        echo '<tr class="' . getRowClass($row) . '">';
        for ($col = 1; $col <= 3; $col++) {
            echo '<td>' . chr(64 + $col) . $row . '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>
```

### Explications

1. La première ligne définit le début du tableau HTML avec `<table>`.

2. Le premier bloc `for` crée 4 lignes dans le tableau HTML. La variable `$row` est utilisée pour compter le nombre de lignes. Elle est initialisée à 1 et est incrémentée de 1 à chaque tour de boucle jusqu'à ce qu'elle atteigne le nombre voulu de lignes, à savoir 4. On débute l'incrémentation à 1 plutôt qu'à 0 pour pouvoir utiliser cet index directement dans l'identifiant de la cellule (voir ci-après).

3. La ligne `echo '<tr class="' . getRowClass($row) . '">';` génère une ligne de tableau HTML avec la classe CSS renvoyée par la fonction `getRowClass($row)`. Cette fonction prend en entrée la variable `$row`, c'est-à-dire le numéro de la ligne en commençant par 1, pour déterminer la classe CSS à renvoyer pour la ligne en cours ("even" ou "odd").

4. Le second bloc `for` crée les cellules dans la ligne courante. La variable `$col` est utilisée pour compter le nombre de cellules. Elle est initialisée à 1 et est incrémentée de 1 à chaque tour de boucle jusqu'à ce qu'elle atteigne le nombre voulu de colonnes, à savoir 3. On débute l'incrémentation à 1 plutôt qu'à 0 pour s'aligner sur le comportement de la première boucle et éviter deux logiques différentes.

5. La ligne `echo '<td>' . chr(64 + $col) . $row . '</td>';` génère une cellule de tableau HTML avec le contenu `chr(64 + $col) . $row`. 
    - La fonction `chr` (hors cours) renvoie une lettre depuis un nombre (A pour 65, B pour 67, C pour 68, etc.). Etant donné que `$col` débute à 1, il faut donc rajouter 64 afin d'obtenir la lettre adéquate pour chaque colonne. 
    - Pour rappel, `$row` débute à 1 et est incrémenté à chaque ligne.
    - Le contenu final de la cellule sera donc une lettre désignant la colonne suivie d'un nombre désignant la ligne (par exemple, "A1" pour la première cellule de la première ligne).

6. Après l'affichage de toutes les cellules de la ligne courante, on ferme la ligne du tableau HTML en utilisant `echo '</tr>';`.

7. Le bloc `for` externe se répète jusqu'à ce que toutes les lignes soient ainsi générées, puis le code se termine en fermant le tableau HTML avec `</table>`.
