<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--  add variables -->
<?php
  $paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $badWord = $_GET['badWord'];
  $lenght = strlen($paragraph);
?>

<!-- print paragraph -->
<div>
  Paragrafo:
    <br>
    <?php
        echo $paragraph;
    ?>
</div>

<!-- print paragraph lenght -->
<div>
  Lunghezza:
  <br>
  <?php
    echo $lenght;
   ?>
</div>

<?php
$censoredParagraph = str_replace($badWord, '***', $paragraph);
$lenghtCensored = strlen($paragraph);
?>

<!-- print censored paragraph-->
<div>
  Paragrafo Censurato:
  <br>
  <?php
    echo $censoredParagraph;
   ?>
</div>

<!-- print censored paragraph lenght -->
<div>
  Lunghezza:
  <br>
  <?php
    echo $lenghtCensored;
   ?>
</div>

</body>
</html>
