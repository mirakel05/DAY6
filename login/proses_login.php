<?php 
session_start();


$list_user = [
    [
        'email' => 'mirakel0405@gmail.com',
        'password' => 'mir@kel05'
    ]
    ];

    $user = [
        'email' => $_POST ['email'],
        'password' => $_POST ['password']
    ];

    $not_found = true;

    foreach ($list_user as $key => $registered_user) {
        if ($registered_user['email'] == $user['email']) {
            if ($registered_user ['password'] == $user['password']) {

                $_SESSION['login'] = true;
                $_SESSION['email'] = $user['email'];
                $_SESSION['massage'] = 'Berhasil Login';

                header("location: ../backend/index.php");
                exit();
            } else {
                $_SESSION['eror'] = '';
            }
            $not_found = false;
            break;
        }
    }

    if ($not_found == true) {
        $_SESSION['eror'] = 'email/Password Anda Salah';
    }

    header("Location: index.php");
    exit()
?>