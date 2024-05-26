<?php
$jobListings = [
  [
    "id" => 1,
    "job_title" => "backend dev",
    "company" => "tronweb",
    "contact_email" => "tron@gmail.com",
    "contact_phone" => "+234234566",
    "skills" => ["php", "mysql", "python"]
  ],
  [
    "id" => 2,
    "job_title" => "fullstack dev",
    "company" => "divergent",
    "contact_email" => "div@gmail.com",
    "contact_phone" => "+234435462",
    "skills" => ["javascript", "mysql", "html", "css", "nodejs"]
  ],
  [
    "id" => 3,
    "job_title" => "frontend dev",
    "company" => "MLH",
    "contact_email" => "mlh@gmail.com",
    "contact_phone" => "+1434534566",
    "skills" => ["reactjs", "css", "javascript", "html"]
  ],
];

$jobListings[] = [
  "id" => 4,
  "job_title" => "frontend dev",
  "company" => "Google",
  "contact_email" => "google@gmail.com",
  "contact_phone" => "+1235223",
  "skills" => ["reactjs", "css", "javascript", "html", "angular", "vuejs"]
];

$output;
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
      <p><?php
          print_r($jobListings);
          echo $jobListings[1]["job_title"];
          echo "<br />";
          echo $jobListings[2]["skills"][0];
          ?></p>
    </pre>
  </main>
</body>

</html>