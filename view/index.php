<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GymZENIT - Your pathway to fitness with expert trainers and diverse courses.">
    <title>GymZENIT</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/norm.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="main-header">
        <div class="container">
            <nav class="main-nav">
                <ul>
                    <img class ="logo" src="materials/logo.png" alt="">
                    <li><a href="#intro">Úvod</a></li>
                    <li><a href="#about">O nás</a></li>
                    <li><a href="#courses">Kurzy</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="intro" class="intro">
        <div class="container idk">
            <h1>GymZENIT - Váš fitness cieľ</h1>
            <p>Fitness pre každého s odbornými trénermi a rôznorodými kurzami</p>
            <div class="buttons">
                <a href="#news" class="btn">Novinky</a>
                <a href="#courses" class="btn">Kurzy</a>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2>O nás</h2>
            <p>GymZENIT je moderné fitnescentrum zamerané na poskytovanie kvalitných tréningových služieb pre každého.</p>
            <a href="#" class="btn">Zisti viac</a>
        </div>
    </section>

    <section id="trainers" class="trainers">
        <div class="container">
            <h2>Naši tréneri</h2>
            <div class="trainer-profile">
                <img src="materials/trainer1.jpg" alt="Trainer 1">
                <p>Fero</p>
            </div>
            <div class="trainer-profile">
                <img src="materials/trainer2.jpg" alt="Trainer 2">
                <p>Juro</p>
            </div>
        </div>
    </section>

    <section id="courses" class="courses">
        <div class="container">
            <h2>Naše Kurzy</h2>
            <div class="course">
                <h3>Spaľovanie tukov</h3>
                <p>Efektívne cviky pre spaľovanie kalórií.</p>
            </div>
            <div class="course">
                <h3>Cviky pre ženy</h3>
                <p>Individuálne cvičenia pre ženy.</p>
            </div>
            <div class="course">
                <h3>Tréning celého tela</h3>
                <p>Komplexné tréningy pre telo a myseľ.</p>
            </div>
        </div>
    </section>

    <footer id="contact" class="contact">
        <div class="container">
            <div class="footer-left">
                <img src="materials/logo.png" alt="GymZENIT Logo">
                <p>&copy; 2024 GymZENIT</p>
            </div>
            <div class="footer-center">
                <form action="..\control\control.php" method="POST">
                    <input type="text" name="name" placeholder="Meno" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="address" placeholder="Adresa">
                    <textarea name="message" placeholder="Správa" required></textarea>
                    <button type="submit">Odoslať</button>
                </form>
            </div>
            <div class="footer-right">
                <p>GymZENIT, Kosice</p>
                <p>Telefón: +421 123 456</p>
                <p>Email: info@GymZENIT.sk</p>
            </div>
        </div>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
