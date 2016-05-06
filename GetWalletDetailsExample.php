<?php
require_once "./includes.php";

$client = new Directkit\Service_mb_xml(array("trace"=>true), DIRECTKIT_WS."?wsdl");

$param = new Directkit\GetWalletDetails(null, null, null, null, null, null, null, null);
$param->wlLogin = LOGIN;
$param->wlPass = PASSWORD;
$param->language = "fr";
$param->version = VERSION;
$param->walletIp = getUserIP();
$param->walletUa = UA;
$param->wallet = "8888";

$response = $client->GetWalletDetails($param);
//print the response
echo "<pre>".json_encode($response, JSON_PRETTY_PRINT)."</pre>";
/*
 {
    "GetWalletDetailsResult": {
        "WALLET": {
            "ID": "8888",
            "BAL": "622.00",
            "NAME": "Barack OBAMA",
            "EMAIL": "hduong8888@lemonway.fr",
            "DOCS": {},
            "IBANS": {},
            "STATUS": "6",
            "BLOCKED": "0",
            "SDDMANDATES": {},
            "LWID": "45",
            "CARDS": {
                "CARD": {
                    "ID": "16",
                    "EXTRA": {
                        "IS3DS": "0",
                        "CTRY": "",
                        "AUTH": "585314",
                        "NUM": "501767XXXXXX6700",
                        "EXP": "05\/2019",
                        "TYP": "CB"
                    }
                }
            }
        }
    }
}
 */
//you can access to $response->GetWalletDetailsResult->WALLET


$param->wallet = "NotExist";
$response_error = $client->GetWalletDetails($param);
//print the response
echo "<pre>".json_encode($response_error, JSON_PRETTY_PRINT)."</pre>";
/*
{
    "GetWalletDetailsResult": {
        "E": {
            "Error": "",
            "Code": "147",
            "Msg": "Identifiant inexistant",
            "Prio": "2"
        }
    }
}
*/