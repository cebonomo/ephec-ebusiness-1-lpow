# PHP - forms - corrections

## Soumission avec isset like

Pour le code complet, voir les fichiers.

### Code principal

#### Test de clé

PLusieurs possibilités de syntaxe sont possibles en PHP. En voici deux exemples.

##### Syntaxe avec "isset"

```php
$textValue = '';
if (isset($_POST['my-input-text'])) {
    $textValue = $_POST['my-input-text'];
}
```

##### Syntaxe avec "??"

```php
$textValue = $_POST['my-input-text'] ?? '';
```

#### Affichage dans le formulaire

```php
<form method="post" action="#">

    <input type="text" name="my-input-text" value="<?php echo $textValue; ?>">
    ...

    <input type="submit">

</form>
```

## Explications

Le code est identique au premier exercice, si ce n'est que l'on va tester la présence des clés avant l'affichage. Autrement dit, plus d'erreurs PHP. On peut également réaliser le traitement dans le même fichier que le formulaire.
