<?php 
$categorias = array(
    "federal" => "Agenda Federal",
    "trabalhista" => "Agenda Trabalhista",
    "ac" => "Agenda do Estado do Acre",
    "al" => "Agenda do Estado de Alagoas",
    "am" => "Agenda do Estado do Amazonas",
    "ap" => "Agenda do Estado do Amapá",
    "ba" => "Agenda do Estado da Bahia",
    "ce" => "Agenda do Estado do Ceará",
    "df" => "Agenda do Distrito Federal",
    "es" => "Agenda do Estado do Espírito Santo",
    "go" => "Agenda do Estado do Goiás",
    "ma" => "Agenda do Estado do Maranhão",
    "mt" => "Agenda do Estado do Mato Grosso",
    "ms" => "Agenda do Estado do Mato Grosso do Sul",
    "mg" => "Agenda do Estado de Minas Gerais",
    "pa" => "Agenda do Estado do Pará",
    "pb" => "Agenda do Estado da Paraíba",
    "pr" => "Agenda do Estado do Paraná",
    "pe" => "Agenda do Estado do Pernambuco",
    "pi" => "Agenda do Estado do Piauí",
    "rj" => "Agenda do Estado do Rio de Janeiro",
    "rn" => "Agenda do Estado do Rio Grande do Norte",
    "rs" => "Agenda do Estado do Rio Grande do Sul",
    "ro" => "Agenda do Estado de Rondônia",
    "rr" => "Agenda do Estado de Roraima",
    "sc" => "Agenda do Estado de Santa Catarina",
    "sp" => "Agenda do Estado de São Paulo",
    "se" => "Agenda do Estado do Sergipe",
    "to" => "Agenda do Estado do Tocantins"
);
?>

<?php
$cat = (isset($_GET["cat"])) ? $_GET["cat"] : "federal";

$json = json_decode(get_json("https://sitecontabil.com.br/json/?db=sc_agendas&limite=30&cat=$cat"));
$subtitulo = $categorias[$cat];

$conteudo_agenda = array();
foreach ($json as $key => $object) :
    $conteudo_agenda[$object->id] = array(
        "titulo" => strtoupper($object->categoria) . " - " . $object->titulo,
        "data" => "Obrigação do dia: " . date_format( date_create($object->pubdate_start) , "d/m/Y"),
        "texto" => $object->texto
    );

    unset($object->texto);
    unset($object->status);
    
    $object->title = strtoupper($object->categoria) . " - " . $object->titulo;
    unset($object->titulo);
    $object->start = date_format( date_create($object->pubdate_start) , "Y-m-d");
    unset($object->pubdate_start);
    $object->end = date_format( date_create($object->pubdate_end) , "Y-m-d");
    unset($object->pubdate_end);
    
    $object->url = "agendas-ler.php?cat=" . $object->categoria . "&id=" . $object->id;
endforeach;
?>

<?php if(array_key_exists("error", $json)): ?>
    <p><?= $json->error; ?></p>
