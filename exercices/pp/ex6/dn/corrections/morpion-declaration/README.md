```php
<?php

function getRandomValue()
{
   switch (rand(0, 2)) {
      case 0:
         return '';
      case 1:
         return 'o';
      case 2:
         return 'x';
   }
}

$size = 6;

$game = [];
for ($i = 0; $i < $size; $i++) {
   $game[$i] = [];
   for ($j = 0; $j < $size; $j++) {
      $game[$i][$j] = getRandomValue();
   }
}

var_dump($game);
```