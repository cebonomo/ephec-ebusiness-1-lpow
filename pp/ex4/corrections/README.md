# Exercices 4: solutions

1. Valeur absolue

### JavaScript

```javascript
function absolute(value) {
    if (value < 0) {
        return -value
    }
    return value
}


let a = parseFloat(prompt('Valeur à affecter (float)', '')) || 0
let result = absolute(a)

console.log(a, result)
```

### PHP

```php
<?php

function absolute($value)
{
    if ($value < 0) {
        return -$value;
    }
    return $value;
}

$a = (float)($_GET['number'] ?? 0);
$result = absolute($a);

var_dump($a, $result);
```

2. Signature de nombre

### JavaScript

```javascript
function signature(value) {
    if (value < 0) {
        return -1
    }
    if (value > 0) {
        return 1
    }
    return 0
}


let a = parseFloat(prompt('Valeur à affecter (float)', '')) || 0
let result = signature(a)

console.log(a, result)
```

### PHP

```php
<?php

function signature($value)
{
    if ($value < 0) {
        return -1;
    }
     if ($value > 0) {
        return 1;
    }
    return 0;
}

$a = (float)($_GET['number'] ?? 0);
$result = signature($a);

var_dump($a, $result);
```


3. Division de deux nombres

### JavaScript

```javascript
function divide(a, b) {
    if (b == 0) {
        return NaN
    }
    return a/b
}


let a = parseFloat(prompt('Valeur de a', '')) || 0
let b = parseFloat(prompt('Valeur de b', '')) || 0
let result = divide(a, b)

console.log(a, b, result)
```

### PHP

```php
<?php

function divide($a, $b)
{
    if ($b == 0) {
        return null;
    }
    return $a/$b;
}

$a = (float)($_GET['a'] ?? 0);
$b = (float)($_GET['b'] ?? 0);
$result = divide($a, $b);

var_dump($a, $b, $result);
```


4. Puissances

### JavaScript

```javascript
function pow(base, exponent) {
    if (exponent == 1) {
        return base
    }
    if (exponent % 2) {
        return base * pow(base*base, (exponent-1)/2)
    }
    return pow(base*base, exponent/2)
}


let a = parseFloat(prompt('a', '')) || 0
let n = parseFloat(prompt('n', '')) || 0
let result = pow(a, n)

console.log(a, n, result)
```

### PHP

```php
<?php

function _pow($base, $exponent)
{
   if ($exponent == 1) {
        return $base;
    }
    if ($exponent % 2) {
        return $base * pow($base*$base, ($exponent-1)/2);
    }
    return pow($base*$base, $exponent/2);
}

$a = (float)($_GET['a'] ?? 0);
$n = (float)($_GET['n'] ?? 0);
$result = _pow($a, $n);

var_dump($a, $n, $result);
```


5. Equation du second degré

### PHP

```php
<?php

function composeMessageFirst($a, $b, $c, $x)
{
    if ($b < 0) {
        return $a . '*' . $x . $b . '=' . $c;
    }
    return $a . '*' . $x . '+' . $b . '=' . $c;
}

function composeMessageSecond($a, $b, $c, $x)
{
    $bAsString = $b;
    if ($b >= 0) {
        $bAsString = '+' . $b;
    }

    $cAsString = $c;
    if ($c >= 0) {
        $cAsString = '+' . $c;
    }

    return $a . '*' . $x . '²' . $bAsString . '*' . $x . $cAsString . '=0';
    
}

$a = (float)($_GET['a'] ?? 0);
$b = (float)($_GET['b'] ?? 0);
$c = (float)($_GET['c'] ?? 0);
$x = 0; 
$x1 = 0;
$x2 = 0;
$message = '';

if ($a == 0) { // équation du premier degré

    $a = $b;
    $b = $c;
    $c = 0;

    if ($a != 0) {
        $x = ($c-$b)/$a;
        $message = composeMessageFirst($a, $b, $c, $x);
    } else {
        $message = 'pas de solution réelle';
    }

} else { //équation du second degré

    $delta = ($b*$b) - (4*$a*$c);

    if ($delta == 0) {
        //x vaut 1 seule valeur
        $x = -($b/(2*$a));
        $message = composeMessageSecond($a, $b, $c, $x);

    } elseif ($delta > 0) {
        //x vaut 2 valeurs

        $x1 = (-$b-sqrt($delta)) / (2*$a);
        $message1 = composeMessageSecond($a, $b, $c, $x1);

        $x2 = (-$b+sqrt($delta)) / (2*$a);
        $message2 = composeMessageSecond($a, $b, $c, $x2);

        $message = $message1 . ' et ' . $message2;

    } else {
        $message = 'pas de solution réelle';
    }

}

var_dump($a, $b, $c, $delta, $x, $x1, $x2, $message);
```
