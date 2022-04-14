<html>

<head>
  <title>coyyy</title>
</head>
<!-- cool like react, but... yea -->

<body>
  <?php
  include 'header.html';
  $title = "My First Post";
  $author = "Joe Mama";
  $wordCount = "100";
  $content = "This is my first post. I hope you like it.";
  include 'article.php';
  echo sayHi($author);
  include 'footer.html';
  ?>
</body>

</html>