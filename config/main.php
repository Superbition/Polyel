<?php

return [

    "appName" => "Polyel",

    'baseUrl' => env('APP.BASE_URL', 'http://localhost'),

    /*
    │------------------------------------------------------------------------------
    │ Encryption Settings
    │------------------------------------------------------------------------------
    │ Here you must set your encryption key if you want to use the Crypt
    | service built into Polyel that will handle the encryption and decryption
    | process for you. Polyel uses openssl to perform AES encryption with a MAC.
    | You must set a securely generated key with the correct length if you want your
    | encrypted data to be safe.
    |
    | Current supported ciphers are:
    |   AES-128-CBC, AES-256-CBC,
    |   AES-128-GCM, AES-256-GCM
    │
    */
    "encryptionKey" => env('Encryption.KEY', ''),
    "encryptionCipher" => "AES-256-CBC",

    /*
    │------------------------------------------------------------------------------
    │ Application Services to Register
    │------------------------------------------------------------------------------
    | This array lists all the applications services you want to register
    | using a Service Supplier. You only need to register a service with a
    | Service Supplier if it cannot be defined normally using the DI
    | Container, such as a complex constructor or non-object dependencies.
    | A service can be defined inside a supplier locally (request bound) or
    | globally (server bound) and you have the ability to defer service
    | creation.
    |
    */
    'servicesSuppliers' => [
        // ...
    ],

    /*
    │------------------------------------------------------------------------------
    │ Autoload the Composer Classmap
    │------------------------------------------------------------------------------
    | As Polyel is persistent when running the HTTP server, you will want to
    | take advantage of preloading all dependencies and packages before the
    | HTTP server can take requests. Polyel will handle all the loading of your
    | application but it uses the Composer classmap to preload any third party
    | packages you may have installed via Composer. So the classmap which is
    | generated by Composer will need to be regenerated everytime you make any
    | changes to your Composer dependencies. Either you can let Polyel auto
    | regenerate the classmap for you during every server boot-up which adds a
    | lot of time to the server startup phase or you can choose when to do it
    | manually with: composer update -o or composer dumpautoload -o
    |
    */
    'autoGenerateComposerClassmap' => false,

];