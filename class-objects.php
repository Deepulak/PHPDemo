<html>
<head>
  <meta charset="utf-8">
    <title>While Loop</title>
  </head>
  <body>
    <?php
      class Book {
        var $title;
        var $name;
        var $pages;
      }
      $book1 = new Book;    // objects
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book1->pages = "435";
      echo $book1->pages;

      $book2 = new Book;
      $book2->title = "Tenet";
      $book2->author = "Christopher Nolan";
      $book2->pages = "2 hour 22 min";
      echo $book2->pages;
      echo $book2->author;
      ?>
</body>
</html>
