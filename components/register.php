<?php
require 'conn.php'; // Inclua a conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenha os dados do formulário
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $confirm_email = filter_input(INPUT_POST, 'confirm_email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING);
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);

    // Validações
    if (!$email || !$confirm_email || $email !== $confirm_email) {
        die('Os e-mails não coincidem ou são inválidos.');
    }
    if (empty($password) || $password !== $confirm_password) {
        die('As senhas não coincidem ou estão vazias.');
    }
    if (strlen($password) < 6) {
        die('A senha deve ter no mínimo 6 caracteres.');
    }

    try {
        // Verifique se o e-mail já está cadastrado
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM hotel WHERE email = :email");
        $stmt->execute(['email' => $email]);
        if ($stmt->fetchColumn() > 0) {
            die('E-mail já cadastrado. Tente outro.');
        }

        // Crie o hash da senha
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insira os dados no banco
        $stmt = $pdo->prepare("
            INSERT INTO hotel (email, password, number, adress, cep) 
            VALUES (:email, :password, :number, :adress, :cep)
        ");
        $stmt->execute([
            'email' => $email,
            'password' => $hashedPassword,
            'number' => $number,
            'adress' => $address,
            'cep' => $cep
        ]);

        echo "Registro realizado com sucesso!";
    } catch (PDOException $e) {
        die("Erro ao registrar usuário: " . $e->getMessage());
    }
} else {
    die('Método de requisição inválido.');
}
?>
