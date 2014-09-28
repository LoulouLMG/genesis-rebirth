<? php
// include the configs / constants for the database connection
require_once("config/db.php");
// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. 
$login = new Login();


if ($login->isUserLoggedIn() == true) {
   
} else {
   
}