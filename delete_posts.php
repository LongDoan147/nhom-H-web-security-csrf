<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;
$user_id = NULL;

if (!empty($_GET['id'])) {
    $_id = $_GET['id'];
    $user = $userModel->findUserById($_id);//Update existing user
}

if (!empty([$_GET['id'] - $_GET['user_id']])) {
    $id = $_GET['id'];
    $user_id = $_GET['user_id'];
    $userModel->deletePosts($id, $user_id);//Delete existing user
}
 header('location: list_posts.php');


?>