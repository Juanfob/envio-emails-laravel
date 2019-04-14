<?php

return [
    "driver" => "smtp",
    "host" => "hm9681.neodigit.net",
    "port" => 587,
    "from" => array(
        "address" => "it@reuma-sol.com",
        "name" => "Example"
    ),
    "username" => "it@reuma-sol.com",
    "password" => "wpH2v04&",
    "sendmail" => "/usr/sbin/sendmail -bs",
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
];
