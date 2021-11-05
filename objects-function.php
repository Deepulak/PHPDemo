<html>
<head>
  <meta charset="utf-8">
    <title>While Loop</title>
  </head>
  <body>
    <?php
      class Student {
        var $name;
        var $major;
        var $gpa; // class

        function __construct($name, $major, $gpa) {
          $this->name = $name;
          $this->major = $major; // constructor function for class
          $this->gpa = $gpa;
        }
        function hasHonors(){
          if($this->gpa >= 3.5) {
            return "true";
          }
          return "false";
        }
      }
      $student1 = new Student("Jim", "Buisness", 2.8);
      $student2 = new Student("Pam", "Art", 3.6); // constructor function using on objects
      echo $student2->hasHonors();
      ?>
</body>
</html>
