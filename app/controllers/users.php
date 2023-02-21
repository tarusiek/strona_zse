<?php


include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validate_user.php");

$errors = array();
$username = '';
$email = '';
$tag = '';
$password = '';
$v_password = ''; 
$table = 'users';


function loginUser($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = "Jesteś zalogowany";
    $_SESSION['type'] = "success";
    exit();

    if($_SESSION['admin']){
        header('location: ' . BASE_URL . '/admin/dashboard.php');
        //header('location: ' . BASE_URL_SERWER . '/panel.php');
    } else {
        header('location: ' . BASE_URL . 'index.php');
        //header('location: ' . BASE_URL_SERWER . 'index.php');
    }
}

//if ($_POST['tag'] == "cos"){
    if (isset($_POST['register_button'])){
        $errors = validateUser($_POST);

        if(count($errors) === 0){
            unset($_POST['register_button'], $_POST['v_password'], $_POST['tag']);
            $_POST['admin'] = 0;
    
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            loginUser($user);

        } else {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $tag = $_POST['tag'];
            $password = $_POST['password'];
            $v_password = $_POST['v_password'];
        }

        
    //} else{
    //    echo "Podałeś zły tag!";
    //}
}


if (isset($_POST['login_button'])){
    $errors = validateLogin($_POST);
    
    if(count($errors) === 0){
        $user = selectOne($table, ['username' => $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])){
            //login, redirect
            loginUser($user);
        } else {
            array_push($errors, 'Złe dane');
        }
    }


    $username = $_POST['username'];
    $password = $_POST['password'];
}

    






?>