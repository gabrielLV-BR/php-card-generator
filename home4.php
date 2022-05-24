<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <?php
        $campos = ["select", "birthdate", "username", "email"];
        require_once("./functions.php");

        echo "
            <br>
            <h1>Usuário</h1>
            <p><b>Nome:</b> $username</p>
            <p><b>Email:</b> $email</p>
            <p><b>Aniversário:</b> $birthdate</p>
            <p><b>Lembrar?</b> $select</p>
            <br>
        ";
    ?>
    <a href="/  " class="btn btn-primary">Voltar</a>
</div>

</body>
</html>