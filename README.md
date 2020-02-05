**PACKAGE CHECKING AUTENTIFICATION**

If you run tests now it will not pass them because they are checking the autentification, to make the package work you need to configure the rigt:

    'PASSWORD'
    'EMAIL'

for the url.

To publish the config you have to do the following command;

php artisan vendor:publish

