<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arquivos no formulário</title>
</head>
<body>

<form action="filesTest.php" method="post" enctype="multipart/form-data">
    <!-- ao trabalhar com arquivos no formulário, usar enctype  -->
    <input type="file" name="img">
    <button type="submit">Cadastrar</button>
</form>

</body>
</html>