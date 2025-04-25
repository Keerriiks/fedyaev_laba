<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторные работы по PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
--primary-color: #070b11;
  --accent-color: #ff9600;
  --text-color: #333;
  --light-bg: #f8f9fa;
  --border-color: #200000;
  --shadow-color: rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Roboto Slab', serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: var(--light-bg);
            color: var(--text-color);
            line-height: 1.6;
        }

        header {
            text-align: center;
            margin-bottom: 40px;
        }

        h1 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .subtitle {
            color: var(--accent-color);
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .main-container {
            display: flex;
            flex-direction: column;
            gap: 25px;
            margin-bottom: 40px;
        }

        .lab-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px var(--shadow-color);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        .lab-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px var(--shadow-color);
        }

        .lab-header {
            background-color: var(--primary-color);
            color: white;
            padding: 15px 20px;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .lab-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .lab-description {
            margin-bottom: 20px;
        }

        .lab-link {
            display: inline-block;
            background-color: var(--accent-color);
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            transition: background-color 0.3s ease;
            align-self: flex-start;
        }

        .lab-link:hover {
            background-color: #007ba3;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <h1>Лабораторные работы по PHP</h1>
        <div class="subtitle">Учебный проект по программированию на языке PHP</div>
    </header>

    <div class="main-container">
        <div class="lab-card">
            <div class="lab-header">
                Лабораторная работа №1
            </div>
            <div class="lab-content">
                <div class="lab-description">
                    <p>Система управления пользователями. Реализация классов User и SuperUser с использованием ООП в PHP.</p>
                    <p>Демонстрация создания, вывода информации и удаления пользователей.</p>
                </div>
                <a href="lab1.php" class="lab-link">Открыть</a>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-header">
                Лабораторная работа №2
            </div>
            <div class="lab-content">
                <div class="lab-description">
                    <p>Паттерны проектирования в PHP. Изучение и реализация популярных паттернов проектирования: порождающих, структурных и поведенческих.</p>
                    <p>Демонстрация работы каждого паттерна на практических примерах.</p>
                </div>
                <a href="lab2.php" class="lab-link">Открыть</a>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-header">
                Лабораторная работа №3
            </div>
            <div class="lab-content">
                <div class="lab-description">
                    <p>Паттерн Модель-Представление-Контроллер (MVC). Реализация паттернов проектирования: Одиночка (Singleton), Фабричный метод (Factory Method).</p>
                    <p>Создание диаграмм классов с использованием PlantUML и реализация MarkdownView.</p>
                </div>
                <a href="lab3.php" class="lab-link">Открыть</a>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-header">
                Лабораторная работа №4
            </div>
            <div class="lab-content">
                <div class="lab-description">
                    <p>Работа с файлами и сессиями. Загрузка и обработка файлов, сохранение состояния между запросами.</p>
                    <p>Реализация системы хранения пользовательских настроек.</p>
                </div>
                <a href="lab4.php" class="lab-link">Открыть</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>PHP Student Project &copy; <?php echo date('Y'); ?>. Все права защищены.</p>
    </div>
</body>
</html>
