<article class="container">
    <div class="content" style="padding-bottom: 10px;">
        <header class="sectiontitle">
            <h1><?= $pg_title; ?></h1>
            <p><?= $pg_desc; ?></p>
        </header>

        <div class="trigger trigger-infor al-center">Está página está interiamente formatada e servida. Isso é Otimização Pura!
        </div>

        <div class="clear"></div>
    </div>
</article>

<section class="container bg-clean main_subj" itemscope itemtype="https://schema.org/Organization">
    <div class="content">
        <header class="articletitle fl-left" style="width: 70%;">
            <h1>Conheça mais sobre a <span itemprop="name" >Microsoft</span></h1>
            <p>Saiba mais sobre a </p>
        </header>

        <img itemprop="image" class="fl-right boxshadow" style="width: 27%;" src="<?= HOME; ?>/uploads/mod6/microsoft.jpg" title="Mais Sobre a Microsoft" alt="[Mais Sobre a Microsoft]">

        <article class="m-bottom">
            <div class="box-large">
                <h1 class="fontzero">Sobre Microsoft:</h1>
                <p itemprop="description">Fundada em 2010, a Microsoft se destaca por ter os melhores e mais completos cursos de desenvolvimento. Cursos profissionais, 100% em vídeo aulas, com suporte e certificação!</p>
                <p>Mas não ficamos por ai, além disso a Microsoft conta com a mais avançada e intuitiva plataforma do mercado, com um ambiente responsivo onde o aluno conta com um suporte diferencial. Podendo acessar seus cursos quando e onde quiser.</p>
            </div>
        </article>

        <article class="box box-medium">
            <h1 class="title">Canais de Atendimento:</h1>
            <ul>
                <li><b>Por Telefone:</b> <span itemprop="telephone">+99 9999-9999</span></li>
                <li><b>Por Email:</b> <span itemprop="email">microsoft@hotmail.com.br</span></li>
                <li><b>Site Oficial</b><a itemprop="sameAs" title="Site Oficial da Microsoft" target="_blank" href="https://www.microsoft.com"> www.microsoft.com</a></li>
            </ul>

            <p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                <span itemprop="streetAddress">Rua ....</span>,<br>
                <span itemprop="postalCode">99999-9999</span>/<span itemprop="addressLocality">São Paulo</span>, <span itemprop="addressRegion">SP</span><br>
                <span itemprop="addressCountry">Brasil</span>
            </p>
        </article>

        <aside>
            <h1 class="title">Redes Sociais:</h1>
            <ul>
                <li><a itemprop="url" class="shorticon shorticon-google" title="Microsoft no Google+" href="https://plus.google.com/communities/114582343442158817928?hl=pt-BR" rel="nofollow">Acompanhe no Google+</a></li>
                <li><a itemprop="url" class="shorticon shorticon-facebook" title="Microsoft no Facebook" href="https://www.facebook.com/MSFTBrasil/" rel="nofollow">Curta no Facebook</a></li>
                <li><a itemprop="url" class="shorticon shorticon-twitter" title="Microsoft no Twitter" href="https://twitter.com/Microsoft" rel="nofollow">Siga no Twitter</a></li>
            </ul>
        </aside>

        <div class="clear"></div>
    </div>
</section>

