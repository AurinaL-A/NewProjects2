<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="../css/style.css" rel="stylesheet" />

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
                <div class="cards">
                    @foreach($array as $item)
                    <div class="card">
                        <img src="{{ $item['path'] }}" alt="{{ $item['title'] }}">
                        <h3>{{ $item['title'] }}</h3>
                        <p>Цена: {{ $item['price'] }} ₽</p>
                    </div>
                @endforeach
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