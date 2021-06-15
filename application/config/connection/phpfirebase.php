<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/ipaayos-mo-firebase-adminsdk-63cub-6e4ae69147.json');
$firebase = (new Factory)
   ->withServiceAccount($serviceAccount)
   ->withDatabaseUri('https://ipaayos-mo-default-rtdb.firebaseio.com')
   ->create();
$database = $firebase->getDatabase();

?>