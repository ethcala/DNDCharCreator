<?php
include_once('AddCharacter.php');
$json = file_get_contents("php://input");
$data = json_decode($json);

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
console_log('JSON: ' . $json);
?>
<div>
    <?php echo $data->htmlcontent; ?>
</div>
?>