<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Forms</title>
    <style>
        pre {
            background-color: #eee;
            border: 1px solid grey;
            padding: 5px;
        }
        label {
            min-width: 87px;
            display: inline-block;
            text-align: right;
        }   
        input {
            margin: 5px;
        }
    </style>
</head>
<body>
<h1>Forms</h1>

<h2>Debug</h2>
<pre><?php print_r($_POST); ?></pre>

<h2>Textes</h2>
<form method="post" action="forms.php" name="my-form-text">

    <label for="my-input-text-id">Texte</label>
    <input type="text" name="my-input-text" id="my-input-text-id">
    <br>

    <label for="my-input-password-id">Mot de passe</label>
    <input type="password" name="my-input-password" id="my-input-password-id">
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

</body>
</html>