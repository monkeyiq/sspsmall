#!/bin/bash

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
. $SCRIPT_DIR/common.sh;


cp apache/sspsmall.conf /etc/httpd/conf.d/sspsmall.conf
cp config/config.php               /opt/sspsmall/config/
cp config/authsources.php          /opt/sspsmall/config/
cp metadata/saml20-idp-remote.php  /opt/sspsmall/metadata/
cp metadata/saml20-idp-hosted.php  /opt/sspsmall/metadata/
cp metadata/saml20-sp-remote.php   /opt/sspsmall/metadata/

saltv="$(tr -c -d '0123456789abcdefghijklmnopqrstuvwxyz' </dev/urandom | dd bs=32 count=1 2>/dev/null;echo)"
echo "updating salt value to something random..."
sed -i "s/defaultsecretsalt/$saltv/g" ${installdir}/config/config.php

echo "updating admin password hash..."
pwhash=$(echo $adminpass | ${installdir}/bin/pwgen.php | tail -2 | head -1)
sed -i "s|.*auth.adminpassword.*|    'auth.adminpassword' => '$pwhash',|g" ${installdir}/config/config.php

cd $SCRIPT_DIR/tmp
echo -e "au\n\n\n\n\n\n\n\n\n" | openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out server.crt -keyout server.pem
/bin/cp -f server.crt server.pem /opt/sspsmall/cert

echo "changing hostname in metadata files..."
sed -i "s|https://localhost/|https://$hostname/|g" /opt/sspsmall/metadata/*php

cd /opt/sspsmall/config
rm -f /opt/sspsmall/config/application.db

php <<'EOF'
<?php 
    $db = new PDO('sqlite:/opt/sspsmall/config/application.db');
    $db->exec("create table users ( id integer primary key,
                     email varchar(500),
                     other varchar(100), 
                     passhash varchar(100));");
    $st = $db->prepare("insert into users (email,passhash,other) values (:email,:passhash,:other);");
    $st->execute(['email' => 'test@localhost',
                  'passhash' => password_hash("123", PASSWORD_ARGON2ID ),
                  'other' => 'special' ]);
    $st->execute(['email' => 'test2@localhost',
                  'passhash' => password_hash("456", PASSWORD_ARGON2ID ),
                  'other' => 'normal' ]);
    $st->execute(['email' => 'testdriver@localhost.localdomain',
                  'passhash' => password_hash("hello", PASSWORD_ARGON2ID ),
                  'other' => 'normal' ]);

       
EOF

