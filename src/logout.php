<?php

require_once 'vendor/autoload.php';

use Apsl\Session\Session;
use Apsl\Http\Appl;

$session = new Session();

$session->destroy();
header("Location: index.php");


