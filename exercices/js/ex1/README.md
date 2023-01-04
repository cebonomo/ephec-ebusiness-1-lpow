# JavaScript

## Exercice 1: linked JS

### Objectifs

 1. Comprendre comment inclure un fichier de script JS dans un document HTML.

### Enoncé

 1. Créer un fichier de script JS `scripts/main.js` vide.
 2. Inclure ce script dans une page HTML (méthode "linked").

[Corrections](./corrections)

### Remarques théoriques

#### Incorporations JS dans HTML

**Attention:** ne sont pas abordés ici les autres types possibles d'inclusion de script:
 - "inline" ou intégré à un élément HTML (via divers attributs).
 - "embedded" ou interne à un document HTML (via la balise `script`).

(Sur ce sujet, voir [MDN docs - Utiliser JavaScript au sein d'une page web](https://developer.mozilla.org/fr/docs/Learn/HTML/Howto/Use_JavaScript_within_a_webpage)) 

#### Contenu ou ressource

La balise `script` sert à la fois à contenir du code JS et à inclure un fichier JS externe. Toutefois, une même balise ne peut pas faire les deux en même temps. Si un élement `script` définit une ressource dans son attribut `src`, il ne peut pas contenir de code à l'intérieur de ses balises, et inversément. C'est donc soit l'un ("embedded"), soit l'autre ("linked").

#### head ou body?

A noter que la balise `script` peut être inclue dans `head` ou dans `body`. Il arrive souvent qu'on la place à la fin du `body` pour déléguer le chargement et l'interprétation du script après celui des autres ressources de la page. 
