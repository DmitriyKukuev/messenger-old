<?php
// if ((isset($_COOKIE['user']) && $_COOKIE['user'] != '')) {
//   header('Location: /messenger.php');
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>KDA message</title>
  <link rel="shortcut icon" href="logos/logo.png">
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <div class="content">
    <img src="logos/full.png" alt="image" class="logo" />
    <!-- форма -->
    <div id="i1" class="hide show">
      <div class="autho">
        <div class="hello">Добро пожаловать</div>
      </div>
      <button onclick="f2()" class="button">Начать общение</button>
    </div>
    <!-- форма входа -->
    <div id="i2" class="hide">
      <form action="scripts/user/autho.php" method="post">
        <div class="autho">
          <div class="form-input">
            <label for="login"> Введите логин: </label>
            <input type="text" name="login" id="login" placeholder="Логин" />
          </div>
          <div class="form-input">
            <label for="password"> Введите пароль: </label>
            <input type="password" name="password" id="password" placeholder="Пароль" />
          </div>
        </div>
        <button type="submit" class="button">Войти</button>
      </form>
      <div class="reg-forgot">
        <button onclick="f3()">Регистрация</button>
        <button onclick="f4()">Забыли пароль?</button>
      </div>
    </div>
    <!-- форма регистрации -->
    <div id="i3" class="hide">
      <form action="scripts/user/reg.php" method="post">
        <div class="autho">
          <div class="form-input">
            <label for="login"> Введите логин: </label>
            <input type="text" id="login" name="login" placeholder="Логин" />
          </div>
          <div class="form-input">
            <label for="password"> Введите пароль: </label>
            <input type="password" id="password" name="password" placeholder="Пароль" />
          </div>
        </div>
        <button type="submit" class="button">Регистрация</button>
      </form>
      <div class="reg-forgot">
        <button onclick="d3()">На страницу входа</button>
      </div>
    </div>
    <!-- форма восстановления пароля -->
    <div id="i4" class="hide">
      <form action="scripts/user/forgot.php" method="post">
        <div class="autho">
          <div class="form-input">
            <label for="login"> Введите логин: </label>
            <input type="text" id="login" name="login" placeholder="Логин" />
          </div>
          <div class="form-input">
            <label for="password"> Введите новый пароль: </label>
            <input type="password" id="password" name="password" placeholder="Почта" />
          </div>
        </div>
        <button type="submit" class="button">Восстановить</button>
      </form>
      <div class="reg-forgot">
        <button onclick="d4()">На страницу входа</button>
      </div>
    </div>
  </div>
  <script src="js/drop-index.js"></script>
</body>

</html>