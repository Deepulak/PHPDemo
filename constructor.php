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

        function __construct($aTitle, $aAuthor, $aPages) {
          $this->title = $aTitle;   // here this is a kind of attribute for php language
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }
      }

      // after using this statement we can now write the below condition in 1 line
      // where we actually needed 4 line before
      $book1 = new Book("Harry Potter", "JK Rowling", 355);

      /*$book1 = new Book;
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book1->pages = "435";
      echo $book1->pages;

      $book2 = new Book;
      $book2->title = "Tenet";
      $book2->author = "Christopher Nolan";
      $book2->pages = "2 hour 22 min";
      echo $book2->pages;
      echo $book2->author;*/
      // after using this statement we can now write the above condition in 1 line
      // where we actually needed 4 line before
      $book2 = new Book("Lord Of the Rings", "Tolkien", 700);
      echo $book1->title;
      echo $book2->author;
      ?>
</body>
</html>
