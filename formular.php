<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formular.php" name="registracia" method="post" >
        <input type="text" name="meno" placeholder="Zadajte meno" required> <br>
        <input type="password" name="heslo" placeholder="Zadajte heslo" required> <br>
        <input type="submit" name="tlacidlo" value="Odoslať"> <br>
    </form>


    <?php
        if(isset($_POST["tlacidlo"])) {
            if(isset($_POST["meno"]) && isset($_POST["heslo"]))
                $meno = $_POST["meno"];
                $heslo = $_POST["heslo"];

                if(!ctype_alpha($meno)) {
                    echo "meno musi obsahovat len znaky abecedy <br>";
                }
                else {
                    echo "vase meno je".$meno."<br>";
                }
                if(strlen($heslo) < 3 || strlen($heslo) > 11) {
                    echo "chyba dlhe alebo kratke heslo";
                }
                else {
                    echo "vase heslo je".$heslo;
                }
                

            }

    

    ?>


    
</body>
</html>