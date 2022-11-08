# Changements

## Champs texte

Code HTML:

```html
<form method="post" action="forms.php" name="my-form-text">

    <label for="my-input-text-id">Texte</label>
    <input type="text" name="my-input-text" id="my-input-text-id">
    <br>

    <label for="my-input-password-id">Mot de passe</label>
    <input type="password" name="my-input-password"  id="my-input-password-id">
    <br>

    <label for="my-input-email-id">Email</label>
    <input type="email" name="my-input-email" id="my-input-email-id">
    <br>

    <label for="my-input-tel-id">Téléphone</label>
    <input type="tel" name="my-input-tel" id="my-input-tel-id">
    <br>

    <input type="submit" name="my-submit">
    <input type="reset" name="my-reset">

</form>
```

Exemples de valeurs lors de la soumission:

```
Array
(
    [my-input-text] => a
    [my-input-password] => b
    [my-input-email] => c@d
    [my-input-tel] => e
    [my-submit] => Soumettre
)
```

Bientôt la suite...
