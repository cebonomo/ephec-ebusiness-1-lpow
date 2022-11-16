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

2. Prime du vendeur


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


3. Prime progressive

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
    //cas qui, a priori, ne devrait jamais arrivé
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
    //cas qui, a priori, ne devrait jamais arrivé
    // dans un vrai programme, on devrait, par exemple, lancer un avertissement à l'adresse des dev
}

var_dump($salesFigure, $bonus);
```


4. Equation du premier degré

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
$x = 0; //pas de undefined en PHP
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

5. Equation du second degré

### PHP

```php
<?php

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
        if ($b < 0) {
            $message = $a . '*' . $x . $b . '=' . $c;
        } else {
            $message = $a . '*' . $x . '+' . $b . '=' . $c;
        }
    } else {
        $message = 'pas de solution réelle';
    }

} else { //équation du second degré

    $delta = ($b*$b) - (4*$a*$c);

    if ($delta < 0) {
        //x vaut 1 seule valeur
        $x = -($b/(2*$a));
        
        if ($b < 0) {
            if ($c < 0) {
                $message = $a . '*' . $x . '²' . $b . '*' . $x . $c . '=0';
            } else {
                $message = $a . '*' . $x . '²' . $b . '*' . $x . '+' . $c . '=0';
            }
        } else {
            if ($c < 0) {
                $message = $a . '*' . $x . '²+' . $b . '*' . $x . $c . '=0';
            } else {
                $message = $a . '*' . $x . '²+' . $b . '*' . $x . '+' . $c . '=0';
            }
        }

    } elseif ($delta > 0) {
        //x vaut 2 valeurs

        $x1 = (-$b-sqrt($delta)) / (2*$a);

        if ($b < 0) {
            if ($c < 0) {
                $message1 = $a . '*' . $x1 . '²' . $b . '*' . $x1 . $c . '=0';
            } else {
                $message1 = $a . '*' . $x1 . '²' . $b . '*' . $x1 . '+' . $c . '=0';
            }
        } else {
            if ($c < 0) {
                $message1 = $a . '*' . $x1 . '²+' . $b . '*' . $x1 . $c . '=0';
            } else {
                $message1 = $a . '*' . $x1 . '²+' . $b . '*' . $x1 . '+' . $c . '=0'; 
            }
        }

        $x2 = (-$b+sqrt($delta)) / (2*$a);

         if ($b < 0) {
            if ($c < 0) {
                $message2 = $a . '*' . $x2 . '²' . $b . '*' . $x2 . $c . '=0';
            } else {
                $message2 = $a . '*' . $x2 . '²' . $b . '*' . $x2 . '+' . $c . '=0';
            }
        } else {
            if ($c < 0) {
                $message2 = $a . '*' . $x2 . '²+' . $b . '*' . $x2 . $c . '=0';
            } else {
                $message2 = $a . '*' . $x2 . '²+' . $b . '*' . $x2 . '+' . $c . '=0';
            }
        }

        $message = $message1 . ' et ' . $message2;

    } else {
        $message = 'pas de solution réelle';
    }

}

var_dump($a, $b, $c, $delta, $x, $x1, $x2, $message);
```

On remarque tout de suite que le programme tel qu'écrit ci-dessus comporte plusieurs morceaux de code fort similaires. De telles duplications de code sont à proscrire. Il sera intéressant de refactorer (c'est-à-dire réécrire d'une meilleure façon) le programme en utilisant notamment des fonctions (voir exercices 5).


## switch

1. Quiz

### JavaScript

```javascript
let answer = prompt('Quelle est la capitale de la Belgique?', '')
let message

switch (answer) {
    case '':
        message = 'Une réponse est requise.'
        break
    case 'Bruxelles':
    case 'Brussel':
    case 'Brussels':
        message = 'Réponse correcte.'
        break
    default:
        message = 'Mauvaise réponse.'
}

console.log(answer, message)
```

### PHP

```php
<?php 

$answer = $_GET['answer'] ?? '';
$message = '';

switch ($answer) {
    case '':
        $message = 'Une réponse est requise.';
        break;
    case 'Bruxelles':
    case 'Brussel':
    case 'Brussels':
        $message = 'Réponse correcte.';
        break;
    default:
        $message = 'Mauvaise réponse.';
}

var_dump($answer, $message);
```
