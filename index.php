<?php
$view = new stdClass();
$view->pageTitle = 'HomePage';
session_start();
require_once('Views/index.phtml');