# Exercices 3: solutions - if

Le code ci-après est repris des fichiers de solution.

## Prime progressive

Attention à l'ordre des conditions!

### JavaScript

```javascript
let salesFigure = parseFloat(prompt('Chiffre de vente (float)', '')) || 0

let bonus = 0
if (salesFigure >= 1000) {
    bonus = salesFigure * 0.1
} else if (salesFigure >= 500) {
    bonus = salesFigure * 0.05
} else if (salesFigure >= 0)  {
     bonus = salesFigure * 0.02
} else {
    //cas qui, a priori, ne devrait jamais arriver
    console.error('salesFigure is negative')
}

console.log(salesFigure, bonus)
```

### PHP

```php
<?php

$salesFigure = (float)($_GET['number'] ?? 0);

$bonus = 0;
if ($salesFigure >= 1000) {
    $bonus = $salesFigure * 0.1;
} elseif ($salesFigure >= 500) {
    $bonus = $salesFigure * 0.05;
}elseif ($salesFigure >= 0) {
    $bonus = $salesFigure * 0.02;
} else {
    //cas qui, a priori, ne devrait jamais arriver
    // dans un vrai programme, on devrait, par exemple, lancer un avertissement à l'adresse des dev
}

var_dump($salesFigure, $bonus);
```