<article class="container bg-blue-dark" itemscope itemtype="https://schema.org/Person">
    <div class="content">

        <img itemprop="image" class="fl-left round boxshadow" style="width: 20%;" src="<?= HOME; ?>/uploads/mod6/bill-gates.jpg" title="Fundador da Microsoft, Bill Gates" alt="[Fundador da Microsoft, Bill Gates]" />

        <div class="fl-right" style="width: 75%;">
            <header class="articletitle">
                <h1>Conheça <span itemprop="name">Bill Gates</span>. Seu tutor neste curso!</h1>
                <p>Apaixonado pelo mundo tecnológico e grande inventor de ideias!</p>
            </header>

            <div>
                <p>Bill Gates fundou sua primeira agência web em 2006, Sempre em busca de conhecimento e aprimoramento em 2010 fundou o Blog Microsoft, que mais tarde veio a se tornar um portal de vídeo aulas.</p>
                <p>Em 2011 iniciou a <span itemprop="affiliation">Microsoft</span> , e como <span itemprop="jobTitle">CEO e Professor</span> vem criando os melhores e mais completos cursos em seus segmentos segundo seus alunos.</p>
                <p><span itemprop="description">Eterno aluno, apaixonado por PHP, artista da web</span>. Esse será seu tutor neste curso.</p>
                <ul class="main_subj_person">
                    <li><a itemprop="url" class="boxshadow" target="_bank" title="Bill Gates no Facebook" href="https://www.facebook.com/BillGates/">No Facebook</a></li>
                    <li><a itemprop="url" class="boxshadow" target="_bank" title="Bill Gates no Google+" href="https://plus.google.com/communities/109081551034477836311">No Google+</a></li>
                    <li><a itemprop="email" class="boxshadow" target="_bank" title="Bill Gates por e-mail" href="mailto:felipeabila@hotmail.com">Por E-mail</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</article>

<section class="container bg-light" itemscope itemtype="https://schema.org/Product">
    <div class="content">
        <header class="sectiontitle sectiontitle-nomargin">
            <h1>Veja o que falam sobre a Microsoft:</h1>
            <p>Leia os depoimentos de quem já trabalhou na Microsoft!</p>
        </header>
        <div class="clear"></div>
    </div>

    <div class="bg-bluelight">
        <div class="content content-page">
            <div class="m-bottom">
                <p class="fontsize2 font-light" itemprop="name">Empregos - Microsoft</p>
                <p itemprop="description">Trata-se de uma empresa tecnológica com foco no desenvolvimento e empreendedorismo, formulado através de ideias dos grandes especialistas!</p>
                <p class="fontsize2" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                    &starf; &starf;  &starf; &starf; &star; 
                    Média de <span itemprop="ratingValue">5</span> estrelas para <span itemprop="reviewCount">12</span> avalições!
                </p>
            </div>

            <?php
            for ($i = 1; $i <= 6; $i++):
                $last = ($i % 2 == 0 ? ' last' : '');
                ?>

                <article itemscope itemtype="https://schema.org/Review" class="box box-large radius bg-clean <?= $last; ?>" style="padding: 20px; width: 48%; margin: 0 4% 4% 0;">
                    <header class="articletitle" style="margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #999;">
                        <img class="round boxshadow fl-left" style="width: 19%;" src="<?= HOME; ?>/uploads/mod6/bill-gates.jpg" title="Bill Gates em um Comentário" alt="[Bill Gates em um Comentário]" />
                        <div class="fl-right" style="width: 76%;">
                            <h1 style="font-size: 1.4em;">Depoimento de <span itemprop="author">Bill Gates</span>:</h1>
                            <p style="margin: 5px 0;">Em <time itemprop="datePublished" datetime="2017-08-14">14 de agosto de 2017</time></p>
                            <span>&starf; &starf; &starf; &starf; &starf;</span>
                        </div>
                    </header>

                    <p itemprop="name">Perfeito!</p>
                    <p itemprop="reviewBody">O trabalho é perfeito em todos os sentidos, mostrando as seus empregados o legado da empresa para que todos que passam por lá, sintam-se confortáveis nas sedes da Microsoft!</p>
                    <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <p>Minha nota é <span itemprop="ratingValue">5</span></p> 
                    </div>
                    <a itemprop="itemReviewed" href="https://www.microsoft.com/pt-br/store/d/office-365-home/CFQ7TTC0K5DM/007W?icid=Cat-Office365-mosaic_right-home-061317_pt_BR" title="Comprar Office 365"></a>
                </article>

                <?php
                if ($last != ''):
                    echo'<div class="box-line"></div>';
                endif;
            endfor;
            ?>
            <div class="clear"></div>
        </div>
    </div>
