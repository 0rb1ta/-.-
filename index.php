<?php
header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
header("Content-Security-Policy: "
. "default-src 'self'; "
. "script-src 'self' "
. "https://www.googletagmanager.com "
. "https://www.google-analytics.com "
. "https://api-maps.yandex.ru "
. "https://suggest-maps.yandex.ru "
. "https://yandex.ru "
. "https://yastatic.net "
. "https://mc.yandex.ru https://mc.yandex.com "
. "https://cdnjs.cloudflare.com "
. "https://*.maps.yandex.net; "
. "style-src 'self' 'unsafe-inline' "
. "https://fonts.googleapis.com "
. "https://yastatic.net "
. "https://cdnjs.cloudflare.com; "
. "img-src 'self' data: https: "
. "https://*.maps.yandex.net; "
. "font-src 'self' data: "
. "https://fonts.gstatic.com "
. "https://cdnjs.cloudflare.com; "
. "connect-src 'self' "
. "https://api-maps.yandex.ru "
. "https://suggest-maps.yandex.ru "
. "https://*.maps.yandex.net "
. "https://api.openrouteservice.org "
. "https://mc.yandex.ru https://mc.yandex.com wss://mc.yandex.com "
. "https://www.google-analytics.com "
. "https://www.googletagmanager.com; "
. "object-src 'none'; "
. "base-uri 'self';"
);



header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: geolocation=(self), microphone=(), camera=()");
?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Картацион для Twitch: бесплатная альтернатива для стримеров с Блекджеком и QR</title>
    
    <meta name="description" content="Картацион.рф — интерактивная карта для Twitch стримеров. Донаты = метры маршрута, QR в Яндекс.Навигатор, таймер. Бесплатная альтернатива.">
    <!-- SEO Meta Tags -->
    <meta name="keywords" content="картацион, картацион рф, бесплатная карта для стримеров, twitch картацион, интерактивная карта донаты, расстояние за донаты, маршрут по рублям, альтернатива , стримерская карта">
    <meta name="author" content="Картацион.рф">
    <link rel="canonical" href="https://xn--80aayfsflq1b.xn--p1ai/">
    <!-- Open Graph -->
    <meta property="og:title" content="Картацион.рф — Бесплатная интерактивная карта для стримеров">
    <meta property="og:description" content="Увлекательные зрелища для чаттерсов. Устанавливайте маршруты, запускайте таймер, кидайте донаты, уводите стримера в Тверь, генерируйте QR-коды. Бесплатно">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://xn--80aayfsflq1b.xn--p1ai/">
    <meta property="og:image" content="https://xn--80aayfsflq1b.xn--p1ai/preview.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Картацион.рф">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Картацион.рф — Бесплатная интерактивная карта для стримеров">
    <meta name="twitter:description" content="Донаты = метры маршрута. QR в навигатор. Бесплатная альтернатива Mapcion.">
    <meta name="twitter:image" content="https://xn--80aayfsflq1b.xn--p1ai/preview.png">
    <meta name="robots" content="index, follow">
    <meta name="yandex" content="always-index, static">
    <!-- Favicon -->
    <link rel="icon" href="https://xn--80aayfsflq1b.xn--p1ai/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://xn--80aayfsflq1b.xn--p1ai/favicon-32x32.png" type="image/png" sizes="32x32">
    <link rel="icon" href="https://xn--80aayfsflq1b.xn--p1ai/favicon-16x16.png" type="image/png" sizes="16x16">
    <link rel="apple-touch-icon" href="https://xn--80aayfsflq1b.xn--p1ai/apple-touch-icon.png">
    <link rel="manifest" href="https://xn--80aayfsflq1b.xn--p1ai/site.webmanifest">

    
    <!-- FontAwesome для иконок -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=4b33d040-5e9c-4960-a10e-269a3ffc6c1b&lang=ru_RU" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Yandex.Metrika counter -->
    
    <noscript><div><img src="https://mc.yandex.ru/watch/106197846" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    
    <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime(__DIR__.'/css/style.css'); ?>">
    <link rel="stylesheet" href="css/dice.css?v=<?php echo filemtime(__DIR__.'/css/dice.css'); ?>">



    <script type="application/ld+json">
    {"@context":"https://schema.org","@type":"SoftwareApplication","name":"Картацион.рф","description":"Интерактивная карта для Twitch стримеров с донатами","applicationCategory":"NavigationApplication","operatingSystem":"Web","offers":{"@type":"Offer","price":"0","priceCurrency":"RUB"},"url":"https://картацион.рф","featureList":["Построение маршрутов","QR-коды","Twitch донаты"]}
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Картацион.рф",
        "description": "Интерактивная карта для Twitch стримеров. Донаты переводятся в метры маршрута на карте. Бесплатная альтернатива .",
        "url": "https://xn--80aayfsflq1b.xn--p1ai/",
        "image": "https://xn--80aayfsflq1b.xn--p1ai/preview.png",
        "applicationCategory": "NavigationApplication",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "RUB"
        },
        "creator": {
            "@type": "Person",
            "name": "Дмитрий"
        },
        "author": {
            "@type": "Person",
            "name": "Серега Pie Tanner"
            },
        "operatingSystem": "Web",
        "browserRequirements": "Requires JavaScript"
    }
    </script>




