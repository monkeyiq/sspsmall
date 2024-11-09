<?php


$email = $argv[1];
if( empty($email)) {
    echo "Usage " . $argv[0] . " email \n";
    exit(1);
}

$db = new PDO('sqlite:/opt/sspsmall/config/application.db');
$st = $db->prepare("insert into users (email) values (:email);");
$st->execute(['email' => $email ]);
