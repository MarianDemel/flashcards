<?php
declare(strict_types=1);
require_once 'common.php';
include_once 'templates/header.php';
?>

    <div class="login">

        <form action="login_process.php" method="post" class="login-form">
            <h2>Přihlášení</h2>

            <div class="container">
                <h4>Email</h4>
                <input type="email" placeholder="Zadej email" name="uname" required>

                <h4>Heslo</h4>
                <input type="password" placeholder="Zadej heslo" name="psw" required>

                <button type="submit">Přihlásit se</button>

                <div class="registration-button">
                    <span>Nemáš účet? <a href="registration.php">Zaregistruj se</a></span>
                </div>
            </div>

            <div class="forgotten-password">
                <span><a href="#">Zapomněl jsem heslo</a></span>
            </div>
        </form>

    </div>

<?php
include_once 'templates/footer.php';
?>
