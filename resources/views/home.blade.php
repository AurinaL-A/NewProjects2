<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="../css/style.css" rel="stylesheet" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    
    <header class="header">
    <div class="container">
            <div class="header__row">
                <div class="logo">
                    <p class="logo__text"><img src="../image/logo.svg" alt=""></p>
                </div>
                    <ul class="menu">
                        <li class="menu__link"><a href="/">Главная</a></li>
                        <li class="menu__link"><a href="/array">Массивы</a></li>
                    </ul>
            </div>
        </div>
        
    </header>
    <main>
        <div class="container">
            <div class="main__row">
                <div class="banner">
                    <div class="banner__info">
                        <h1 class="banner__title">It's <span class="banner__title_red">new</span> Molang</h1>
                        <p class="banner__text">Molang is a plump and adorable rabbit invented by a university student in South Korea, Yoon Hye Ji. 
                        Molang was created from his doodles when he wanted to create his own mascot character.</p>
                    </div>
                    
                        <img class="rabbit__image" src="../image/rabbit.png" alt="">
                </div>
            </div>
        </div>

    </main>
    <footer class="footer">
    <div class="container">
            <div class="footer__row">
                <div class="copurate">
                    <p class="copy">&copy; 2024 RapidTables.com</p>
                </div>
                    <div class="menu">
                    <p class="fio">Шапочкина Ирина Михайловна</p>
                    </div>
            </div>
        </div>
        
</footer>
    
</body>
</html>