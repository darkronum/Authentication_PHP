<?php
include('../connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['password']) == 0) {
        echo "Preencha sua senha";
    } else {
        $name = $mysqli->real_escape_string($_POST["name"]);
        $email = $mysqli->real_escape_string($_POST["email"]);
        $password = $mysqli->real_escape_string($_POST["password"]);
        $hashed_password = $mysqli->real_escape_string(password_hash($password, PASSWORD_DEFAULT));
        $phone = $mysqli->real_escape_string($_POST["phone"]);
        $city = $mysqli->real_escape_string($_POST["city"]);
        $state = $mysqli->real_escape_string($_POST["state"]);
        $country = $mysqli->real_escape_string($_POST["country"]);

        $stmt = $mysqli->prepare("INSERT INTO users (name, email, password, phone, city, state, country) VALUES (?, ?, ?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die("Erro na preparação da declaração: " . $mysqli->error);
        }

        $stmt->bind_param("sssssss", $name, $email, $hashed_password, $phone, $city, $state, $country);

        if ($stmt->execute()) {
            session_start();
            $_SESSION['id'] = $mysqli->insert_id;
            $_SESSION['nome'] = $name;
            header("Location: ../protected-page.php");
            exit();
        } else {
            echo "Erro ao cadastrar: " . $mysqli->error;
        }

        $stmt->close();
    }
}
?>
