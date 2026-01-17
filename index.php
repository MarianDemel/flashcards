<?php
declare(strict_types=1);
require_once 'common.php';
include_once 'templates/header.php';
?>

    <div class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1>Uč se hrou.</h1>
                <h2>Snadno, efektivně a zábavně se studijními kartičkami. Začni ještě dnes.</h2>
                <div class="hero-buttons">
                    <a href="login.php" class="btn btn-primary">ZAČNI TVOŘIT ZDARMA</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="pictures/vychozi-landscape.svg" alt="Ukázka aplikace">
            </div>
        </div>
    </div>

    <main class="main-content">

        <section class="features-section">
            <div class="section-header">
                <h3>Proč studijní kartičky?</h3>
                <p>Nástroj, který ti skutečně pomůže si látku zapamatovat.</p>
            </div>

            <div class="cards-grid">
                <div class="card">
                    <div class="icon-circle">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h4>Zapamatuj si cokoliv</h4>
                    <p>Metoda aktivního vybavování posiluje paměťové stopy mnohem lépe než pasivní čtení.</p>
                </div>

                <div class="card">
                    <div class="icon-circle">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h4>Příprava na zkoušky</h4>
                    <p>Ideální pro maturitu, testy nebo cizí jazyky. Měj vše pohromadě.</p>
                </div>

                <div class="card">
                    <div class="icon-circle">
                        <i class="fa-solid fa-gamepad"></i>
                    </div>
                    <h4>Učení, které baví</h4>
                    <p>Sleduj svůj pokrok, posouvej se v tabulce a proměň nudné biflování v zábavnou hru.</p>
                </div>
            </div>
        </section>

        <section class="how-it-works-section">
            <div class="section-header">
                <h3>Jak to funguje?</h3>
            </div>

            <div class="steps-container">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Vytvoř si balíček</h4>
                        <p>Založ téma, které se potřebuješ naučit. Angličtina, ekonomika nebo klidně autoškola.</p>
                    </div>
                </div>

                <div class="step-arrow"><i class="fa-solid fa-arrow-right"></i></div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>Přidej otázky</h4>
                        <p>Na jednu stranu napiš otázku, na druhou odpověď. Můžeš přidat i obrázky.</p>
                    </div>
                </div>

                <div class="step-arrow"><i class="fa-solid fa-arrow-right"></i></div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Studuj kdekoli</h4>
                        <p>Vytáhni mobil kdekoliv, např. v autobuse nebo při čekání, a projeď si pár kartiček.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-banner">
            <div class="cta-content">
                <h3>Už žádné nudné učení</h3>
                <p>Studijní kartičky využívají metodu aktivního učení. Místo bezmyšlenkového čtení nutíš mozek pracovat.</p>
                <a href="login.php" class="btn btn-white">Vytvořit účet</a>
            </div>
        </section>

    </main>

<?php
include_once 'templates/footer.php';
?>