<?php

namespace Apsl\Inf03\Webdev;

use Apsl\Html\Template;
use Apsl\Http\Request;
use Apsl\Http\Response;
use Apsl\Session\Session;


class Application
{
    public const LOGIN = 'admin';
    public const PASSWORD = 'somepass';

    public function run(): void
    {
        $request = new Request();

        $response = new Response();
        $response->addHeader(Response::HEADER_CONTENT_TYPE, 'text/html');

        $session = new Session();

        //TODO: hide login form when user is logged in, display log out which will destroy session

        if($session->getValue("login") != self::LOGIN){
            $template = new Template('templates/index.html.php');
            $out = $template->render([
                'title' => 'Hello!'
            ]);
        }
        else{
            $template = new Template('templates/successful_login.html.php');
            $out = $template->render([
                'title' => 'Hello '.$session->getValue("login").'!',
                'login' => $session->getValue("login")
            ]);
        }

        $response->setBody($out);
        $response->send();
    }
}
