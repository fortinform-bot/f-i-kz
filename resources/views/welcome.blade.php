
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORT-INFORM | IT-решения и Генеративный интеллект в Алматы</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #0b0f12;
            --bg-card: #1f262e;
            --cyan-dark: #004d4d;
            --cyan-accent: #00a3a3;
            --cyan-bright: #00f2f2;
            --white: #ffffff;
            --text-gray: #aab4be;
            --transition: all 0.3s ease;
        }

        * { box-sizing: border-box; }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--white);
            font-family: 'Inter', sans-serif;
            margin: 0;
            line-height: 1.6;
        }

        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

        /* Шапка */
        header {
            padding: 10px 0;
            position: fixed;
            width: 100%;
            top: 0;
            background: rgba(31, 38, 46, 0.9);
            backdrop-filter: blur(10px);
            z-index: 1000;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .nav-flex { display: flex; justify-content: space-between; align-items: center; }
        .logo-link { display: flex; align-items: center; text-decoration: none; color: white; }
        .logo-img { height: 80px; }
        header h1 { font-size: 1.3rem; margin-left: 15px; }
        nav a { color: var(--white); text-decoration: none; margin-left: 30px; font-weight: 500; transition: var(--transition); }
        nav a:hover { color: var(--cyan-bright); }

        /* Hero */
        #hero {
            padding-top: 120px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('/images/fi_office.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            text-align: center;
        }

        .hero-text-box {
            background: rgba(0, 77, 77, 0.3);
            padding: 50px;
            border-radius: 15px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(0, 163, 163, 0.2);
        }

        .hero h1 { font-size: 3.5rem; margin-bottom: 20px; }
        .accent { background: linear-gradient(90deg, var(--cyan-accent), var(--cyan-bright)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .hero p { font-size: 1.2rem; color: var(--text-gray); max-width: 800px; margin: 0 auto 40px; }

        /* Кнопки */
        .btn { padding: 15px 35px; border-radius: 5px; text-decoration: none; font-weight: bold; transition: var(--transition); display: inline-block; border: none; cursor: pointer; }
        .btn-primary { background: var(--cyan-accent); color: white; }
        .btn-primary:hover { background: var(--cyan-bright); box-shadow: 0 0 20px rgba(0,242,242,0.4); }

        /* Общий стиль секций */
        .section { padding: 100px 0; }
        h2 { text-align: center; font-size: 2.5rem; margin-bottom: 60px; }

        /* Стили карточек (Достижения, Блог) */
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .card { background: var(--bg-card); padding: 40px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); transition: var(--transition); display: flex; flex-direction: column; }
        .card:hover { transform: translateY(-10px); border-color: var(--cyan-accent); }
        .card h3 { color: var(--cyan-bright); margin-top: 0; }
        .card p { flex-grow: 1; }
        .card a { color: var(--cyan-bright); text-decoration: none; font-weight: bold; margin-top: 20px; }

        /* Наши услуги */
        #services ul {
            list-style: none;
            padding: 0;
            max-width: 800px;
            margin: 0 auto;
        }
        #services li {
            background: var(--bg-card);
            padding: 25px;
            margin-bottom: 15px;
            border-radius: 8px;
            border-left: 4px solid var(--cyan-accent);
            transition: var(--transition);
        }
        #services li:hover { transform: scale(1.03); }
        .client-speak { font-size: 0.9rem; color: var(--text-gray); margin-top: 10px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 10px; }

        /* Контакты */
        .contact-flex { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; }
        form input, form textarea { width: 100%; padding: 15px; margin-bottom: 20px; background: #1c2229; border: 1px solid #30363d; color: white; border-radius: 5px; }
        #map { height: 400px; border-radius: 12px; }

        /* Новые стили для соцсетей */
        .social-links {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 25px;
            margin-bottom: 30px;
        }
        .social-links a {
            display: inline-flex;
            align-items: center;
            color: var(--text-gray);
            text-decoration: none;
            font-size: 1.1rem;
            transition: var(--transition);
        }
        .social-links a:hover {
            color: var(--cyan-bright);
            transform: scale(1.1);
        }
        .social-links svg {
            width: 32px;
            height: 32px;
            margin-right: 10px;
        }

        /* Футер */
        footer {
            background-color: var(--bg-card);
            padding: 20px 0;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .footer-left {
            display: flex;
            align-items: center;
            gap: 25px;
        }
        .footer-left .logo-img {
            height: 50px;
        }
        .copyright {
            color: var(--text-gray);
            font-size: 0.9rem;
        }
        footer nav a {
            color: var(--text-gray);
            text-decoration: none;
            margin-left: 30px;
            font-weight: 500;
            transition: var(--transition);
        }
        footer nav a:hover {
            color: var(--cyan-bright);
        }

        /* Мобильное меню */
        #hamburger-menu { display: none; cursor: pointer; z-index: 1201;}
        #hamburger-menu span { display: block; width: 25px; height: 3px; margin: 5px; background: white; transition: 0.3s; }

        #mobile-nav-panel {
            position: fixed;
            top: 80px;
            right: 20px;
            width: 250px;
            background: var(--bg-card);
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,0.1);
            transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-20px);
            z-index: 1100;
            padding: 10px;
        }
        #mobile-nav-panel.active { 
            opacity: 1; 
            visibility: visible; 
            transform: translateY(0);
        }
        #mobile-nav-panel nav { display: flex; flex-direction: column; }
        #mobile-nav-panel nav a { margin: 0; padding: 15px; border-radius: 5px; }
        #mobile-nav-panel nav a:hover { background-color: rgba(0,0,0,0.2); }

        /* Кнопка "Наверх" */
        #scrollTopBtn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: var(--cyan-accent);
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 20px;
            display: none; /* Hidden by default */
            transition: opacity 0.3s, transform 0.3s;
            opacity: 0;
            transform: translateY(20px);
        }
        #scrollTopBtn:hover {
            background-color: var(--cyan-bright);
        }
        #scrollTopBtn.show {
            opacity: 1;
            transform: translateY(0);
            display: block;
        }

        @media (max-width: 992px) { /* Adjusted breakpoint for footer nav */
             header nav.main-nav { display: none; }
             #hamburger-menu { display: block; }
             .footer-content {
                flex-direction: column;
                gap: 20px;
            }
            footer nav {
                display: flex;
                gap: 20px;
                flex-wrap: wrap;
                justify-content: center;
            }
            footer nav a {
                margin-left: 0;
            }
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .contact-flex { grid-template-columns: 1fr; }
            header h1 { font-size: 1.2rem; }
            header h1 .accent { display: none; }
            .social-links { flex-direction: column; gap: 20px; align-items: flex-start; }
            .section h2 {text-align: left;}
        }

    </style>
