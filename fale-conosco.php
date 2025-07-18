<?php
$titulo_pagina = "Entre em Contato";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
?>

<?php include_once('header.php'); ?>

<article class="background-white">

    <div class="container py-10 text-align-justify overflow-hidden">

        <p class="m-0"> <big>Venha fazer uma parceria de sucesso </big></p>
        <h1> <?php echo $titulo_pagina ?> </h1>

        <div class="row mb-2">
            <div class="col-lg-4">
                <div class="text-align-justify text-align-lg-left d-flex flex-column align-items-start">
                    <h3 class="font-weight-300 mb-0"> <?= $cidade ?> </h3>
                    <p class="d-flex align-items-baseline"> <i class="mr-1 fas fa-fw fa-map-marker-alt"></i> <?= $endereco ?> <br> <?= $bairro ?> <br> <?= $cep ?> </p>
                    <p class="d-flex align-items-center"> <i class="mr-1 fas fa-fw fa-envelope"></i> <a href="mailto:<?= $email ?>" style="word-break: break-word;"> <?= $email ?> </a> </p>
                    <a href="tel:55<?= str_replace(array('(',')',' ','-','.'), "", $telefone) ?>" class="bt bt-b1 mb-1"> <i class="mr-1 fas fa-fw fa-phone"></i> <?= $telefone ?> </a>
                    <a href="<?= $whatsapp_link ?>" class="bt bt-b2"> <i class="mr-1 fab fa-fw fa-whatsapp"></i> <?= $whatsapp ?> </a>
                </div>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">
                <div class="">
                    <h4 class="font-weight-300 mb-1"> Formulário  <span class="font-weight-500">de Contato </span> <span class="font-weight-500">parceria </span>de sucesso! </h4>
                    <?php include("contato.php"); ?>
                </div>
            </div>
        </div>
    </div>
</article>

<?php include_once('footer.php'); ?>