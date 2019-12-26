<?php
require_once 'classes/Core.php';
$app = &get_instance();
$app->magic();




// old
return;

require_once 'includes/config.php';
require_once 'classes/Site.php';

$app = new Master("3P | Welcome", true);

$app->template_dir = 'templates/';
$app->include_dir = 'includes/';

// Construct routes to controller
$app->AddPage(PAGE_HOME,            "home.php");
$app->AddPage(PAGE_LOST,            "lost.php");
$app->AddPage(PAGE_CONSTRUCTION,    "construction.php");

$app->AddPage("process",        "process.php");
$app->AddPage("thankyou",       "thankyou.php");
$app->AddPage("gallery",        "gallery.php");
$app->AddPage("admin",          "admin_login.php");

$app->Route();
