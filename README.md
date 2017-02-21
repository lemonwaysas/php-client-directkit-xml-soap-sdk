The LemonWay API (called Directkit) has two implementations: Directkit**Json2** and Directkit**Xml**. 
There are different ways to call the service depends on the implementation you chose.

The best way to access to directkit**Json2** is to use the [`curl_init`] function to send POST request to the Directkit**Json2** service. 

[See the example here](https://github.com/lemonwaysas/php-client-directkit-json2)

It is the simplest and the most network-efficient way. 
 
If you don't like the json format, you can also send SOAP (XML) requests to Directkit**Xml**, you can do it in 3 different ways:

 1. **[SoapClient]**: the casual method in PHP to consume any Web Service. It is the simplest way to access to SOAP request.
 2. **[SoapClient SDK]**: same with the first method, but all the structure of requests / responses are generated overhead with [`wsdl2phpgenerator`](http://wsdl2phpgenerator.github.io/wsdl2phpgenerator/)
 3. **[LemonWay SDK]**: call the web service as a normal http request [`curl_init`]. The SDK will help you to parse the SOAP response.
 
This example demonstrates the second method.

# Required extensions

In order to use [`SoapClient`], you have to activate the following extensions in `php.ini`

  * `extension=php_soap.dll` (Windows) or `soap.so` (Linux)
  * `extension=php_openssl.dll` (Windows) or `openssl.so` (Linux)

# Generate the SDK

We will use [`wsdl2phpgenerator client`](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator-cli) to generate the LemonWay Stubs:
```
php wsdl2phpgenerator-2.5.5.phar -i https://ws.lemonway.fr/mb/YOUR_COMPANY/dev/directkitxml/service.asmx?wsdl -o .\directkitxml -n Directkit
```
this command will generate the PHP classes corespond to all requests / response of the [Lemonway Directkit API] 

The stubs are created in the `directkitxml` folder with the namespace `Directkit`. Feel free to change them as your needs but **NEVER modify the generated stubs**.

**You have to generate these Stubs for each update of the LemonWay API**.

# Sample SDK Usage

```php
require_once __DIR__.'/directkitxml/Service_mb_xml.php';

$client = new Directkit\Service_mb_xml(array("trace"=>true), DIRECTKIT_WS."?wsdl");

$param = new Directkit\GetWalletTransHistory(null, null, null, null, null, null, null, null, null);
$param->wlLogin = LOGIN;
$param->wlPass = PASSWORD;
$param->language = "fr";
$param->version = VERSION;
$param->walletIp = getUserIP();
$param->walletUa = UA;
$param->wallet = "8888";

$response = $client->GetWalletTransHistory($param);

//print the response
echo "<pre>".json_encode($response, JSON_PRETTY_PRINT)."</pre>";

//you can access to $response->GetWalletTransHistoryResult->TRANS->HPAY
```
See also: [LemonWay API documentation](http://documentation.lemonway.fr/) / method [`GetWalletTransHistory`](http://documentation.lemonway.fr/api-en/directkit/manage-wallets/getwallettranshistory-get-list-of-all-transactions-of-a-wallet)

# SoapClient WSDL cache

(Please refer to the [SoapClient manual](http://php.net/manual/en/class.soapclient.php) for more information)
  
The SoapClient relies upon the WebService description (WSDL) to validate every SOAP requests and parse the SOAP responses. Your PHP Server will download and cache the WSDL in the first call.

> You must to keep your WSDL cache in sync with the WebService.

If you got
```
Fatal error: Uncaught SoapFault exception...
```
In most case, it means that your cached WSDL is outdated, please refresh the cache using one of the following methods.
Don't forget to re-generate the SDK stub as above.

# Manipulate the SoapClient WSDL cache in `php.ini`

In `php.ini` you can configure the cache folder and the expire time (ttl) of the WSDL cache or disable it completly.
```
[soap]
soap.wsdl_cache_enabled=1
soap.wsdl_cache_dir="/tmp"
soap.wsdl_cache_ttl=86400
```

**You can force refresh the cache by deleting every `wsdl-*` files in the folder `wsdl_cache_dir`**. No need to restart your PHP Server

# Manipulate the SoapClient WSDL cache in code

Please refer to the [SoapClient configuration](http://php.net/manual/en/soap.configuration.php) for more information

* Disable cache usage:
```php
ini_set("soap.wsdl_cache_enabled", 0);
```

* Redefine the expire time to 10 seconds so the cache will refreshed sooner / more frequently:
```php
ini_set("soap.wsdl_cache_ttl", 10);
```

[`SoapClient`]: http://php.net/manual/en/class.soapclient.php
[SoapClient]: https://github.com/lemonwaysas/php-client-directkit-xml-soap
[SoapClient SDK]: https://github.com/lemonwaysas/php-client-directkit-xml-soap-sdk
[LemonWay SDK]: https://github.com/lemonwaysas/php-client-directkit-xml
[Lemonway Directkit API]: http://documentation.lemonway.fr/
[`curl_init`]: http://php.net/manual/en/function.curl-init.php
