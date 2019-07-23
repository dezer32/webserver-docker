<?php
/**
 * Created by PhpStorm.
 * User: v.kuzmenko
 * Date: 12.07.2018
 * Time: 13:38
 */

$configuration = [
    'KIAS' => [
        'url' => 'https://rep.absolutins.ru/FrontSvcRep/kiasSvc.asmx',
//        'url' => 'https://wsapi.absolutins.ru/FrontSvc/kiasSvc.asmx',
        'http_auth' => [
            'username' => 'rep-http',
            'password' => 'KPVPy5FM'
//            'username' => 'absolut-http',
//            'password' => '37kmpLXa'
        ],
        'wsdl' => [
            'url' => 'https://rep.absolutins.ru/FrontSvcRep/kiasSvc.asmx?WSDL',
//            'url' => 'https://wsapi.absolutins.ru/FrontSvc/kiasSvc.asmx?WSDL',
            'username' => 'ABSOLUT-WEB-USER',
            'password' => '8ad498caf79b172',
            'algo' => 'sha512',
            'version' => SOAP_1_1
        ],
        'AppId' => '221392',
        'RequestIp' => '83.220.161.34',
        'ExecProc' => 'http://inslab.ru/ExecProc'
    ],
    'yandex' => [
        'shopId' => 90773,
        'scId' => 551697,
        'shopPassword' => 'sdgh3478fsaFSVEu62',
        'actionFormURL' => 'https://demomoney.yandex.ru/eshop.xml'
    ],
    'bankOpen' => [
        'urlPay' => 'https://securetest.openbank.ru/testpayment/merchants/absolutins/payment_ru.html',
        'urlError' => 'https://securetest.openbank.ru/testpayment/merchants/absolutins/errors_ru.html',
        'loginApi' => 'absolutins-api',
        'loginOperator' => 'absolutins-operator',
        'passwordApi' => 'absolutins',
        'passwordOperator' => 'absolutins',
        'order_chars_count' => 32,
        'wsdl' => [
            'url' => 'https://securetest.openbank.ru/testpayment/webservices/merchant-ws?wsdl',
            'username' => 'absolutins-api',
            'password' => 'absolutins',
            'version' => SOAP_1_1
        ]
    ],
    'oneOFD' => [
        'login' => '7728178835',
        'password' => 'absolut2496',
        'url' => 'https://test-org.1-ofd.ru'
    ],
    'atolOnline' => [
        'login' => 'v4-online-atol-ru',
        'password' => 'iGFFuihss',
        'groupCode' => 'v4-online-atol-ru_4179',
        'inn' => '5544332219',
        'requestUrl' => 'https://testonline.atol.ru/possystem/v4/',
        'connectionTimeOut' => 50,
        'address' => 'https://v4.online.atol.ru',
//        'address' => '115280, г. Москва, ул. Ленинская слобода, дом 26',
        'companyEmail' => 'online@absolutins.ru',
        'sno' => '',
//        'sno' => 'osn',
//        'sno' => 'usn_income',
//        'sno' => 'usn_income_outcome',
//        'sno' => 'envd',
//        'sno' => 'esn',
//        'sno' => 'patent',
        'taxType' => 'none',
//        'taxType' => 'vat0',
//        'taxType' => 'vat10',
//        'taxType' => 'vat18',
//        'taxType' => 'vat110',
//        'taxType' => 'vat118',
    //@todo Перенести то на прод.
        'paymentMethod' => 'full_payment',
        'paymentObject' => 'commodity',
    ],
    'dadata' => [
        'apiKey' => '883faf93b043072531477aac54059ee5a9b24f78',
        'secretKey' => '3cd87b431a257e1a4529c3a1a726d22aeb560add'
    ],
    'sberbank' => [
        'loginApi' => 'absolutins-api',
        'loginOperator' => 'absolutins-operator',
        'passwordApi' => 'absolutins', // TEST
        'passwordOperator' => 'absolutins', // TEST
        'order_chars_count' => 32,
        'wsdl' => [
            'url' => 'https://3dsec.sberbank.ru/payment/webservices/merchant-ws?wsdl',
            'username' => 'redirectUrlabsolutins-api',
            'password' => 'absolutins',
            'version' => SOAP_1_1
        ]
    ],
    'sberAPI' => [
        'gateway' => 'https://api.sberbank.ru/ru/prod',
        'clientID' => '74947D4A-DABA-A591-325D-03EC1F238A30',
        'clientSecret' => 'gyj%90fJi2ZG',
        'XIBMClientID' => '30e1b369-88e5-4c89-a649-491f87eb0a2a',
        'XIBMClientSecret' => 'tO6sG1dO7vU0sO1aQ1qP2hT0vU7fP3mP2uO3lB4fA2iD8iC3vN',
        'redirectUrl' => 'https://abs.dev.absolutins.ru/personal/auth/',
        'authSberISN' => 123456789
    ]
];