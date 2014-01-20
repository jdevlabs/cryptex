# Cryptex v0.7

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

            git clone https://bitbucket.org/dufferzafar/cryptex.git C:\xampp\htdocs\cryptex

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

        git checkout -b new_feature

* Make whatever changes you want to.

        git status
        
        git add -A

        git commit -m "New Cool Feature"

* Do not merge anything with 'master', just Push. 

        git push -u origin new_feature

Read [Git-Workflow](https://www.atlassian.com/git/workflows#!workflow-gitflow) for reasons.

## Roadmap

* SQL Injection. Hashed Passwords.

* Registration 
    * _register.js
    * _register.php

* Ajax-ify answer check
    * _answer.js & _answer.php 

## Add Later

* _hpWorld.php
    * Add families from lexicon
    * GetRandomString()
