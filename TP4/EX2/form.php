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
        margin-top: 30px;
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
        font-weight: bold;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
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
    <h1>Validation des valeurs:</h1>
    <form method="GET" action="../EX2/actionex2.php">
        <label for="val">Saisir une valeur:</label>
        <input type="text" id="val" name="val">

        <label for="format">Saisir le format:</label>
        <select id="format" name="format">
            <option value="tel">Tel</option>
            <option value="mail">mail</option>
            <option value="adr">Web adress </option>
            <option value="carte_bank">carte bancaire</option>
            <option value="IP">adresse IP</option>
            <option value="date">date</option>
        </select>

        <button type="submit">Submit</button>
        <button type="reset">Annuler</button>
    </form>
</body>

</html>