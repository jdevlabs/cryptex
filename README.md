# Cryptex v0.5

An online hacking and treasure hunting Game.

This is the centralized repo containing everything related to the project.

For notes on AJAX and other structural information, have a look at the Notes at the end of the readme.

## Table of Contents

* [Todo ASAP](#now)
* [To be added later](#todo)
* [Changelog](#changelog)
* [Some Notes for Developers](#notes)
* [Ideas](#ideas)

## <a name="now"></a> To Do ASAP

* Verify level answers via Ajax ?

* Hints
  * JS - Ajax call. Recieve Data.
  * PHP - $_SESSION modifications. Send Data.

* Load avatar data on every level.

* More Levels
* Add Score Handling

## <a name="todo"></a>Add Later

* _hpWorld.php
  * Add families from lexicon
  * GetRandomString()

* _dbFunctions.php

* gamedata table
  * User ID, Current Level, Current Ques, Current Ans, Current Score, Score Reached At, Hints Used
  * Update score after level completion

* Hints UI
  * Modals
  * Tabs (Hint 1 | Hint 2 | Hint 3)
  * Hints per level. In every lvl file?

* Login/Register
  * Facebook Integration (php fb api)
  * Add a new row to *gamedata*

* Leaderboard

## <a name="done"></a> Changelog

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

* Hammad Hellulajah!!

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

