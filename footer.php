<footer class="">
    <div class="img img-b1">
        <div class="container cor">
            <div class="row">
                <div class="col-md-3 text-align-justify d-flex flex-column align-items-cente py-10" style="backdrop-filter: blur(10px);">
                    <h2 class="mb-2"><?= $escritorio ?></h2>
                    <p class="cor"> Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria. </p>
                </div>
                <div class="col-md offset-md-1 pt-10">
                    <h2 class="mb-2"> Links Úteis</h2>
                    <div class="row">
                        <div class="col-sm">
                            <p class="cor"> <a href="modelos-documentos.php" target="_self" rel="noopener noreferrer">Modelos de Documentos</a>  </p>
                            <p class="cor"> <a href="certidoes.php" target="_self" rel="noopener noreferrer">Certidões Negativas</a>  </p>
                            <p class="cor"> <a href="facilitador.php" target="_self" rel="noopener noreferrer">Facilitador Contábil</a>  </p>
                            <p class="cor"> <a href="formularios.php" target="_self" rel="noopener noreferrer">Formulários</a>  </p>
                        </div>
                        <div class="col-sm">
                            <p class="cor"> <a href="https://www.gov.br/receitafederal/pt-br" target="_blank" rel="noopener noreferrer">Receita Federal</a>  </p>
                            <p class="cor"> <a href="http://www.previdencia.gov.br/" target="_blank" rel="noopener noreferrer">Previdência Social</a>  </p>
                            <p class="cor"> <a href="http://www.mte.gov.br/" target="_blank" rel="noopener noreferrer">Ministério do Trabalho</a>  </p>
                            <p class="cor"> <a href="https://cfc.org.br/" target="_blank" rel="noopener noreferrer">CFC</a>  </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto pt-10">
                    <div class="d-flex flex-column">
                        <h2 class="mb-2"> Contato</h2>
                        <p class="m-0 d-flex align-items-baseline cor"> <i class="mr-1 fas fa-fw fa-map-marker-alt"></i> <?= $endereco ?> – <?= $bairro ?> <br> <?= $cidade ?> – <?= $cep ?> </p>
                        <p class="m-0 d-flex align-items-center cor"> <i class="mr-1 fas fa-fw fa-phone"></i> <a href="tel:55<?= str_replace(array('(',')',' ','-','.'), "", $telefone) ?>"> <?= $telefone ?> </a> </p>
                        <p class="m-0 d-flex align-items-center cor"> <i class="mr-1 fab fa-fw fa-whatsapp"></i> <a href="<?= $whatsapp_link ?>"> <?= $whatsapp ?> </a> </p>
                        <p class="m-0 d-flex align-items-center cor"> <i class="mr-1 fas fa-fw fa-envelope"></i> <a href="mailto:<?= $email ?>" style="word-break: break-word;"> <?= $email ?> </a> </p>
                    </div>
                    <div class="d-flex justify-content-start mt-5">
                        <?php if(isset($facebook) && !empty($facebook)): ?><a href="<?= $facebook; ?>" target="_blank" class="p-2 p-lg-0 social social-fb fab fa-fw fa-facebook-f"> </a><?php endif; ?>
                        <?php if(isset($instagram) && !empty($instagram)): ?><a href="<?= $instagram; ?>" target="_blank" class="p-2 p-lg-0 social social-ig fab fa-fw fa-instagram"> </a><?php endif; ?>
                        <?php if(isset($linkedin) && !empty($linkedin)): ?><a href="<?= $linkedin; ?>" target="_blank" class="p-2 p-lg-0 social social-in fab fa-fw fa-linkedin-in"> </a><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <p class="m-0 py-2 text-align-center cor position-relative" style="vertical-align: text-bottom; border-top: 1px solid #333;"> Copyright <i class="far fa-copyright"></i> <?= (date('Y') > $ano_dev) ? $ano_dev . ' - ' . date('Y') : $ano_dev; ?> <a href="https://sitecontabil.com.br/modelos" target="_blank" rel="noopener noreferrer"> <img src="https://sitecontabil.com.br/imgs/logo-sc-b.png" width="20px" alt="" class="position-relative" style="top: 4px;"> Design e desenvolvimento </a> | <strong> <?= $escritorio ?> </strong></p>
    </div>
</footer>

<!-- Arquivos JS -->
<script src="assets/js/cookie.min.js" data-hide="true"></script>
<script src="assets/js/jquery.mask.js"></script>
<script src="assets/js/cycle2.js"></script>
<script src="assets/js/cycle2.tile.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>
