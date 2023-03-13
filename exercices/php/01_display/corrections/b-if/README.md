# PHP - display - corrections

## echo

Pour le code complet, voir le fichier [index.php](./index.php).

### Code principal

#### Version 1

```php
<?php if ($number >= 5) { ?>
    <p>Donc, mon nombre est plus grand ou égal à 5!</p>
<?php } else { ?>
    <p>Donc, mon nombre est plus petit que 5!</p>
<?php } ?>
```

#### Version 2

```php
<?php if ($number >= 5) {
    echo '<p>Donc, mon nombre est plus grand ou égal à 5!</p>';
} else { 
    echo '<p>Donc, mon nombre est plus petit que 5!</p>';
} ?>
```

## Explications

Ce code permet de conditionner deux paragraphe dans un document HTML. Il existe deux possibilité de réaliser une telle opération, suivant que l'on travaille avec du HTML (version 1) ou du PHP (version 2).

