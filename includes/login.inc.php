<?php

    include "db.inc.php";
    $conn = openCon();

    if (isset($_POST['submit-login'])) {
        if (empty($_POST['email']) || empty($_POST['psw'])) {
            header("Location: ../login.php?error=emptyfields");
            exit();
        }

        $email = $_POST['email'];
        $password = $_POST['pws'];
        $sql = "SELECT id FROM utenti WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $sql = "SELECT id FROM utenti WHERE email = '$email' AND password = '$password'";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                session_start();
                $_SESSION["email"] = $email;

                header("Location: ../main.php?result=logged");
            } else {
                header("Location: ../login.php?error=password");
            }
        } else {
            header("Location: ../login.php?result=notRegis");
        }
    } else {
        header("Location: ../login.php");
    }

?>