
NOTE: This is pre-alpha code as at Nov 2024. It is being shared to
allow discussion about the setup at this stage.

NOTE NOTE NOTE See above.

The sspsmall project aims to make it fairly quick to setup a
SimpleSAMLphp (SSP) installation for a PHP application to authenticate
users against credentials in a a database.

You might be interested in doing this if you are writing a PHP
application and would like it to be offered in an environment with
100,000 active users each day. On the other hand you might want to
personally use the application on the LAN with just your friends. SSP
can allow both configurations without code change in your application.

The idea is that the application already has a database and you can
make two columns in your "user" table with an email address and
somewhere to store a hashed password value. You might share more
information from the database to the auth system if you like but the
idea is to keep the needs on the database very low.

The password is hashed in PHP to avoid needing any function calls in
the database.

The needs of sspsmall are
* PHP
* Database
* Apache (first flush of scripts)

Normally for this your application will call into SSP at a Service
Provider (SP) URL which will then call to an Identity Provider (IdP).
The IdP will have one or more selected authentication mechanisms (auth
sources) which will be used to verify that the user is who they are
claiming to be.

In this case the SP and IdP are rolled into a single SSP installation
and the authentication mechanism is selected to be the SQL SSP module
with the simplified version that does password hashing in PHP to
lessen the needs and setup for the relational database.

As part of a large SSP install one might consider the IdP run by a
larger organisation, for example a university or social network. The
SP would then call to the third party IdP to do that part and return
the assertion about the user back to the application.

The first version will target the location /opt/sspsmall for
installation. A subsequent update to the scripts will likely let you
choose where to install things. The URL localhost/sspsmall will be
used to access the SP for authentication.

As elevated privileges are required for installation the scripts have
been split into multiple parts. The normal script can be run as your login
user and the as-root script should be run with sudo root.

The common.sh file is used by all scripts and allow you to configure
your host name, which version of SSP you wish to use, and set the
password for the SSP admin interface.

There are two phase to the scripts a setup and a sync. 

The setup only needs to be run once. It will for example download SSP
and expand it into your /opt/sspsmall directory.

The sync scripts will take the various configurations and metadata
files and modify then if needed and install them for your sspsmall
setup to use. This allows slight modifications to the config and
metadata files during testing and a sync.sh to install the updates for
testing. The sspsmall is designed to allow testing and exploration as
well as just installation.

Each time the sync script is run the SQL database is recreated, the
keys used to authenticate the SP and IdP are recreated, and the salt
is created freshly for SSP. This may mean that you have to start
authentication flows from scratch after a sync.

The order of execution is shown below. You might only want to run the
setup scripts once but rerun the sync pair a number of times during
testing to refine your configuration.

Note that the setup-as-root.sh takes your username (id -un) as it's
only argument and will make the /opt/sspsmall directories writable by
that user so the normal sync.sh scripts can update things without
root.

```
sudo ./setup-as-root.sh userloginid
./setup.sh

./sync.sh
sudo ./sync-as-root.sh

```

If you would like to include a bunch of additional SP configurations for local testing
then export this variable and rerun the scripts.

```
export SSPSMALL_EXTRA_SP=1
```


Once you have run the four scripts you should be able to visit
https://localhost/sspsmall/admin
to login using the admin password from common.sh.

From there click on the test tab and choose "default-sp" and login
using one of the email address and password combinations from sync.sh.

The two scripts useradd.php and userpasswd.php allow you to add a new
user to the system and set their password respectively. The below
adds a new user and sets their password to 'foo'.

```
php useradd.php    foo@localhost
php userpasswd.php foo@localhost foo
```
