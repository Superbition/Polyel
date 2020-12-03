<?php

return [

    "serverIP" => env("Server_Config.HOST", ""),

    "serverPort" => env("Server_Config.PORT", ""),

    // Set the public facing static file root, used for css, js files etc.
    "publicRoot" => APP_DIR . "/public",

    // Max server upload size in bytes, default 5MB
    "maxUploadSize" => 5000000,

    "uploadDir" => APP_DIR . "/storage/temp/uploads",

];