</head>
<body>

<header>
    <div class="container nav-flex">
        <a href="{{ route('home') }}" class="logo-link">
            <img src="/images/logo.png" alt="FORT-INFORM" class="logo-img">
            <h1>FORT-INFORM <span class="accent">IT-решения: от С++ до AI</span></h1>
        </a>
        <nav class="main-nav">
            <a href="#hero">Главная</a>
            <a href="#experience">История</a>
            <a href="#services">Услуги</a>
            <a href="#blog">Блог</a>
            <a href="#contacts">Контакты</a>
        </nav>
        <div id="hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

<div id="mobile-nav-panel">
    <nav>
        <a href="#hero">Главная</a>
        <a href="#experience">История</a>
        <a href="#services">Услуги</a>
        <a href="#blog">Блог</a>
        <a href="#contacts">Контакты</a>
    </nav>
</div>

<section id="hero">
    <div class="container">
        <div class="hero-text-box">
            <h1>Интеллект, проверенный <span class="accent">33 годами опыта</span></h1>
            <p>От разработки систем на С++ для государственных структур до внедрения Генеративного ИИ в современные бизнес-процессы Алматы.</p>
            <a href="#contacts" class="btn btn-primary">Начать сотрудничество</a>
        </div>
    </div>
</section>

<section id="experience" class="section">
    <div class="container">
        <h2>Наследие и <span class="accent">Инновации</span></h2>
        <div class="grid">
            <div class="card">
                <h3>УДП РК «Алатау»</h3>
                <p>Автоматизация всех бизнес-процессов санатория Управления делами Президента.</p>
            </div>
            <div class="card">
                <h3>МВД РК «Казахстан»</h3>
                <p>Разработка ПО для Санатория и Госпиталя МВД РК.</p>
            </div>
            <div class="card">
                <h3>ПО «Феликс»</h3>
                <p>Легендарная бухгалтерская программа, успешно работавшая до 2005 года.</p>
            </div>
            <div class="card">
                <h3>TOURKZ.COM</h3>
                <p>Первый национальный туристический портал с агрегацией предложений.</p>
            </div>
            <div class="card">
                <h3>SMM-AI-KZ</h3>
                <p>Проект внедрения нейросетей в современный маркетинг и продвижение брендов.</p>
            </div>
            <div class="card">
                <h3>Генеративный ИИ</h3>
                <p>Внедрение LLM (ChatGPT, Gemini) и AI-агентов в бизнес-процессы заказчиков.</p>
            </div>
        </div>
    </div>
</section>

