<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arquivos</title>

    <link rel="stylesheet" href="css/card.css">
</head>

<body>
    <?php
    //  Campos para verificar
    $campos = ["select", "birthdate", "username", "email"];
    require_once("./functions.php");

    $date = date_create($birthdate);

    $imageName = strtolower(str_replace(" ", "", $username));
    $imageDirectory = __DIR__ . "/uploads/";

    $imageURL = "http://" . $_SERVER['SERVER_NAME'] . ":" . $_SERVER["SERVER_PORT"]. "/uploads/$imageName.png";
    
    move_uploaded_file($_FILES["image"]["tmp_name"], $imageDirectory . "/" . $imageName . ".png");
?>

    <div class="container">
        <main>
            <span class="left">
                <img src="<?php echo $imageURL; ?>" alt="" draggable="false">
            </span>
            <span class="right">
                <h1 class="name">
                    <?php echo $username; ?>
                </h1>
                <h2 class="email">
                    <?php echo $email; ?>
                </h2>
            </span>
        </main>
        <footer>
            <h2 class="birthdate">
                Nascimento: <?php echo date_format($date, "d/m/y");  ?>
            </h2>
        </footer>
    </div>

    <!-- <img src="<?php echo $imageURL; ?>" /> 
    <h1>Nome: <?php echo $username; ?></h1>
    <h2>Email: <?php echo $email; ?> </h2>
    <p>Lembrar usuário? <?php echo $select; ?></p>
    <p>Data de aniversário <?php echo date_format($date, "d/m"); ?></p> -->
    <img src="https://www.dicionarioinformal.com.br/image/v/124.jpg" alt="" class="segredo">

</body>
</html>