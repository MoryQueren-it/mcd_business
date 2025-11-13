<?php

session_start();

if (isset($_POST['numero']) &&
isset($_POST['password'])) {

    include './connexion.php';

    $numero = $_POST['numero'];
    $password = $_POST['password'];

    if (empty($username)) {
        $em = "numero is required";
        header("Location: ../../../index.php?error=$em");
    } elseif (empty($password)) {
        $em = "Password is required";
        header("Location: ../../../index.php?error=$em");

    } else {
        $sql = "SELECT * FROM users WHERE numero=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$numero]);

        if ($stmt->rowCount() === 1) {

            $user = $stmt->fetch();

            if ($user['numero'] === $numero) {

                if (password_verify($password,$user['password'])) {
                    #creation de la session
                    $_SESSION['numero'] = $user['numero'];
                    $_SESSION['id'] = $user['id'];

                    header("Location: ./../../pages/home.php");

                } else {
                    $em = "Incorrect Numero or Password";
                    header("Location: ../../../index.php?error=$em");
                }
            } else {
                $em = "Incorrect Numero or Password";
                header("Location: ../../index.php?error=$em");
            }
        }
    }

} else {
    header("Location: ../../../index.php"); 
    exit;
}