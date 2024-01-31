<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_aboutme</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <?php 
    include 'header.php';
    ?>

    <div class="content">
        <div class="auto-type">
            <span class="fixed-text">{"</span>
            <span class="typing"></span>
            <span class="fixed-text">"}</span>
        </div>
        <div class="text-about">
            <p>I studied at STI College Batangas with the degree of BSIT.
            I have some basic knowledge in front end and back end development.
            I love playing instrument during my free time. I am dedicated to learn new things
            and discover the world of Information Technology</p>
        </div>
        <div class="second-text-about">
            <p> Delving into the world of technology, I find joy in solving complex problems and turning ideas into reality.
                Outside the digital realm, I'm an avid problem-solver, always seeking new challenges to overcome and opportunities to grow.</p>
        </div>

        <div class="motivation-text">
                < what drives my work >
        </div>

        <div class="grid-motivation">
            
            <div class="motivation-items1">
                <span class="logo-about">{/}</span>
                <br>
                <span class="logo-about1">_team work</span>
                <br>
                <br>
                <div class="p-about">
                    <p>Engaging in teamwork is my forte. I thrive in collaborative environments, valuing each team member's unique strengths. Together, we create synergy that goes beyond individual capabilities, achieving remarkable results.
                </p>
                </div>
            </div>
            <div class="motivation-items2">
                <span class="logo-about">{!}</span>
                <br>
                <span class="logo-about1">_innovation</span>
                <br>
                <br>
                <div class="p-about">
                    <p>Embracing innovation is at the core of my approach. I'm passionate about exploring creative solutions and staying ahead of technological advancements. Let's push the boundaries and bring fresh ideas to life.
                    </p>
                </div>
            </div>
            <div class="motivation-items3">
            <span class="logo-about">{#}</span>
                <br>
                <span class="logo-about1">_excellence</span>
                <br>
                <br>
                <div class="p-about">
                    <p>Pursuing excellence is my standard. With meticulous attention to detail and a commitment to quality, I strive for excellence in every endeavor. Let's set high standards and achieve remarkable outcomes together.
                    </p>
                </div>

            </div>
            <div class="motivation-items4">
            <span class="logo-about">{%}</span>
                <br>
                <span class="logo-about1">_hard work</span>
                <br>
                <br>
                <div class="p-about">
                    <p>Hard work is the cornerstone of my work ethic. I believe in putting in the effort, dedication, and perseverance required to overcome challenges. Together, through hard work, we can turn aspirations into achievements.
                    </p>
                </div>
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

    </div>

    <?php
    include 'footer.php';
    ?>



    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed(".typing",{
            strings : ["_about me"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true
        })
        
        
    </script>
</body>
</html>