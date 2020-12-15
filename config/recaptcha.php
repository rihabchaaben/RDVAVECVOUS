<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API Keys
    |--------------------------------------------------------------------------
    |
    | Set the public and private API keys as provided by reCAPTCHA.
    |
    | In version 2 of reCAPTCHA, public_key is the Site key,
    | and private_key is the Secret key.
    |
    */
    // 'public_key'     => env('RECAPTCHA_V3_SECRET_KEY', '6Lfz0NYZAAAAAGFRPEl4EURBLycqSKhemGVtrtX_'),
    // 'private_key'    => env('RECAPTCHA_V3_SITE_KEY', '6Lfz0NYZAAAAAO_NMmbkVAcbqIpnpDSNNHJyolWr'),

    'public_key'     => env('RECAPTCHA_V2_SITE_KEY', '6Lfz0NYZAAAAAGFRPEl4EURBLycqSKhemGVtrtX_'),
    'private_key'    => env('RECAPTCHA_V2_SECRET_KEY', '6Lfz0NYZAAAAAO_NMmbkVAcbqIpnpDSNNHJyolWr'),
// on 16/10/2020 - added keys
    /*
    |--------------------------------------------------------------------------
    | Template
    |--------------------------------------------------------------------------
    |
    | Set a template to use if you don't want to use the standard one.
    |
    */
    'template'    => '',

    /*
    |--------------------------------------------------------------------------
    | Driver
    |--------------------------------------------------------------------------
    |
    | Determine how to call out to get response; values are 'curl' or 'native'.
    | Only applies to v2.
    |
    */
    'driver'      => 'curl',

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    | Various options for the driver
    |
    */
    'options'     => [
        'lang' => 'fr',
        'curl_timeout' => 1,
        'curl_verify' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | Version
    |--------------------------------------------------------------------------
    |
    | Set which version of ReCaptcha to use.
    |
    */

    'version'     => 2,

];
