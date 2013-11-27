# Cryptex v0.5

An online hacking and treasure hunting game.

The current 'master' branch is live on [ThinkDiff](http://cryptex.thinkdiff.co.in). But there are still miles to go.

This is the centralized repo containing everything related to the project.

For notes on AJAX and other structural information, have a look at the Notes at the end of the readme.

## Table of Contents

* [Roadmap](#road)
* [To be added later](#todo)
* [Changelog](#changelog)
* [Some Notes for Developers](#notes)
* [Random Ideas](#ideas)

## <a name="road"></a> Roadmap

* Add a footer..

* Registration (__v0.5.2__)
  * SQL Injection. Hashed Passwords.
  * _register.js
  * _register.php

* User Gamedata (__v0.5.5__)
  * User ID, Current Level, Current Ques, Current Ans, Current Score, Score Reached At, Hints Used -> db table
  * From db to $_Session variables -> session.php, login.php ?
  * Update values after level completion -> page.php
  * Reflect update in avatar -> nav.php

* Reset Progress (__v0.5.7__)
  * Confirmation modal (Are you sure?)
  * reset.php (ajax call?)
  * Ajax-ify (logout.php)

* The Leaderboard (__v0.6__)
  * /leaderboard.php
  * Bootstrap tables
  * Pagination (50 rows per page)

* Hints (__v0.6.3__)
  * Modal UI. Tabs (Hint 1 | Hint 2 | Hint 3)
  * _hints.JS  - Ajax call. Recieve Data.
  * _hints.PHP - Session modifications. Send Data from db.
  * Hints in db.

* Ajax-ify answer check (__v0.6.5__)
* _answer.js & _answer.php 

## <a name="todo"></a>Add Later

* More Levels

* Use cheet.js to add easter eggs. yay!
  * Konami code
  * Something HP related?

* _hpWorld.php
  * Add families from lexicon
  * GetRandomString()

* _dbFunctions.php

* Login/Register
  * Facebook Integration (php fb api)
  * Add a new row to *gamedata*

## <a name="done"></a> Changelog

On 28/11/2013:

* Working on Score Reset. 

From 25-28/11/2013:

* Moved everything to bootstrap 3. whew!

On 24/11/2013:

* Hammad added a basic leaderboard.
* Created Roadmap. Updated Readme.

On 23/11/2013:

* Refactored: page.php
* Added: On POST Answer handler
* Fixed: $_Session variables in level 1
* Modified: nav-bar
  * Register for 'Anon' Users
  * Contact and Hints Modal
* Added: Vibrating Main Form (vibrate.js)
* Modified: Ajax login redirection fixes
* Modified: Nicer Main login UI

On 19/11/2013:

* Hammad did a complete overhaul of basically everything.
* Gave a new file structure.
* Added $_Session variables to handle user data.
* But in the process broke a few things and wrote some real bad code.

On 15/11/2013:

* Removed: Level Data (BS!). Created a simpler md file instead.

On 14/11/2013:

* Added: Level 3 - The invisibility cloak
* Updated: Levels 1,2 to use data from _hpWorld
* Added: _hpWorld.php - Random harry potter data.
  * Added Weasley and Black family.
* Added: Level\index.php - Single file for all levels
  * Uses sentinel values to make sure the level files are included and not accessed directly.
* Database: Added "qlevel" - the value is updated when a ques/ans pair is generated. Makes sure that a random ques/ans is generated only once per user per level.
* Added: index.php - Basic Homepage with Login
* Updated: Designed contact Admin Modal on the navbar.

Before 14/11/2013:

* Added: nojs.php - All other pages will redirect to it incase the javascript on the user's computer is disabled.

* Frontend ( based on Bootstrap )

  * A basic navigation bar
  * Register & Login Pages
  * Basic main window template

* Backend ( jQuery/Ajax + PHP + mySQL )

  * Ajax/PHP for Register & Login

## <a name="notes"></a> Notes for Developers

* No matter what you do - write __legible code__
  * 2 Space indentaion

* Every single php file should be able to handle direct execution, in which case, either redirect to a proper place or show an echo message.

* Files beginning with an **underscore** mostly contain helper functions and just work as include files.

* The **assets\js** folder contains the js ajax handlers (**_login.js** && **register.js**)

* Their php counterparts are kept in **include\login** && **include\register**.

* **_login.js** is the ajax handler for login functions.
  * contains the form submit handler
  * which sends an async request to _login.php with form data
  * handles the response from the php file

* **_login.php** does the backend stuff of login
  * recieves the data
  * sets the $_SESSION variables 
  * and passes on a flag to the JS handler via _echo_

* **assets** also contains 3rd party stuff like Bootstrap, jQuery etc. Add your own code into respective folders.

* All javascript will be minified (or obfuscated) at the end of development.

* Once the setup is on server, special care should be taken to ensure that none of the folders like includes etc are accessible by altering the URL.

## <a name="ideas"></a> Ideas

* Questions could be themed. Harry Potter?
* A Random quote on every page. Hack this site has them.

[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/dZ-Corp/cryptex/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

