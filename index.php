<?php
$user = [
  "name" => "Emmanuel",
  "email" => "e@gmail.com"
];
$user['name']
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
      <p><?php var_dump($user) ?></p>
    </pre>
  </main>
</body>

</html>