<?php
session_start(); 
include('../connection.php');

if(isset($_POST['email']) && isset($_POST['password'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['password']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $mysqli->prepare("SELECT id, name, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows == 1) {
            $stmt->bind_result($id, $name, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name; 
                echo "success";
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
} else {
    echo "Erro: Dados de login não foram recebidos corretamente";
}
?>
