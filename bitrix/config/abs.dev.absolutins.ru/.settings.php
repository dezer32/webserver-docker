<?php
return array (
  'utf_mode' => 
  array (
    'value' => true,
    'readonly' => true,
  ),
  'cache_flags' => 
  array (
    'value' => 
    array (
      'config_options' => 3600,
      'site_domain' => 3600,
    ),
    'readonly' => false,
  ),
  'cookies' => 
  array (
    'value' => 
    array (
      'secure' => false,
      'http_only' => true,
    ),
    'readonly' => false,
  ),
  'exception_handling' => 
  array (
    'value' => 
    array (
      'debug' => true,
      'handled_errors_types' => 4437,
      'exception_errors_types' => 4437,
      'ignore_silence' => false,
      'assertion_throws_exception' => true,
      'assertion_error_type' => 256,
      'log' => NULL,
    ),
    'readonly' => false,
  ),
  'connections' => 
  array (
    'value' => 
    array (
      'default' => 
      array (
        'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
        'host' => 'db',
        'database' => 'absolut_dev_db',
        'login' => 'absolut_dev_user',
        'password' => '7HzMHb4mnrvnp6Ws',
        'options' => 2,
      ),
    ),
    'readonly' => true,
  ),
  'KIAS' => 
  array (
    'value' => 
    array (
      'url' => 'https://rep.absolutins.ru/FrontSvcRep/kiasSvc.asmx',
      'http_auth' => 
      array (
        'username' => 'rep-http',
        'password' => 'KPVPy5FM',
      ),
      'wsdl' => 
      array (
        'url' => 'https://rep.absolutins.ru/FrontSvcRep/kiasSvc.asmx?WSDL',
        'username' => 'ABSOLUT-WEB-USER',
        'password' => '8ad498caf79b172',
        'algo' => 'sha512',
        'version' => 1,
      ),
      'AppId' => '221392',
      'RequestIp' => '83.220.161.34',
      'ExecProc' => 'http://inslab.ru/ExecProc',
    ),
    'readonly' => false,
  ),
  'yandex' => 
  array (
    'value' => 
    array (
      'shopId' => 90773,
      'scId' => 551697,
      'shopPassword' => 'sdgh3478fsaFSVEu62',
      'actionFormURL' => 'https://demomoney.yandex.ru/eshop.xml',
    ),
    'readonly' => false,
  ),
  'bankOpen' => 
  array (
    'value' => 
    array (
      'urlPay' => 'https://securetest.openbank.ru/testpayment/merchants/absolutins/payment_ru.html',
      'urlError' => 'https://securetest.openbank.ru/testpayment/merchants/absolutins/errors_ru.html',
      'loginApi' => 'absolutins-api',
      'loginOperator' => 'absolutins-operator',
      'passwordApi' => 'absolutins',
      'passwordOperator' => 'absolutins',
      'order_chars_count' => 32,
      'wsdl' => 
      array (
        'url' => 'https://securetest.openbank.ru/testpayment/webservices/merchant-ws?wsdl',
        'username' => 'absolutins-api',
        'password' => 'absolutins',
        'version' => 1,
      ),
    ),
    'readonly' => false,
  ),
  'oneOFD' => 
  array (
    'value' => 
    array (
      'login' => '7728178835',
      'password' => 'absolut2496',
      'url' => 'https://test-org.1-ofd.ru',
    ),
    'readonly' => false,
  ),
  'atolOnline' => 
  array (
    'value' => 
    array (
      'login' => 'atoltest1',
      'password' => 'IOtiThGTL',
      'groupCode' => 'ATOL-ProdTest-1',
      'inn' => '112233445573',
      'address' => 'г. Москва, ул. Оранжевая, д.22 к.11',
      'sno' => '',
      'taxType' => 'none',
    ),
    'readonly' => false,
  ),
  'dadata' => 
  array (
    'value' => 
    array (
      'apiKey' => '883faf93b043072531477aac54059ee5a9b24f78',
      'secretKey' => '3cd87b431a257e1a4529c3a1a726d22aeb560add',
    ),
    'readonly' => false,
  ),
  'sberbank' => 
  array (
    'value' => 
    array (
      'loginApi' => 'absolutins-api',
      'loginOperator' => 'absolutins-operator',
      'passwordApi' => 'absolutins',
      'passwordOperator' => 'absolutins',
      'order_chars_count' => 32,
      'wsdl' => 
      array (
        'url' => 'https://3dsec.sberbank.ru/payment/webservices/merchant-ws?wsdl',
        'username' => 'absolutins-api',
        'password' => 'absolutins',
        'version' => 1,
      ),
    ),
    'readonly' => false,
  ),
  'calculators' => 
  array (
    'value' => 
    array (
      'VZR_UPDATE_MILLION' => 
      array (
        'IBLOCK_ID' => 108,
        'PROPERTY_STATUS_N' => 193,
        'PROPERTY_STATUS_P' => 194,
        'PROPERTY_STATUS_C' => 195,
        'PROPERTY_STATUS_R' => 196,
        'PROPERTY_STATUS_A' => 197,
        'PROPERTY_STATUS_SEND' => 199,
      ),
    ),
    'readonly' => false,
  ),
  'ib.yusupovo' => 
  array (
    'value' => 81,
    'readonly' => false,
  ),
  'manager_access_group' => 
  array (
    'value' => 'manager-box-activation',
    'readonly' => false,
  ),
  'ib.quiz.claim-auto' => 
  array (
    'value' => 83,
    'readonly' => false,
  ),
  'ib.seo_calc_vzr' => 
  array (
    'value' => 102,
    'readonly' => false,
  ),
);
