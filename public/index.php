<?php
if (!session_id()) session_start();

require_once '../app/core/Url.php';
require_once '../app/core/Controller.php';
require_once '../app/core/Database.php';
require_once '../app/core/Flasher.php';
require_once '../app/config.php';

new Url;
