<?php
$numbers = [1, 2, 3, 4, 5];
$sum = array_sum(($numbers));
$arrayLen = count($numbers);
$output = "The sum of the $arrayLen is $sum";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo "Testing" ?></title>
</head>

<body>
  <main>
    <h1> Arrays: </h1>
    <pre>
      <p><?php print_r($output) ?></p>
    </pre>
  </main>
</body>

</html>