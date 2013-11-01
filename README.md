# Cryptex v0.3.5

An online hacking and treasure hunting Game.

This is the centralized repo containing everything related to the project.

## Table of Contents

* [Stuff to do](#todo)
* [Changelog](#changelog)
* [Notes](#notes)
* [Ideas](#ideas)

## <a name="todo"></a> To Do

* Re-Think the Level access approach
  * level.php
  * Use includes, rather than redirects
  * Sentinel values.

* gamedata table
  * User ID, Current Level, Current Ques, Current Ans, Current Score, Score Reached At, Hints Used
  * Update score after level completion

* Load *avatar data* using jQ/Ajax on every level.

* Hints UI
  * Modals
  * Tabs (Hint 1 | Hint 2 | Hint 3)
  * Hints per level. In every lvl file?

* Login/Register
  * Facebook Integration (php fb api)
  * Add a new row to *gamedata*
  * Create /logout.php
  * On-the-fly form validation (html+jq)

* Low Priority
  * Contact Modal UI
  * Leaderboard

## <a name="done"></a> Changelog

* Added: nojs.php - All other pages will redirect to it incase the javascript on the user's computer is disabled.

* Frontend ( based on Bootstrap )

  * A basic navigation bar
  * Register & Login Pages
  * Basic main window template

* Backend ( jQuery/Ajax + PHP + mySQL )

  * Ajax/PHP for Register & Login

## <a name="notes"></a> Notes

* Files beginning with an **underscore** mostly contain helper functions and just work as include files.

* The **ajax** folder contains the js ajax handlers. Their php counterparts are kept in **db**.

* **assets** should only contain 3rd party stuff like Bootstrap, jQuery etc. Refrain from adding your own code.

* We'll Minify (or obfuscate) all javascript at the end of development. Post Production.

* Index.php -> Login.php -> 

## <a name="ideas"></a> Ideas

* Questions could be themed. Harry Potter?
* A Random quote on every page. Hack this site has them.


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/dZ-Corp/cryptex/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

