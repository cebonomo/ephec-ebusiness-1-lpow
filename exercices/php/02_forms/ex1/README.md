# Exercices PHP - forms

## Exercices 1: soumission

### Objectifs

 1. Savoir récupérer les valeurs d'un formulaire utilisant la méthode HTTP "post".

 2. Savoir utiliser la valeur d'un champ.

 3. (Optionnel) Savoir si un formulaire a été soumis.

 4. (Optionnel) Savoir si un champ a été soumis.

### Ennoncés

#### 1. Formulaire sans isset

**DISCLAIMER:** Ce cas n'implique pas de devoir tester la présence des clés associées aux champs. Cet exercice est proposé car les fonctions utilisées pour réaliser ces tests ne doivent pas être connues dans le cadre de ce cours. Toutefois, ce cas est purement pédagogique: un tel code n'est normalement pas valide en PHP. Pour un code plus propre, voir l'exercice suivant (optionnel).

Créer un formulaire dont l'action définit une page de traitement spécifique, de sorte que la page du formulaire ne soit PAS rafraîchie lorsque l'utilisateur soumet le formulaire.

Ce formulaire doit comprendre au moins un champ texte (en sachant que seules les checkbox ne pourront pas être traitées ici).

Afficher la valeur de chaque champ dans un document HTML.

[Correction](./corrections/a-noisset/)

#### 2. Formulaire avec isset (optionnel)

 Ce cas implique l'utilisation de fonctions natives telles que `isset` ([PHP doc - isset](https://www.php.net/manual/fr/function.isset.php)) (hors cours).
 
 Créer un formulaire identique au premier énoncé mais dont l'action définit la page courante, de sorte que la page soit rafraîchie lorsque l'utilisateur soumet le formulaire.
 
 Pour chacun des champs, afficher dans le champ la valeur soumise par l'utilisateur de sorte que cette valeur ne soit pas perdue lorsque la page se rafraîchit.

 [Correction](./corrections/b-isset/)
