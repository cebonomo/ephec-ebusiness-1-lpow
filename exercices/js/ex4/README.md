# JavaScript

## Exercices 4: DOM - contenu d'attributs

### Objectifs

 1. Savoir lire et modifier le contenu d'un attribut d'un élément HTML.

 2. Savoir récupérer de façon simple l'élément `body`.

 3. Comprendre l'attribut `Element.style`.

### Enoncés

 1. Reprendre le script de commande de pizza. Le nombre de pizzas doit se trouver dans un champ.

 2. Reprendre le script de calcul de portefeuille. Le nombre de chaque type de billet doit se trouver dans un champ.

 3. Lorsque l'utilisateur clique sur un bouton, changer la couleur de fond de la page.

[Corrections](./corrections/)

### Remarques pratiques

#### body

Il est possible de récupérer `body` de plusieurs façons. 

Par exemple:

```javascript
let body = document.querySelector('body')
```

Mais il faut savoir que `body` est directement accèssible depuis la propriété du même nom de `document`.

```javascript
let body = document.body
```
