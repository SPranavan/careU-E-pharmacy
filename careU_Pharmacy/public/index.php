<?php
    require_once '../app/bootstrap.php';

    //Init Core Library
    $init = new Core;

    
    require_once '../app/models/User.php';
    require_once '../app/controllers/Users.php';

    $db = new Database;
    $model = new User($db);
    $controller = new Users($model);

    $page = isset($_GET['page']) ? $_GET['page'] : 'login';

    switch($page) {
    case 'login':
        $controller->login();
        break;
    case 'register':
        $controller->register();
        break;
    }

    require_once '../app/views/users/login_register.php';

