# Exercices PHP - forms

## Exercice 1: soumission

### Objectifs

 1. Savoir récupérer les valeurs d'un formulaire utilisant la méthode HTTP "post".

 2. Savoir utiliser la valeur d'un champ.

 3. (Optionel) Savoir si un formulaire a été soumis.

 4. (Optionel) Savoir si un champ a été soumis.

### Ennoncés

#### 1. Formulaire sur une page différente

Créer un formulaire dont l'action définit une page de traitement spécifique, de sorte que la page du formulaire ne soit PAS rafraîchie lorsque l'utilisateur soumet le formulaire.

Ce formulaire doit comprendre les champs suivants:
   - Text
   - Textarea
   - Radio
   - Checkbox
   - Select

Afficher la valeur de chaque champ dans une document HTML.

#### 2. Formulaire sur une même page (optionnel)

 Créer un formulaire identique au premier énoncé mais dont l'action définit la page courante, de sorte que la page soit rafraîchie lorsque l'utilisateur soumet le formulaire.

 Ce cas implique l'utilisation de fonctions natives telles que `isset` ([PHP doc - isset](https://www.php.net/manual/fr/function.isset.php)).
 
 Tester si le formulaire a été soumis et afficher un message en conséquence.
 
 Pour chacun des champs, afficher dans le champ la valeur soumise par l'utilisateur de sorte que cette valeur ne soit pas perdue lorsque la page se rafraîchit.
