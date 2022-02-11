## Birux
Birux - is an open source social network with a wide range of features.
The work on the project is ongoing, please create an Issue if you find any bug in it.
## Server Requirements
 1. PHP >=7.4
 2. MySQL 5.7 or higher
 3. (preferred) Centos 7, Ubuntu 16.04
We do not recommend using Windows to deploy your Birux instance.
 4. Apache or Nginx+Apache
## Federate?
Unfortunately, we do not yet support the ActivityPub protocol, but we will try to implement it in the future!
## Install
 1. Install PHP 7.4, MySQL
 2. After installation, clone the Github repository:
    git clone https://github.com/biruxteam/birux /your/folder/to/install/
 3. Import the database.sql file into your MySQL database.
 4. Configure .env file
 5. DO NOT USE PHP-FPM!
Otherwise, there will be an eternal redirect to the same address of your instance.
6. Done! Your Birux instance is ready to go.
