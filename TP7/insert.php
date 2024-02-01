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
    <h1>Formulaire : </h1>
    <form method="POST" action="trait-insert.php">

        <label for="titre">Saisir votre Titre :</label>
        <input type="text" id="titre" name="titre">
        <label for="description">Saisir votre Description :</label>
        <input type="text" id="description" name="description">

        <label for="prix">Saisir votre prix :</label>
        <input type="number" id="prix" name="prix">

        <label for="Categorie">Saisir votre Categorie :</label>
        <input type="text" id="Categorie" name="Categorie">


        <button type="submit">Submit</button>
        <button type="reset">Annuler</button>
    </form>
</body>

</html>