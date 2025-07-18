<?php
$titulo_pagina = "Bem-vindo ao nosso website";
$descricao_pagina = "Somos uma empresa de terceirização de serviços de contabilidade, constituída por profissionais com larga experiência nas áreas em que atuamos: Contábil - Tributária - Fiscal e Trabalhista.";
$index = true;
?>
<?php include_once('header.php'); ?>

<header>
    <div class="owl-carousel owl-theme owl-banner last">
        <div class="position-relative">
            <div class="slogan container">
                <div style="width: 100%; max-width:700px;">
                    <h2 class="text-transform-uppercase"> Contabilidade com qualidade e compromisso</h2>
                    <p class="" style="font-size: x-large;"> Planos acessíveis para MEI e Simples Nacional. Solicite um orçamento! </p>
                    <a href="for-abrir-empresa.php" target="_self" rel="noopener noreferrer" class="bt bt-b2 m-1">Quero abrir minha<strong> empresa </strong></a>
                    <a href="for-migrar-empresa.php" target="_self" rel="noopener noreferrer" class="bt bt-b2l m-1">Quero trocar de <strong> contador </strong></a>
                </div>
            </div>
            <div class="degrade">
                <img class="owl-banner-img" src="assets/imgs/b1.jpg" alt="" height="550px">
            </div>
        </div> 
        <div class="position-relative">
            <div class="slogan container">
                <div style="width: 100%; max-width:700px;">
                    <h2 class="text-transform-uppercase"> Serviço de contabilidade e consultoria </h2>
                    <p class="" style="font-size: x-large;"> Quer fazer um orçamento? Nós entramos em contato com você. </p>
                    <a href="fale-conosco.php" target="_self" rel="noopener noreferrer" class="bt bt-b2 m-1">Solicite um <strong> orçamento </strong></a>
                    <a href="servicos.php" target="_self" rel="noopener noreferrer" class="bt bt-b2l m-1">Conheça nossos <strong> serviços </strong></a>
                </div>
            </div>
            <div class="degrade">
                <img class="owl-banner-img" src="assets/imgs/b2.jpg" alt="" height="550px">
            </div>
        </div> 
        <div class="position-relative">
            <div class="slogan container">
                <div style="width: 100%; max-width:700px;">
                    <h2 class="text-transform-uppercase"> A organização que sua empresa precisa </h2>
                    <p class="" style="font-size: x-large;"> Cuidamos de todo o seu Departamento Pessoal, garantindo mais organização e total controle das rotinas. </p>
                    <a href="fale-conosco.php" target="_self" rel="noopener noreferrer" class="bt bt-b2 m-1">Solicite um <strong> orçamento </strong></a>
                    <a href="for-migrar-empresa.php" target="_self" rel="noopener noreferrer" class="bt bt-b2l m-1">Quero trocar de <strong> contador </strong></a>
                </div>
            </div>
            <div class="degrade">
                <img class="owl-banner-img" src="assets/imgs/b3.jpg" alt="" height="550px">
            </div>
        </div>
    </div>
</header>

