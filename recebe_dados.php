<?php
$dados = json_decode($_POST['tx_imagens']);

print_r($dados[0]->type);
