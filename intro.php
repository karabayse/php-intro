<?php
echo "Hello, World!";
?>

<?php
      $words = array("the ", "quick ", "brown ", "fox ",
      "jumped ", "over ", "the ", "lazy ", "dog ");
      shuffle($words);
      foreach ($words as $word) {
          echo $word;
      };

      unset($word);
?>
