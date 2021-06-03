<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
</head>
<body>

  <?php

    $paragraph = "Ciao Ugo, come stai? Sarai felice di sapere che";

    $badWord = $_GET["bad_word"];

    if (strpos($paragraph, $badWord) !== false) {
      $censored = str_replace($badWord, "***", $paragraph);
    } else {
      echo $paragraph;
    }

  ?>

  <h1>PHP Bad Words</h1>

  <p>Paragrafo: <?php echo $paragraph; ?> </p>
  <p>Il paragrafo è lungo: <?php echo strlen($paragraph); ?> </p>
  
  <hr>
  
  <p>Paragrafo censurato: <?php echo $censored; ?> </p>
  <p>Il paragrafo censurato è lungo: <?php echo strlen($censored); ?> </p>

</body>
</html>