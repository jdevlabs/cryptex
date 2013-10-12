# Cryptex v0.3.5

An online hacking and treasure hunting Game.

This is the centralized repo containing everything related to the project.

## Table of Contents

* [Stuff to do](#todo)
* [Changelog](#changelog)
* [Notes](#notes)
* [Ideas](#ideas)

## <a name="todo"></a> To Do

* Update *gamedata* table when a new user registers.
* Load *avatar data* using jQ/Ajax

* Hints UI
  * Modals
  * Tabs (Hint 1 | Hint 2 | Hint 3)

* Contact Modal

* Login/Register
  * Facebook Integration (php fb api)
  * On-the-fly form validation (html+jq)

* Super Important
  * URL Modification to access levels.

* Low Priority
  * Leaderboard ( Design + Functionality )
  * Level Map ( Design + Functionality )

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

## <a name="ideas"></a> Ideas

* Questions could be themed. Harry Potter?
* A Random quote on every page. Hack this site has them.
