<?php

abstract class Publicahion {

    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $preview;
    public $author_name;
    public $type;

    function __construct($row) {
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->date = $row['date'];
        $this->short_content = $row['short_content'];
        $this->content = $row['content'];
        $this->preview = $row['preview'];
        $this->author_name = $row['author_name'];
        $this->type = $row['type'];
    }

    abstract function printItem();
}

class NewsPublication extends Publicahion {

    public function printItem() {
        echo '<div class="col-xl-12">';
            echo '<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-1 shadow-sm h-md-250 position-relative">';
                echo '<div class="col p-4 d-flex flex-column position-static">';
                    echo "<h4 style='color: cornflowerblue; font-style: italic' class='blog-post-title'>Новость: " . $this->title . "</h4>";
                    echo "<p class='card-text mb-0'><span style='font-weight: bold'>Дата:</span> ". $this->date . "</p>";
                    echo '<p class="card-text mb-0">' . $this->short_content . '</p>';
                echo '</div>';
                echo '<div class="col p-4 d-flex flex-column position-static">';
                    echo "<h4 style='color: cornflowerblue; font-style: italic' class='blog-post-title'>Новость: " . $this->title . "</h4>";
                    echo "<p class='card-text mb-0'><span style='font-weight: bold'>Дата:</span> ". $this->date . "</p>";
                    echo '<p class="card-text mb-0">' . $this->short_content . '</p>';
                echo '</div>';
            echo '</div>';
        echo '</div>';

    }
}

class ArticlePublication extends Publicahion {

    public function printItem() {
        echo '<div class="col-xl-12">';
            echo '<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-1 shadow-sm h-md-250 position-relative">';
                echo '<div class="col p-4 d-flex flex-column position-static">';
                    echo "<h3 style='color: cornflowerblue'>Статья: " . $this->title . "</h3>";
                    echo "<p class='card-text mb-0 p-2'><span style='font-weight: bold; color: brown'>Автор:</span> ". $this->author_name . "</p>";
                    echo "<p class='card-text mb-0' style='font-style: italic; text-indent: 20px;'>". $this->content . "</p>";
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}

class PhotoReportPublication extends Publicahion {

    public function printItem() {

        echo '<div class="col-xl-12">';
          echo '<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">';
            echo '<div class="col p-4 d-flex flex-column position-static">';
              echo '<h4 class="mb-0">Фотоотчет: ' . $this->title . '</h4>';
              echo '<p class="card-text mb-0">' . $this->short_content . '</p>';
              echo '</div>';
            echo '<div class="col-auto d-none d-lg-block">';
              echo '<img src=".' . $this->preview . '" alt="preview" class="bd-placeholder-img" width="200" height="150">';
            echo '</div>';
          echo '</div>';
        echo '</div>';
    }
}

