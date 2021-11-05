<html>
<head>
  <meta charset="utf-8">
    <title>While Loop</title>
  </head>
  <body>
    <?php
      class Chef {
        function makeChicken() {
          echo "The chef make chicken <br>";
        }
        function makeSalad() {
          echo "The chef makes salad <br>";
        }
        function makeSpecialDish() {
          echo "The chef makes bbq ribs <br>";
        }
      }
      class ItalianChef extends Chef{
        // this is called inheritance
        // we use chef class in our new ItalianChef class
        // here we can also create new function
        // but the function cant communicate with
        // the chef function but the italian chef can
        function makePasta() {
          echo "The chef make pasta";
        }
        // overwrite the inherited function or class
        function makeSpecialDish() {
          echo "The chef make chicken parm";
        }
      }
      $chef = new Chef();
      $chef->makeSpecialDish();
      $italian = new ItalianChef();
      $italian->makeSpecialDish();
      ?>
</body>
</html>
