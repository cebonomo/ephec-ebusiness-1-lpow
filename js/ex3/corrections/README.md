# JS - ex 3 - corrections

### Remarques théoriques

#### document

La variable `document` est l'une des principales variables prédéfinies par JS lors de son exécution par le navigateur. Elle représente la page web chargée dans le navigateur et constitue la porte d'entrée pour accéder au [document object model (DOM)](https://developer.mozilla.org/fr/docs/Web/API/Document_object_model/Using_the_W3C_DOM_Level_1_Core).

Pour plus d'information, voir [MDN docs - document](https://developer.mozilla.org/fr/docs/Web/API/Document)

#### Récupérer un élément HTML

Pour récupérer un élément HTML depuis JS, on utilise dans le code présent ici la méthode `document.getElementById`. Il existe cependant d'autres méthodes plus ou moins similaires permettant de récupérer un élément ou une liste d'éléments selon des arguments différents.

Voir notamment:
 - `document.getElementById` ([MDN docs - document.getElementById](https://developer.mozilla.org/fr/docs/Web/API/Document/getElementById))
 - `document.getElementsByClassName` ([MDN docs - document.getElementsByClassName](https://developer.mozilla.org/fr/docs/Web/API/Document/getElementsByClassName))
 - `document.getElementsByTagName` ([MDN docs - document.getElementsByTagName](https://developer.mozilla.org/fr/docs/Web/API/Document/getElementsByTagName))
 - `document.querySelector` ([MDN docs - document.querySelector](https://developer.mozilla.org/fr/docs/Web/API/Document/querySelector))
 - `document.querySelectorAll` ([MDN docs - document.querySelectorAll](https://developer.mozilla.org/fr/docs/Web/API/Document/querySelectorAll))

Il est à noter que `document.getElementById` retourne la valeur `null` si aucun élément ne correspond à l'id passé en argument. Ce cas n'est pas géré dans le code d'exemple.

#### Accès aux valeurs des éléments

Les éléments retournés par `document` sont des `object`, un type complexe qui contient en son sein plusieurs valeurs définies dans ses "propriétés". Pour accéder à la valeur d'une propriété d'un objet, il est nécessaire d'utiliser l'opérateur `.` (en JS).

Pour plus d'inromation sur les `object`, voir [MDN docs - obect](https://developer.mozilla.org/fr/docs/Web/JavaScript/Data_structures#les_objets)

##### Attributs

Il est possible d'accéder aux valeurs des attributs d'un élément, généralement en spécifiant simplement le nom de l'attribut comme propriété. Exemple: `element.id`.

##### Contenu

Il est possible d'accéder aux contenu d'un élément grâce à plusieurs propriétés.

Voir:
 - `Element.innerHTML` ([MDN docs - Element.innerHTML](https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML))
  - `Element.textContent` ([MDN docs - Element.innerHTML](https://developer.mozilla.org/en-US/docs/Web/API/Element/textContent))


## Remarques pratiques

### Incrémentation/décrémentation

Il existe plusieurs syntaxes d'incrémentation/décrémentation.

```javascript
let i = 0
i = i + 1
```

```javascript
let i = 0
i += 1
```

```javascript
let i = 0
i++
```

```javascript
let i = 0
++i
```
