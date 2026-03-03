<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказ консультации | FORT-INFORM</title>
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

        body {
            background-color: var(--bg-dark);
            color: var(--white);
            font-family: 'Inter', sans-serif;
            margin: 0;
            line-height: 1.6;
        }

        .container { max-width: 800px; margin: 40px auto; padding: 0 20px; }
        
        h1 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 40px;
        }
        .accent { background: linear-gradient(90deg, var(--cyan-accent), var(--cyan-bright)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        
        .form-container {
            background: var(--bg-card);
            padding: 40px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .form-group { margin-bottom: 20px; }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-gray);
        }

        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 15px;
            background: #1c2229;
            border: 1px solid #30363d;
            color: white;
            border-radius: 5px;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
        }

        .form-group input[type="date"], .form-group input[type="time"] {
            color-scheme: dark;
        }

        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }

        .btn { padding: 15px 35px; border-radius: 5px; text-decoration: none; font-weight: bold; transition: var(--transition); display: inline-block; border: none; cursor: pointer; width: 100%; font-size: 1.1rem; }
        .btn-primary { background: var(--cyan-accent); color: white; }
        .btn-primary:hover { background: var(--cyan-bright); box-shadow: 0 0 20px rgba(0,242,242,0.4); }

        .post-header { padding-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.1); margin-bottom: 40px; }
        .post-header a { color: var(--cyan-accent); text-decoration: none; font-weight: bold; }

        @media (max-width: 600px) {
            .form-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<div class="container">
    <header class="post-header">
        <a href="{{ url()->previous() }}">&larr; Вернуться назад</a>
    </header>

    <h1>Заказ <span class="accent">бесплатной</span> консультации</h1>

    <div class="form-container">
        <form action="{{ route('consultation.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Ваше имя</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-grid">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Телефон</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
            </div>

            <div class="form-group">
                <label for="company">Название компании</label>
                <input type="text" id="company" name="company_name">
            </div>

            <div class="form-group">
                <label for="service">Интересующая услуга</label>
                <select id="service" name="service">
                    <option value="ai_assistant">AI-ассистент / Чат-бот</option>
                    <option value="predictive_analytics">Предиктивная аналитика</option>
                    <option value="computer_vision">Компьютерное зрение</option>
                    <option value="rpa">Автоматизация бизнес-процессов (RPA)</option>
                    <option value="other">Другое (опишу ниже)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Краткое описание вашей задачи</label>
                <textarea id="description" name="description" rows="4"></textarea>
            </div>
            
            <div class="form-group">
                <label>Желаемая дата и время для первого созвона</label>
                <div class="form-grid">
                    <input type="date" name="preferred_date">
                    <input type="time" name="preferred_time">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Отправить заявку</button>
        </form>
    </div>
</div>

</body>
</html>
