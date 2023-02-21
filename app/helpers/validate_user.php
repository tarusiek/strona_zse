<?php
function validateUser($user){


    $errors = array();

        if (empty($user['username'])){
            array_push($errors,'Login jest wymagany');
        }

        if (empty($user['email'])){
            array_push($errors,'Email jest wymagany');
        }

        if (empty($user['tag'])){
            array_push($errors,'Identyfikator jest wymagany');
        }

        if (empty($user['password'])){
            array_push($errors,'Hasło jest wymagane');
        }

        if ($user['v_password'] !== $user['password']){
            array_push($errors,'Hasła nie pasują do siebie');
        }

        $existing_user = selectOne('users', ['email' => $user['email']]);
        if (isset($existing_user)){
            array_push($errors,'Email już istnieje');
        }
    return $errors;
}

function validateLogin($user){


    $errors = array();

        if (empty($user['username'])){
            array_push($errors,'Login jest wymagany');
        }

        if (empty($user['password'])){
            array_push($errors,'Hasło jest wymagane');
        }
        
    return $errors;
}


?>