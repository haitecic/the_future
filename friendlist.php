<?php
define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/Facebook/');
require __DIR__ . '/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
FacebookSession::setDefaultApplication('1109820955698868', '1994561e96d042b790f3f1f6401b7182');
$session = new FacebookSession('CAAPxYFPUJrQBAOmH6ZCGaBK6k8G3h4C6VGlTJyZA17ZA3nWgCy7ZAxNKV0sHrJ0tuaXgoc4lN0ezU7i7ZC2sO9nxsp9gKIw9ieeHNw5r2Di6XpMy7smRGYjjefD0FyDFAZA69S69Pns8tluMlEDhEESE1KhlU2kozXayTZAnQvsg1ZBArIZBC7XH7OilES6KZCFoKIIuqLjrOTwGXlehopFXya');
$request = new FacebookRequest($session, 'GET', '/me/friends');
$response = $request->execute();
$graphObject = $response->getGraphObject();
/*var_dump($graphObject->getProperty('data')->asArray());*/


for($i=0; $i<count($graphObject->getProperty('data')->asArray()); $i++){
echo $graphObject->getProperty('data')->getProperty($i)->getProperty('name');
echo $graphObject->getProperty('data')->getProperty($i)->getProperty('id');
echo "<br>";
}
?>