<?php else: ?>
    <select class="combobox-estados form-campo mb-2">
        <option value="">Selecione uma opção</option>
        <option value="federal" <?= ($cat == 'federal') ? 'selected' : '' ?>>Agenda Federal</option>
        <option value="trabalhista" <?= ($cat == 'trabalhista') ? 'selected' : '' ?>>Agenda Trabalhista</option>
        <option value="ac" <?= ($cat == 'ac') ? 'selected' : '' ?>>Agenda do Estado do Acre</option>
        <option value="al" <?= ($cat == 'al') ? 'selected' : '' ?>>Agenda do Estado de Alagoas</option>
        <option value="am" <?= ($cat == 'am') ? 'selected' : '' ?>>Agenda do Estado do Amazonas</option>
        <option value="ap" <?= ($cat == 'ap') ? 'selected' : '' ?>>Agenda do Estado do Amapá</option>
        <option value="ba" <?= ($cat == 'ba') ? 'selected' : '' ?>>Agenda do Estado da Bahia</option>
        <option value="ce" <?= ($cat == 'ce') ? 'selected' : '' ?>>Agenda do Estado do Ceará</option>
        <option value="df" <?= ($cat == 'df') ? 'selected' : '' ?>>Agenda do Distrito Federal</option>
        <option value="es" <?= ($cat == 'es') ? 'selected' : '' ?>>Agenda do Estado do Espírito Santo</option>
        <option value="go" <?= ($cat == 'go') ? 'selected' : '' ?>>Agenda do Estado do Goiás</option>
        <option value="ma" <?= ($cat == 'ma') ? 'selected' : '' ?>>Agenda do Estado do Maranhão</option>
        <option value="mt" <?= ($cat == 'mt') ? 'selected' : '' ?>>Agenda do Estado do Mato Grosso</option>
        <option value="ms" <?= ($cat == 'ms') ? 'selected' : '' ?>>Agenda do Estado do Mato Grosso do Sul</option>
        <option value="mg" <?= ($cat == 'mg') ? 'selected' : '' ?>>Agenda do Estado de Minas Gerais</option>
        <option value="pa" <?= ($cat == 'pa') ? 'selected' : '' ?>>Agenda do Estado do Pará</option>
        <option value="pb" <?= ($cat == 'pb') ? 'selected' : '' ?>>Agenda do Estado da Paraíba</option>
        <option value="pr" <?= ($cat == 'pr') ? 'selected' : '' ?>>Agenda do Estado do Paraná</option>
        <option value="pe" <?= ($cat == 'pe') ? 'selected' : '' ?>>Agenda do Estado do Pernambuco</option>
        <option value="pi" <?= ($cat == 'pi') ? 'selected' : '' ?>>Agenda do Estado do Piauí</option>
        <option value="rj" <?= ($cat == 'rj') ? 'selected' : '' ?>>Agenda do Estado do Rio de Janeiro</option>
        <option value="rn" <?= ($cat == 'rn') ? 'selected' : '' ?>>Agenda do Estado do Rio Grande do Norte</option>
        <option value="rs" <?= ($cat == 'rs') ? 'selected' : '' ?>>Agenda do Estado do Rio Grande do Sul</option>
        <option value="ro" <?= ($cat == 'ro') ? 'selected' : '' ?>>Agenda do Estado de Rondônia</option>
        <option value="rr" <?= ($cat == 'rr') ? 'selected' : '' ?>>Agenda do Estado de Roraima</option>
        <option value="sc" <?= ($cat == 'sc') ? 'selected' : '' ?>>Agenda do Estado de Santa Catarina</option>
        <option value="sp" <?= ($cat == 'sp') ? 'selected' : '' ?>>Agenda do Estado de São Paulo</option>
        <option value="se" <?= ($cat == 'se') ? 'selected' : '' ?>>Agenda do Estado do Sergipe</option>
        <option value="to" <?= ($cat == 'to') ? 'selected' : '' ?>>Agenda do Estado do Tocantins</option>
    </select>
    <div id="calendar" class="background-white p-1 shadow"></div>
<?php endif; ?>

<link rel="stylesheet" href="paginas/fullcalendar/fullcalendar.min.css" />
<script src="paginas/fullcalendar/moment.min.js"></script>
<script src="paginas/fullcalendar/fullcalendar.min.js"></script>
<script src="paginas/fullcalendar/pt-br.js"></script>

<script>
    $(function() {
        $(".combobox-estados").change(function(){
            window.open("agendas.php?cat=" + $(this).val(), "_self");
        });
        
        var get_data = '<?= json_encode($json) ?>';

        $("#calendar").fullCalendar({
            locale: "pt-br",
            header: {
                left: "prev,next today",
                center: "title",
                right: "month,list",
            },
            height: "auto",
            contentHeight: "auto",
            aspectRatio: 2.5,
            events: JSON.parse(get_data),
            eventLimit: 5
        });
    });
</script>