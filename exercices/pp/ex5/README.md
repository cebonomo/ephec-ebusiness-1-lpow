# Principes de programmation

## Exercices 5: boucles

### Remarques théoriques

#### Quelle boucle choisir?

Une boucle "for" est à utiliser lorsque le nombre d'itérations est déterminé au préalable, tandis qu'une boucle "while" (ou "do while") n'est à utiliser que si le nombre total d'itérations est inconnu en débutant la boucle.

Dans les faits, les boucles "for" sont largement plus utilisées que "while", surtout en raison de la facilité qu'elles offrent pour parcourir des tableaux.

Il est à noter qu'une boucle "for", n'est, en réalité, qu'un cas particulier de boucle "while". Il s'agit simplement d'une forme d'écriture plus stricte et moins sujette à variations. C'est donc une écriture à privilégier, les boucles "while" étant laissées aux seuls cas qui ne seront pas traitables par un "for".

##### JS

```javascript
for (let i = 0; i < n; i++) {
    // instructions
}
``` 
```javascript
let i = 0;
while (i < n) {
    // instructions
    i++;
}
```

##### PHP

```php
for ($i = 0; $i < $n; $i++) {
    // instructions
}
``` 
```php
$i = 0;
while ($i < $n) {
    // instructions
    $i++;
}
```

### Objectifs

 1. Savoir utiliser les structures de boucles avec les syntaxes "for" et "while".

 2. Savoir boucler de manière incrémentale depuis un index de départ défini et sur une longueur définie.

 3. Savoir boucler de manière décrémentale depuis un index de départ défini et sur une longueur définie.

 4. Savoir boucler sur base d'une condition.

 5. Savoir imbriquer une boucle dans une boucle.

### Enoncés

#### for

1. Ecrire un programme qui calcule les tables de multiplication (0 -> 10) d'une variable contenant un nombre entier compris entre 1 et 10.

2. Ecrire un programme qui liste tous les calculs possibles entre deux entiers positifs et dont le résulat est une variable contenant un nombre entier compris entre 1 et 10. (ex, pour 3: 0+3, 1+2, 2+1, 3+0)

3. Ecrire un programme qui affecte à une variable une chaîne de cracatère concaténant tous les entiers compris entre 1 et une variable contenant un entier positif. Chaque nombre doit être séparé par un point. (ex, pour 5: "1.2.3.4.5")

4. Idem, mais inversé. (ex, pour 5: "5.4.3.2.1")

5. Ecrire un programme affichant les sorties ci-après, le nombre de lignes étant défini dans une variable. Exemple, pour 5 lignes:

Cas 1:
```
>
>>
>>>
>>>>
>>>>>
```

Cas 2:
```
>>>>>
>>>>
>>>
>>
>
```

Cas 3:
```
>
>>
>>>
>>
>
```

#### while

 1. Ecrire un programme calculant la [suite de Fibonacci](https://fr.wikipedia.org/wiki/Suite_de_Fibonacci) jusqu'à un nombre entier non nul limite.
    
 2. Ecrire un programme calculant le [PPCM](https://fr.wikipedia.org/wiki/Plus_petit_commun_multiple) de deux entiers non nuls.

#### do while

 TODO

### Documentations

Les boucles font partie des structures de contrôle.

#### JS

[MDN docs - structures de contrôle](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference#contr%C3%B4le_du_flux_dex%C3%A9cution)

#### PHP

[PHP doc - structures de controle](https://www.php.net/manual/fr/language.control-structures.php)
