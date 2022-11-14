# Exercice 3: solutions

## if

1. Nombre entre 10 et 20

### JavaScript

```javascript
let a = parseFloat(prompt('Valeur à affecter (float)', '')) || 0

let message
if (a >= 10 && a <= 20) {
    message = 'ok'
} else {
    message = 'ko'
}

console.log(a, message)
```

ou

```javascript
let a = parseFloat(prompt('Valeur à affecter (float)', '')) || 0

let message = 'ko'
if (a >= 10 && a <= 20) {
    message = 'ok'
}

console.log(a, message)
```
### PHP

```php
<?php

$a = (float)($_GET['number'] ?? 0);

$message = 'ko';
if ($a >= 10 && $a <= 20) {
    $message = 'ok';
}

var_dump($a, $message);
```

