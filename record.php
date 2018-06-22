<?php

$pdo = new PDO("mysql:host=127.0.0.1; dbname=cakephp_test; charset=utf8", 'root', 'devfnit');

$stmt = $pdo->prepare("insert into events(title, description, locale, event_type_id, created, modified) values(:title, :description, :locale, :event_type_id, now(), now());");

$stmt->bindParam(':title', $_POST["title"], PDO::PARAM_STR);
$stmt->bindParam(':description', $_POST["description"], PDO::PARAM_STR);
$stmt->bindParam(':locale', $_POST["locale"], PDO::PARAM_STR);
$stmt->bindValue(':event_type_id', $_POST["options"], PDO::PARAM_INT);

$stmt->execute();

$events = $pdo->query("select * from events;")->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Records</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <style>
    body {
      width: 100%;
      height: auto;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #78909C;
    }
    .demo-card-wide.mdl-card {
      width: auto;
      margin: 50px;
      padding: 20px;
    }
    table {
      margin-right: 120px;
    }
  </style>
</head>

<body>
  <div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Event List</h2>
    </div>

    <div class="mdl-card__supporting-text">
      <table class="mdl-data-table">
        <thead>
          <tr>
          <th>ID</th>
          <th class="mdl-data-table__cell--non-numeric">Title</th>
          <th class="mdl-data-table__cell--non-numeric">Locale</th>
          <th class="mdl-data-table__cell--non-numeric">Description</th>
          <th class="mdl-data-table__cell--non-numeric">Event Type</th>
          <th class="mdl-data-table__cell--non-numeric">Created</th>
          <th class="mdl-data-table__cell--non-numeric">Modified</th>
          </tr>
        </thead>
        <tbody>
        <?php
          foreach ($events as $event) {
          $event_type = $event["event_type_id"] == 1 ? "合宿" : "新歓";
          $event_description = mb_strimwidth($event["description"], 0, 100, '...', 'utf-8');
          echo
            "<tr>",
            "<td>$event[id]</td><td class='mdl-data-table__cell--non-numeric'>$event[title]</td>",
            "<td class='mdl-data-table__cell--non-numeric'>$event[locale]</td>",
            "<td class='mdl-data-table__cell--non-numeric'>$event_description</td>",
            "<td class='mdl-data-table__cell--non-numeric'>$event_type</td>",
            "<td class='mdl-data-table__cell--non-numeric'>$event[created]</td>",
            "<td class='mdl-data-table__cell--non-numeric'>$event[modified]</td>",
            "</tr>";
          }
        ?>
        </tbody>
      </table>
    </div>

    <div class="mdl-card__actions mdl-card--border">
      <a href="./form.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
        Go to Create Page
      </a>
    </div>

  </div>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
