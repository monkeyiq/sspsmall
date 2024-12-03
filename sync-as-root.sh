#!/bin/bash

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
. $SCRIPT_DIR/common.sh;

chgrp $apacheid ${installdir}/config/*.php
chgrp $apacheid ${installdir}/metadata/*.php
chmod 440 ${installdir}/cert/*
chgrp $apacheid ${installdir}/cert/*
chmod g+r ${installdir}/cert/server.pem


chmod 640       ${installdir}/config/application.db
chgrp $apacheid ${installdir}/config/application.db
