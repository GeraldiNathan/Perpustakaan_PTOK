<?php
if (!session_id()) {
    session_start();
}
require_once '../app/init.php';

$o = new App;
