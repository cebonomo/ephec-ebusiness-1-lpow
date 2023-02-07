# Exercices 2: solutions

Le code ci-après est repris des fichiers de solution.

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

$text = 'petit chaton';
$sentence = 'J\'ai écrit "' . $text . '".';

var_dump($text, $sentence);
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```php
<?php 

$text = $_GET['text'] ?? '';
$sentence = 'J\'ai écrit "' . $text . '".';

var_dump($text, $sentence);
```