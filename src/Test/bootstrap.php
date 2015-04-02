<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define base path
defined('BASEPATH')
|| define('BASEPATH', realpath(dirname(__FILE__) . '/../../'));

// Autoloader
require_once BASEPATH . '/vendor/autoload.php';
