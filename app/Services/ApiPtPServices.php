<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;


class ApiPtPServices
{
    private static $URLBase;
    private static $login;
    private static $secretKey;

    private static function initAPI()
    {
        self::$URLBase = env('PTP_URL');
        self::$login = env('PTP_LOGIN');
        self::$secretKey = env('PTP_SECRET_KEY');
    }

    public static function createCredentials()
    {
        self::initAPI();

        $seed = date('c', strtotime('+ 3 minutes'));
        $secretKey = self::$secretKey;
        if (function_exists('random_bytes')) {
            $nonce = bin2hex(random_bytes(16));
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            $nonce = bin2hex(openssl_random_pseudo_bytes(16));
        } else {
            $nonce = mt_rand();
        }
        $base64_nonce = base64_encode($nonce);
        $transactionKey = base64_encode(sha1($nonce . $seed . $secretKey, true));

        $credentials = [
            'seed' => $seed,
            'login' => self::$login,
            'tranKey' => $transactionKey,
            'nonce' => $base64_nonce
        ];

        return $credentials;

    }

    public static function createApiRequest(Request $request)
    {
        self::initAPI();

        $endPoint = self::$URLBase.'/api/session/';
        $returnUrl = route('processed', $request->orderId);
        $credentials = self::createCredentials();

        $response = HTTP::post($endPoint, [
            'auth' => $credentials,
            'payment' => [
                'reference' => $request->orderId,
                'description' => $request->product . ' cost $' . $request->cost,
                'amount' => [
                    'currency' => 'USD',
                    'total' => $request->cost
                ]
            ],
            'skipResult' => true,
            'paymentMethod' => 'visa, master, amex, diners, discover, visa_electron',
            'expiration' => date('c', strtotime('+30 minutes')),
            'returnUrl' => $returnUrl,
            'ipAddress' => '127.0.0.1',
            'userAgent' => $request->server('HTTP_USER_AGENT')
        ]);

        return $response->json();

    }

    public static function getRequestInfo($requestId)
    {
        self::initAPI();

        $endPoint = self::$URLBase .'/api/session/'.$requestId;

        $credentials = self::createCredentials();

        $response = HTTP::post($endPoint, [
            'auth' => $credentials
        ]);

        return $response->json();

    }

}
