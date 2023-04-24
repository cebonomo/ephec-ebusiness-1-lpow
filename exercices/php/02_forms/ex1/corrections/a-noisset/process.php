<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Traitement du formulaire</title>
</head>
<body>

    <h1>Form - traitement</h1>

    <div>
        <h2>Debug</h2>
        <pre><?php print_r($_POST); ?></pre>
    </div>

    <div>
        <h2>Résultats</h2>
        <p>Le champ text contient "<?php echo $_POST['my-input-text']; ?>"</p>
        <p>Le champ textarea contient "<?php echo $_POST['my-textarea']; ?>"</p>
        <p>Le champ radio contient "<?php echo $_POST['my-input-radio']; ?>"</p>
        <p>Le champ select contient "<?php echo $_POST['my-select-simple']; ?>"</p>
    </div>
        
</body>
</html>