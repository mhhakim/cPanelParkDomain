<?php
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 0);

include 'cpanel.xmlapi.php';
$xmlapi = new xmlapi("ServerHost","cPanelUsername","cPanelPassword");

$domains = 'name1.tld,name2.tld,nameN.tld';

$domains = explode(',', $domains);
foreach($domains as $domain) {
    $result = json_decode($xmlapi->park("hakievew",$domain,""));
    $data = $result->cpanelresult->data;

    var_dump($data);
    echo '<br/>';
}

?>