<?php

return [
    "driver" => "smtp",
    "host" => "smpt.example.com",
    "port" => 587,
    "from" => array(
        "address" => "example@example.com",
        "name" => "Example"
    ),
    "username" => "example@example.com",
    "password" => "secret",
    "sendmail" => "/usr/sbin/sendmail -bs",
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
];
