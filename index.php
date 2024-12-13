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

            
        }
   


    ?>





</body>




</html>
