# Exercices 3: solutions - if

Le code ci-après est repris des fichiers de solution.

## Equation du premier degré

### JavaScript

```javascript
let a = parseFloat(prompt('a (float)', '')) || 0
let b = parseFloat(prompt('b (float)', '')) || 0
let c = parseFloat(prompt('c (float)', '')) || 0
let x
let message = ''

if (a != 0) {
    x = (c-b)/a
    if (b < 0) {
        message = a + '*' + x + b + '=' + c
    } else {
        message = a + '*' + x + '+' + b + '=' + c
    }
} else {
    message = 'pas de solution réelle'
}

console.log(a, b, c, x, message)
```

### PHP

```php
<?php

$a = (float)($_GET['a'] ?? 0);
$b = (float)($_GET['b'] ?? 0);
$c = (float)($_GET['c'] ?? 0);

$message = '';

if ($a != 0) {
    $x = ($c-$b)/$a;
    if ($b < 0) {
        $message = $a . '*' . $x . $b . '=' . $c;
    } else {
        $message = $a . '*' . $x . '+' . $b . '=' . $c;
    }
} else {
    $message = 'pas de solution réelle';
}

var_dump($a, $b, $c, $message);
```