<section id="services" class="section">
    <div class="container">
        <h2>Наши <span class="accent">Услуги</span> в области AI</h2>
        <ul>
             <li>Разработка и внедрение AI-чат-ботов и виртуальных ассистентов для клиентского сервиса на казахском и русском языках.
                <p class="client-speak"><b>Простыми словами:</b> Делаем умных роботов, которые отвечают клиентам в WhatsApp или на сайте вместо оператора.</p>
            </li>
            <li>Предиктивная аналитика и анализ данных для выявления бизнес-инсайтов и прогнозирования рыночных трендов.
                <p class="client-speak"><b>Простыми словами:</b> Анализируем ваши продажи и говорим, какой товар будет популярен завтра и где лучше открыть новый филиал.</p>
            </li>
            <li>Системы компьютерного зрения для обеспечения безопасности, контроля качества на производстве и мониторинга в ритейле.
                <p class="client-speak"><b>Простыми словами:</b> Учим камеры "видеть" и сообщать, если рабочий без каски, на конвейере брак или на полке закончился товар.</p>
            </li>
            <li>Автоматизация бизнес-процессов (RPA с элементами AI) для оптимизации рутинных задач в бухгалтерии, HR и документообороте.
                <p class="client-speak"><b>Простыми словами:</b> Создаем программу, которая сама забирает счета из почты, заносит их в 1С и отправляет отчеты.</p>
            </li>
            <li>Создание персонализированных систем рекомендаций и маркетинговых платформ для e-commerce и цифровых сервисов.
                <p class="client-speak"><b>Простыми словами:</b> Делаем так, чтобы ваш интернет-магазин предлагал каждому клиенту именно то, что ему интересно, как в крупных маркетплейсах.</p>
            </li>
        </ul>
    </div>
</section>

<section id="blog" class="section">
    <div class="container">
        <h2>Наш <span class="accent">Блог</span></h2>
        <div class="grid">
            <div class="card">
                <h3>Как AI-агенты меняют клиентский сервис в Казахстане</h3>
                <p>Исследуем, как умные чат-боты и виртуальные ассистенты снижают нагрузку на колл-центры и повышают лояльность клиентов 24/7.</p>
                <a href="{{ route('blog.post') }}">Читать далее &rarr;</a>
            </div>
            <div class="card">
                <h3>Практическое применение ChatGPT для вашего бизнеса</h3>
                <p>От генерации контента для соцсетей до автоматических ответов на письма. Показываем реальные кейсы, которые можно внедрить уже сегодня.</p>
                <a href="#">Читать далее &rarr;</a>
            </div>
            <div class="card">
                <h3>Будущее ритейла: как компьютерное зрение борется с очередями</h3>
                <p>Рассказываем, как технологии помогают анализировать поведение покупателей, оптимизировать выкладку товаров и предсказывать спрос.</p>
                <a href="#">Читать далее &rarr;</a>
            </div>
        </div>
    </div>
</section>

