##### IMPORTANT: This is the new repository for our project. We switched to the Laravel Framework since with the NodeJS framework we had to do a lot of nested callbacks (see http://callbackhell.com/).

# ConUShop [![Build Status](https://travis-ci.com/z-alex/ConUShop.svg?token=epYMsfdC5GNowz3V2jMd&branch=master)](https://travis-ci.com/z-alex/ConUShop)

## Website Info
sobamewei-shop.site

**Admin Accounts:**

*Admin 1:*
- Username: ```admin1@conushop.com```
- Password: ```admin```

*Admin 2:*
- Username: ```admin2@conushop.com```
- Password: ```admin```

*Admin 3:*
- Username: ```admin3@conushop.com```
- Password: ```admin```

## Team 9.2 Members
- Batoul Yehia
- Sophia Quach*
- Melissa Duong
- Wei He
## How to setup the debugger on phpStorm (if you already have Xdebug installed AND Xdebug helper on your chrome browser
1) Run > Run/Debug Configurations
2) Click on the "+" , then choose PHP Web Application
3) For Name, set it to anything you want, doesn't matter
4) For Server, click on the "..." to add a Server.
5) For Name, set it to anything you want
6) Host is set to laravel.dev, port 80, Debugger Xdebug
7) **DO NOT CHECK THE BOX** next to Use path mapping, since you are only using a localhost as server
8) Click ok
9) For Start URL, keep as is (you should have a single "/" in the field, and right below the url http://laravel.dev)
10) Click Apply
11) Click OK

## How to run the debugger
1) Set a breakpoint/+ where you would like to debug (click on the right of the row number, and a red circle should appear). Or you can do Run > Toggle line Breakpoint 
1) Run > Debug 'laravel.dev'
2) The web browser should start up, you should see the index.php page
3) If you click on the Debugger tab at the bottom of your screen, you should see a stack of method calls, and variable names and values.
4) To continue the debugging, use the arrows in the debug section (step into, over, etc)

## Installation (do once)
1) We recommend that you use Xampp to run the Laravel framework app by following [this tutorial](https://www.codementor.io/magarrent/how-to-install-laravel-5-xampp-windows-du107u9ji).
2) Change Xampp's MySQL password to isY2metT by following [this tutorial](https://www.roodex.com/blog/change-password-phpmyadmin-mysql-xampp/).
3) Clone the Repository into htdocs with the folder named as laravel instead of ConUShop.

## Database Synchronization (do everytime the database model is modified)
1) Open the terminal.
2) Go to the project repository folder.
3) Type ```php artisan database:sync``` and press enter.

## Dependencies Synchronization (do everytime the dependency list changes)
1) Open the terminal.
2) Go to the project repository folder.
3) Type ```composer update --no-scripts``` and press enter.

## Open the website on your local computer
- Go to ```laravel.dev``` on your browser (if you followed the tutorial in the installation step).

## How to use docker
1) Install docker
2) — FOR DEV —
// DISONNECT FROM THE SERVER DOCKER-MACHINE

eval $(docker-machine env --unset)

// Dev commands
docker-compose up
docker-compose up -d
docker-compose exec mariadb mysql -u root < databaseScript.sql
docker-compose stop
