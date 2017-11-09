
<?php

require_once "bootstrap.php";
require_once 'model/Notification.php';
require_once 'classes/Session.class.php';
require_once 'entities/Friend.php';
require_once 'entities/Notification.php';
require_once 'model/Friends.php';
require_once 'model/Notification.php';
require_once 'model/SendMail.php';
require_once 'classes/Session.class.php';
$session = new Session();

$response = array();

$messages = new Friends();

$response['friends'] = $messages->getFriends($entityManager, $session->getSession('userid'), 10);

$response['friends_tumbnail'] = $messages->getFriendsTumbnail($entityManager, $session->getSession('userid'), 10);

if (isset($_SESSION['tumbnail_text'])) {
    $txt = $session->getSession('tumbnail_text');
    unset($_SESSION['tumbnail_text']);
}else
    $txt = '';
$response['tumbnail_text'] = $txt;

$response['getAll'] = $result = NotificationModel::getNotifications($entityManager, $session->getSession('userid'),$session->getSession('limit_notifications'));
$response['getAllNumber'] = NotificationModel::getNumber();

$response['friend_request_number'] = $messages->getNumberRequest();
$response['friends_request'] = $messages->getFriendsRequest($entityManager, $session->getSession('userid'));
$response['friends_number'] = $messages->getNumber(true);

echo json_encode($response);
?>
