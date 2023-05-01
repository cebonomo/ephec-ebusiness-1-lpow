# PHP - forms - corrections

## Soumission sans isset

Pour le code complet, voir les fichiers.

### Code principal

#### Formulaire HTML

```html
<form method="post" action="process.php">

    <input type="text" name="my-input-text">
    ...

    <input type="submit">

</form>
```

#### Traitement PHP

```php
<p>Le champ text contient "<?php echo $_POST['my-input-text']; ?>"</p>
```

## Explications

Le programme contient 2 fichiers:

 - [index.html](./index.html) contient un formulaire renvoyant vers "process.php".
 - [process.php](./process.php) contient un document HTML affichant les données POST du formulaire.

A noter que, étant donné l'absence de test de clé, on est obligé d'utiliser deux fichiers différents dans notre cas pour affiche rle formulaire. Si l'on se rend directement sur "process.php", cela engendrera des erreurs PHP.
