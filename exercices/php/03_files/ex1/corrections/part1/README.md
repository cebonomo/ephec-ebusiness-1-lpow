# PHP - files - corrections

## Ecriture dans un fichier

Pour le code complet et correct, voir directement les fichiers de code: 
 - [index.php](./index.php)

### Code principal simplifié

#### Définir la constante

On définit une constante comprenant le séparateur des données (CSV).

```php
define('CSV_SEPARATOR', ';');
```

#### Création de la ligne à insérer

On récupère les données postées par le formulaire.

```php
$line = $_POST['email'] . CSV_SEPARATOR . $_POST['password'] . "\n";
```

#### Insertion de la ligne dans le fichier

On insère les données dans le fichier texte (CSV).

```php
$fp = fopen('users.csv', 'a+');
fwrite($fp, $line);
fclose($fp);
```