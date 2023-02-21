# Exercices 5: solutions

Le code ci-après est repris des fichiers de solution.

## Suite

### PHP

```php
<?php

$n = 5;
$result = '(';

for ($i = 1; $i <= $n; $i++) {
    $result .= $i;
    if ($i < $n) {
        $result .= ',';
    }
}

$result .= ')';

echo $result;
```
