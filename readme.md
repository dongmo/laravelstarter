## Laravel 5.* Boilerplate, Currently 5.3

[![Latest Stable Version](https://poser.pugx.org/rappasoft/laravel-5-boilerplate/v/stable)](https://packagist.org/packages/rappasoft/laravel-5-boilerplate) [![Latest Unstable Version](https://poser.pugx.org/rappasoft/laravel-5-boilerplate/v/unstable)](https://packagist.org/packages/rappasoft/laravel-5-boilerplate) [![StyleCI](https://styleci.io/repos/30171828/shield?style=plastic)](https://styleci.io/repos/30171828/shield?style=plastic)

### Official Documentation

[Click here for the official documentation](http://laravel-boilerplate.com)

### Slack Channel

Please join us in our Slack channel to get faster responses to your questions. Get your invite here: https://laravel-5-boilerplate.herokuapp.com

### Laravel 5.1

You can download the last stable build of Laravel 5.1 [here](https://github.com/rappasoft/laravel-5-boilerplate/tree/Legacy_5.1).

### Laravel 5.2

You can download the last stable build of Laravel 5.2 [here](https://github.com/rappasoft/laravel-5-boilerplate/tree/Legacy_5.2).

### Introduction

Laravel Boilerplate provides you with a massive head start on any size web application. It comes with a full featured access control system out of the box with an easy to learn API and is built on a Twitter Bootstrap foundation with a front and backend architecture. We have put a lot of work into it and we hope it serves you well and saves you time!

### Wiki

Please view the [wiki](https://github.com/rappasoft/laravel-5-boilerplate/wiki) for a list of [features](https://github.com/rappasoft/laravel-5-boilerplate/wiki#features).

### Issues

If you come across any issues please [report them here](https://github.com/rappasoft/Laravel-5-Boilerplate/issues).

### Contributing

Thank you for considering contributing to the Laravel Boilerplate project! Please feel free to make any pull requests, or e-mail me a feature request you would like to see in the future to Anthony Rappa at rappa819@gmail.com.

### Security Vulnerabilities

If you discover a security vulnerability within this boilerplate, please send an e-mail to Anthony Rappa at rappa819@gmail.com, or create a pull request if possible. All security vulnerabilities will be promptly addressed. Please reference [this page](https://github.com/rappasoft/laravel-5-boilerplate/wiki/7.-Security-Fixes) to make sure you are up to date.

### Donations

If you would like to help the continued efforts of this project, any size [donations](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=JJWUZ4E9S9SFG&lc=US&item_name=Laravel%205%20Boilerplate&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted) are welcomed and highly appreciated.

### License

MIT: [http://anthony.mit-license.org](http://anthony.mit-license.org)

### Ajout de DART : utilisation du CRUD Generator

Le plugin utilisé est [crud-generator](https://github.com/appzcoder/crud-generator)

Exemple 

```
     php artisan crud:generate Posts --fields="title#string; content#text; category#select#options=technology,tips,health" --view-path=backend/access --controller-namespace=Backend\\Access\\Post --route-group=admin/access --model-namespace=Models\\Access\\Post
```

Ensuite configurer les routes et ajouter dans le menu

### Setup du projet

##### 1. Download

Download the files above and place on your server. (This project was developed on Laravel Homestead and I highly recommend you use either that or Laravel Velet, to get the optimal server configuration and no errors through installation.)

##### 2. Composer

Laravel project dependencies are managed through the PHP Composer tool. The first step is to install the depencencies by navigating into your project in terminal and typing this command:

```
composer install
```

##### 3. NPM/Yarn

In order to install the Javascript packages for frontend development, you will need the Node Package Manager

If you have NPM installed you have to run this command from the root of the project:

```
npm install
```

##### 4. Environment Files

This package ships with a .env.example file in the root of the project.

You must rename this file to just .env

Note: Make sure you have hidden files shown on your system.

##### 5. Create Database

You must create your database on your server and on your .env file update the following lines:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Change these lines to reflect your new database settings.

##### 6. Artisan Commands

The first thing we are going to so is set the key that Laravel will use when doing encryption.

```
php artisan key:generate
```

You should see a green message stating your key was successfully generated. As well as you should see the APP_KEY variable in your .env file reflected.

It's time to see if your database credentials are correct.

We are going to run the built in migrations to create the database tables:

```
php artisan migrate
```

You should see a message for each table migrated, if you don't and see errors, than your credentials are most likely not correct.

We are now going to set the administrator account information. To do this you need to navigate to this file and change the name/email/password of the Administrator account.

You can delete the other dummy users, but do not delete the administrator account or you will not be able to access the backend.

Now seed the database with:

```
php artisan db:seed
```

You should get a message for each file seeded, you should see the information in your database tables.

##### 7. Gulp

Now that you have the database tables and default rows, you need to build the frontend styles and scripts.

These files are generated using Laravel Elixir, which is a wrapper around many tools, and works off the gulpfile.js in the root of the project.

To build these files you will need a tool called gulp installed.

You can install with:

```
sudo npm install -g gulp
```

After installed, from the root of the project run the gulp command:

```
gulp
```

You will see a lot of information flash on the screen and then be provided with a table at the end explaining what was compiled and where the files live.

At this point you are done, you should be able to hit the project in your local browser and see the project, as well as be able to log in with the administrator and view the backend.

##### 8. PHPUnit

After your project is installed, make sure you run the test suite to make sure all of the parts are working correctly. From the root of your project run:

```
phpunit
```

You will see a dot(.) appear for each of the hundreds of tests, and then be provided with the amount of passing tests at the end. There should be no failures with a fresh install.


