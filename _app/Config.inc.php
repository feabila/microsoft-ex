<?php

define('HOME', 'http://localhost/cursos/own_microsoft');
//define('HOME', 'https://felipes-study.000webhostapp.com');
define('THEME', 'ownsoft');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_sitekit = INCLUDE_PATH . '/img/sitekit';
$pg_site = 'Microsoft';
$pg_google_author = '104970673620648304950' ;
$pg_google_publisher = '111221966647232053570';
$pg_fb_app = '1492687817450421';
$pg_fb_author = 'BillGates';
$pg_fb_publisher = 'MSFTBrasil';
$pg_twitter = '@Microsoft';
$pg_domain = 'https://www.microsoft.com';
        
switch ($Url[0]):
    case 'index':
        $pg_title = $pg_site ;
        $pg_desc = 'Nossa primeira página apresenta as notícias e anúncios de ofertas mais importantes, sendo elas todas com custo único. Sinta-se à vontade em nossa primeira página!';
        $pg_image = $pg_sitekit . '/index.jpg';
        $pg_url = HOME;
    break;
    case 'sobre':
        $pg_title = 'Mais sobre a Microsoft !' ;
        $pg_desc = 'Veja mais detalhes sobre a Microsoft Store, Conheça a sede e o fundador!';
        $pg_image = $pg_sitekit . '/sobre.jpg';
        $pg_url = HOME . '/sobre';
        break;
    case 'contato':
        $pg_title = 'Descubra as mais novas formas de contato!' ;
        $pg_desc = 'Entre em contato conosco para saber sobre mais informações';
        $pg_image = $pg_sitekit . '/contato.jpg';
        $pg_url = HOME . '/contato';
        break;
    default :
        $pg_title = 'Desculpe, não encontrado o conteúdo relacionado.';
        $pg_desc = 'Você está vendo agora a página 404 pois não encontramos conteúdo relacional à <b>' . $setUrl . '</b>, mas não saia ainda. Temos algumas dicas para te ajudar com sua pesquisa!';
        $pg_image = $pg_sitekit . '/404.jpg';
        $pg_url = HOME . '/404';
        break;
endswitch;

function SitemapPing() {
    $SitemapPing = array();
    $SitemapPing['g'] = 'https://www.google.com/webmasters/tools/ping?sitemap=' . HOME . '/sitemap.xml';
    $SitemapPing['b'] = 'https://www.bing.com/webmaster/ping.aspx?siteMap=' . HOME . '/sitemap.xml';

    foreach ($SitemapPing as $sitemapUrl):
        $ch = curl_init($sitemapUrl);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
         $result = curl_getinfo($ch);
        curl_close($ch);
        print_r($result);
    endforeach;
}

if (!file_exists('sitemap.xml.gz')):
    $gzip = gzopen('sitemap.xml.gz', 'w9');
    $gmap = file_get_contents('sitemap.xml');
    gzwrite($gzip, $gmap);
    gzclose($gzip);
    echo '<pre>';
    SitemapPing();
    echo '</pre>';
    endif;



