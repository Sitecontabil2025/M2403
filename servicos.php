<?php
$titulo_pagina = "Nossos Serviços";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
?>

<?php include_once('header.php'); ?>

<article class="background-white">

    <div class="container py-10 text-align-justify overflow-hidden">

        <p class="m-0"> <big> Alguns de nossos principais serviços  </big></p>
        <h1> <?php echo $titulo_pagina ?> </h1>

        <?php require_once("servicos-itens.php"); ?>
    </div>

</article>

<?php include_once('footer.php'); ?>