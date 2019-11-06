<?php
    $BODY_CLASS = 'home';
?>

    <?php include './partials/_header.php' ?>
            <h2 class="hero__headline">
                Glänzende Ideen für leuchtende Augen
            </h2>
            <br />
            <button class="hero__btn btn btn--green">
                <a class="btn__a" href="#">Angebot einholen</a>
            </button>
            </div>
        </div>
    </header>
    <main class="content">
        <section id="services" class="content__section">
            <h3 class="h3">Leistungen</h3>
                <?php include './partials/_cards.php' ?>
            </section>
            <section id="news" class="content__section">
                <h3 class="h3">News</h3>
                <?php include './partials/_news-list.php' ?>
            </section>
            <section id="credentials" class="content__section">
                <h3 class="h3">Referenzen</h3>
                <?php include './partials/_references.php' ?>
        </section>
    </main>

    <?php include './partials/_footer.php' ?>
