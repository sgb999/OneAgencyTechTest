<?php
$view = new stdClass();
$view->pageTitle = 'Talent';
session_start();
require_once('Views/talent.phtml');