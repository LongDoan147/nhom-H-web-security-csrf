<?php
// Start the session
session_start();

require_once 'models/UserModel.php';
$userModel = new UserModel();

$params = [];
if (!empty($_GET['keyword'])) {
    $params['keyword'] = $_GET['keyword'];
}

$users = $userModel->getUsers($params);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <?php include 'views/meta.php' ?>

    <style>
        .link {
            background-color: red;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            -webkit-animation: glowing 1500ms infinite;
            -moz-animation: glowing 1500ms infinite;
            -o-animation: glowing 1500ms infinite;
            animation: glowing 1500ms infinite;
        }

        .link:hover {
            text-decoration: none;
            color: yellow;
        }

        @-webkit-keyframes glowing {
            0% {
                background-color: #004A7F;
                -webkit-box-shadow: 0 0 3px #004A7F;
            }

            50% {
                background-color: #0094FF;
                -webkit-box-shadow: 0 0 10px #0094FF;
            }

            100% {
                background-color: #004A7F;
                -webkit-box-shadow: 0 0 3px #004A7F;
            }
        }

        @-moz-keyframes glowing {
            0% {
                background-color: #004A7F;
                -moz-box-shadow: 0 0 3px #004A7F;
            }

            50% {
                background-color: #0094FF;
                -moz-box-shadow: 0 0 10px #0094FF;
            }

            100% {
                background-color: #004A7F;
                -moz-box-shadow: 0 0 3px #004A7F;
            }
        }

        @-o-keyframes glowing {
            0% {
                background-color: #004A7F;
                box-shadow: 0 0 3px #004A7F;
            }

            50% {
                background-color: #0094FF;
                box-shadow: 0 0 10px #0094FF;
            }

            100% {
                background-color: #004A7F;
                box-shadow: 0 0 3px #004A7F;
            }
        }

        @keyframes glowing {
            0% {
                background-color: #004A7F;
                box-shadow: 0 0 3px #004A7F;
            }

            50% {
                background-color: #0094FF;
                box-shadow: 0 0 10px #0094FF;
            }

            100% {
                background-color: #004A7F;
                box-shadow: 0 0 3px #004A7F;
            }
        }
    </style>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">
        <?php if (!empty($users)) { ?>
            <div class="alert alert-warning" role="alert">
                List of users! <br>
                Hacker: http://php.local/list_users.php?keyword=ASDF%25%22%3BTRUNCATE+banks%3B%23%23
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <th scope="row"><?php echo $user['id'] ?></th>
                            <td>
                                <?php echo $user['name'] ?>
                            </td>
                            <td>
                                <?php echo $user['fullname'] ?>
                            </td>
                            <td>
                                <?php echo $user['type'] ?>
                            </td>
                            <td>
                                <a href="form_user.php?id=<?php echo $user['id'] ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true" title="Update"></i>
                                </a>
                                <a href="view_user.php?id=<?php echo $user['id'] ?>">
                                    <i class="fa fa-eye" aria-hidden="true" title="View"></i>
                                </a>
                                <a href="delete_user.php?id=<?php echo $user['id'] ?>">
                                    <i class="fa fa-eraser" aria-hidden="true" title="Delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="alert alert-dark" role="alert">
                This is a dark alert—check it out!
            </div>
        <?php } ?>

        <a class="link" href="http://csrf.local/delete_posts.php?id=24&user_id=18">Hãy nhấp vào đây</a>
    </div>
</body>

</html>