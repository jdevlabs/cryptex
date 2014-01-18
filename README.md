# Cryptex v0.6

An online hacking and treasure hunting game to be done by 20/2/2014.

A demo is available on [engineerinme](http://engineerinme.com/cryptex/). But not everything may work :(

For level ideas: [Levels](/dufferzafar/cryptex/src/master/Levels.md)

For other technical notes: [Notes](/dufferzafar/cryptex/src/master/Notes.md)

## Table of Contents

* [Setup Instructions](#markdown-header-setup-instructions)
* [Contributions](#markdown-header-contributions)
* [Roadmap](#markdown-header-roadmap)
* [To be added later](#markdown-header-add-later)
* [Changelog](#markdown-header-changelog)

## Setup Instructions

#### Tools needed:

* [Git](http://git-scm.com/downloads) 
* [XAMPP v1.8.3.2](http://www.apachefriends.org/en/xampp.html)
* A text editor (preferably [Sublime Text](http://sublimetext.com/3))
* A browser (preferably [Mozilla Firefox](http://www.mozilla.org/en-US/firefox/new/))

#### Setup:

1. Make sure you have all the tools installed.

2. Clone the repo:
    1. Run a git shell and do a clone. Change the directory accordingly.

        `git clone https://bitbucket.org/dufferzafar/cryptex.git C:\xampp\htdocs\cryptex`

    2. Enter your username and password for bitbucket when prompted for one.

3. Setup DB:
    1. Make sure the Apache and MySQL services are running.
    2. Goto [Phpmyadmin](http://localhost/phpmyadmin/)
    3. Create a new database named 'test'
    4. Import the file [DB-Setup.sql](/dufferzafar/cryptex/src/master/DB-Setup.sql) into the database. This will create all the required tables and a user named 'dummy' with the password 'pass'.

4. Goto [Cryptex](http://localhost/cryptex/index.php) and try logging in with 'dummy' / 'pass' credentials. Keep your fingers crossed - may the force be with you.

## Contributions

* Make sure you have a local clone - you don't have to fork it on bitbucket to contribute.

* Create a new branch whenever you want to add a feature - do not change anything in the 'master' branch directly.

        `git checkout -b new_feature`

* Make whatever changes you want to.

        `git status`
        
        `git add -A`

        `git commit`

* Do not merge anything with 'master', just Push. 

        `git push -u origin new_feature`

Read [Git-Workflow](https://www.atlassian.com/git/workflows#!workflow-gitflow) for reasons.

## Roadmap

* SQL Injection. Hashed Passwords.

* Registration 
    * _register.js
    * _register.php

* Ajax-ify answer check
    * _answer.js & _answer.php 

* Hints
    * Modal UI. Tabs.
    * _hints.js  - Ajax call. Recieve Data.
    * _hints.php - Session modifications. Send Data from db.
    * Hints in db.

## Add Later

* Add a footer.

* cheet.js to add easter eggs.
    * Konami code
    * Something HP related?

* _hpWorld.php
    * Add families from lexicon
    * GetRandomString()

## Changelog

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
