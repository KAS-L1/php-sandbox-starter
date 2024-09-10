<?php
// This line connects to a database (like a big library) where we store our blog posts
require '/laragon/www/php-sandbox-starter/07-database/08-select-records/database.php';

// We prepare a special message (called a query) to ask the database for all blog posts
$stmt = $pdo->prepare('SELECT * FROM posts');

// We send the message to the database and get the answer
$stmt->execute();

// We collect all the answers (blog posts) from the database
$posts = $stmt->fetchAll();
?>

<!-- This is the start of our web page -->
<!DOCTYPE html>
<html lang="en">

<!-- This is the head of our web page, where we put important information -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- We're using a special tool called Tailwind CSS to make our page look nice -->
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Blog</title>
</head>

<!-- This is the body of our web page, where we put the content -->
<body class="bg-gray-100">
  <!-- This is the header of our page, where we put the title -->
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>

  <!-- This is where we show all our blog posts -->
  <div class="container mx-auto p-4 mt-4">
    <!-- We loop through each blog post and show it -->
    <?php foreach($posts as $post) : ?>
    <div class="md my-4">
      <div class="rounded-lg shadow-md">
        <div class="p-4">
          <!-- We show the title of the blog post -->
          <h2 class="text-xl font-semibold"><?= $post['title'] ?></h2>
          <!-- We show the content of the blog post -->
          <p class="text-gray-700 text-lg mt-2"><?= $post['body'] ?></p>
        </div>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</body>
</html>