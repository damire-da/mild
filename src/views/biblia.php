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
        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: start;
        }

        .card {
            padding: 1%;
            width: 150px;
            height: 200px;
            border: solid 2px rgba(0, 0, 0, 0.8);
            border-radius: 5px;
            margin: 20px;
        }
        .card:hover {
            box-shadow: 1px 1px 6px 1px rgba(0,0,0,0.85);
        }
        .card p{
            font-size: 15px;
            margin: 0px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>

    <main class="main">
        <?php include 'sidenav.php';?>
        <section class="cards">
            <div class="card" onclick="openCard()">
                <p>Стать фотографом за 5 месяцев</p>
            </div>
            <div class="card" onclick="openCard()">
                <p>Стать флористом за 5 месяцев</p>
            </div>
            <div class="card" onclick="openCard()">
                <p>Заработать миллион за 1 год</p>
            </div>
            <div class="card" onclick="openCard()">
                <p>Стать фотографом за 5 месяцев</p>
            </div>
            <div class="card" onclick="openCard()">
                <p>Стать флористом за 5 месяцев</p>
            </div>
            <div class="card" onclick="openCard()">
                <p>Заработать миллион за 1 год</p>
            </div>
        </section>
        <div id="card" style="display: none;position: fixed;
                top: 45%;
                left: 50%;
                transform: translate(-50%, -50%);
                border: 1px solid #000;
                width: 500px;
                opacity: 1;
                z-index: 9;
                border-radius: 10px;
                background-color: white;">
            <div style="display: flex; flex-direction: column; margin: 10px;padding: 20px">
                <p style="text-align: center">Карточка #...</p>
                <div>
                    <p>Specific</p>
                </div>
                <div>
                    <p>Measurable</p>
                </div>
                <div>
                    <p>Achievable</p>
                </div>
                <div>
                    <p>Relevant</p>
                </div>
                <div>
                    <p>Time-bound</p>
                </div>
            </div>
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
<script src="/assets/js/regestration.js"></script>
</body>
</html>
