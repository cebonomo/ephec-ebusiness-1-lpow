# Exercices 2: solutions

## Commande TVAC

### JavaScript

```javascript
const VAT = 0.205

let costVATE = 100
let numberOfItems = 10

let totalVATE =  numberOfItems * costVATE
let totalVATI = totalVATE + (totalVATE * VAT)

console.log(costVATE, numberOfItems, totalVATE, totalVATI)
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```javascript
const VAT = 0.205

let costVATE = parseFloat(prompt('Prix HTVA d\ un article', '')) || 0
let numberOfItems = parseFloat(prompt('Nombre d\'articles', '')) || 0

let totalVATE =  numberOfItems * costVATE
let totalVATI = totalVATE + (totalVATE * VAT)

console.log(costVATE, numberOfItems, totalVATE, totalVATI)
```

### PHP

```php
<?php 

define('VAT',  0.205);

$costVATE = 100;
$numberOfItems = 10;

$totalVATE = $numberOfItems * $costVATE;
$totalVATI = $totalVATE + ($totalVATE * VAT);

var_dump($costVATE, $numberOfItems, $totalVATE, $totalVATI);
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```php
<?php 

define('VAT',  0.205);

$costVATE = (float)($_GET['cost'] ?? 0);
$numberOfItems = (float)($_GET['number'] ?? 0);

$totalVATE = $numberOfItems * $costVATE;
$totalVATI = $totalVATE + ($totalVATE * VAT);

var_dump($costVATE, $numberOfItems, $totalVATE, $totalVATI);
```
