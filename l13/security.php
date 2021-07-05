<?php

//password_hash('12341234', PASSWORD_ARGON2ID));

require_once __DIR__ . '/helpers/response.php';
session_start();



$isGuest = empty($_SESSION['user']);

if ($isGuest)
{
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (login($login, $password)){

        redirect('index.php');
    } else {

        require __DIR__ . '/auth.php';
        exit;
    }
}

function login(string $login, string $password): bool
{
    if (empty($login) || empty($password)){
        return false;
    }
    $users = [
        [
            'login' => 'test@test.com',
            'password'=> '$argon2id$v=19$m=65536,t=4,p=1$cnJOaEVubWZObGhGb0QvNQ$dyFBNjV8l/lhHhywRzCgLjrTlZRkARnw3/5RQuUtGrE',
        ],
        [
            'login' => 'test22@test.com',
            'password'=> '$argon2id$v=19$m=65536,t=4,p=1$TDBCSVd1Ukxvcms2ZmdkYQ$6WCJPCjh5A4tZDo2+9gOJpCyzEeDfGZ4XeloEYeculk',
        ],
    ];

    $filtered = array_filter(
        $users,
        fn(array $user) => ($login === $user['login'])
    );

    if(!$filtered || count($filtered) > 1) {
        return false;
    }

    $user = current($filtered);
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        return true;

    }
    return false;
}