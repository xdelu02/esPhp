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
            <h1>Login</h1>
            <form class="form" action="includes/login.inc.php" method="POST" class>
                <input type="email" name="email" placeholder="Email" /><br>
                <input type="password" name="psw" placeholder="Password" /><br>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyfields") {
                        echo "<a style='color: red'>almeno 1 campo vuoto</a>";
                    } else if ($_GET["error"] == "password") {
                        echo "<a style='color: red'>password errata</a>";
                    }
                } else {
                    if (isset($_GET["result"])) {
                        if ($_GET["result"] == "notRegis") {
                            echo "<a style='color: blue' href='signup.php'>Registrati</a>";
                        }
                    }
                }
                ?>
                <br>
                <button type="submit" name="submit-login">Login</button>
            </form>
        </section>
    </div>
</main>