<?php 

ini_set('session.use_only_cookies',1);
ini_set('session.use_strict_mode',1);

session_set_cookie_params([
    'lifetime' => 0,
    'domain' => 'localhost',
    'path' => '/',
    'httponly' => true
]);

session_start();

if(!isset($_SESSION['last_regen'])){

    session_regenerate_id(true);
    $_SESSION['last_regen'] = time();
}
else{

    $interval = 60*30;

    if(time()-$_SESSION['last_regen'] >= $interval){

        session_regenerate_id(true);
        $_SESSION['last_regen'] = time();
    }
}