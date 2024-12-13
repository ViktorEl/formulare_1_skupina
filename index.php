<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="jazyk[]" value="1"> <label>PHP</label> <br>
        <input type="checkbox" name="jazyk[]" value="2"> <label>Java</label> <br>
        <input type="checkbox" name="jazyk[]" value="3"> <label>Python</label> <br>
        <input type="checkbox" name="jazyk[]" value="4"> <label>C++</label> <br>
        <input type="submit" name="tlacidlo" value="odoslať">
    </form>




    <?php
        if(isset($_POST["tlacidlo"])) {
            if(isset($_POST["jazyk"])) {
                if(count($_POST["jazyk"]) < 2 || count($_POST["jazyk"]) > 3) {
                    die("musite vybrat minimalne 2 a maximalne 3 moznosti");
                }
                $pole = $_POST["jazyk"];
                foreach($pole as $prvok) {
                    if($prvok == "1") {
                        echo "vybrali ste si PHP";
                        echo "<br>";
                    }
                    elseif($prvok == "2") {
                        echo "vybrali ste si Javu";
                        echo "<br>";
                    }
                    elseif($prvok == "3") {
                        echo "vybrali ste si Python";
                        echo "<br>";
                    }
                    else {
                        echo "vybrali ste si C++";
                        echo "<br>";
                    }
                }



            }
            else {
                die("nevybrali ste ziadnu moznost");
            }

        }
   


    ?>





</body>




</html>
