<?php
include 'conn.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $adress = $_POST['adress'];
    $cep = $_POST['cep'];

    if (!empty($email) && !empty($password) && !empty($number) && !empty($adress) && !empty($cep)) {
        
        $sql = 'INSERT INTO hotel (email, password, number, adress, cep) VALUES (?, ?, ?, ?, ?)';
        
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            mysqli_stmt_bind_param($stmt, 'sssss', $email, $hashedPassword, $number, $adress, $cep);

            if (mysqli_stmt_execute($stmt)) {
                echo "Cadastro realizado com sucesso!";
            } else {
                echo "Erro ao realizar o cadastro. Verifique os dados.";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Erro ao preparar a consulta SQL.";
        }
    } else {
        echo "Todos os campos são obrigatórios!";
    }
} else {
    echo "Método de requisição inválido.";
}
mysqli_close($conn);
?>
