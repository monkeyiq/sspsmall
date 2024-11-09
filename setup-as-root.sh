#!/bin/bash

userid=${1:?supply user login name as arg1}

echo "setting up for SimpleSAMLphp versrion $sspver ... "

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
. $SCRIPT_DIR/common.sh;

echo "apache dir ${apacheconf}"
echo "install dir ${installdir}"

touch              ${apacheconf}
chown $userid:root ${apacheconf}
chmod 644          ${apacheconf}

mkdir -p ${installdir}
chown $userid:$apacheid ${installdir}
chmod +s ${installdir}

mkdir -p ${installdir}/log
chown $apacheid:$apacheid ${installdir}/log
chmod +s ${installdir}/log

mkdir -p               /var/cache/sspsmall
chown -R apache:apache /var/cache/sspsmall

systemctl restart httpd.service 

echo "now please run setup.sh as the user $userid"
