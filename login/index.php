<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <h2 class="text-center">Login</h2>
        <form id="loginForm">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" id="email" name="email" placeholder="Seu e-mail" type="email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input class="form-control" id="password" name="password" placeholder="Sua senha" type="password" required>
            </div>
            <button type="button" id="loginButton" class="btn btn-primary btn-block">Entrar</button>
        </form>
        <p class="mt-3 text-center">Não tem uma conta? <a href="../cadastro/index.php">Crie uma agora!</a></p>
        <div id="loginMessage" class="text-center"></div>
    </div>
 
    <script>
        document.getElementById("loginButton").addEventListener("click", function() {
            var form = document.getElementById("loginForm");
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "login.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = xhr.responseText;
                        if (response === "success") { 
                            window.location.href = "../index.php";
                        } else {
                            document.getElementById("loginMessage").textContent = response;
                        }
                    } else {
                        console.error("Erro na requisição: " + xhr.status);
                    }
                }
            };
            xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
            xhr.send(formData);
        });
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
