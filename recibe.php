<?php



$f_name = $_POST["first_name"];
$l_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];


?>

<!DOCTYPE html>
<head>
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
</head>


<div class="card" style="width: 18rem;">
    <div class="card text-white bg-success mb-3">
        <h3 class="card-header">
            <?php
            print ("¡Datos recibidos!");
?>

        </h3>

        <h5 class="card-title">
            <?php
            print ("$f_name hemos procesado tus datos");
            ?>

        </h5>
        <p class="card-text">
<?php

            echo "\n";
            echo "<b>Apellidos:</b> $l_name <br>";
            echo "<b>Nombres:</b> $f_name <br>";
            echo "<b>Email:</b> $email <br>";
            echo "<b>Teléfono:</b> $phone <br>";
            echo "\n";
            echo "Si tus datos están correctos, confirma tu identidad <br>";
?>
        </p>


    </div>
    <form  align="center" action="confirm.php" method="POST">
        <button type="submit" class="btn btn-outline-success">Confirmar</button>
    </form>
</div>

</html>