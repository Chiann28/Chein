<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-portfolio</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <?php
    include 'header.php';
    ?>

<div class="portfolio-content">
    <div class="auto-type">
            <span class="fixed-text">{"</span>
            <span class="typing"></span>
            <span class="fixed-text">"}</span>
    </div>
    <div class="second-text-services">
        <p> As a testament to my skills and creativity, here are some highlights from my recent projects. Each endeavor reflects my dedication to delivering 
            innovative solutions and achieving excellence in the world of technology.</p>
    </div>

    <div class="third-text-services">
        <p>//Recent Projects</p>
    </div>

    <div class="grid-portfolio">
            
        <div class="portfolio-items1">
            <br>
            <span class="logo-about1">//Reservation System</span>
            <br>
            <br>
            <img src="./assets/Images/kamantigue.png" alt="Reservation" width="600px">
        </div>
        <div class="portfolio-items2">
            <br>
            <span class="logo-about1">//admin dash</span>
            <br>
            <br>
            <img src="./assets/Images/kamantigue_admin.png" alt="admin" width="600px">
        </div>

        <div class="portfolio-items3">
            <br>
            <span class="logo-about1">//game development</span>
            <br>
            <br>
            <img src="./assets/Images/game.png" alt="game" width="600px">
        </div>

        <div class="portfolio-items4">
            <br>
            <span class="logo-about1">//c# game dev</span>
            <br>
            <br>
            <img src="./assets/Images/c-sharp.png" alt="game" width="600px">
        </div>
    </div>

    <div class="contact">
        <div class="contact-text">
            <p class="logo-footer">
                {*}
            </p>
            <p class="about-text"> < contact_me > </p>
            <p class="yellow">Let's connect and explore how we can work together to achieve great things!</p>

            <input type="text" name="name" placeholder="_name" class="input-name"> 
            <input type="email" name="email" placeholder="_email" class="input-email">
            <input type="textarea" name="message" placeholder="_message" class="input-message">
        </div>
        <div class="submit">
            <button class="button">{send}</button>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>
</div>




<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed(".typing",{
            strings : ["_portfolio"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: false
        })
        
        
    </script>
</body>
</html>