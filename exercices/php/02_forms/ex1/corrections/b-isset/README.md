# PHP - forms - corrections

## Soumission avec isset like

Pour le code complet, voir les fichiers.

### Code principal

#### Test de clé

##### isset

```php
$textValue = '';
if (isset($_POST['my-input-text'])) {
    $textValue = $_POST['my-input-text'];
}
```

##### ??

```php
$textValue = $_POST['my-input-text'] ?? '';
```

#### Affichage dans le formulaire

```php
<form method="post" action="#">

    <input type="text" name="my-input-text" value="<?php echo $textValue; ?>">
    ...

    <input type="submit" name="my-submit">

</form>
```

## Explications

Le code est identique au premier exercice, si ce n'est que l'on va tester la présence des clés avant l'affichage. Autrement dit, plus d'erreurs PHP. On peut également réaliser le traitement dans le même fichier que le formulaire.
