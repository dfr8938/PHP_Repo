<?php

require_once "classes.php";

$publications = array();

$news_publication_1 = new NewsPublication();
$news_publication_2 = new NewsPublication();
$news_publication_3 = new NewsPublication();

$article_publication_1 = new ArticlePublication();
$article_publication_2 = new ArticlePublication();

$photo_report_publication_1 = new PhotoReportPublication();
$photo_report_publication_2 = new PhotoReportPublication();
$photo_report_publication_3 = new PhotoReportPublication();

$publications = [

    $news_publication_1,
    $news_publication_2,
    $news_publication_3,

    $article_publication_1,
    $article_publication_2,

    $photo_report_publication_1,
    $photo_report_publication_2,
    $photo_report_publication_3,

];