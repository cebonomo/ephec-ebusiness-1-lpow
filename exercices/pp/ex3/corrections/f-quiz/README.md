# Exercices 3: solutions - switch

Le code ci-après est repris des fichiers de solution.

## Quiz

Attention à l'ordre des conditions!

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
