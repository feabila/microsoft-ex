<section class="container">
    <div class="content " style="background: url(<?= INCLUDE_PATH; ?>/img/mapa.png) center center no-repeat;">
        <header class="sectiontitle sectiontitle-nomargin">
            <h1><?= $pg_title; ?></h1>
            <p><?= $pg_desc; ?></p>
        </header>
        <div class="clear"></div>
    </div>

    <article class="bg-clean">
        <div class="content">
            <header class="articletitle">
                <h1>Deixe seu comentário:</h1>
                <p>Informe seu nome e e-mail para sugerir conteúdo relacionado a <?= $setUrl; ?></p>
            </header>

            <form name="sendcontent" action="<?= HOME; ?>/obrigado/" method="post">
                <input class="box box-medium" name="nome" type="text" title="Informe Seu Nome" placeholder="Informe Seu Nome!" >
                <input class="box box-medium" name="email" type="email" title="Informe Seu E-mail" placeholder="Informe Seu E-mail!" >
                <a class="box box-medium last btn btn-green radius al-center">Deixe sua Sugestão</a>
            </form>
            <div class="clear"></div>
        </div>
    </article>

    <nav class="bg-orange">
        <div class="content">
            <h1 class="fontzero">Acesse nosso conteúdo principal:</h1>
            <ul class="reverse_nav">
                <?php require REQUIRE_PATH . './inc/main_nav.php'; ?>
            </ul>
            <div class="clear"></div>
        </div> 
    </nav>
</section>










