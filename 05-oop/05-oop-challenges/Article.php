<?php 

class Article {

    public $title;
    public $consent;
    private $published = false;

    public function __construct($title,  $consent) {  

        $this->title;
        $this->consent;
}

    public function publish(){

        $this->published = true;
    }

    public function isPublished(){
        return  $this->published;
    }
}


$article1 = new Article('My First Post', 'This is the first post');
$article2 = new Article('My Second Post', 'This is the second post.');

$article1->publish();

echo var_export($article1->isPublished(), true) . '<br>';
echo var_export($article2->isPublished(), true) . '<br>';