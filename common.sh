#!/bin/bash

adminpass="changeme"

hostname="localhost"
sspver="2.3.2";
apacheconf="/etc/httpd/conf.d/sspsmall.conf"
installdir=/opt/sspsmall
apacheid="apache"




SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
if [ -f $SCRIPT_DIR/common-local.sh ]; then
   . $SCRIPT_DIR/common-local.sh;
fi
