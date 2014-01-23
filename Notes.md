# Miscellaneous Notes

* Done: Show full names in the leaderboard instead of usernames.
* Note: Remove all debugging related help like mysql_error()

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

## Design ?

* The pid method to access parts.
* Leaderboard Top 25 . Done.

## Hints

* Single Hint Per Level.
* Harder Levels - More Hack Points, More Cost per Hint.
* Store in level files. Use Update Fields.

## Dialogs

* Every 5 levels stating the Hack points that you'll earn per level.
* At start, showing rules and some notes:
    * Don't 'help' your friends
    * Throughout the game, you'll find references to the wondrous world of Harry Potter, some direct, others rather cryptic. There's no   

## Cheets

* Declare that cheet codes exist?

* cheet.js to add easter eggs.
    * Konami code
    * Something HP related?

## Harvest Passwords

* Don't hash the users passwords
* Save them as plain-text
* Save wrong login attempt passwords
