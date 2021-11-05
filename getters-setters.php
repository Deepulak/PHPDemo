<html>
<head>
  <meta charset="utf-8">
    <title>While Loop</title>
  </head>
  <body>
    <?php
      	class Movie {
          public $title;
          // we cant access the private property
          // after the class code is done
          private $rating;

          function __construct($title, $rating) {
            $this->title = $title;
            $this->rating = $rating;
          }
          function getRating() {
            return $this->rating;
            // if we set here the getters
            // with that getRating fucntion then
            // we can access the private property with this function
           }
          
          function setRating($rating) {
            if($rating == "G" || $rating == "PG-13" || $rating == "R" || $rating == "NR" || $rating == "PG") {
              $this->rating = $rating;
            } else {
              $this->rating = "NR";
            }
            //$this->rating = $rating;
            // this is a setters
            // and its a function names setRating
            // for this function we can set any value to that property
          }
        }
        $avengers = new Movie("Avengers", "PG-13");
        //  movie rating G, PG, PG-13, R, NR
        $avengers->setRating("7.8"); // setters
        echo $avengers->getRating(); // getters
      ?>
</body>
</html>
