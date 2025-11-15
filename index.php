<?php
declare(strict_types=1);
require_once 'common.php';
include_once 'templates/header.php';
?>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Uč se hrou.</h1>
                <h2>Snadno a zábavně se studijními kartičkami!</h2>
            </div>
        </div>
    </section>

    <div class="button-container">
        <a href="#" class="btn btn-primary">
            ZAČNI TVOŘIT ZDARMA</a>
    </div>

    <div class="tablet-section">
        <img src="pictures/vychozi-landscape.svg" alt="tablet" class="tablet-img">

        <div class="features">
            <div class="feature">
                <i class="fa-solid fa-lightbulb"></i>
                <p>Zapamatuj si cokoliv</p>
            </div>

            <div class="feature">
                <i class="fa-solid fa-graduation-cap"></i>
                <p>Příprava na zkoušky</p>
            </div>

            <div class="feature">
                <i class="fa-solid fa-gamepad"></i>
                <p>Učení, které baví</p>
            </div>
        </div>
    </div>


<?php
include_once 'templates/footer.php';
?>