#PACKAGE CHECKING AUTENTIFICATION#

Create a Laravel project.

To install the package:

    composer require cotoflux/site-test

To use this package you need the right url and identification codes: 

    'PASSWORD'
    'EMAIL'


When all done, to be able to run the commands you need to run:

php artisan vendor:publish

##If you do modifications and is not working properly check is not stuck in the cache#:

    1. composer remove cotoflux/site_test
    2. composer dumpautoload
    3. composer update
    4. php artisan cache:clear

Install again the package.