</section>

<div class="container bg-orange">
    <div class="content content-page">
        <p class="fontsize1b font-thin al-center m-bottom">Deixe seu nome e e-mail com seu interesse pelo trabalho!</p>

        <form name="sendcontent" action="" method="post">
            <input class="box box-medium" type="text" title="Insira Seu Nome!" placeholder="Insira Seu Nome:" >
            <input class="box box-medium" type="email" title="Insira Seu E-mail!" placeholder="Insira Seu E-mail:">
            <a class="box box-medium last radius btn btn-green al-center" >Quero Ser da Microsoft!</a>
        </form>

        <div class="clear"></div>
    </div>
</div>

<section class="container bg-gray">
    <div class="content">
        <header class="sectiontitle">
            <h1>Confira as Próximas Turmas:</h1>
            <p>Veja abaixo a lista de datas e turmas para o WS HTML5!</p>
        </header>

        <?php
        for ($i = 1; $i <= 3; $i++):
            $last = ($i % 3 == 0 ? ' last' : '');
            $x = $i * 2;
            ?>

            <article class="box box-medium bg-blue-dark boxshadow <?= $last; ?>" itemscope itemtype="https://schema.org/Event" style="padding: 25px; font-size: 0.8em;">
                <header class="articletitle">
                    <h1 itemprop="name">Área administrativa <?= $i; ?></h1>
                    <p itemprop="description">Abertura de 50 vagas.</p>
                </header>

                <p>
                    <time itemprop="startDate" datetime="2014-10-20T8:20:00-03:00"><b>Abertura: </b>20 de outubro de 2014 às 8:20hs</time><br>
                    <time itemprop="endDate" datetime="2014-10-27T23:59:00-03:00"><b>Fechamento: </b>27 de outubro de 2014 às 23:59hs</time>
                </p>

                <div itemprop="performer" itemscope itemtype="https://schema.org/Person">                 
                    <span>Tutor: <span itemprop="name">Bill Gates</span></span>
                    <link itemprop="sameAs" href="<?= $pg_domain; ?>"/>
                </div>
                <p>Tempo de processos: <span itemprop="duration">30 horas</span></p>

                <p itemprop="location" itemscope itemtype="https://schema.org/Place">
                    <span itemprop="name">Centro de Eventos</span><br>
                    <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <span itemprop="streetAddress">Rua 15 de Novembro 982</span>,<br>
                        <span itemprop="postalCode">99300-000</span> / <span itemprop="addressLocality">São Paulo</span>, <span itemprop="addressRegion">SP</span><br>
                        <span itemprop="addressCountry">Brasil</span>
                    </span>
                </p>

                <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                    <!--<meta itemprop="price" content="680.00"/>
                    <meta itemprop="priceCurrency" content="BRL"/>-->
                    <!--                    <meta itemprop="availability" href="https://schema.org/InStock"/>-->
                    <p>Valor: <span itemprop="priceCurrency" content="BRL">R$</span> <span itemprop="price" content="680.00"><?= $x + 4; ?>80,00</span> - 50 vagas</p>
                    <span class="fontzero" itemprop="availability" href="https://schema.org/InStock">In Stock</span>
                    <time itemprop="validFrom" datetime="2014-10-20" ><span class="fontzero">2014-10-20</span></time>
                    <a itemprop="url" class="fl-left btn btn-green boxshadow radius" href="https://www.microsoft.com/pt-br/store/d/office-365-home/CFQ7TTC0K5DM/007W?icid=Cat-Office365-mosaic_right-home-061317_pt_BR">Inscrição</a>
                </div>
            </article>

        <?php endfor; ?>
        <div class="clear"></div>
    </div>
</section>




















