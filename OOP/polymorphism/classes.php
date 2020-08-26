<?php

class Publicahion {

    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $preview;
    public $author_name;
    public $type;

    function __construct() {
    }
}

class NewsPublication extends Publicahion {

    public function printItem() {
        echo "<h3>Вызван метод: " . __METHOD__ . "</h3>";
        echo "Это новость.";
    }
}

class ArticlePublication extends Publicahion {

    public function printItem() {
        echo "<h3>Вызван метод: " . __METHOD__ . "</h3>";
        echo "Это статья.";
    }
}

class PhotoReportPublication extends Publicahion {

    public function printItem() {
        echo "<h3>Вызван метод: " . __METHOD__ . "</h3>";
        echo "Это фотоотчет.";
    }
}

