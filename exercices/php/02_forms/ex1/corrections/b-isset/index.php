<?php

$textValue = $_POST['my-input-text'] ?? '';
$textareaValue =  $_POST['my-textarea'] ?? '';
$radioValue = $_POST['my-input-radio'] ?? 'radio-value-a';
$selectValue = $_POST['my-select-simple'] ?? '';

?><!DOCTYPE html>
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
        input, textarea, select {
            margin: 5px;
        }
        fieldset, select {
            margin-bottom: 10px;
        }
        select {
            min-width: 87px;
        }
    </style>
</head>
<body>
<h1>Form - new page</h1>

<form method="post" action="#">

    <label for="my-input-text-id">Texte</label>
    <input type="text" name="my-input-text" id="my-input-text-id" value="<?php echo $textValue; ?>">
    <br>

    <label for="my-textarea-id">Textarea</label>
    <textarea name="my-textarea" id="my-textarea-id"><?php echo $textareaValue; ?></textarea>
    <br>

    <fieldset>
        <legend>Choisissez une préférence (radio)</legend>
        <label for="my-input-radio-a-id">Choix a</label>
        <input 
            type="radio"
            name="my-input-radio"
            id="my-input-radio-a-id" 
            value="radio-value-a" 
            <?php if ($radioValue == 'radio-value-a') { echo 'checked'; } ?>
        >
        <br>
        <label for="my-input-radio-b-id">Choix b</label>
        <input
            type="radio"
            name="my-input-radio"
            id="my-input-radio-b-id"
            value="radio-value-b"
            <?php if ($radioValue == 'radio-value-b') { echo 'checked'; } ?>
        >
    </fieldset>

    <label for="my-select-simple-id">Sélectionnez une préférence (select)</label>
    <br>
    <select name="my-select-simple" id="my-select-simple-id">
        <option value="">Aucun</option>
        <optgroup label="Voyelles">
            <option value="option-value-a" <?php if ($selectValue == 'option-value-a') { echo 'selected'; } ?>>a</option>
            <option value="option-value-e" <?php if ($selectValue == 'option-value-e') { echo 'selected'; } ?>>e</option>
            <option value="option-value-i" <?php if ($selectValue == 'option-value-i') { echo 'selected'; } ?>>i</option>
            <option value="option-value-o" <?php if ($selectValue == 'option-value-o') { echo 'selected'; } ?>>o</option>
            <option value="option-value-u" <?php if ($selectValue == 'option-value-u') { echo 'selected'; } ?>>u</option>
            <option value="option-value-y" <?php if ($selectValue == 'option-value-y') { echo 'selected'; } ?>>y</option>
        </optgroup>
        <optgroup label="Consonnes">
            <option value="option-value-b" <?php if ($selectValue == 'option-value-b') { echo 'selected'; } ?>>b</option>
            <option value="option-value-c" <?php if ($selectValue == 'option-value-c') { echo 'selected'; } ?>>c</option>
        </optgroup>
    </select>
    <br>


    <input type="submit" name="my-submit">
    <input type="reset" name="my-reset">

</form>

</body>
</html>