<?php
require_once __DIR__.'/directkitxml/Service_mb_xml.php';

define('DIRECTKIT_WS', 'https://ws.lemonway.fr/mb/YOUR_COMPANY/dev/directkitxml/service.asmx');
define('LOGIN', 'society');
define('PASSWORD', '123456');
define('VERSION', '1.8');
define('UA', isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'ua');

/**
 * Get real IP
 * @return real IP
 */
function getUserIP() {
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    return $ip;
}
