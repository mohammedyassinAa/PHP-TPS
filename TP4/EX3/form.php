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
    <form method="GET" action="../EX3/actionex3.php">
        <label for="val1">Saisir un nombre :</label>
        <input type="text" id="val1" name="val1">

        <label for="format">Saisir le format:</label>
        <select id="format" name="format">
            <option value="plus"> + </option>
            <option value="minus"> - </option>
            <option value="mul"> x </option>
            <option value="sub"> / </option>
        </select>
        <label for="val2">Saisir un nombre :</label>
        <input type="text" id="val2" name="val2">

        <button type="submit">Submit</button>
        <button type="reset">Annuler</button>
    </form>
</body>

</html>