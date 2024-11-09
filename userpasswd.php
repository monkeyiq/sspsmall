<?php


$email = $argv[1];
$pass = $argv[2];
if( empty($email) || empty($pass)) {
    echo "Usage " . $argv[0] . " email password \n";
    exit(1);
}

$baseDir = '/opt/sspsmall';
require_once($baseDir . '/src/_autoload.php');

$algo = PASSWORD_ARGON2ID;
$hasher = new Symfony\Component\PasswordHasher\Hasher\NativePasswordHasher(
    4, // time cost
    65536, // memory cost
    null, // cost
    $algo,
);
$passwordHash = $hasher->hash($pass);


$db = new PDO('sqlite:/opt/sspsmall/config/application.db');
$st = $db->prepare("update users set passhash = :passhash where email = :email;");
$st->execute([
    'email' => $email,
    'passhash' => $passwordHash
]);
