<?php
require './_app/Config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebSite">
    <head>
        <!--LINK DE ACOMPANHAMENTO DO GOOGLE ANALYTICS-->
        <?php
            require REQUIRE_PATH . '/inc/analyticstracking.php';
        ?>
        <!--LINK DE ACOMPANHAMENTO DO GOOGLE ANALYTICS-->
        <meta charset="UTF-8">
        <title><?= $pg_title; ?></title>
        <meta name="description" content="<?= $pg_desc; ?>"/>
        <meta name="robots" content="index, follow"/>    

        <!--GOOGLE+-->
        <link rel="canonical" href="<?= $pg_url; ?>">
        <link rel="author" href="https://plus.google.com/<?= $pg_google_author; ?>/posts">
        <link rel="publisher" href="https://plus.google.com/<?= $pg_google_publisher; ?>">



        <!--MICROFORMATOS-->
        <meta name="name" content="<?= $pg_site; ?>"/>
        <meta name="description" content="<?= $pg_desc; ?>"/>
        <meta name="image" content="<?= $pg_image; ?>"/>
        <meta name="url" content="<?= $pg_url; ?>"/>
        <!--FACEBOOK-->
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?= $pg_title; ?>" />
        <meta property="og:description" content="<?= $pg_desc; ?>" />
        <meta property="og:image" content="<?= $pg_image; ?>" />
        <meta property="og:url" content="<?= $pg_url; ?>" />
        <meta property="og:site_name" content="<?= $pg_site; ?>" />
        <meta property="og:locale" content="pt-br" />
        <meta property="og:app_id" content="<?= $pg_fb_app; ?>" />
        <meta property="og:website:author" content="https://www.facebook.com/<?= $pg_fb_author; ?>" />
        <meta property="og:website:publisher" content="https://www.facebook.com/<?= $pg_fb_publisher; ?>" />
        <!--TWITTER-->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:site" content="<?= $pg_twitter; ?>">
        <meta property="twitter:domain" content="<?= $pg_domain; ?>">
        <meta property="twitter:title" content="<?= $pg_title; ?>">
        <meta property="twitter:description" content="<?= $pg_desc; ?>">
        <meta property="twitter:image:src" content="<?= $pg_image; ?>">
        <meta property="twitter:url" content="<?= $pg_url; ?>">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/boot.css"/>
        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>/img/favicon.jpg"/>

        
    </head>
    <body>



        <header class="container bg-black">
            <div class="content">
                <h1 class="fl-left main_logo fontzero">
                    <a title="Home" href="<?= HOME; ?>" class="radius">
                        <?= $pg_title; ?>
                    </a>
                </h1>

                <ul class=" main_nav fl-right">
                    <?php require REQUIRE_PATH . '/inc/main_nav.php'; ?>
                </ul>
                <div class="clear"></div>
            </div>
        </header>

        <!--CONTEUDO-->
        <?php
        $Url[1] = (empty($Url[1]) ? null : $Url[1]);

        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
        else:
            require REQUIRE_PATH . '/404.php';
        endif;
        ?>
        <!--CONTENT VISUAL--> 
        <div class="container bg-light ">
            <div class="content content-page al-center fontsize2b font-thin"> 
                Seja muito Bem-Vindo!
                <div class="clear"></div>  
            </div> 
        </div>


        <!--FOOTER-->
        <footer class=" container bg-black">
            <section class="content main_footer">
                <h1 class="fontzero">Sobre a Microsoft</h1>

                <nav class="item_footer box box-medium">
                    <h1 class="title">Mais Sobre o Office</h1>
                    <ul>
                        <li><a class="shorticon shorticon-section" title="Assista o Vídeo sobre a Microsoft" href="#apresentacao">Assista o Video</a></li>
                        <li><a class="shorticon shorticon-section" title="Olhe o que vai aprender!" href="#tecnologias">Você vai Aprender</a></li>
                        <li><a class="shorticon shorticon-section" title="Veja o Anúncio de Venda da Microsoft" href="#anuncio">Anúncio de Venda</a></li>
                    </ul>
                </nav>

                <article class="box box-medium">
                    <h1 class="title">Microsoft nas Redes Sociais</h1>
                    <ul>
                        <li><a class="shorticon shorticon-facebook" title="Microsoft no Facebook" target="_blank" rel="nofollow" href="https://pt-br.facebook.com/MSFTBrasil">Facebook</a></li>
                        <li><a class="shorticon shorticon-google" title="Microsoft no Google Plus" target="_blank" rel="nofollow" href="https://plus.google.com/communities/114582343442158817928">Google+</a></li>
                        <li><a class="shorticon shorticon-twitter" title="Microsoft no Twitter" target="_blank" rel="nofollow" href="https://twitter.com/microsoft">Twitter</a></li>
                    </ul>
                </article>

                <article class="main_ead box box-medium last">
                    <h1 class="fontzero">Sobre a Plataforma Microsoft</h1>
                    <p><b class="shorticon shorticon-config">Plataforma EAD:</b><a title="Entre na plataforma da MIcrosoft" target="_blank" href="https://www.microsoft.com/pt-br/"> www.microsoft.com</a></p>
                    <p><b class="shorticon shorticon-email">E-mail:</b><a title="Envie um e-mail para Microsoft" href="mailto:microsoft@hotmail.com"> microsoft@hotmail.com</a></p>
                    <hr style="border-color: #737373;">
                    <p class="plast">&copy; <?= date('Y'); ?>- Microsoft, Todos os Direitos Reservados!</p>
                </article>

                <div class="clear"></div>
            </section>
        </footer>
        
        
        
        <script type="text/javascript">
                
                    function buttonFirst(){
                       window.alert("Parabéns por ter adquirido o curso!");
                    }
                
        </script>
        
        
    </body>
</html>
