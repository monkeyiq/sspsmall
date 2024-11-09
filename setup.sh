#!/bin/bash

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
. $SCRIPT_DIR/common.sh;


cd ${installdir}
wget https://github.com/simplesamlphp/simplesamlphp/releases/download/v${sspver}/simplesamlphp-${sspver}-full.tar.gz
tar xvf simplesamlphp-${sspver}-full.tar.gz --strip-components=1 


