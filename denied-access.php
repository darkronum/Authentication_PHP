<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Negado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #202020;
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #card {
            background-color: #333333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
            max-width: 500px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="card">
        <h2 class="text-center">Acesso Negado</h2>
        <p class="text-center">Você não tem acesso a esta página. Faça login ou crie uma conta.</p>
        <div class="text-center">
            <a href="./cadastro/index.php" class="btn btn-primary">Criar Conta</a>
            <a href="./login/index.php" class="btn btn-secondary">Fazer Login</a>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
