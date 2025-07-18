<?php require_once("dados.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php $json = (isset($url_json)) ? get_materias($url_json) : NULL; ?>
    <?php $json_ler = (isset($url_json_ler)) ? get_materias($url_json_ler) : NULL; ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php $titulo_pagina = (isset($pagina_noticias) && !isset($max)) ? $json[0]->titulo : $titulo_pagina; ?>
    <?php $descricao_pagina = (isset($pagina_noticias) && !isset($max)) ? limitar_texto(strip_tags(html_entity_decode($json[0]->texto)), 300) : $descricao_pagina; ?>
    <title> <?= $escritorio; ?> - <?= $titulo_pagina; ?></title>

    <!-- Arquivos CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/support.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css?v=<?= time() ?>">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    
        <!-- Arquivos JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.png" type="image/x-icon">

    <!-- SEO metaTags -->
    <meta property="og:title" content="<?= $titulo_pagina; ?>" />
    <meta property="og:description" content="<?= $descricao_pagina; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $escritorio; ?>" />
    <meta property="og:image" content="assets/imgs/og-img.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-BR" />
    <meta name="author" content="<?= $escritorio; ?>" />
    <meta name="contact" content="<?= $email; ?>" />
    <meta name="copyright" content="Copyright (c) <?= date("Y"); ?> - <?= $escritorio; ?>." />
    <meta name="description" content="<?= $descricao; ?>" />
    <meta name="keywords" content="<?= $keywords; ?>" />
    <meta name="resource-type" content="website" />
</head>

<body>
<a class="d-flex align-items-center justify-content-center animation" href="<?= $whatsapp_link ?>" style="position:fixed; width:70px;height:70px;bottom:20px;right:20px;background:linear-gradient(135deg, #9dd53a 0%,#a1d54f 50%,#80c217 50%,#7cbc0a 100%);color:#FFF;border-radius:50px;border: white 3px solid;font-size:20px;z-index:1000; box-shadow: 10px 10px 15px -10px rgba(0,0,0, 0.3);" target="_blank">
    <i class="fab fa-whatsapp fa-2x"></i>
</a>

<div class="background-light d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-sm d-flex align-items-center justify-content-center justify-content-sm-start">
                <p class="m-0 d-flex align-items-center small mr-1"> <i class="mr-1 fas fa-phone"></i> <a href="tel:55<?= str_replace(array('(',')',' ','-','.'), "", $telefone) ?>"><?= $telefone ?></a> </p>
                <p class="m-0 d-flex align-items-center small mr-1"> <i class="mr-1 fab fa-whatsapp"></i> <a href="<?= $whatsapp_link ?>"><?= $whatsapp ?></a> </p>
                <p class="m-0 d-flex align-items-center small"> <i class="mr-1 fas fa-envelope"></i> <a href="mailto:<?= $email ?>" style="word-break: break-word;"><?= $email ?></a> </p>
            </div>
            <div class="col-sm-auto">
                <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
                    <?php if(isset($facebook) && !empty($facebook)): ?><a href="<?= $facebook; ?>" target="_blank" class="p-2 p-lg-0 social social-fb fab fa-fw fa-facebook-f"> </a><?php endif; ?>
                    <?php if(isset($instagram) && !empty($instagram)): ?><a href="<?= $instagram; ?>" target="_blank" class="p-2 p-lg-0 social social-ig fab fa-fw fa-instagram"> </a><?php endif; ?>
                    <?php if(isset($linkedin) && !empty($linkedin)): ?><a href="<?= $linkedin; ?>" target="_blank" class="p-2 p-lg-0 social social-in fab fa-fw fa-linkedin-in"> </a><?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="topo sdw bkg sticky-top position-static position-lg-sticky">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-auto d-flex justify-content-center justify-content-lg-start">
                <div class="logo d-flex py-1">
                    <a href="index.php" target="_self"> <img src="assets/imgs/logo.png" alt=""> </a>
                </div>
            </div>
            <div class="col-lg">
                <nav class="text-align-center">
                    <a class="d-lg-none botao-responsivo"> <i class="fa fa-lg fa-fw fa-bars pull-right"></i> Menu </a>
                    <ul class="d-none d-lg-flex flex-wrap align-items-center justify-content-center justify-content-lg-end main-menu">
                        <li><a href="index.php"> Home </a></li>
                        <li><a href="empresa.php"> Empresa </a></li>
                        <li class="abre">
                            <a href="servicos.php"> Serviços <i class="fas fa-angle-down"></i> </a>
                            <ul class="sm">
                                <li><a href="for-abrir-empresa.php"> Abra sua empresa </a> </li>
                                <li><a href="for-migrar-empresa.php"> Migre sua empresa </a> </li>
                                <li><a href="s-contabilidade.php"> Contabilidade Completa </a> </li>
                                <li><a href="s-trabalhista.php"> Obrigações Trabalhistas </a> </li>
                                <li><a href="s-assessoria.php"> Assessoria Empresarial </a> </li>
                                <li><a href="s-meime.php"> Migrar MEI para ME </a> </li>
                            </ul>
                        </li>
                        <li><a href="https://sitecontabil.com.br/periodicos/sitecontabil/webmagazine/" target="_blank"> Informativo </a></li>
                        <li><a href="fale-conosco.php"> Contato </a> </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>