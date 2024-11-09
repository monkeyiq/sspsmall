#!/bin/bash

adminpass="changeme"

hostname="localhost"
sspver="2.3.2";
apacheconf="/etc/httpd/conf.d/sspsmall.conf"
installdir=/opt/sspsmall
apacheid="apache"



#
# the local file is the same format as this one so you can override
# the above settings without committing them to the main repo
#
SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
if [ -f $SCRIPT_DIR/common-local.sh ]; then
   . $SCRIPT_DIR/common-local.sh;
fi
