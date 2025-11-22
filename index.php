<?php
declare(strict_types=1);
require_once 'common.php';
include_once 'templates/header.php';
?>

    <div class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Uč se hrou.</h1>
                <h2>Snadno a zábavně se studijními kartičkami!</h2>
            </div>
        </div>
    </div>

    <div class="button-container">
        <a href="login.php" class="btn btn-primary">
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

    <div class="why-us">
        <div class="why-content">
            <h3>Už žádné nudné učení</h3>
            <p>
                Studijní kartičky využívají metodu tzv. <strong>aktivního učení</strong>.
                Místo bezmyšlenkového čtení poznámek nutíš mozek pracovat.
                Výsledek? Učíš se mnohem rychleji.
            </p>
        </div>
    </div>

    <div class="how-it-works">
        <h3>Jak to funguje?</h3>
        <div class="steps-container">

            <div class="step">
                <div class="step-icon">
                    <i class="fa-solid fa-pen-to-square"></i>
                </div>
                <h4>1. Vytvoř si balíček</h4>
                <p>Vytvoř si balíček kartiček z tématu, které se potřebuješ naučit. Angličtina, ekonomika nebo i autoškola.</p>
            </div>

            <div class="step">
                <div class="step-icon">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <h4>2. Přidej otázky</h4>
                <p>Napiš si otázku na jednu stranu a odpověď na druhou.</p>
            </div>

            <div class="step">
                <div class="step-icon">
                    <i class="fa-solid fa-mobile-screen"></i>
                </div>
                <h4>3. Procházej kdekoli</h4>
                <p>Místo tahání sešitů a učebnic vytáhni mobil a projeď si kartičky třeba v autobuse.</p>
            </div>
        </div>
    </div>


<?php
include_once 'templates/footer.php';
?>