<section id="contacts" class="section">
    <div class="container">
        <div class="contact-flex">
            <div>
                <h2>Свяжитесь <span class="accent">с нами</span></h2>
                <p style="margin-bottom: 30px;">Выберите удобный для вас способ связи или оставьте заявку, и мы перезвоним.</p>
                
                <div class="social-links">
                    <a href="https://wa.me/77765714250?text=Здравствуйте,%20я%20пишу%20с%20сайта%20fort-inform" target="_blank">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16.75 13.96c.25.13.4.25.46.3.08.07.14.17.18.28.04.1.06.2.04.3s-.04.2-.09.28c-.05.08-.12.15-.2.21-.08.06-.18.11-.28.14-.12.04-.25.06-.38.06-.13 0-.27-.02-.4-.06-.13-.04-.27-.09-.4-.15-.14-.06-.28-.13-.42-.2-.14-.07-.28-.15-.42-.23-.3-.16-.6-.33-.9-.51s-.58-.38-.88-.59c-.3-.2-.58-.42-.86-.64s-.54-.45-.79-.68c-.25-.23-.48-.47-.69-.71-.21-.24-.4-.5-.56-.76-.12-.2-.2-.4-.24-.6s-.07-.4-.07-.6c0-.23.04-.45.12-.65.08-.2.2-.38.34-.52.14-.14.3-.25.48-.33.18-.08.38-.12.58-.12.16 0 .3.03.44.08.13.06.26.13.36.24.1.1.18.22.24.36.06.14.1.28.1.43 0 .1-.01.2-.04.3s-.06.18-.1.25c-.04.07-.08.13-.13.18-.05.05-.1.1-.15.14-.05.04-.1.08-.14.13-.02.02-.03.04-.04.06s-.02.04-.02.06c0 .05.01.1.04.14s.06.08.09.11c.03.03.07.06.1.08.2.13.42.26.64.39.22.13.43.25.64.36.2.1.4.2.6.28.1.04.2.07.3.1.28.1.52.14.72.14.22 0 .43-.05.62-.14.2-.09.38-.2.53-.33.15-.13.26-.28.34-.44.08-.16.12-.33.12-.51 0-.1-.01.2-.04-.3s-.06-.18-.1-.25c-.04-.07-.09-.13-.15-.18s-.12-.1-.19-.14c-.07-.04-.15-.08-.23-.1-.08-.03-.16-.05-.24-.05-.17 0-.34.03-.5.1-.17.06-.33.14-.48.2l-.12.08c-.08.05-.16.1-.24.15-.08.05-.15.08-.23.1-.04.01-.08.02-.12.02s-.08-.01-.11-.02c-.08-.05-.15-.1-.21-.15-.06-.05-.12-.1-.17-.16-.05-.06-.1-.12-.14-.17-.04-.06-.08-.11-.11-.17-.03-.06-.06-.12-.08-.18-.02-.06-.03-.12-.03-.18s.02-.12.05-.17.06-.1.1-.14c.04-.04.08-.08.12-.11l.16-.12c.1-.08.2-.15.28-.21.1-.06.2-.12.28-.18.08-.06.15-.12.22-.17.07-.05.13-.1.18-.14.05-.04.1-.08.14-.11.04-.03.08-.06.1-.08l.1-.06c.06-.04.12-.08.18-.11.06-.03.12-.06.18-.08.1-.04.2-.08.3-.11s.2-.06.28-.08c.08-.02.17-.04.25-.04.13 0 .25.02.38.06.12.04.24.1.35.18s.22.17.3.28.15.22.18.33c.03.11.05.22.05.34z"/></svg>
                        <span>WhatsApp</span>
                    </a>
                    <a href="https://www.instagram.com/generative_ai_kz/" target="_blank">
                       <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.012 3.584-.07 4.85c-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.012-3.584.07-4.85c.148-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.059-1.281.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.44-.645 1.44-1.44s-.645-1.44-1.44-1.44z"/></svg>
                        <span>Instagram</span>
                    </a>
                </div>

                <p>Алматы, ул. Казыбек би, 20А</p>
                @if(session('success'))
                    <p style="color: var(--cyan-bright)">{{ session('success') }}</p>
                @endif
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Ваше имя" required>
                    <input type="email" name="email" placeholder="Ваш Email" required>
                    <textarea name="message" rows="5" placeholder="Ваше сообщение"></textarea>
                    <button type="submit" class="btn btn-primary">Отправить заявку</button>
                </form>
            </div>
            <div id="map"></div>
        </div>
    </div>
</section>

<footer>
    <div class="container footer-content">
        <div class="footer-left">
            <a href="#hero">
                <img src="/images/logo.png" alt="FORT-INFORM" class="logo-img">
            </a>
            <p class="copyright">&copy; 2026 by FORT-INFORM</p>
        </div>
        <nav>
            <a href="#hero">Главная</a>
            <a href="#experience">История</a>
            <a href="#services">Услуги</a>
            <a href="#blog">Блог</a>
            <a href="#contacts">Контакты</a>
        </nav>
    </div>
</footer>

<button id="scrollTopBtn" title="Наверх">&uarr;</button>

<script src="https://maps.api.2gis.ru/2.0/loader.js"></script>
<script>
    var map;
    DG.then(function () {
        map = DG.map('map', {
            center: [43.257054, 76.957377],
            zoom: 17,
            theme: 'dark'
        });
        DG.marker([43.257054, 76.957377]).addTo(map).bindPopup('Офис FORT-INFORM');
    });

    // --- Логика мобильного меню ---
    const hamburger = document.getElementById('hamburger-menu');
    const mobileNav = document.getElementById('mobile-nav-panel');

    hamburger.addEventListener('click', (e) => {
        e.stopPropagation();
        mobileNav.classList.toggle('active');
    });

    mobileNav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mobileNav.classList.remove('active');
        });
    });

    document.addEventListener('click', (e) => {
        if (mobileNav.classList.contains('active') && !mobileNav.contains(e.target)) {
            mobileNav.classList.remove('active');
        }
    });

    // --- Логика кнопки "Наверх" ---
    const scrollTopBtn = document.getElementById("scrollTopBtn");

    window.onscroll = function() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        scrollTopBtn.classList.add('show');
      } else {
        scrollTopBtn.classList.remove('show');
      }
    };

    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({top: 0, behavior: 'smooth'});
    });

</script>

</body>
</html>
