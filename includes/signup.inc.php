<?php

    include "db.inc.php";

    if (isset($_POST['submit-signup'])) {
        $email = $_POST["email"];
        $password = $_POST["pws"];
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $data = $_POST["data"];
        $indirizzo = $_POST["indirizzo"];

        if (empty($email) || empty($password) || empty($nome) || empty($cognome) || empty($data) || empty($indirizzo)) {
            header("Location: ../signup.php?error=emptyfields");
            exit();
        }

        //DB
        $conn = OpenCon();

        $sql = "SELECT id FROM utenti WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            header("Location: signup.php?error=usertaken");
            exit();
        }

        $stmt = $conn->prepare("INSERT INTO `utenti` (email,password,nome,cognome,dataDiNascita,indirizzoSpedizione) VALUES(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $email, $password, $nome, $cognome, $data, $indirizzo);

        $password = hash('ripemd160', $password);
        $stmt->execute();

        CloseCon($conn);

        //ritorno all'esito
        header("Location: ../login.php?result=signup");
    } else {
        header("Location: ../signup.php");
    }

?>