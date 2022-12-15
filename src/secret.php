<?php

require_once 'vendor/autoload.php';

use Apsl\Session\Session;
use Apsl\Http\Request;
use Apsl\Http\Appl;
use Apsl\Inf03\Webdev\Application;

$session = new Session();

$request = new Request();
if ($request->isMethod(Request::METHOD_POST)) {
    $login = $request->getValue('login');
    $pass = $request->getValue('pass');

    // var_dump('Here!');
    // var_dump($login, $pass);

    // TODO: store in session, display success message, display error message if wrong credentials

    if($login == Application::LOGIN && $pass == Application::PASSWORD){
        $session->setValue('login', $login);
        include 'templates/successful_login.html.php';
    }
    else{
        echo "<h1>Wrong credentials...</h1>";
    }
}
