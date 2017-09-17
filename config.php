<?php


define('dbhost', 'localhost'); // Voer hier de hostnaam/ip van je database in!
define('dbuser', 'root'); // Voer hier de gebruikersnaam van je database in!
define('dbpass', 'root'); // Voer hier het wachtwoord van je database in!
define('database', 'carrotcms'); // Voer hier de naam van je database in!
define('sitetitle', 'Carrot CMS'); // Voer hier de naam van je site in!


// NIET AANPASSEN!

$db = mysqli_connect(dbhost, dbuser, dbpass, database) or die('<!DocType HTML><html><head><meta name="viewport" content="width=device-width, initial-scale=1.0"></head><body style="font-size: 50px; padding: 10px; padding-top: 20%;"><p>Ik kan niet inloggen op de database <strong>'.database.'</strong>. Bestaat deze wel en zijn de logingegevens wel goed?</p></body></html>');
