<?php
declare(strict_types=1);
require_once 'common.php';
include_once 'templates/header.php';
?>

    <div class="registration">

        <form action="registration-process.php" method="post" class="registration-form">
            <h2>Přihlášení</h2>

            <div class="container">
                <h4>Email</h4>
                <input type="email" placeholder="Zadej email" name="uname" required>

                <h4>Heslo</h4>
                <input type="password" placeholder="Zadej heslo" name="psw" required>

                <h4>Zopakuj heslo</h4>
                <input type="password" placeholder="Zadej heslo" name="psw" required>

                <button type="submit">Zaregistrovat se</button>

                <div class="login-button">
                    <span>Už máš účet? <a href="login.php">Přihlas se</a></span>
                </div>
            </div>
        </form>

    </div>

<?php
include_once 'templates/footer.php';
?>
