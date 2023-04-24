# PHP - diformssplay - corrections

## soumission sans isset

Pour le code complet, voir les fichiers.

### Code principal

#### Formulaire HTML

Voir [index.html](./index.html).

```html
<form method="post" action="process.php">

    <input type="text" name="my-input-text">
    ...

</form>
```

#### Traitement PHP

Voir [process.php](./process.php).

```php
<p>Le champ text contient "<?php echo $_POST['my-input-text']; ?>"</p>
```

## Explications

Le programme contient 2 fichiers:

 - "index.html" contient un formulaire renvoyant vers "process.php".
 - "process.php" contient un document HTML affichant les données POST du formulaire.
