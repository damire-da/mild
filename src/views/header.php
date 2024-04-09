<header class="header">
    <style type="text/css">
        .enter, .reg {
            display: none;
            position: fixed;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid #000;
            width: 500px;
            opacity: 1;
            z-index: 9;
            border-radius: 10px;
            background-color: #282828FF;
        }
        label{
            color:white;
            font-family: "Raleway-Regular", sans-serif;
            font-size: 20px;
            margin: 10px 0px 10px 0px;
        }
        .overlay {
            background: #000;
            opacity: 0.5;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 8;
            display: none;
        }
        .submit_button{
            border: solid 0px;
            background-color: #000000CC;
            color: #ffffff;
            padding: 10px 20px 10px 20px;
            border-radius: 3px;
            font-size: 20px;
        }
        .submit_button:hover{
            cursor: pointer;
            background-color: rgba(77, 77, 77, 0.8);
            color: #ffffff;
        }
        input{
            outline:none;
            height: 25px;
            color:#000000CC;
            font-family: "Raleway-Regular", sans-serif;
            font-size: 20px;
            border-radius: 10px;
            padding: 5px;
        }
    </style>
    <script type="text/javascript">
        function openRegForm() {
            let reg = document.querySelector(".reg");
            let overlay = document.querySelector(".overlay");
            reg.style.display = "block";
            overlay.style.display = "block";
        }
        function closePopup() {
            let reg = document.getElementById("reg");
            let overlay = document.querySelector(".overlay");
            let enter = document.querySelector(".enter");
            let card = document.getElementById("card");
            if (card){
                card.style.display = "none";
            }
            if (enter){
                enter.style.display = "none";
                reg.style.display = "none";
            }
            overlay.style.display = "none";
        }
        function openEnterForm() {
            let enter = document.querySelector(".enter");
            let overlay = document.querySelector(".overlay");
            enter.style.display = "block";
            overlay.style.display = "block";
        }
        function openCard() {
            let card = document.getElementById("card");
            let overlay = document.querySelector(".overlay");
            card.style.display = "block";
            overlay.style.display = "block";
        }
    </script>

    <nav class="navigation">
        <a class="nav_item" style="color: rgba(0, 0, 0, 0.8);"><h1>Mild</h1></a>
        <a href="/" class="nav_item"><p>Главная</p></a>
        <a href="/cards" class="nav_item"><p>Мои цели</p></a>
    </nav>


    <?php if (isset($_SESSION["user_id"])): ?>
    <?php echo "<nav class='navigation'> <p style='font-weight: 500' class='nav_item'>"
    . $_SESSION["username"] . "</p>
    <a class='button_item' href='/logout'><p>Выход</p></a></nav>";?>
    <?php else: ?>
    <nav class="navigation">
        <a class="nav_item" style="font-weight: 500" onclick="openRegForm()"><p>Регистрация</p></a>
        <a class="button_item" onclick="openEnterForm()"><p>Вход</p></a>
    </nav>
    <div id = reg class="reg">
        <form class="forma" action="/register" method="POST" style="display: flex; flex-direction: column; margin: 10px;padding: 20px">
            <h1 style="text-align: center; color:white"><b>Регистрация</b></h1>
            <br>
            <label for="reg_username">Логин:</label>
            <input type="text" id="reg_username" name="username" placeholder="Введите логин">
            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" placeholder="Введите эл. почту">
            <label for="reg_password">Пароль:</label>
            <input type="password" id="reg_password" name="password" placeholder="Введите пароль">
            <label for="repassword">Повторите пароль:</label>
            <input type="password" id="repassword" name="repassword" placeholder="Повторите пароль">
            <br>
            <button class="submit_button" type="submit">Зарегистрироваться</button>
        </form>
    </div>
    <div class="enter">
        <form class="forma" action="/login" method="POST" style="display: flex; flex-direction: column; margin: 10px;padding: 20px">
            <h1 style="text-align: center; color:white"><b>Вход</b></h1>
            <br>
            <label for="enter_username">Логин:</label>
            <input type="text" id="enter_username" name="username" placeholder="Введите логин">
            <label for="enter_password">Пароль:</label>
            <input type="password" id="enter_password" name="password" placeholder="Введите пароль">
            <br>
            <button class="submit_button" type="submit">Войти</button>
        </form>
        <?php if (isset($data['error'])): ?>
        <p style="color: white; text-align: center"><?php echo htmlspecialchars($data['error']); ?></p><br>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <div class="overlay" onclick="closePopup()"></div>
</header>
