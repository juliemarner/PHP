<?php
$DB_HOST = 'bymarner.dk.mysql';
$DB_USER = 'bymarner_dk';
$DB_PASS = 'n5P73ZnH';
$DB_NAME = 'bymarner_dk';
$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
//$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8'); 
?>