<?php 
  // This is an interface. Think of it like a rulebook that says any class using it must have
  // the methods 'display' and 'edit'. It doesn't say how they work, just that they must exist.
  interface ContentInterface {
    public function display(); // A rule that says the class must have a display method.
    public function edit();    // A rule that says the class must have an edit method.
  }

  // This is a class called Article. It follows the ContentInterface rules.
  class Article implements ContentInterface {
    private $title;   // This is the title of the article.
    private $content; // This is the actual text content of the article.

    // This is the constructor. When we create an article, we set its title and content.
    public function __construct($title, $content){
      $this->title = $title;
      $this->content = $content;
    }

    // This method displays the article's title and content on the web page.
    public function display(){
      echo "<h2>Title: $this->title</h2> <br>"; // This shows the title.
      echo "<p>Content: $this->content</p> <br>"; // This shows the content (text).
    }

    // This method will let us know we're editing the article.
    public function edit(){
      echo "Editing Article: $this->title <br>"; // This shows we are editing the article.
    }
  }

  // This is another class called Video. It also follows the ContentInterface rules.
  class Video implements ContentInterface {
    private $title; // This is the title of the video.
    private $url;   // This is the link (URL) to the video.

    // This is the constructor. When we create a video, we set its title and URL.
    public function __construct($title, $url){
      $this->title = $title;
      $this->url = $url;
    }

    // This method displays the video's title and the video itself on the web page.
    public function display(){
      echo "<h2>Title: $this->title</h2> <br>"; // This shows the title.
      echo "<iframe src='{$this->url}'></iframe><br>"; // This shows the video in an iframe.
    }

    // This method will let us know we're editing the video.
    public function edit(){
      echo "Editing Video: $this->title <br>"; // This shows we are editing the video.
    }
  }
  
  // Here we create a new article with a title and content.
  $article = new Article('Introduction to PHP', 'PHP is Good');

  // Here we create a new video with a title and a link (URL).
  $video = new Video('PHP FOR ME',  'https://www.youtube.com');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script> <!-- This loads Tailwind CSS for styling -->
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100"> <!-- This makes the background a light gray color -->
  <header class="bg-blue-500 text-white p-4"> <!-- This is the top header with blue background -->
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1> <!-- This is the title of the page -->
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <!-- This is the container for the article with white background and a shadow -->
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
       <!-- Here we display the article using the display method -->
       <?= $article->display(); ?>
    </div>

    <!-- This is the container for the video with white background and a shadow -->
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Here we display the video using the display method -->
      <?= $video->display(); ?>
    </div>
  </div>
</body>

</html>
