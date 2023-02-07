# Exercices 2: solutions


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

$a = 123;
$isEven = $a % 2 == 0;

var_dump($a, $isEven);
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```php
<?php

$a = (int)($_GET['number'] ?? 0);
$isEven = $a % 2 == 0;

var_dump($a, $isEven);
```

Ou de manière plus explicite:

```php
<?php

$nombre = 123;
$resteDeLaDivision = $nombre % 2; //0 si $nombre est divisible par 2

if ($resteDeLaDivision == 0) {
    echo 'paire';
} else {
    echo 'impaire';
}
```

