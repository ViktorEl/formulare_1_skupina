<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $pole = ["Jozo", "Jano", "Lucia"];
        $asocPole = ["Jozo"=>"123", "Jano"=>"456", "Lucia"=>"789"];
        if(isset($_POST["tlacidlo"])) {
            if(isset($_POST["meno"]) && isset($_POST["heslo"])) {
                $meno = $_POST["meno"];
                $heslo = $_POST["heslo"];
                if(in_array($meno, $pole) && $asocPole[$meno] == $_POST["heslo"]) {
                    echo "Ste prihlasený";
                } 
                else {
                    die("chyba nespravne pouzivatelske meno alebo heslo");
                }
                         
            }

        }

    ?>


    
</body>
</html>