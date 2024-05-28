<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?= $title ?></title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold"> Nested Array Challenge</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
      <h2 class="text-2xl font-semibold mb-4">Multiplication Table</h2>
      <?php for ($i = 1; $i <= 100; $i++) { ?>
        <?php for ($j = 1; $j <= 10; $j++) { ?>
          <?php $product = $i * $j; ?>
          <p> <?= $i ?> x <?= $j ?> = <strong><?= $product ?></strong>
            <br />
          <?php } ?>
        <?php } ?>
    </div>
  </div>
</body>

</html>