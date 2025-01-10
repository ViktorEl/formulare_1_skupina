<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Učíme sa skryť formulár</h2>

    <form action="index.php" method="post">
        <input type="checkbox" name="znacka[]" value="1"> <label>Mercedes</label> <br>
        <input type="checkbox" name="znacka[]" value="2"> <label>Audi</label> <br>
        <input type="checkbox" name="znacka[]" value="3"> <label>BMW</label> <br>
        <input type="submit" name="tlacidlo" value="Odoslať">
    </form>

    <?php
        if(isset($_POST["tlacidlo"])) {
            if(isset($_POST["znacka"])) {
                $pole = $_POST["znacka"];
                $pocet = count($pole);
                if($pocet != 2) {
                    die("musite vybrať 2 možnosti ");
                }

                foreach($pole as $prvok) {
                    if($prvok == "1") {
                        echo "vybrali ste si Mercedes"; 
                        echo "<br>";
                    }
                    elseif($prvok == "2") {
                        echo "vybrali ste si Audi";
                        echo "<br>";
                    }
                    elseif($prvok == "3") {
                        echo "vybrali ste si BMW";
                        echo "<br>";
                    }
                }


            }

        }




    ?>



    
</body>
</html>