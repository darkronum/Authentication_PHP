<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
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
        <h2 class="text-center">Formulário de Cadastro</h2>
        <form method="POST" class="contact-form" id="registerForm">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" name="name" placeholder="Nome Completo" type="text" required>
                        <span class="alert-error"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="email" name="email" placeholder="E-mail" type="email" required>
                        <span class="alert-error"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="password" name="password" placeholder="Senha" type="password" required>
                        <span class="alert-error"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="phone" name="phone" placeholder="WhatsApp" type="text" required>
                        <span class="alert-error"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="city" name="city" placeholder="Cidade" type="text" required>
                        <span class="alert-error"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="state" name="state" placeholder="Estado" type="text" required>
                        <span class="alert-error"></span>
                    </div>
                </div>
            </div>
            <input type="hidden" name="country" value="BR">
            <div class="col-md-12">
                <div class="row">
                    <div id="registerError" style="color: red;"></div>
                    <div id="registerSuccess" style="color: green;"></div>
                    <button type="button" id="registerButton" class="btn btn-primary">Enviar <i class="fa fa-paper-plane"></i></button>
                    <div id="registerLoading" style="display: none;"><i class="fa fa-spinner fa-spin"></i> Enviando...</div>
                </div>
            </div>
        </form>
    </div>
  
    <script>
        document.getElementById("registerButton").addEventListener("click", function() {
            var form = document.getElementById("registerForm");
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "register.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = xhr.responseText;
                        if (response.startsWith("Erro")) {
                            document.getElementById("registerError").textContent = response;
                        } else { 
                            window.location.href = "../index.php";
                        }
                    } else {
                        console.error("Erro na requisição: " + xhr.status);
                    }
                    document.getElementById("registerLoading").style.display = "none";
                }
            };
            xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
            xhr.send(formData);
            document.getElementById("registerLoading").style.display = "block";
        });
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
