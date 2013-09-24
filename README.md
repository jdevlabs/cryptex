# Cryptex 2
#### v0.3.1
----

An online hacking and treasure hunting Game.

This is the centralized repo containing everything related to the project.


### What's Done

* Frontend ( based on Bootstrap )

  * A basic navigation bar
  * Register & Login Pages
  * Basic main window template

* Backend ( jQuery/Ajax + PHP + mySQL )

  * Ajax/PHP for Register & Login


### To Do

* Frontend

  * MainWindow Functions

    * Load question (jq+php)
    * Submit answer (jq+php)
    * Load avatar data (jq+php)

  * Login/Register

    * On-the-fly form validation (html+jq)

  * Leaderboard ( Design + Functionality )
  * Level Map ( Design + Functionality )

* Backend

  * Login/Register

    * Prevent all sorts of SQL injection (php+mysql)

  * DB Tables

    * users: id, name, username, pass (MD5)

  * Questions DB


### Design Issues

  * Whether to use navbar.php or not?
  * How to store and load questions?