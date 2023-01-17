# Exercices 2: solutions

## Intervertir la valeur de deux variables

### Javascript

```javascript
let a = 5
let b = 3

let c = a
a = b
b = c

console.log(a, b, c)
```

### PHP

```php
$a = 5;
$b = 3;

$c = $a;
$a = $b;
$b = $c;

var_dump($a, $b, $c);
```

## Le carré d'un nombre

### JavaScript

```javascript
let a = 2
let result = a * a

console.log(a, result)
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```javascript
let a = parseFloat(prompt('Valeur à affecter (float)', '')) || 0
let result = a * a

console.log(a, result)
```

### PHP

```php
<?php

$a = 2;
$result = $a * $a;

var_dump($a, $result);
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```php
<?php

$a = (float)($_GET['value'] ?? 0);
$result = $a * $a;

var_dump($a, $result);
```

3. Commande TVAC

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

## Concaténation

### JavaScript

```javascript
let text = prompt('Texte', '')
let sentence = 'J\'ai écrit "' + text + '".'

console.log(text, sentence)
```

### PHP

```php
<?php 

$text = $_GET['text'] ?? '';
$sentence = 'J\'ai écrit "' . $text . '".';

var_dump($text, $sentence);
```

## Nombre pair

### JavaScript

```javascript
let a = parseFloat(prompt('Nombre (float)', '')) || 0
let isEven = !(a % 2)

console.log(a, isEven)
```

### PHP

```php
<?php

$a = (float)($_GET['number'] ?? 0);
$isEven = !($a % 2);

var_dump($a, $isEven);
```
