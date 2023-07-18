# wordpress + mysql with tests, plugins and themes

```bash

brew install wp-cli

wp core download

brew install mysql

mysql -u root -p

create database wp_dev;

quit

wp server # configure the wp-config.php file

wp config shuffle-salts # if required, links in wp-config file to generate via web

cd wp-content/plugins/new-plugin

composer install

npm install # node v16 and npm v7 are required for this to work

npm run build

bash ./vendor/bin/install-wp-tests.sh wp_dev_test root '' localhost latest # to install the test database

# check wordpress-tests-lib/ folder exists and has data and includes folder
# if not delete folders <temp-path>/wordpress and <temp-path>/wordpress-tests-lib, temp-path is the path returned by the install-wp-tests.sh script

./vendor/bin/phpunit # to run tests, only phpunit v9 is supported, phpunit v10 doesn't work

# only local mysql server is supported, unable to work with docker mysql server

wp db import <path-to-db-file> # check wp db --help for more options

wp db query < query.sql

```
