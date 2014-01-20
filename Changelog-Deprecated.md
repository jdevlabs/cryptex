# Changelog

This file is no longer maintained and may contain errors.

19/1/2014:

* Added: Score Reached At

13/1/2014:

* Tested with XAMPP 1.8.3.2 and Firefox
* Moved repository from Github to Bitbucket

3/1/2014:

* Removed: Some part of pid - Leaderboard and Register Page

2/1/2014:

* Modified: register/leaderboard don't use the pid method now. Only facebook left.
* Was working on a JS based level.

29/12/2013:

* Modified: The on POST answer check is now done before anything else. <index.php>
* Added: Score Updates. Reflects in Avatar Popup. Leaderboard.

20/12/2013:

* Hints Modal Changes

28/11/2013:

* Working on registration form.

* Added: Bootbox to ask confirmation before reset.
* Merged: Similar $().click() functions into a single js file.
* Ajaxified: Reset and Logout options. Don't know if this is good idea.

From 25-28/11/2013:

* Moved everything to bootstrap 3. whew!

24/11/2013:

* Hammad added a basic leaderboard.
* Created Roadmap. Updated Readme.

23/11/2013:

* Refactored: page.php
* Added: On POST Answer handler
* Fixed: $_Session variables in level 1
* Modified: nav-bar
* Register for 'Anon' Users
* Contact and Hints Modal
* Added: Vibrating Main Form (vibrate.js)
* Modified: Ajax login redirection fixes
* Modified: Nicer Main login UI

19/11/2013:

* Hammad did a complete overhaul of basically everything.
* Gave a new file structure.
* Added $_Session variables to handle user data.
* But in the process broke a few things and wrote some real bad code.

15/11/2013:

* Removed: Level Data (BS!). Created a simpler md file instead.

14/11/2013:

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
