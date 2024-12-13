<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <input type="radio" name="jazyk" value="1"><label>Python</label> <br>
    <input type="radio" name="jazyk" value="2"><label>C++</label> <br>
    <input type="radio" name="jazyk" value="3"><label>Java<label> <br>
    <input type="submit" name="tlacidlo" value="odoslať">
    </form>


    <?php
        if(isset($_POST["tlacidlo"])) {
            if(isset($_POST["jazyk"])) {
                    $vyber = $_POST["jazyk"];
                    if($vyber == "1") {
                        echo "Vybrali ste si Python";
                    }
                    elseif($vyber == "2") {
                        echo "Vybrali ste si C++";
                    }
                    elseif($vyber == "3") {
                        echo "vybrali ste si Javu";
                    }
                    else {
                        echo "nevybrali ste si ziadnu moznost";
                    }
                } 
                } 
                else {
                    die("chyba");
                }


    ?>





</body>




</html>
