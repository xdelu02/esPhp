<?php
    require "header.php";
?>

<head>
    <meta charset="UTF-8">
    <title>E-commerce</title>
</head>

<main style="clear:both">
    <div class="wrapped-main">
        <section class="section-default">
            <h1>Signup</h1>
            <form class="form" action="includes/signup.inc.php" method="POST">
                <input type="email" name="email" placeholder="Email" /><br>
                <input type="password" name="psw" placeholder="Password" /><br>
                <input type="text" name="nome" placeholder="Nome" /><br>
                <input type="text" name="cognome" placeholder="Cognome" /><br>
                <input type="date" name="data" /><br>
                <input type="text" name="indirizzo" placeholder="Indirizzo spedizione" /><br>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyfields") {
                        echo "<a style='color: red'>almeno 1 campo vuoto</a>";
                    } else if ($_GET["error"] == "usertaken") {
                        echo "<a style='color: red'>Utente già preso</a>";
                    }
                }
                ?>
                <br>
                <button type="submit" name="submit-signup">Signup</button>
            </form>
        </section>
    </div>
</main>