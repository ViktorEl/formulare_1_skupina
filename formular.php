<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formular.php" name="registracia" method="post" >
        <input type="text" name="meno" placeholder="Zadajte meno"> <br>
        <input type="password" name="heslo" placeholder="Zadajte heslo"> <br>
        <input type="submit" name="tlacidlo" value="Odoslať"> <br>
    </form>


    <?php
        if(isset($_POST["tlacidlo"])) {
            echo "Udaje odoslane";
        }
        else {
            echo "chyba odosielania";
        }



    ?>


    
</body>
</html>