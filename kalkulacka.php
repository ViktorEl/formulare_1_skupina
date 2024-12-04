<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kalkulacka</h1>

    <form action="kalkulacka.php" method="post">
        <label>Zadajte prvé číslo</label>
        <input type="number" name="cislo1"> <br>
        <label>Zadajte druhé číslo</label>
        <input type="number" name="cislo2"> <br>
        <label>Vyber operátor</label>
        <select name="operator">
            <option value="1">--</option>
            <option value="2">+</option>
            <option value="3">-</option>
            <option value="4">*</option>
            <option value="5">/</option>
        </select>
    </form>

    
</body>
</html>