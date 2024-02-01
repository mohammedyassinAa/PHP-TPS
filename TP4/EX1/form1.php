<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="radio"],
    input[type="checkbox"] {
        margin-right: 5px;
    }

    button[type="submit"],
    button[type="reset"] {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
    }

    button[type="reset"] {
        background-color: #dc3545;
        color: #fff;
        margin-left: 10px;
    }
    </style>
</head>

<body>
    <h1>Mon Premier formulaire</h1>
    <form method="GET" action="../EX1/actionex1">
        <label for="nom">Saisir votre nom</label>
        <input type="text" id="nom" name="nom">

        <label for="prenom">Saisir votre prénom :</label>
        <input type="text" id="prenom" name="prenom">

        <label>Saisir votre sexe :</label>
        <label><input type="radio" value="Femme" name="sexe">Femme</label>
        <label><input type="radio" value="Homme" name="sexe" checked>Homme</label>

        <label for="choix">Saisir votre choix</label>
        <select id="choix" name="choix">
            <option value="I2R">I2R</option>
            <option value="3IIR">3IIR</option>
            <option value="4IIR">4IIR</option>
        </select>

        <button type="submit">Submit</button>
        <button type="reset">Annuler</button>
    </form>
</body>

</html>