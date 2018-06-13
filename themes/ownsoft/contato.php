<section class="container">
    <div class="content">
        <header class="sectiontitle">
            <h1><?= $pg_title; ?></h1>
            <p><?= $pg_desc; ?></p>
        </header>

        <form action="" method="post">
            <input style="width: 80%; margin: 0 10%;" type="text" placeholder="Uma pesquisa selecionada! Carregue a página e saia digitando!">
        </form>

        <p class="al-center" style="color: #E16F4D; margin-top: 5px;">Todos os Efeitos e Eventos desta Página Foram Criados Utilizando Exclusivamente HTML5 e CSS</p>

        <div class="clear"></div>
    </div>

    <article class="container bg-clean">
        <div class="content" style="background: url(<?= INCLUDE_PATH; ?>/img/mapa.png) center center no-repeat;">
            <header class="articletitle">
                <h1>Produção para Formulário!</h1>
                <p>Um estilo padronizado, ágil, distribuído e muito clean. Confira:</p>
            </header>

            <aside class="fl-right box-forthreesmall contato_info">
                <h1 class="form-legend"><span class="shorticon shorticon-email shorticon-legendtitle">Formas de Contato</span></h1>
                <ul>
                    <li><b>Por Telefone:</b> 55+ 9999-9999</li>
                    <li><b>Por E-mail:</b> <a title="Envie um e-mail para a Microsoft!" href="mailto:microsoft@hotmail.com">microsoft@hotmail.com</a></li>
                    <li><b>Por Facebook</b> <a title="Entre em contato por Facebook conosco!" href="www.facebook.com/MSFTBrasil">fb.com/MSFTBrasil</a></li>
                </ul>

                <p>
                    Rua ...,<br>
                    99999999 - São Paulo/SP<br>
                    Brasil
                </p>
            </aside>

            <div class="fl-left box-forthree">
                <form method="post" action="">
                    <label>
                        <span class="form-field">Nome:</span>
                        <input type="text" name="nome" title="Favor informe seu nome!" placeholder="Informe Seu Nome:">
                    </label>

                    <label>
                        <span class="form-field">Bio:</span>
                        <textarea type="text" rows="4" placeholder="Deixe seu comentário" title="Favor deixar seu comentário!"></textarea>
                    </label>    

                    <label>
                        <span class="form-field">Sexo:</span>
                        <select name="gender" title="Selecione seu Sexo:">
                            <option value="" >Selecione seu Sexo:</option>
                            <option value="m">Masculino</option>
                            <option value="f">Feminino</option>
                        </select>
                    </label>    

                    <label>
                        <span class="form-field">Senha:</span>
                        <input type="password" name="senha" title="Favor informe sua Senha!" placeholder="Informe sua Senha:">
                    </label>    

                    <div class="form-check">
                        <span class="form-field">Deixe sua Nota:</span>
                        <label><input type="radio" name="review" title="Favor deixar sua nota!" value="1">1</label>
                        <label><input type="radio" name="review" value="2">2</label>
                        <label><input type="radio" name="review" value="3">3</label>
                    </div>

                    <div class="form-check">
                        <span class="form-field">Receber E-mail sobre:</span>
                        <label><input type="checkbox" name="list" value="1">Técnicas</label>
                        <label><input type="checkbox" name="list" value="2">Tutoriais</label>
                        <label><input type="checkbox" name="list" value="3">Empregos</label>
                    </div>    

                    <input class="btn btn-green radius" type="submit" value="Enviar">
                    <input class="btn btn-red radius" style="margin: 0 20px;" type="reset" value="Limpar">
                    <button class="btn btn-blue radius">Nada aqui:</button>
                </form>
            </div>

            <div class="clear"></div>
        </div>
    </article>

    <article class="container bg-blue-dark">
        <div class="content">
            <header class="sectiontitle">
                <h1>Novas Modalidades</h1>
                <p>Conheça e aplique os novos campos disponíveis!</p>
            </header>

            <form action="" method="post">
                <div class="box box-medium">
                    <label>
                        <span class="form-field">Este é um Campo de Pesquisa:<br><small>O que você procura?</small></span>
                        <input type="search" list="offices" name="offices" placeholder="Procure pela palavra Office" required>
                    </label>

                    <datalist id="offices">
                        <option value="Office Word" label=" Interado em arquivos de texto"></option>
                        <option value="Office Power" label="Apresentações por slides"></option>
                        <option value="Office Sheet" label="Movido a planilhas"></option>
                        <option value="Office Vision" label="Interado com Tecnologia"></option>
                    </datalist>

                    <label>
                        <span class="form-field">Este é um Campo de Url:<br><small>Você tem um site?</small></span>
                        <input type="url" name="url" placeholder="Insira seu site com http://" required>
                    </label>

                    <label>
                        <span class="form-field">Este é um campo de Data:<br><small>Que dia é hoje?</small></span>
                        <input type="date" name="data" required> 
                    </label>
                </div>

                <div class="box box-medium">
                    <label>
                        <span class="form-field">Este é um Campo de E-mail:<br><small>Come eu falo com você?</small></span>
                        <input type="email" name="email" placeholder="Insira seu e-mail aqui" required>
                    </label>

                    <label>
                        <span class="form-field">Este é um Campo de Telefone:<br><small>Posso te ligar?</small></span>
                        <input type="tel" name="telefone" placeholder="Insira seu número de telefone" required>
                    </label>

                    <label>
                        <span class="form-field">Este é um Campo de Spin:<br><small>Avalie de 1 à 10!</small></span>
                        <input type="number" min="0" max="10" value="5" name="email" placeholder="Insira seu e-mail aqui" required>
                    </label>
                </div>

                <div class="box box-medium last">
                    <label style="margin-bottom: 20px;">
                        <span class="form-field">Este é um Campo de Slide:<br><small>Você está feliz?</small></span>
                        <input type="range" min="0" max="10" value="5" name="slide" required>
                    </label>

                    <label>
                        <span class="form-field">Este é um Campo de Cor:<br><small>Qual a sua favorita?</small></span>
                        <input type="color" name="cor" value="#888888" required>
                    </label>
                </div>

                <div class="box box-full" style="margin-top: 20px;">
                    <p class="fl-right" style="margin-top: 20px;">Lembre-se de estar utilizando um browser atualizado. No chrome tudo funciona!</p>
                    <input class="btn btn-green radius" type="submit" value="Enviar">
                </div>
            </form>

            <div class="clear"></div>
        </div>
    </article>

    <article class="container">
        <div class="content">
            <header class="articletitle articletitle-nomargin">
                <h1>Variações de Campo de Data:</h1>
                <p>Data, data e horário, mês, semana. Conheça as variações!</p>
            </header>
            <div class="clear"></div>
        </div>

        <div class="container bg-clean">
            <div class="content">
                <form action="" method="post">
                    <div class="box box-large">
                        <label>
                            <span class="form-field">Este é um Campo de Data:<br><small>Que dia é hoje?</small></span>
                            <input type="date" name="data">
                        </label>

                        <label>
                            <span class="form-field">Este é um Campo de Semana:<br><small>Selecione a semana do ano!    </small></span>
                            <input type="week" name="semana">
                        </label>

                        <label>
                            <span class="form-field">Este é um Campo de Data e Tempo:<br><small>Este só funciona no Ópera no Safari!</small></span>
                            <input type="datetime" name="data e tempo">
                        </label>
                    </div>

                    <div class="box box-large last">
                        <label>
                            <span class="form-field">Este é um Campo de Mês:<br><small>Que mês você nasceu?</small></span>
                            <input type="month" name="mes">
                        </label>

                        <label>
                            <span class="form-field">Este é um Campo de Tempo:<br><small>Que horas são?</small></span>
                            <input type="time" name="tempo">
                        </label>

                        <label>
                            <span class="form-field">Este é um Campo de Data, Tempo e Local:<br><small>Indique a data e as horas!</small></span>
                            <input type="datetime" name="data, tempo e local">
                        </label>
                    </div>

                    <div class="box box-full" style="margin-top: 20px;">
                        <p class="fl-right" style="margin-top: 20px;">Lembre-se de estar utilizandoum browser atualizado. No chrome tudo funciona!Enviar</p>
                        <input value="Enviar" class="btn btn-green radius" type="submit" >
                    </div>

                </form>
                <div class="clear"></div>
            </div>
        </div>
    </article>

    <article class="container bg-orange">
        <div class="content">
            <header class="articletitle al-center" >
                <h1>Formulários com Limitações!</h1>
                <p>Veja como aplicar expressões regulares diretamente nos Inputs!</p>
            </header>

            <div style="float: left; width: 80%; margin:0 10%; padding: 30px; background-color: rgba(0, 0, 0, 0.3); ">
                <form action="" method="post">
                    <label>
                        <span class="form-field">Uma Senha de 5 à 10 Caracteres:</span>
                        <input type="password" pattern="^[^*]{5,10}$" title="Senha de 5-10 caracteres" name="senha" required >
                    </label>

                    <label>
                        <span class="form-field">Um E-mail padrão:</span>
                        <input type="email" pattern="^[^*]+@[^*]+\.[a-z]{2,4}$" name="email" required>
                    </label>

                    <label>
                        <span class="form-field">O CEP do seu endereço:</span>
                        <input type="text" name="cep" pattern="^([0-9]{5})-([0-9]{3})$" title="CEP ex:00000-000" required >
                    </label>

                    <label>
                        <span class="form-field">Uma Data:</span>
                        <input type="text" name="data" pattern="^(0[1-9]|1[0-9]|2[0-9]|3[0-1])/(0[1-9]|1[0-2])/([0-9]{4})$" title="Data no padrão" required >
                    </label>
                    
                    <input class="btn btn-green radius" type="submit" value="Enviar">
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </article>

</section>