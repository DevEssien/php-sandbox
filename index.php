<?php
$colors = ['red', 'blue', 'green', 'yellow'];
$colors = array_reverse($colors);
// $colors[] = 'purple';
// $colors[] = 'orange';
array_push($colors, 'purple', "orange");
$colors[1] = "pink";
array_pop($colors);
$output = $colors;
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