<section class="">

    <div class="background-light">
        <div class="container">
            <div class="rectangle pos background-white p-2">
                <div class="row">
                    <div class="col-md-4">
                        <a href="agendas.php" target="_self" rel="noopener noreferrer" class="anima">
                        <div class="img img-i2 overflow-hidden" style="border-radius: 4px;">
                            <div class="px-4 py-8 cor position-relative">
                                    <h4> Agenda Tributária </h4>
                                    <p class="m-0 cor"> Fique informado com a agenda contábil estadual, federal e trabalhista. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="tabelas.php" target="_self" rel="noopener noreferrer" class="anima">
                        <div class="img img-i3 overflow-hidden" style="border-radius: 4px;">
                            <div class="px-4 py-8 cor position-relative">
                                    <h4> Tabelas Práticas </h4>
                                    <p class="m-0 cor"> Tabelas para recolhimento em atraso, Simples Nacional, IR e Alíquotas. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="formularios.php" target="_self" rel="noopener noreferrer" class="anima">
                        <div class="img img-i4 overflow-hidden" style="border-radius: 4px;">
                            <div class="px-4 py-8 cor position-relative">
                                    <h4> Formulários Diversos </h4>
                                    <p class="m-0 cor">Homologação e Quitação do Contrato de Trabalho, Instrução DARF e mais. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="background-light">
        <div class="container py-10">
            <h2 class="mb-1"> Conheça nossa <span class="h1">Empresa</span></h2>
            <p>Somos uma empresa comprometida em oferecer soluções inovadoras e de qualidade para atender às necessidades dos nossos clientes. Com uma equipe experiente e apaixonada pelo que faz, buscamos sempre entregar resultados excepcionais, com foco na excelência e na satisfação. Nossa missão é transformar ideias em realidade, criando valor e impactando positivamente o mercado. Conheça mais sobre nossa história, nossos valores e como podemos ajudar você a alcançar seus objetivos.</p>
            <a href="empresa.php" class="bt bt-b22">Saiba mais</a>
        </div>
    </div>

    <div class="container py-10">
        <div class="text-align-center">
            <h2 class="h1 mb-1"> Nossos Serviços  </h2>
            <p class="m-0"> <big> A credibilidade que você procura com a qualidade que você precisa. </big></p>
        </div>
        <?php require_once("servicos-itens.php"); ?>
    </div>
    
    <div class="background-light py-10">
        <div class="container">
            <div class="text-align-center">
            <h2 class="h1 mb-1"> Últimas Notícias </h2>
            <p class="m-0"> <big> Fique informado com notícias sobre contabilidade. </big></p>
            </div>
            <div class="row">
                <?php $dados = get_materias('https://sitecontabil.com.br/json/?db=sc_noticias&limite=3'); ?>
                <?php foreach($dados as $k=> $item): ?>
                <div class="col-lg-4 <?= ($k==0)?'d-flex':'d-none d-lg-flex' ?>">
                    <div class="mt-5 d-flex flex-column justify-content-between">
                        <div class="">
                            <h5 class="m-0 titulo"> <?= limitar_texto($item->titulo, 90)?> </h5>
                            <p class="cor-c2"> <i class="far fa-clock fa-fw"></i> [<strong><?= mostra_data($item->pubdate, '%d de %B de %Y'); ?></strong>] </p>
                            <p class=""> <?= limitar_texto(strip_tags(html_entity_decode($item->texto)), 220); ?> </p>
                        </div>
                        <div class="text-align-justify">
                            <a class="bt bt-b22" href="noticias-ler.php?id=<?= $item->id ?>">Leia na integra</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="background-white">
        <div class="container text-align-center py-10">
            <h2 class="h1 mb-1"> Venha nos conhecer!  </h2>
            <p class="m-0"> <big> Cuidamos de seus interesses, mostrando a qualidade e eficiência de trabalho. </big></p>

            <p>Traga já a sua empresa para o nosso escritório e você aproveitará todos os benefícios de uma boa contabilidade. Atenderemos todas as suas necessidades contábeis com muita agilidade, presteza e de forma econômica para sua empresa.</p>

            <div class="row mt-5">
                <div class="col-md">
                    <div class="rectangle height-100 d-flex flex-column">
                        <img src="assets/imgs/h1.jpg" alt="" width="100%" height="auto" style="object-fit: cover; border-radius:4px 4px 0 0; position: relative;">
                        <div class="position-relative p-4" style="flex:1;">
                            <h2 class="font-weight-400 d-inline-block mb-3"> Contabilidade para MEI</h2>
                            <p class="m-0"> Se você é Microempreendedor Individual (MEI), nossa contabilidade simplificada está preparada para atender todas as suas necessidades fiscais e tributárias. Facilitamos sua rotina contábil para que você possa focar no crescimento do seu empreendimento.</p>   
                        </div>
                        <a href="<?= whatsapp('Quero saber mais sobre Contabilidade para MEI') ?>" target="_blank" rel="noopener noreferrer" class="bt bt-bw mt-3" style="border-radius: 0 0 5px 5px;"> Saiba mais</a>
                    </div>
                </div>
                <div class="col-md mt-5 mt-md-0">
                    <div class="rectangle height-100 d-flex flex-column">
                        <img src="assets/imgs/h2.jpg" alt="" width="100%" height="auto" style="object-fit: cover; border-radius:4px 4px 0 0; position: relative;">
                        <div class="position-relative p-4" style="flex:1;">
                            <h2 class="font-weight-400 d-inline-block mb-3"> Contabilidade para Comerciantes </h2>
                            <p class="m-0"> Se você é comerciante, nosso serviço de contabilidade especializada garante que sua empresa esteja em dia com todas as obrigações fiscais e tributárias. Cuidamos de sua contabilidade, enquanto você foca nas vendas e no sucesso do seu comércio.</p>   
                        </div>
                        <a href="<?= whatsapp('Quero saber mais sobre Contabilidade para Comerciantes') ?>" target="_blank" rel="noopener noreferrer" class="bt bt-bw mt-3" style="border-radius: 0 0 5px 5px;"> Saiba mais</a>
                    </div>
                </div>
                <div class="col-md mt-5 mt-md-0">
                    <div class="rectangle height-100 d-flex flex-column">
                        <img src="assets/imgs/h3.jpg" alt="" width="100%" height="auto" style="object-fit: cover; border-radius:4px 4px 0 0; position: relative;">
                        <div class="position-relative p-4" style="flex:1;">
                            <h2 class="font-weight-400 d-inline-block mb-3"> Contabilidade para Prestadores de Serviços </h2>
                            <p class="m-0"> Sabemos que a contabilidade é fundamental para os prestadores de serviços. Nossa equipe especializada está pronta para ajudar você a manter suas finanças organizadas e em conformidade com a legislação, garantindo tranquilidade na gestão do seu negócio.</p>   
                        </div>
                        <a href="<?= whatsapp('Quero saber mais sobre Contabilidade para Prestadores de Serviços') ?>" target="_blank" rel="noopener noreferrer" class="bt bt-bw mt-3" style="border-radius: 0 0 5px 5px;"> Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-10"> 
        

        <div class="row">
            
        
                
                <div class="col-lg-5 background-light order-lg-2  d-flex flex-column justify-content-center py-5">
                <h2 class=" font-weight-400"> Envie sua <strong>dúvida para nós</strong>!</h2>
                    <?php include("contato.php"); ?>
                </div>
            
            <div class="col-lg-7 order-lg-1">
            <h2 class="h1 mb-1"> Dúvidas frequentes </h2> <br>
            <p class="m-0"> <big> Confira aqui as respostas para as perguntas mais frequentes. </big></p>
                
                <div class="acc-btn-cookie" style="cursor: pointer; display:flex; align-items:center; justify-content: space-between; padding:20px 0; border-bottom: 1px dotted #ccc;"> <p class="d-flex align-items-center" style="margin: 0;"> <strong> <big>   Quanto tempo levo para abrir minha empresa? </big> </strong></p> <i class="fas fa-fw fa-chevron-down"></i> </div>
                <div class="acc-cookie">
                    <div style="background-color: #f0f0f0; padding:20px; margin-top:10px">
                        <p> Normalmente o processo completo de abertura de empresa leva em torno5 a 10 dias a contar da confirmação dos CNAEs da sua empresa. Este tempo pode ser menor ou maior dependendo da agilidade nas análises dos órgãos públicos, só após esse período a emissão de notas estará liberada. </p>
                    </div>
                </div>
                
                <div class="acc-btn-cookie" style="cursor: pointer; display:flex; align-items:center; justify-content: space-between; padding:20px 0; border-bottom: 1px dotted #ccc;"> <p class="d-flex align-items-center" style="margin: 0;"> <strong> <big> Quais documentos necessários para abertura de empresa? </big> </strong></p> <i class="fas fa-fw fa-chevron-down"></i> </div>
                <div class="acc-cookie">
                    <div style="background-color: #f0f0f0; padding:20px; margin-top:10px">
                    <p> Relação de documentos necessários para abertura de empresa.  </p>
                    <ul>
                        <li> 1 cópia do RG dos sócios  </li>
                        <li> 1 cópia do CPF dos sócios  </li>
                        <li> 1 cópia do comprovante de endereço dos sócios  </li>
                        <li> 1 cópia da certidão de casamento dos sócios  </li>
                        <li> 1 cópia do documento de posse do imóvel (escritura ou contrato de locação)  </li>
                        <li> 1 cópia simples do carnê do IPTU  </li>
                        <li> 1 cópia simples do Habite-se  </li>
                    </ul>
                    </div>
                </div>
                
                <div class="acc-btn-cookie" style="cursor: pointer; display:flex; align-items:center; justify-content: space-between; padding:20px 0; border-bottom: 1px dotted #ccc;"> <p class="d-flex align-items-center" style="margin: 0;"> <strong> <big> Posso registrar minha empresa em meu endereço residencial? </big> </strong></p> <i class="fas fa-fw fa-chevron-down"></i> </div>
                <div class="acc-cookie">
                    <div style="background-color: #f0f0f0; padding:20px; margin-top:10px">
                        <p> Depende de prefeitura para prefeitura, mas as cidades do Rio de Janeiro e São Paulo, por exemplo, permitem, caso o negócio em questão seja uma empresa prestadora de serviços e sem funcionários e sem atendimento ao público. Uma opção para quem precisa de um endereço para a empresa e não tem muito a gastar é optar por um Coworking ou por um escritório virtual em sua cidade. </p>
                    </div>
                </div>
                
                <div class="acc-btn-cookie" style="cursor: pointer; display:flex; align-items:center; justify-content: space-between; padding:20px 0; border-bottom: 1px dotted #ccc;"> <p class="d-flex align-items-center" style="margin: 0;"> <strong> <big> Como declaro meu imposto de renda? </big> </strong></p> <i class="fas fa-fw fa-chevron-down"></i> </div>
                <div class="acc-cookie">
                    <div style="background-color: #f0f0f0; padding:20px; margin-top:10px">
                        <p> A declaração do Imposto de Renda do empresário e sócios pode ser feita pelo contador da empresa. Ele saberá como tomar as providências para o processo. </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="background-light">
        <div class="container text-align-center py-10">
            <h2 class="h1 mb-1"> Conheça alguns de nossos clientes  </h2>
            <p class="m-0"> <big> Escolha nosso escritório e dê adeus às preocupações. </big></p>
            <div class="owl-cliente owl-carousel owl-theme mt-5">
                <div class="owl-imagem">
                    <img src="assets/cliente/cliente.png" alt="auto">
                </div>
                <div class="owl-imagem">
                    <img src="assets/cliente/cliente.png" alt="auto">
                </div>
                <div class="owl-imagem">
                    <img src="assets/cliente/cliente.png" alt="auto">
                </div>
                <div class="owl-imagem">
                    <img src="assets/cliente/cliente.png" alt="auto">
                </div>
                <div class="owl-imagem">
                    <img src="assets/cliente/cliente.png" alt="auto">
                </div>
                <div class="owl-imagem">
                    <img src="assets/cliente/cliente.png" alt="auto">
                </div>
            </div>
        </div>
    </div>

</section>

<?php include_once('footer.php'); ?>

<script>
    //ACORDION
    $(document).ready(function() {
        $('.acc-cookie').hide();
        $('.acc-btn-cookie').click(function(){
            if($(this).next('.acc-cookie').is(':visible')){
                $('.acc-cookie').slideUp(500);
                $(".acc-btn-cookie i.fas").removeClass("fa-chevron-up").addClass('fa-chevron-down');
            } else {
                $('.acc-cookie').slideUp(500);
                $(this).next('.acc-cookie').slideDown(500);
                $(".acc-btn-cookie i.fas").removeClass("fa-chevron-up").addClass('fa-chevron-down');
                $(this).children("i.fas").addClass('fa-chevron-up');
            }
        });
    })
</script>

