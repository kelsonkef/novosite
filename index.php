<?php
require 'config/config.php';
require 'app/core/Core.php';
require 'vendor/autoload.php';
require 'config/db.php'; 
require 'config/crud.php';

session_start();

$core = new Core();
$core->run();