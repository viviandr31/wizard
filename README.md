## Wizard 

The Wizard is based on the LimeSurvey Version 3.6.3+180416



## About
Limesurvey is the number one open-source survey software.

Advanced features like branching and multiple question types make it a valuable partner for survey-creation.


## How to install

Installation of Wizard is pretty similar to installing the LimeSurvey. Upload the files to your web server, open config.php, enter your database information(databaselocation, databasename, databaseuser, databasepass), set the relevant directory permissions and then import the wizard database to your MySQL. Run the installer located at http://yourdomain.com/admin/install_1/index.php to populate your database. That’s it. If you run into problems, simple read the installation instructions.

The database name is wizard2018. The database file is called wizard2018.sql

The password to login the admin page of the Wizard(LimeSurvey) is as below, please change it to your preference after the install

Account:
user: admin
password: admin

## Requirements

### Minimal
The absolute minimal requirements are:
 - Apache >= 2.4 | nginx >= 1.1 | any other php-ready webserver
 - php >= 5.4
    - with mbstring and pdo-database drivers
 - mysql >= 5.5.3 

### Recommended
We recommend the following setup
 - nginx 1.4.6
 - php 5.6.x
    - with php-fpm, mbstring, gd2 with freetype, imap, ldap, zip, zlib and databse drivers
 - mysql 5.5.50

## Manual
for more information please refer to our [homepage](http://www.limesurvey.org), or have a look at the [manual](http://manual.limesurvey.org) 

## Licence
LimeSurvey software is licenced under the [GPL 2.0](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html).

Pictures and the LimeSurvey Logo are registered trademarks of LimeSurvey GmbH, Hamburg, Germany.
