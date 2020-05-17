<?php
ini_set("display_errors", "On");
ini_set("display_startup_errors", "On");
ini_set("error_reporting", "-1");
ini_set("log_errors", "On");
ini_set("memory_limit", "50M");
set_time_limit (0);
date_default_timezone_set("Europe/Kiev");

require_once __DIR__.'/vendor/autoload.php';
require_once 'functions.php';


use Jenssegers\Agent\Agent;
$agent = new Agent();

use GuzzleHttp\Client;
$client = new Client();

render('display/detect', ['agent' => $agent, 'client' => $client]);

