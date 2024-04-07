<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <title>Smart</title>
  <link rel="stylesheet" href="/src/assets/css/main_style.css">
</head>
<body id="body">
<div class="wrapper">
  <?php include 'header.php';?>
  <style>
    .smartForm label{
      color: rgba(0, 0, 0, 0.8);
      font-size: 48px;
      font-weight: 800;
      font-family: "Red Hat Display-Black", sans-serif;
      margin: 10px 0px 10px 0px;
    }
    .form-group{
      display: flex;
      flex-direction: row;
      align-items: center;
    }
    .smartForm label{
      width: 80px;
    }
    .smartForm textarea{
      outline: none;
      margin: 10px;
      font-size: 20px;
      font-family: "Red Hat Display-Black", sans-serif;
      resize: none;
      border-radius: 10px;
      padding: 5px;
      color: rgba(0, 0, 0, 0.8);
    }

    .smartForm textarea{
      width: calc(100% - 80px);
      overflow-x: hidden;
    }

    .smartForm textarea:invalid {
      border: 0px;
    }

    .smartForm textarea:valid {
      border: 0px;
    }
  </style>
  <main class="main">
    <div style="margin-left: auto; margin-right: auto; width: 50%;">
    <div style="text-align: left; ">
      <form class="smartForm" style="display: flex; flex-direction: column; margin: 10px;padding: 20px">
        <div class="form-group">
          <label for="specific" >S - </label>
          <textarea id="specific" name="specific" rows="3" placeholder="Введите конкретную цель..."></textarea>
        </div>
        <div class="form-group">
          <label for="measurable">M - </label>
          <textarea id="measurable" name="measurable" rows="3" placeholder="Введите измеримые критерии..."></textarea>
        </div>
        <div class="form-group">
          <label for="achievable">A - </label>
          <textarea id="achievable" name="achievable" rows="3" placeholder="Введите шаги для достижения цели..."></textarea>
        </div>
        <div class="form-group">
          <label for="relevant">R - </label>
          <textarea id="relevant" name="relevant" rows="3" placeholder="Введите соответстующие факторы..."></textarea>
        </div>
        <div class="form-group">
          <label for="time-bound">T - </label>
          <textarea id="time-bound" name="time-bound" rows="3" placeholder="Введите временые рамки..."></textarea>
        </div>
      </form>
    </div>
    </div>
    <div style="text-align: center">
    <button type="submit" style="width: 250px; height: 80px; border: 0px solid;"
            class="button_item">Создать SMART карточку</button>
    </div>
  </main>
  <footer class="footer">
    <div>
      <p>© mild Inc.. 2024 All rights reserved.</p>
    </div>
    <div class="navigation">
      <p>Made with Mild</p>
      <a><img src="/src/assets/images/mild_rep_git.png" style="width: 100px; height: 100px"></a>
    </div>
  </footer>
</div>

<script src="/src/assets/js/regestration.js"></script>
</body>
</html>
