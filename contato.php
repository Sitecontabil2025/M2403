<form class="contato position-relative" class="py-5" id="formcontato" method="post">
    <div class="d-flex flex-wrap">
        <div class="d-flex flex-grow-1 contato-borda">
            <i class="contato-icone fas fa-user-check"></i>
            <input type="text" name="nome" id="formnome" placeholder="Digite seu Nome *" required />
        </div>
    </div>
    <div class="d-flex flex-wrap">
        <div class="d-flex flex-grow-1 contato-borda">
            <i class="contato-icone fas fa-envelope-open"></i>
            <input type="text" name="email" id="formemail" placeholder="Digite seu E-mail *" required />
        </div>
    </div>
    <div class="d-flex flex-wrap">
        <div class="d-flex flex-grow-1 contato-borda">
            <i class="contato-icone fas fa-phone"></i>
            <input type="text" name="telefone" id="formtelefone" class="celular-mask" placeholder="Digite seu Telefone">
        </div>
        <div class="d-flex flex-grow-1 contato-borda">
            <i class="contato-icone fas fa-pencil-alt"></i>
            <input type="assunto" name="assunto" id="formassunto" placeholder="Digite seu Assunto *" required>
        </div>
    </div>
    <div class="d-flex contato-borda" style="border-radius: 4px; align-items: baseline;">
        <i class="contato-icone fas fa-comment"></i>
        <textarea name="mensagem" id="formmensagem" cols="40" rows="7" placeholder="Digite sua Mensagem *" required></textarea>
    </div>
    <p class="m-0"> <small> <em> * preenchimento de campo <span class="cor-c2">obrigatório</span> </em> </small> </p>
    <a href="javascript:void(0);" onclick="reloadcaptcha_contato();" class="small"><i class="fas fa-redo mr-1"></i> Trocar imagem</a>
    <div class="form-row">
        <div class="d-flex flex-wrap flex-grow-1 contato-borda">
            <div class="captcha d-flex align-items-center"><img id="imgcaptcha-contato" src="captcha-contato.php" class="d-block" style=""></div>
            <input type="text" name="captcha" id="formcaptcha-contato" placeholder="Digite os caracteres ao lado *" required>
        </div>
    </div>
    <p><small><em>Os dados captados nesse formulário não serão utilizados por terceiros, apenas para uso interno de acordo com a LGPD. Ao enviar sua mensagem você concorda com nossa política de privacidade.</em></small></p>
    <div>
        <button type="submit" class="bt bt-b2 mt-2">Enviar mensagem <i class="fas fa-paper-plane border-left ml-1 pl-1"></i></button>
    </div>
    <div id="resultado"></div>
</form>

<script>
    $('#formcontato').submit(function(){
        var dados = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "enviar-contato.php",
            data: dados,
            dataType: 'json',
            beforeSend: function(){
                $("#resultado").removeClass('alert-white alert-danger alert-success alert-warning').addClass('alert alert-white');
                $("#resultado").html('Aguarde, enviando a mensagem');
                $("#resultado").fadeIn(250);
            },
            success: function(resposta){
                $("#resultado").removeClass("alert-white alert-danger alert-success alert-warning").addClass(resposta.tipo);
                $("#resultado").html(resposta.mensagem);
                console.log(resposta);
            },
            error: function(resposta){
                $("#resultado").removeClass("alert-white alert-danger alert-success alert-warning").addClass('alert-danger');
                $("#resultado").html('Um erro desconhecido aconteceu e sua mensagem não pode ser enviada');
                console.log(resposta);
            }
        });
        return false;
    });
</script>