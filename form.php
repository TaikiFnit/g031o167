<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <style>
    body {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #78909C;
    }

  </style>
</head>

<body>
  <div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Create new Event</h2>
    </div>
    <form action="record.php" method="POST">
      <div class="mdl-card__supporting-text">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" id="title" name="title">
          <label class="mdl-textfield__label" for="title">タイトル</label>
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" id="locale" name="locale">
          <label class="mdl-textfield__label" for="local">開催地</label>
        </div>

        <div class="mdl-textfield mdl-js-textfield">
          <textarea class="mdl-textfield__input" type="text" rows="6" id="description" name="description"></textarea>
          <label class="mdl-textfield__label" for="description">イベント概要</label>
        </div>

        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
          <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
          <span class="mdl-radio__label">合宿</span>
        </label>

        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
          <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
          <span class="mdl-radio__label">新歓</span>
        </label>
      </div>

      <div class="mdl-card__actions mdl-card--border">
        <button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          Create
        </button>
      </div>
    </form>
  </div>

  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>

</html>
