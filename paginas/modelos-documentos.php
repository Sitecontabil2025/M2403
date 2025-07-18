<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : 5;
$json = json_decode(get_json("https://sitecontabil.com.br/json/?db=sc_mod_documentos"));
$json_ler = json_decode(get_json("https://sitecontabil.com.br/json/?db=sc_mod_documentos&id=$id"));
?>

<?php if(array_key_exists("error", $json)): ?>
    <p><?= $json->error; ?></p>
<?php else: ?>
    <div class="form-row">
        <?php foreach ($json as $item): ?>
            <div class="col-auto mb-1"><a href="modelos-documentos.php?id=<?= $item->id; ?>" class="bt bt-b1"><?= $item->titulo; ?></a></div>
        <?php endforeach; ?>
    </div>
    <?php if(array_key_exists("error", $json_ler)): ?>
        <p><?= $json_ler->error; ?></p>
    <?php else: ?>
        <?php foreach($json_ler as $ler): ?>
            <h2><?= $ler->titulo; ?></h2>
            <?= html_entity_decode($ler->texto) ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>