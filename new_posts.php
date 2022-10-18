<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;

if (!empty($_GET['id'])) {
    $_id = $_GET['id'];
    $user = $userModel->findUserById($_id);//Update existing user
}


if (!empty($_POST['submit'])) {

    if (!empty($_id)) {
        $userModel->addPosts($_POST);
    } else {
        $userModel->addPosts($_POST);
    }
    header('location: list_posts.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">

            <?php if ($user || !isset($_id)) { ?>
                <div class="alert alert-warning" role="alert">
                    Add Posts
                </div>
                <form method="POST">
                    <input type="hidden" name="id" value="<?php echo $_id ?>">
                    <div class="form-group">
                        <label for="name">Tên</label>
                        <input class="form-control" name="ten" placeholder="Tên" value='<?php if (!empty($user[0]['ten'])) echo $user[0]['ten'] ?>'>
                    </div>
                    <div class="form-group">
                        <label for="password">Nội Dung</label>
                        <input name="noidung" class="form-control" placeholder="Nội Dung">
                    </div>
   
                    <input type="hidden" name="user_id" value="<?php echo $_id ?>">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>
            <?php } else { ?>
                <div class="alert alert-success" role="alert">
                    User not found!
                </div>
            <?php } ?>
    </div>
</body>
</html>