</head>
<body class="dark">
    <div class="container">
        <div class="map">
            <div id="map"></div>
            <div class="floating-logo">
                <div class="logo-title">КАРТАЦИОН.РФ<sup>
                <a href="/test-random.html" style="text-decoration: none; color: inherit;" id="activity-status" class="status-indicator inactive" title="Нет активных пользователей">β</a>
                <span id="active-users-count" style="display:none;">0</span>
                </sup>
                </div>
                <div class="subtitle">ЗРЕЛИЩА ДЛЯ ЧАТТЕРСОВ</div>
            </div>
        </div>
        <div class="notifications-stack" id="notificationsStack"></div>

        <div id="helper-bubble" class="helper-bubble" style="display: none;">
            <div class="helper-header">
                <span><i class="fas fa-lightbulb"></i> Как это работает?</span>
                <button class="close-btn" type="button">
                <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="helper-content">
                <ol>
                    <li><i class="fas fa-map-pin"></i> <strong>Двойной клик</strong> на карту — установи начальную точку</li>
                    <li><i class="fas fa-ruble-sign"></i> Введи <strong>цену за 1м</strong> (₽/м) и <strong>донат от зрителя</strong></li>
                    <li><i class="fas fa-compass"></i> Выбери <strong>направление</strong> при помощи стрелок или <strong>отмени</strong> последний ход кнопкой в центре</li>
                    <li><i class="fas fa-flag-checkered"></i> Нажми <strong>FINISH</strong> — сканируй QR-код и получай маршрут в смартфоне!</li>
                </ol>
            </div>
        </div>

        <div class="right-panel">
            <div class="panel">
                <div class="panel-header"></div>

                <div class="panel-top">
                    <div class="timer-box" id="timerBox">
                        <div class="timer-label"></div>
                        <div class="timer-display" id="timerDisplay">00:00.00</div>
                        <div class="timer-buttons">
                            <button class="btn-small" id="minPlusBtn" title="Добавить 1 минуту">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button class="btn-small" id="minMinusBtn" title="Вычесть 1 минуту">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn-small" id="timerStartBtn" title="Запустить / Пауза">
                                <i class="fas fa-play"></i>
                            </button>
                            <button class="btn-small" id="timerResetBtn" title="Сброс">
                                <i class="fas fa-redo"></i>
                            </button>
                        </div>
                    </div>


                    <div id="diceDrawer" class="dice-drawer">
                    <div class="dice-row">

                    <div class="dice" id="dice" data-v="1" title="Кубик">
                    <div class="dice-cube">
                    <div class="dice-face face-1"><span class="pip c"></span></div>
                    <div class="dice-face face-2"><span class="pip tl"></span><span class="pip br"></span></div>
                    <div class="dice-face face-3"><span class="pip tl"></span><span class="pip c"></span><span class="pip br"></span></div>
                    <div class="dice-face face-4"><span class="pip tl"></span><span class="pip tr"></span><span class="pip bl"></span><span class="pip br"></span></div>
                    <div class="dice-face face-5"><span class="pip tl"></span><span class="pip tr"></span><span class="pip c"></span><span class="pip bl"></span><span class="pip br"></span></div>
                    <div class="dice-face face-6"><span class="pip tl"></span><span class="pip tr"></span><span class="pip ml"></span><span class="pip mr"></span><span class="pip bl"></span><span class="pip br"></span></div>
                    </div>
                    </div>



                    <button class="btn btn-primary" id="diceRollBtn" type="button">
                    <i class="fas fa-dice-d6"></i> Бросить
                    </button>
                    </div>

                    <div class="dice-modes">
                    <label class="tracking-checkbox">
                    <input type="radio" name="diceMode" value="mult" checked>
                    <span>Множитель</span>
                    </label>

                    <label class="tracking-checkbox">
                    <input type="radio" name="diceMode" value="free">
                    <span>Просто</span>
                    </label>
                    </div>

                    <div class="dice-hint" id="diceHint"></div>
                    </div>

                    <div class="section" style="flex-direction: row; align-items: center; justify-content: space-between; padding: 6px 12px;">
                    <label class="tracking-checkbox">
                    <input type="checkbox" id="trackingToggle">
                    <i class="fas fa-location-dot"></i>
                    <span>Отслеживание</span>
                    </label>

                    <label class="tracking-checkbox">
                    <input type="checkbox" id="diceToggle">
                    <i class="fas fa-dice"></i>
                    <span>Кубик</span>
                    </label>
                    </div>


            </div>

                    <div class="panel-scroll">
                    <div class="section">
                        <div class="label">Маршрут</div>
                        <div class="route-types">
                            <button class="route-btn active" data-route="foot-walking">
                                <i class="fas fa-person-walking"></i>
                                <span>Пешком</span>
                            </button>
                            <button class="route-btn" data-route="cycling-regular">
                                <i class="fas fa-bicycle"></i>
                                <span>Велик</span>
                            </button>
                            <button class="route-btn" data-route="driving-car">
                                <i class="fas fa-car"></i>
                                <span>Авто</span>
                            </button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="input-row">
                            <div class="input-col">
                                <div class="input-group">
                                    <input type="number" id="priceInput" placeholder="1" min="0" step="0.01">
                                    <div class="input-suffix">₽/м</div>
                                </div>
                                <div class="input-group">
                                    <input type="number" id="donationInput" placeholder="100" min="0" step="0.01">
                                    <div class="input-suffix">₽</div>
                                </div>
                            </div>
                            <div class="directions-cross">
                                <button class="dir-btn" data-dir="N" title="Север">
                                    <i class="fas fa-arrow-up"></i>
                                </button>
                                <button class="dir-btn" data-dir="W" title="Запад">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <button class="dir-btn-undo" id="undoBtn" title="Отменить последний ход" disabled>
                                    <i class="fas fa-undo"></i>
                                </button>
                                <button class="dir-btn" data-dir="E" title="Восток">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                                <button class="dir-btn" data-dir="S" title="Юг">
                                    <i class="fas fa-arrow-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-success" id="finishBtn" disabled>
                            <i class="fas fa-flag-checkered"></i> Finish
                        </button>
                        <button class="btn btn-primary" id="resetBtn">
                            <i class="fas fa-redo"></i> Reset
                        </button>
                   </div>

                    <div class="log-container">
                        <div class="log-label">📋 Лог</div>
                        <div class="log-list" id="logList">
                            <div class="log-empty">Движений нет</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="about-panel">
                <div class="about-item">
                <strong>Главный тестировщик:</strong>
                <a href="https://www.twitch.tv/pie_tanner" target="_blank" rel="noopener noreferrer">
                Серега Pie Tanner
                </a>
                <span class="twitch-icon-wrapper">
                <img id="twitchLiveIcon" class="twitch-icon offline" src="/img/twitch-icon-offline.png" alt="Twitch status" width="24" height="24">
                </span>
                </div>

                <div class="about-item">
                <strong>Спасибо за поддержку:</strong>
                <a href="https://www.twitch.tv/lota" target="_blank" rel="noopener noreferrer">LOTA</a>
                </div>

                <div class="about-item">
                <strong>По работе сайта:</strong>
                <a href="https://www.twitch.tv/aix_power" target="_blank" rel="noopener noreferrer">AIX_POWER</a>
                </div>

                <div class="about-bottom">
                <div class="about-support-btn" id="supportBtn" title="Поддержать">
                <img src="/img/support-heart.png" alt="Поддержать">
                </div>

                <div style="flex: 1;"></div>  <!-- spacer -->

                <button class="about-theme-btn" id="helpToggle" title="Показать подсказку">
                <i class="fas fa-question"></i>
                </button>
                <button class="about-theme-btn" id="themeToggle" title="Переключить тему">
                <i class="fas fa-sun"></i>
                </button>
                <button class="about-version" type="button" title="Версия" disabled>0.1.17</button>
                </div>


            </div>
        </div>
    </div>

    <script src="js/activity-indicator.js"></script>
    <script src="js/app.js"></script>
    <script src="js/dice.js"></script>
    <script src="js/twitch-live.js"></script>
    <script src="js/footer.js"></script>

    <section style="display: none;" class="seo-content">
    <h2>Что такое Картацион.рф?</h2>
    <p>Картацион — это бесплатная интерактивная карта для Twitch стримеров. Система позволяет зрителям дарить донаты, которые переводятся в метры маршрута на карте. Это создаёт увлекательный контент для вашего стрима.</p>

    <h3>Как использовать Картацион.рф?</h3>
    <ol>
    <li>Установите начальную точку двойным кликом на карту</li>
    <li>Введите цену за 1 метр (₽/м) и размер доната</li>
    <li>Используйте стрелки для управления направлением маршрута</li>
    <li>Сканируйте QR-код в Яндекс.Навигатор для получения маршрута</li>
    </ol>

    <h3>Особенности</h3>
    <ul>
    <li>Бесплатное использование</li>
    <li>QR-коды для навигации в смартфоне</li>
    <li>Поддержка разных видов транспорта (пешком, велик, авто)</li>
    <li>Встроенный таймер для стримов</li>
    <li>Кубик для рандома</li>
    </ul>
    </section>


    <footer class="footer">
    <div class="footer-handle">
    <button id="footerToggle" class="footer-toggle" type="button" title="Футер">
    <i class="fas fa-chevron-up"></i>
    </button>
    </div>
    <div class="footer-body">
    <div class="footer-container">
    <div class="footer-content">
    <div class="footer-section">
    <h2>О нашем проекте Картациона</h2>
    <p>Интерактивное веб-приложение для картографических челленджей. Зрители отправляют донаты, которые конвертируются в метры маршрута на карте в реальном времени. Есть функционал кубика, когда сумма доната автоматически умножается на выпавшую рандомную грань кубика. Есть проверка рандомайзера, по нажатию на иконку "бета". Построение маршрутов прямо на карте при помощи open-source инструментов, ближайшая кооординатная точка маршрута ищется при помощи специальной механики, что особенно помогает если точка в поле</p>
    </div>

    <div class="footer-section">
    <h2>Возможности</h2>
    <ul>
    <li>📍 Интерактивная карта Яндекс</li>
    <li>💰 Расчёт дистанции по донатам</li>
    <li>🎲 Мультипликатор-кубик (x1–x6)</li>
    <li>⏱️ Система таймера челленджа</li>
    </ul>
    </div>

    <div class="footer-section">
    <h2>Инструменты</h2>
    <ul>
    <li>🗺️ QR-коды для навигации</li>
    <li>↩️ История ходов (Undo)</li>
    <li>📊 Логирование действий</li>
    <li>🚗 Маршруты на карте по всему миру: пешком, велик, авто</li>
    </ul>
    </div>

    <div class="footer-section">
    <h2>Разработка</h2>
    <ul>
    <li><a href="https://www.twitch.tv/pie_tanner" target="_blank" rel="noopener">Тестер</a></li>
    <li><a href="https://www.twitch.tv/aix_power" target="_blank" rel="noopener">Автор</a></li>
    </ul>
    </div>
    </div>

    <div class="footer-bottom">
    <p>&copy; 2026–2026 <strong>Картацион.рф</strong> • Картографические челленджи для стримеров и контент-мейкеров • <a href="https://xn--80aayfsflq1b.xn--p1ai/">Вернуться ↑</a></p>
    </div>
    </div>
    </div>


    </footer>




</body>
</html>
