<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 

session_start(); 

require 'conn.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'] ?? '';

    if (!$email) {
        die('E-mail inválido.');
    } 
    if (empty($password)) {
        die('Senha não fornecida.');
    }

    try {
        $stmt = $pdo->prepare("SELECT * FROM hotel WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            die('E-mail não encontrado.');
        }
        
        var_dump($password, $user['password']);

        $password_match = password_verify($password, $user['password']);

        var_dump($password_match);

        if (!$password_match) {
            die('Senha incorreta.');
        }

        echo 'Login bem-sucedido!';

        $_SESSION['user_id'] = $user['primary']; 
        $_SESSION['email'] = $user['email']; 

        header("Location: ../index.php");
        
        exit;
    } catch (PDOException $e) {
        die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
    }
}


