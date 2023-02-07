# Exercices 3: solutions - if

Le code ci-après est repris des fichiers de solution.

## Prime du vendeur

### JavaScript

```javascript
let salesFigure = parseFloat(prompt('Chiffre de vente (float)', '')) || 0

let bonus = 0
if (salesFigure > 1000) {
    bonus = salesFigure * 0.1
}

console.log(salesFigure, bonus)
```

### PHP

```php
<?php

$salesFigure = (float)($_GET['number'] ?? 0);

$bonus = 0;
if ($salesFigure > 1000) {
    $bonus = $salesFigure * 0.1;
}

var_dump($salesFigure, $bonus);
```
