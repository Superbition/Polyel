<?php

return [

    /*
    │------------------------------------------------------------------------------
    │ Session System Driver
    │------------------------------------------------------------------------------
    │ The driver used to interact with session data for every request.
    │ By default the file system is used as a session system, this should be fine
    │ for many applications. You can use the database session driver for better
    | performance and scaling.
    │
    │ Available Session Drivers: file, database
    │
    */
    'driver' => 'file',

    /*
    │------------------------------------------------------------------------------
    │ Session Cookie Lifetime
    │------------------------------------------------------------------------------
    │ Set the cookie lifetime in minutes used to identify a session
    │ by Polyel. You may set this option to 0 to specify that the cookie shall
    │ expire upon session close. The default is 7 days in minutes (10080).
    | The XSRF token cookie also uses this value for its cookie lifetime.
    │
    */
    'lifetime' => 10080,

    /*
    │------------------------------------------------------------------------------
    │ Session Cookie Name
    │------------------------------------------------------------------------------
    │ When the Session System creates the session cookie, this is the name
    │ it will use that gets sent with the HTTP response. You may edit this name
    │ to your liking.
    │
    */
    'cookieName' => 'polyel_session',

    /*
    │------------------------------------------------------------------------------
    │ Session Prefix
    │------------------------------------------------------------------------------
    │ When creating the session ID and name, you can set a
    │ Session prefix which will be added to the start of the ID string. You are
    │ free to change this if you want to. Only use A-z 0-9 and dashes.
    | Note: This option is only used when the file session driver is being used.
    │
    */
    'prefix' => 'polyel-session-',

    /*
    │------------------------------------------------------------------------------
    │ Session Cookie Path
    │------------------------------------------------------------------------------
    │ The Session cookies path used to where its accessible. The default is
    │ usually the root of your application but you may change this if you need
    │ to. The XSRF token cookie also uses this value in the same way.
    │
    */
    'cookiePath' => '/',

    /*
    │------------------------------------------------------------------------------
    │ Session Cookie Domain
    │------------------------------------------------------------------------------
    │ This option is what is used when setting the session cookies
    │ domain option, the domain where the cookie is used to identify
    │ a session on requests.
    | The XSRF token cookie also uses this value in the same way.
    │
    */
    'domain' => '',

    /*
    │------------------------------------------------------------------------------
    │ HTTPS Session Only Cookie
    │------------------------------------------------------------------------------
    │ Indicates if the Session cookie shall be only allowed over
    │ a secure connection (HTTPS). Session cookies will only be sent
    │ if a secure HTTP connection can be made when this option is set to true.
    | The XSRF token cookie also uses this value in the same way.
    │
    */
    'secure' => false,

    /*
    │------------------------------------------------------------------------------
    │ HTTP Access Only
    │------------------------------------------------------------------------------
    │ By default this option is set to true, which prevents the browser
    │ from allowing JavaScript to access the Session cookie contents. It is
    │ recommended to keep the Session cookie HTTP only.
    │
    */
    'httpOnly' => true,


    /*
    │------------------------------------------------------------------------------
    │ XSRF Protection Cookie Name
    │------------------------------------------------------------------------------
    │ This is a cookie that holds the CSRF token, validation is not
    | performed using this cookie, it is meant to be used by JavaScript to
    | make valid AJAX/HTTP requests and avoid a 401 response. Use the value of
    | this cookie when making requests to your backend application.
    │
    */
    'xsrfCookieName' => 'XSRF-TOKEN',
];