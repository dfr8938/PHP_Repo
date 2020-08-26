<?php

require_once "connect.php";
require_once "classes.php";

$publications = array();

$publications[] = new NewsPublication();
$publications[] = new ArticlePublication();
$publications[] = new PhotoReportPublication();

